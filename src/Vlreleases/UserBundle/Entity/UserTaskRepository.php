<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Class holds the UserBundle repository classes.
 *
 * @category Usertask
 * @package  UserBundle
 */
class UserTaskRepository extends EntityRepository
{

    private $toDay;
    private $firstDayOfCurrentMonth;
    private $lastDayOfCurrentMonth;

    private function setFirstAndLastDayOfMonth()
    {
        if (!isset($this->toDay)) {
            $this->toDay = new \DateTime();

            // First day of the month.
            $this->firstDayOfCurrentMonth = date('Y-m-01', strtotime($this->toDay->format('y-m-d')));

            // Last day of the month.
            $this->lastDayOfCurrentMonth = date('Y-m-t', strtotime($this->toDay->format('y-m-d')));
        }
    }

    /**
     * 
     * @param array $filters
     * @return null
     */
    public function getUserHoursPerDate(array $filters)
    {
        $this->setFirstAndLastDayOfMonth();

        //constructing where clause
        $where = ' ';

        if ($filters['user'] != '') {
            $where .= " and ut.user = '{$filters['user']}'";
        }
        if ($filters['status'] != '') {
            $where .= " and ut.status = '{$filters['status']}'";
        }
        $query = $this->getEntityManager()
                ->createQuery(
                "SELECT ut.date, SUM(ut.duration)/60 as duration
                 FROM Vlreleases\UserBundle\Entity\UserTask ut
                 WHERE ut.date between :from and :to $where group by ut.date"
        );
        $query->setParameter('from', $this->firstDayOfCurrentMonth);
        $query->setParameter('to', $this->lastDayOfCurrentMonth);

        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

    public function getUserTasksPerProject(array $filters)
    {
        //constructing where clause
        if ($filters['user'] != '') {
            if ($filters['startDate'] == "" && $filters['endDate'] == "")
                $where = " ut.user = '{$filters['user']}'";
            else
                $where = " and ut.user = '{$filters['user']}'";
                $where .= " and ut.project = '{$filters['project']}'";
                $where .= " and ut.status = 'pending'";
        }
        if ($filters['startDate'] != "" && $filters['endDate'] == "")
            $dtcon = " ut.date >= :from ";
        else if ($filters['startDate'] == "" && $filters['endDate'] != "")
            $dtcon = " ut.date <= :to ";
        else if ($filters['startDate'] != "" && $filters['endDate'] != "")
            $dtcon = " ut.date between :from and :to ";
        else
            $dtcon = "";
        $query = $this->getEntityManager()
                ->createQuery(
                "SELECT ut.id,ut.date, ut.duration , ut.description,ut.status
                 FROM Vlreleases\UserBundle\Entity\UserTask ut
                 WHERE $dtcon $where ORDER BY ut.date"
        );
        if ($filters['startDate'] != "" && $filters['endDate'] == "")
            $query->setParameter('from', $filters['startDate']);
        else if ($filters['startDate'] == "" && $filters['endDate'] != "")
            $query->setParameter('to', $filters['endDate']);
        else if ($filters['startDate'] != "" && $filters['endDate'] != "") {
            $query->setParameter('from', $filters['startDate']);
            $query->setParameter('to', $filters['endDate']);
        }

        try {

            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {

            return $e->getMessage();
        }
    }

    /**
     * 
     * @param array $criteria
     * @return array
     */
    public function getUserDailyStatusData(array $criteria = array()) 
    {
        $qb = $this->createFilterBuilder($criteria);

        return $qb->getQuery()->getResult();
    }

    /**
     * Create a builder with filters
     *
     * @param array $criteria
     * @return \Doctrine\ORM\QueryBuilder
     */
    protected function createFilterBuilder(array $criteria)
    {
        // Get builder
        $qb = $this->createQueryBuilder('ut');
      // Loop through criteria
        foreach ($criteria as $criterium => $value) {
            switch ($criterium) {
                case 'date':
                    $qb->andWhere($qb->expr()->eq('ut.date', ':date'));
                    $qb->setParameter('date', $value->format('Y-m-d'));
                    break;
                case 'user':
                    $qb->andWhere($qb->expr()->eq('ut.user', ':userId'));
                    $qb->setParameter('userId', $value);
                    break;
                default:
                    // Unknown criterium
                    break;
            }
        }
        return $qb;
    }

    /**
     * 
     * @param string $resourceIds
     * @param string $projectIds
     * @return array
     */
    public function getResourceHours($resourceIds, $projectIds) 
    {
        $this->setFirstAndLastDayOfMonth();
        $where = " and ut.user IN ($resourceIds) ";
        $where .= " and ut.project IN ($projectIds) ";
        $where .= " and ut.status = 'approved' ";

        $query = $this->getEntityManager()
                ->createQuery(
                "SELECT SUM(ut.duration)/60 as duration
                 FROM Vlreleases\UserBundle\Entity\UserTask ut 
                 WHERE ut.date between :from and :to $where"
        );
        $query->setParameter('from', $this->firstDayOfCurrentMonth);
        $query->setParameter('to', $this->lastDayOfCurrentMonth);

        try {
            return $query->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

    /**
     * 
     * @param int $projectId
     * @return array
     */
    public function findResourceHoursUndermanager($projectId = null) 
    {
        $this->setFirstAndLastDayOfMonth();
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('SUM(ut.duration)/60 as duration');
        $qb->from('Vlreleases\UserBundle\Entity\UserTask', 'ut');

        $qb->andWhere($qb->expr()->gte('ut.date', ':firstDay'));
        $qb->setParameter('firstDay', $this->firstDayOfCurrentMonth);

        $qb->andWhere($qb->expr()->lte('ut.date', ':lastDay'));
        $qb->setParameter('lastDay', $this->lastDayOfCurrentMonth);

        $qb->join('ut.user', 'u');
        $qb->andWhere($qb->expr()->eq('u.status', true));

        $qb->andWhere($qb->expr()->eq('ut.status', ':status'));
        $qb->setParameter('status', 'approved');

        $qb->andWhere($qb->expr()->in('u.type', ':types'));
        $qb->setParameter('types', array(1, 2, 3, 9));

        if ($projectId > 0) {
            $qb->andWhere($qb->expr()->eq('ut.project', ':projectId'));
            $qb->setParameter('projectId', $projectId);
        }
        return $qb->getQuery()->getSingleResult();
    }

    /**
     * 
     * @param string $resourceIds
     * @param string $projectIds
     * @return array
     */
    public function getResourceHoursPerDate($resourceIds, $projectIds) 
    {
        $this->setFirstAndLastDayOfMonth();
        $where = " and ut.user IN ($resourceIds) ";
        $where .= " and ut.project IN ($projectIds) ";
        $where .= " and ut.status = 'approved'";

        $query = $this->getEntityManager()
                ->createQuery(
                "SELECT ut.date,SUM(ut.duration)/60 as duration
                 FROM Vlreleases\UserBundle\Entity\UserTask ut 
                 WHERE ut.date between :from and :to $where group by ut.date"
        );
        $query->setParameter('from', $this->firstDayOfCurrentMonth);
        $query->setParameter('to', $this->lastDayOfCurrentMonth);

        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

    /**
     * 
     * @param int $projectId
     * @return array
     */
    public function getResourceHoursPerDateUnderManager($projectId = null)
    {
        $this->setFirstAndLastDayOfMonth();
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('ut.date, SUM(ut.duration)/60 as duration');
        $qb->from('Vlreleases\UserBundle\Entity\UserTask', 'ut');
        $qb->andWhere($qb->expr()->gte('ut.date', ':firstDay'));
        $qb->setParameter('firstDay', $this->firstDayOfCurrentMonth);
        $qb->andWhere($qb->expr()->lte('ut.date', ':lastDay'));
        $qb->setParameter('lastDay', $this->lastDayOfCurrentMonth);
        $qb->andWhere($qb->expr()->eq('ut.status', ':status'));
        $qb->setParameter('status', 'approved');
        $qb->join('ut.user', 'u');
        $qb->andWhere($qb->expr()->eq('u.status', true));
        $qb->andWhere($qb->expr()->in('u.type', ':types'));
        $qb->setParameter('types', array(1, 2, 3, 9));
        if ($projectId > 0) {
            $qb->andWhere($qb->expr()->eq('ut.project', ':projectId'));
            $qb->setParameter('projectId', $projectId);
        }
        $qb->groupBy('ut.date');
        return $qb->getQuery()->getResult();
    }

    /**
     * Changes the task status
     *
     * @param int $userId
     * 
     * @param string $status
     * 
     * @param date $selectedDate
     * 
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function ChangeTaskStatus($userId, $status, $selectedDate) 
    {
        $query = $this->getEntityManager()
                ->createQuery(
                "UPDATE Vlreleases\UserBundle\Entity\UserTask ut SET ut.status='" . $status . "'
                 WHERE ut.date = '" . $selectedDate->format('Y-m-d') . "' AND ut.user = $userId"
        );

        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

    /**
     * get the pending tasks
     * 
     * @param string $resourceIds
     * @param string $projectIds
     * @param string $status
     * @return array
     */
    public function getPendingApprovals($resourceIds, $projectIds, $status)
    {
        $this->setFirstAndLastDayOfMonth();

        $where = " and ut.user IN ($resourceIds) ";
        $where .= " and ut.project IN ($projectIds) ";
        $where .= " and ut.status = '$status' ";

        $query = $this->getEntityManager()
                ->createQuery(
                "SELECT DISTINCT(ut.user) as pendingUsers
                 FROM Vlreleases\UserBundle\Entity\UserTask ut 
                 WHERE ut.date between :from and :to $where group by ut.user"
        );
        $query->setParameter('from', $this->firstDayOfCurrentMonth);
        $query->setParameter('to', $this->lastDayOfCurrentMonth);

        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

    /**
     * Get the pending tasks under manager
     * @param string $status
     * @param int $projectId
     * @return string
     */
    public function getPendingApprovalsUnderManager($status, $projectId = null) 
   {
        $this->setFirstAndLastDayOfMonth();
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('DISTINCT(ut.user) as pendingUsers');
        $qb->from('Vlreleases\UserBundle\Entity\UserTask', 'ut');
        $qb->andWhere($qb->expr()->gte('ut.date', ':firstDay'));
        $qb->setParameter('firstDay', $this->firstDayOfCurrentMonth);
        $qb->andWhere($qb->expr()->lte('ut.date', ':lastDay'));
        $qb->setParameter('lastDay', $this->lastDayOfCurrentMonth);
        $qb->join('ut.user', 'u');
        $qb->andWhere($qb->expr()->eq('u.status', true));
        $qb->andWhere($qb->expr()->in('u.type', ':types'));
        $qb->setParameter('types', array(1, 2, 3, 9));
        $qb->andWhere($qb->expr()->eq('ut.status', ':status'));
        $qb->setParameter('status', $status);

        if ($projectId > 0) {
            $qb->andWhere($qb->expr()->eq('ut.project', ':projectId'));
            $qb->setParameter('projectId', $projectId);
        }

        return $qb->getQuery()->getResult();
    }
 
    /**
     * 
     * @param int $userId
     * @param \DateTime $date
     * @return boolean
     */
    public function isTaskEditable($userId, $date) 
    {
        $this->setFirstAndLastDayOfMonth();
        $date = $date->format('Y-m-d');
        $where = " ut.date = ('$date') ";
        $where .= " and (ut.status = 'saved' OR ut.status = 'rejected') ";
        $where .= " and ut.user = $userId ";

        $query = $this->getEntityManager()
                ->createQuery(
                "SELECT count(ut.id) as cnt
                 FROM Vlreleases\UserBundle\Entity\UserTask ut 
                 WHERE $where "
        );

        $queryCount = $this->getEntityManager()
                ->createQuery(
                "SELECT count(ut.id) as cnt
                 FROM Vlreleases\UserBundle\Entity\UserTask ut 
                 WHERE ut.user = $userId AND ut.date = ('$date')"
        );

        try {
            if ($queryCount->getSingleScalarResult() > 0) {
                if ($query->getSingleScalarResult() > 0) {
                    return false;
                } else {
                    return true;
                }
            } else {
                return false;
            }
        } catch (\Doctrine\ORM\NoResultException $e) {
            return false;
        }
    }

    /**
     * Changes the status of all approvals.
     * 
     * @param array $allApprovals
     * @param String $status
     * @return boolean|null
     */
    public function changeStatusOfApprovals($allApprovals, $status) 
    {
        $query = $this->getEntityManager()
                ->createQuery(
                "UPDATE Vlreleases\UserBundle\Entity\UserTask ut SET ut.status='" . $status . "'
                WHERE ut.id  IN (" . implode(',', $allApprovals) . ")"
        );

        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

    /**
     * Check entered Catgeory Exist in our db or not.
     * 
     * @param Integer $id
     * @param String $name
     * @return boolean|null
     */
    public function findDuplicateCategories($id, $name) 
    {
        $query = $this->getEntityManager()
                ->createQuery(
                "SELECT count(ut.id) as cnt
                 FROM Vlreleases\UserBundle\Entity\Category ut 
                 WHERE ut.name = ('$name') AND ut.id != $id"
        );
        try {
            if ($query->getSingleScalarResult() > 0) {
                return true;
            }
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

    /**
     * Find the duplicate products.
     * 
     * @param Integer $id
     * @param String $productname
     * @return boolean|null
     */
    public function findDuplicateProducts($id, $productname)
    {
        $query = $this->getEntityManager()
                ->createQuery(
                "SELECT count(ut.id) as cnt
                 FROM Vlreleases\UserBundle\Entity\Product ut 
                 WHERE ut.productname = ('$productname') AND ut.id != $id"
        );
        try {
            if ($query->getSingleScalarResult() > 0) {
                return true;
            }
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

    /**
     * Find the count of users.
     * 
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function usersCount()
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('MAX(u.id)');
        $qb->from('Vlreleases\UserBundle\Entity\User ', 'u');
        $result = $qb->getQuery()->getResult();
        
        return $result;
    }

    /**
     * Get the approved status reports of last one week.
     * 
     * @param array $userData
     * 
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function approvalList($userData)
    {

        $em = $this->getEntityManager();
        $result = '';
        $id = $userData['projId'];
        foreach ($userData['resourcesIds'] as $user) {
            $users[] = $user['id'];
        }

        $qb = $em->createQueryBuilder();
        $curDate = date('Y-m-d');
        $var = date('Y-m-d', strtotime('-7 days'));
        $qb->select('m');
        $qb->from('Vlreleases\UserBundle\Entity\UserTask ', 'm');
        $qb->where($qb->expr()->in('m.user', $users));
        $qb->andWhere("m.date between '$var' and '$curDate'");
        $qb->andWhere("m.date between '$var' and '$curDate'");
        $qb->andWhere("m.project = '$id'");
        $result = $qb->getQuery()->getResult();
        
        return $result;
    }

    /**
     * Get menu ids and concatinate with comma seperated string.
     * 
     * @param string $menuName
     * 
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function getMenu($menuName) {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('m.id');
        $qb->from('Vlreleases\UserBundle\Entity\Menus ', 'm');
        $qb->where("m.name = '$menuName'");
        $result = $qb->getQuery()->getResult();
        for ($i = 0; $i < count($result); $i++) {
            $finalId = $result[$i];
        }
        $id = implode(' ', $finalId);
        
        return $id;
    }

    /**
     * Get the user deatails with pagelimit.
     * 
     * @param int $page
     * 
     * @param int $userCount
     * 
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function getUsers($page, $userCount) {

        if ($page <= 0) {
            $page = 1;
        }

        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('u.id,up.name,up.employeeId,up.photo,up.email,up.mobile,
            uw.extensionNumber,uw.workStation,uw.systemId,uw.systemIp,t.tname');
        $qb->from('Vlreleases\UserBundle\Entity\User', 'u');
        $qb->leftJoin('u.personalProfile', 'up');
        $qb->leftJoin('u.workProfile', 'uw');
        $qb->leftJoin('uw.team', 't');

        $paginator = new \Vlreleases\UserBundle\Lib\Paginator();
        $pagination = $paginator->paginate($qb, $page, '30', $userCount);
        return array('profiles' => $pagination, 'paginator' => $paginator);

        return $result;
    }

    public function getReporter($usersId) {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('ur.userName');
        $qb->from('Vlreleases\UserBundle\Entity\User', 'u');
        $qb->innerJoin('u.reportingPersons', 'ur');
        $qb->where("u.id='$usersId'");
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Find User Details.
     * 
     * @param array $criteria
     * 
     * @return array
     * 
     * @throws Exception
     */
    public function findUserDetails(array $criteria) 
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('u.id,up.name,up.photo,up.employeeId,up.email,up.mobile,
            uw.extensionNumber,uw.workStation,uw.systemId,uw.systemIp,t.tname');
        $qb->from('Vlreleases\UserBundle\Entity\User', 'u');
        $qb->leftJoin('u.personalProfile', 'up');
        $qb->leftJoin('u.workProfile', 'uw');
        $qb->leftJoin('uw.team', 't');        
        foreach ($criteria as $parameter => $value) {            
            if (strlen($value) > 0) {
               $this->buildCriteriaSet($qb, $parameter, $value);
            }
        }  
        $result = $qb->getQuery()->getResult();
        
        return $result;
    }

    /**
     * Build Criteria set.
     * 
     * @param QueryBuilder $qb
     * @param string $parameter
     * @param string $value
     * 
     * @throws Exception
     */
    private function buildCriteriaSet($qb, $parameter, $value) 
    {
        switch ($parameter) {
            case 'name':
                $qb->orWhere($qb->expr()->like('up.name', $qb->expr()->literal($value.'%')));
                break;
            case 'email':
                $qb->orWhere($qb->expr()->eq('up.email', ':email'));
                $qb->setParameter('email', $value);
                break;
            case 'sysId':
                $qb->orWhere($qb->expr()->eq('uw.systemId', ':sysId'));
                $qb->setParameter('sysId', $value);
                break;
            case 'team':
                $qb->orWhere($qb->expr()->eq('t.tname', ':tname'));
                $qb->setParameter('tname', $value);
                break;
            default:
                throw new Exception("Paramenter $parameter not expected");
        }
    }

     /**
     * Find the user-reporter details.
     * 
     * @param array $criteria
     * 
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function findReporterDetails(array $criteria) 
    {
        $rNames = '';
        $result1 = array();
        $finalResult = array();
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('u.id,up.name,up.employeeId,up.email');
        $qb->from('Vlreleases\UserBundle\Entity\User', 'u');
        $qb->leftJoin('u.personalProfile', 'up');

        foreach ($criteria as $parameter => $value) {            
            if (strlen($value) > 0) {
               $this->buildCriteriaSet($qb, $parameter, $value);
            }
        } 
       
        $result = $qb->getQuery()->getResult();
        
        return $result;
    }

    /**
     * Update the user login password.
     * 
     * @param string $fromEmail
     * 
     * @param string $value
     * 
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function updatePwd($fromEmail, $value) {

        $query = $this->getEntityManager()
                ->createQuery(
                "UPDATE Vlreleases\UserBundle\Entity\User u SET u.password='$value'
                 WHERE u.email = '$fromEmail'"
        );

        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

    
    public function updateProj($name, $id)
    {
        $em = $this->getEntityManager();
        $q = $em->createQueryBuilder();
        $q->update('Vlreleases\UserBundle\Entity\Project', 'u');
        $q->set('u.name', '?1');
        $q->where("u.id = '$id'");
        $q->setParameter(1, $name);
        $result = $q->getQuery()->getResult();
        
        return $result;
    }
    
    public function updateclientName($name, $id)
    {
        $em = $this->getEntityManager();
        $q = $em->createQueryBuilder();
        $q->update('Vlreleases\UserBundle\Entity\Client', 'u');
        $q->set('u.clientName', '?1');
        $q->where("u.id = '$id'");
        $q->setParameter(1, $name);
        $result = $q->getQuery()->getResult();
        
        return $result;
    }

    /**
     * Find the registered user details.
     * 
     * @param string $toEmail
     * 
     * @returns array
     */
    public function finbByEmail($toEmail) 
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('r');
        $qb->from('Vlreleases\UserBundle\Entity\Registration', 'r');
        $qb->where("r.email='$toEmail'");
        $result = $qb->getQuery()->getResult();
        
        return $result;
    }

    /**
     * Get asset status.
     * 
     * @return array
     */
    public function getAssetStatus() 
    {
        $var = date('Y-m-d', strtotime('-2 days'));
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('p.startTime,p1.productname,p2.email');
        $qb->from('Vlreleases\UserBundle\Entity\ProductStatus', 'p');
        $qb->innerJoin('p.product', 'p1');
        $qb->innerJoin('p.assignee', 'p2');
        $qb->where("p.submittedTime IS NULL");
        $qb->andWhere('p.startTime < :date');
        $qb->setParameter('date', $var);
        $result = $qb->getQuery()->getResult();
        
        return $result;
    }

     /**
     * Filters the user details based on reporting person.
     * 
     * @param string $value
     * 
     * @returns array
     */
    public function UserFilterData($value)
    {
        $em = $this->getEntityManager();
        if ($value == 'Display All') {
            $qb1 = $em->createQueryBuilder();
            $qb1->select('u.id,up.name,up.photo,up.employeeId,up.email,
                up.mobile,uw.extensionNumber,
                        uw.workStation,uw.systemId,uw.systemIp,t.tname');
            $qb1->from('Vlreleases\UserBundle\Entity\User', 'u');
            $qb1->innerJoin('u.personalProfile', 'up');
            $qb1->innerJoin('u.workProfile', 'uw');
            $qb1->innerJoin('uw.team', 't');
            $result1 = $qb1->getQuery()->getResult();
            return $result1;
        } 
        else {
            $qb = $em->createQueryBuilder();
            $qb->select('DISTINCT ur.id');
            $qb->from('Vlreleases\UserBundle\Entity\User', 'u');
            $qb->innerJoin('u.reportingPersons', 'ur');
            if ($value == 'Non Jyo')
                $qb->where("u.id !='14'");
            elseif ($value == 'Jyo')
                $qb->where("u.id = '14'");
            $result = $qb->getQuery()->getResult();

            for ($i = '0'; $i < sizeof($result); $i++) {
                $id = $result[$i]['id'];
                $q = $em->createQueryBuilder();
                $q->select('u.id,up.name,up.photo,up.employeeId,up.email,
                    up.mobile,uw.extensionNumber,
                            uw.workStation,uw.systemId,uw.systemIp,t.tname');
                $q->from('Vlreleases\UserBundle\Entity\User', 'u');
                $q->leftJoin('u.personalProfile', 'up');
                $q->leftJoin('u.workProfile', 'uw');
                $q->leftJoin('uw.team', 't');
                $q->where("u.id='$id'");
                $finalResult[$i] = $q->getQuery()->getResult();
            }
            
            return $finalResult;
        }
    }

     /**
     * Filters the user-reporter details based on reporting person.
     * 
     * @param string $value
     * 
     * @returns array
     */
    public function ReporterFilterData($value)
    {
        $em = $this->getEntityManager();
        if ($value == 'Display All') {
            $qb1 = $em->createQueryBuilder();
            $qb1->select('u.id,up.name,up.employeeId,up.email');
            $qb1->from('Vlreleases\UserBundle\Entity\User', 'u');
            $qb1->innerJoin('u.personalProfile', 'up');
            $result1 = $qb1->getQuery()->getResult();
            return $result1;
        } 
        else {
            $qb = $em->createQueryBuilder();
            $qb->select('DISTINCT ur.id');
            $qb->from('Vlreleases\UserBundle\Entity\User', 'u');
            $qb->innerJoin('u.reportingPersons', 'ur');
            if ($value == 'Non Jyo')
                $qb->where("u.id !='14'");
            elseif ($value == 'Jyo')
                $qb->where("u.id = '14'");
            $result = $qb->getQuery()->getResult();

            for ($i = '0'; $i < sizeof($result); $i++) {
                $id = $result[$i]['id'];
                $qb1 = $em->createQueryBuilder();
                $qb1->select('u.id,up.name,up.employeeId,up.email');
                $qb1->from('Vlreleases\UserBundle\Entity\User', 'u');
                $qb1->innerJoin('u.personalProfile', 'up');
                $qb1->where("u.id='$id'");
                $finalResult[$i] = $qb1->getQuery()->getResult();
            }
            
            return $finalResult;
        }
    }
    
     /**
     * Find the email of lead.
     * 
     * @param int $resourceId
     * 
     * @returns array
     */
    public function getLeadEmail($resourceId)
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('u.email');
        $qb->from('Vlreleases\UserBundle\Entity\User', 'u');
        $qb->innerJoin('u.reportingPersons', 'ur');
        $qb->where("ur.id='$resourceId'");
        $result = $qb->getQuery()->getResult();
        return $result;
    }

     /**
     * Update the user daily status tasks status when approved/rejected by email.
     * 
     * @param array $idValues
     * 
     * @returns array
     */
    public function updateEmailUserTask($idValues,$status)
    {
        if ($status == 'Approve'){
            $approved = 'approved';
        }
        elseif($status == 'Reject'){
            $approved = 'rejected';
        }
        $em = $this->getEntityManager();
        for ($i = '0'; $i < sizeof($idValues) - 1; $i++) {
            $id = $idValues[$i];
            $q = $em->createQueryBuilder();
            $q->update('Vlreleases\UserBundle\Entity\UserTask', 'u');
            $q->set('u.status', '?1');
            $q->where("u.id = '$id'");
            $q->setParameter(1, $approved);
            $result[$i] = $q->getQuery()->getResult();
        }
        
        return $result;
    }

    /**
     * Get the username,email  corresponding to resource id.
     * 
     * @param int $projectId
     * 
     * @returns array
     */
    public function getResourceNam($resourceId)
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('u.userName,u.email');
        $qb->from('Vlreleases\UserBundle\Entity\User', 'u');
        $qb->where("u.id='$resourceId'");
        $result = $qb->getQuery()->getResult();
        
        return $result;
    }

    /**
     * Get the details of project.
     *  
     * @returns array
     */
    public function getProjectsDetails()
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('p.pid,n.name,c.clientName,pp.phaseName,p.lifeCycleStatus,'
                . 'p.billingStatus,pu.userName,pu.id,p.createDate,p.startDate,'
                . 'p.endDate,p.projectStatus');
        $qb->from('Vlreleases\UserBundle\Entity\Projects', 'p');
        $qb->leftJoin('p.user', 'pu');
        $qb->leftJoin('p.projectName', 'n');
        $qb->leftJoin('p.client', 'c');
        $qb->leftJoin('p.phase', 'pp');
        $result = $qb->getQuery()->getResult();
        
        return $result;
    }
    
    /**
     * Get the team details.
     * 
     * @returns array
     */
    public function getTeams()
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery(
            'SELECT p
            FROM Vlreleases\UserBundle\Entity\Team p
            ORDER BY p.tname ASC'
        );
        $result = $query->getResult();
        
        return $result;
    }
    
    /*
     * Get the team data of particular team id
     * @param int $teamNumber
     * returns array
     */
    public function getTeam($teamNumber)
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('u.tname,u.status');
        $qb->from('Vlreleases\UserBundle\Entity\Team', 'u');
        $qb->where("u.id='$teamNumber'");
        $result = $qb->getQuery()->getResult();
        
        return $result;
    }
    
    /**
     * Update the team name corresponding to the given id.
     * 
     * @param int $id
     * 
     * @param string $teamname
     * 
     * @returns array
     */
    public function updateTeamName($teamname,$id,$status)
    {
        $em = $this->getEntityManager();
        $q = $em->createQueryBuilder();
        $q->update('Vlreleases\UserBundle\Entity\Team', 't');
        $q->set('t.tname', '?1');
        $q->set('t.status', '?2');
        $q->where("t.id = '$id'");
        $q->setParameter(1, $teamname);
        $q->setParameter(2, $status);
        $result = $q->getQuery()->getResult();
    }
    
    /**
     * Get the project data based on filtering billing status.
     * 
     * @param string $criteria
     * 
     * @returns array
     */
    public function getBillabilityData($criteria)
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('p.pid,n.name,c.clientName,pp.phaseName,'
                . 'p.lifeCycleStatus,p.billingStatus,pu.userName,pu.id,p.createDate,'
                . 'p.startDate,p.endDate,p.projectStatus');
        $qb->from('Vlreleases\UserBundle\Entity\Projects', 'p');
        $qb->leftJoin('p.user', 'pu');
        $qb->leftJoin('p.projectName', 'n');
        $qb->leftJoin('p.client', 'c');
        $qb->leftJoin('p.phase', 'pp');
        $qb->where("p.billingStatus = '$criteria'");
        $result = $qb->getQuery()->getResult();
        
        return $result;
    }
    public function updateProjStatus($status,$projId)
    {
        $em = $this->getEntityManager();
        $q = $em->createQueryBuilder();
        $q->update('Vlreleases\UserBundle\Entity\Projects', 'u');
        $q->set('u.projectStatus', '?1');
        $q->where("u.pid = '$projId'");
        $q->setParameter(1, $status);
        $result = $q->getQuery()->getResult();
        
        return $result;
    }
    
    /*
     *Retrieves the Actions table details
     * 
     * returns array
     */
    public function getActions()
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery(
            "SELECT p
            FROM Vlreleases\UserBundle\Entity\Actions p
            WHERE p.screenStatus = '1'"
          
        );
        $result = $query->getResult();
        
        return $result;
    }
    
    /*
     *Retrieves the Roles table details
     * 
     * returns array
     */
    public function getRolesData()
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery(
            'SELECT p
            FROM Vlreleases\UserBundle\Entity\Role p'
          
        );
        $result = $query->getResult();
        
        return $result;
    }
    
    
    /*
     * Get the size of Actions table
     * @returns array
     */
    public function getActionsSize()
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('MAX(u.id)');
        $qb->from('Vlreleases\UserBundle\Entity\Actions ', 'u');
        $result = $qb->getQuery()->getResult();
        
        return $result;
    }
    
    /*
     * Get the default roles-permissions checkboxes data to display
     * @param int $role_id
     * returns array
     */
    public function DefaultActionsData($role_id = '1')
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select("RP");
        $qb->from('Vlreleases\UserBundle\Entity\RolesPermissions ', 'RP');
        $qb->where("RP.role = '$role_id'");
        $result = $qb->getQuery()->getResult();
        
        return $result;
    }
    
    /*
     * Delete the records alrdy inserted before updating roles-permissions table
     * @param int role_id
     * @returns array
     */
    public function deleteRole($role_id)
    {
        $em = $this->getEntityManager();
        $q = $em->createQueryBuilder();
        $q->delete('Vlreleases\UserBundle\Entity\RolesPermissions', 'r');
        $q->where("r.role = '$role_id'");
        $result = $q->getQuery()->getResult();
        
        return $result;
    }
    
    /*
     * get the permissions of user who logs in
     */
    public function getUserPermissions($roleId)
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select("rp");
        $qb->from('Vlreleases\UserBundle\Entity\RolesPermissions ', 'rp');
        $qb->where("rp.role = '$roleId'");
        $result = $qb->getQuery()->getResult();
        
        return $result;
    }
    
     /**
     * Find the projects of user.
     * 
     * @param int $id
     * 
     * @returns array
     */
    public function getUserProjects($id)
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('ur.id');
        $qb->from('Vlreleases\UserBundle\Entity\User', 'u');
        $qb->innerJoin('u.projects', 'ur');
        $qb->where("u.id='$id'");
        $result = $qb->getQuery()->getResult();       
        if($result)
        {
            for ($i = '0'; $i < sizeof($result); $i++)
            {
                $id = $result[$i]['id'];
                $qb1 = $em->createQueryBuilder();
                $qb1->select('u.name');
                $qb1->from('Vlreleases\UserBundle\Entity\Project', 'u');
                $qb1->where("u.id='$id'");
                $finalResult[$i] = $qb1->getQuery()->getResult();
            }
             return $finalResult;
        }  
        else{
            return  $result;
        }
          
    }
   
    /*get all the liveapps data from db
     * @returns array
     */
    public function getLiveApps()
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery(
            'SELECT p
            FROM Vlreleases\UserBundle\Entity\LiveApps p'
        );
        $result = $query->getResult();
        
        return $result;
    }
    
    /*get all details of uploaded files
     * @returns array
     */
    public function getUploadsData()
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT ur.userName,u.id,u.fileName,u.uniqueId,u.uploadedDate
            FROM Vlreleases\UserBundle\Entity\Uploads u
                  JOIN Vlreleases\UserBundle\Entity\User ur
                  WHERE ur.id=u.userId
                ORDER BY u.id desc');
        $result = $query->getResult();
        return $result;
    }
    
    /*get the id or record to be deleted
     * @returns updated uploades files Data
     */
    public function getUpdatedUploadFilesData($id)
    {
        $em = $this->getEntityManager();
        $q = $em->createQueryBuilder();
        $q->delete('Vlreleases\UserBundle\Entity\Uploads', 'r');
        $q->where("r.id = '$id'");
        $q->getQuery()->getResult();
        $result1 = $this->getUploadsData();
        
        return $result1;
    }
    
    //get holidays details
    public function getHolidaysDetails()
    {
         $em = $this->getEntityManager();
        $query = $em->createQuery(
            'SELECT p
            FROM Vlreleases\UserBundle\Entity\HolidaysList p'
        );
        
        return $query->getResult();
    }
 
    //delete the holiday record of given id
    public function getUpdatedHolidays($id)
    {
        $em = $this->getEntityManager();
        $q = $em->createQueryBuilder();
        $q->delete('Vlreleases\UserBundle\Entity\HolidaysList', 'r');
        $q->where("r.id = '$id'");
        $q->getQuery()->getResult();
        $result = $this->getHolidaysDetails();
        
        return $result;
    }
 
    
}
