<?php

namespace Vlreleases\UserBundle\Services;

use Doctrine\ORM\EntityManager;
use \DateTime;

class UserService {

    private $session;
    private $userId;
    private $repository;
    private $currentUser;
    private $userTaskRepository;
    private $resourceIds = array();
    private $userProjectIds = array();
    private $usersId;

    /**
     * Constructor
     */
    public function __construct($em, $session) {
        $this->em = $em;
        $this->repository = $em->getRepository('VlreleasesUserBundle:User');
        $this->session = $session;
        $this->userId = $this->session->get('userId');
        $this->currentUser = $this->getCurrentUser();
        $this->userTaskRepository = $em->getRepository('VlreleasesUserBundle:UserTask');
    }

    //get the current user
    public function getCurrentUser() 
    {

        return $this->repository->findOneById($this->userId);
    }

    /*validate user credentials
     * 
     * @param string $email
     * 
     * @param string $password
     */
    public function isValidUser($email, $password)
    {
        $currentUser = $this->repository->findOneBy(array('email' => $email,
            'password' => md5($password)));

        return $currentUser;
    }

    /*find the user details
     * @param string $user
     */
    public function findOneById($user)
    {
        $currentUser = $this->repository->findOneById($user);

        return $currentUser;
    }

    /*find the user details
    * 
    * @param string $uName
     * 
     * @param string $email
     * 
     *  @param string $sysId
     * 
     *  @param string $team
    */
    public function findByUname($uName, $email, $sysId, $team)
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');
        $criteria['name'] = $uName;
        $criteria['email'] = $email;
        $criteria['sysId'] = $sysId;
        $criteria['team'] = $team;

        return $userTaskRepository->findUserDetails($criteria);
    }

    /*
     *Get the user-reporter details
     * 
     * @param string $uName
     * 
     * @param string $email
     */
    public function findByReporter($uName, $email) {

        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');
        $criteria['name'] = $uName;
        $criteria['email'] = $email;
        return $userTaskRepository->findReporterDetails($criteria);
    }

    /*
     * Get projects
     */
    public function getProjects() 
    {
        return $this->getCurrentUser()->getProjects();
    }

    //Get the users count
    public function getUsersCount() 
    {

        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');
        
        return $userTaskRepository->usersCount();
    }

    //Get the resources
    public function getResources()
    {
        return $this->getCurrentUser()->getReportingPersons();
    }

    //get the user corresponding to id
    public function getUser($usersId)
    {
        return $this->repository->findOneById($usersId);
    }

    /*
     * Get the total user-reporters. 
     * 
     * @param int $uCount
     */
    public function getAllReporters($uCount)
    {
        $reporters = array();
        $uNames = '';
        $reporterstring = array();
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');
        for ($usersId = 1, $i = 1; $usersId <= $uCount; $usersId++, $i++) {
            $result[$i] = $userTaskRepository->getReporter($usersId);
            if (count($result[$i]) > 0) {
                for ($uId = 0; $uId < sizeof($result[$i]); $uId++) {

                    $uNames.= $result[$i][$uId]['userName'] . ',';
                }
                $uNames = trim($uNames, ',');

                $reporters[$usersId] = $uNames;
                $uNames = '';
            } else {
                $reporters[$usersId] = "empty";
            }
        }

        return $reporters;
    }

    /*
     * Get the resources count of corresponding project
     * 
     * @param int $projectId
     */
    public function getResourceCountPerProject($projectId)
    {
        $resources = $this->getResources();
        $data = array();

        if ($projectId > 0) {
            if (count($resources) > 0) {
                foreach ($resources as $resource) {
                    if (count($resource->getProjects()) > 0) {
                        foreach ($resource->getProjects() as $project) {
                            if ($project->getId() == $projectId) {
                                $data[] = $resource->getId();
                            }
                        }
                    }
                }
            }
        } else {
            $data = $resources;
        }

        return count($data);
    }

    //set the resources ids
    private function setResourceIds()
    {
        if (count($this->resourceIds) == 0) {
            foreach ($this->getResources() as $resource) {
                $this->resourceIds[] = $resource->getId();
            }
        }
    }

    //set the project ids
    private function setUserProjectIds()
    {
        if (count($this->userProjectIds) == 0) {
            foreach ($this->getProjects() as $project) {
                $this->userProjectIds[] = $project->getId();
            }
        }
    }

    /*
     * Get the resource user task hours
     * 
     * @param int $projectId
     */
    public function getResourceHours($projectId) 
    {
        $this->setUserProjectIds();
        $this->setResourceIds();
        if ($projectId) {
            $currentUserPojectIds = $projectId;
        } else {
            $currentUserPojectIds = implode($this->userProjectIds, ',');
        }
        $resourceIds = implode($this->resourceIds, ',');
        $hours = $this->userTaskRepository
                ->getResourceHours($resourceIds, $currentUserPojectIds);

        return $hours['duration'];
    }

    /*
     * Get the resource task hours per date
     * 
     * @param int $projectId
     */
    public function getResourceHoursPerDate($projectId)
    {
        $this->setUserProjectIds();
        $this->setResourceIds();
        if ($projectId) {
            $currentUserPojectIds = $projectId;
        } else {
            $currentUserPojectIds = implode($this->userProjectIds, ',');
        }
        $resourceIds = implode($this->resourceIds, ',');
        $results = $this->userTaskRepository
                ->getResourceHoursPerDate($resourceIds, $currentUserPojectIds);
        $data = array();

        foreach ($results as $result) {
            $data[] = array('date' => $result['date']->format('Y-m-d'),
                'hours' => round($result['duration']));
        }

        return json_encode($data);
    }

    /*
     * Get the pending daily status tasks
     * 
     * @param string $status
     * 
     * @param int $projectId
     */
    public function getPendingApprovals($status, $projectId)
    {
        $this->setUserProjectIds();
        $this->setResourceIds();

        if ($projectId) {
            $currentUserPojectIds = $projectId;
        } else {
            $currentUserPojectIds = implode($this->userProjectIds, ',');
        }
        $resourceIds = implode($this->resourceIds, ',');
        $result = $this
                ->userTaskRepository->getPendingApprovals(
                        $resourceIds, $currentUserPojectIds, $status);

        return $result;
    }

    /*
     * Get the id's of resources corresponding to project
     * 
     * @param int $projectId
     */
    public function getResourcesIdPerProject($projectId)
    {
        $resources = $this->getResources();
        $data = array();
         if ($projectId > 0) {
            if (count($resources) > 0) {
                foreach ($resources as $resource) {
                    if (count($resource->getProjects()) > 0) {
                        foreach ($resource->getProjects() as $project) {
                            if ($project->getId() == $projectId) {
                                $data[] = array("id" => $resource->getId());
                            }
                        }
                    }
                }
            }
        } else {
            $data = $resources;
        }

        return $data;
    }

    /*
     * Get the resources names per project
     * @param int $projectId
     */
    public function getResourcesPerProject($projectId)
    {
        $resources = $this->getResources();
        $data = array();
        if ($projectId > 0) {
            if (count($resources) > 0) {
                foreach ($resources as $resource) {
                    if (count($resource->getProjects()) > 0) {
                        foreach ($resource->getProjects() as $project) {
                            if ($project->getId() == $projectId) {
                                $data[] = array("id" => $resource->getId(),
                                    "name" => $resource->getUserName());
                            }
                        }
                    }
                }
            }
        } else {
            $data = $resources;
        }


        return $data;
    }
    
    /*
     * Get the list of daily status approvals.
     * 
     * @param array $userData
     */
    public function findApprovalList($userData) 
    {
        if (!empty($userData)) {
            $curDate = date("Y/m/d");
            $userTaskRepository = $this->em
                    ->getRepository('VlreleasesUserBundle:UserTask');

            return $userTaskRepository->approvalList($userData);
        } else
            
            return false;
    }

    //Get the lead of user
    public function getReportingLead() 
    {

        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->getReportingPersonsId($this->userId);
    }

    /*
     * Get the id of menu corresponding to name
     * @param string $menuName
     */
    public function getMenuId($menuName)
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->getMenu($menuName);
    }

    /*
     * Get users details
     * @param int $page
     * @param int $uCount
     */
    public function getUsersProfile($page, $uCount)
    {
         $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');
        $userCount = $uCount;

        return $userTaskRepository->getUsers($page, $userCount);
    }

    /*
     * Get user-reporter details 
     * @param array $userDetails
     */
    public function searchReporterDetails($userDetails)
    {
        $reporters[] = array();
        $uNames = '';
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');
        if (count($userDetails) > 0) {
            for ($i = 0; $i < count($userDetails); $i++) {
                $result[$i] = $userTaskRepository
                        ->getReporter($userDetails[$i]['id']);
                if (count($result[$i]) > 0) {
                    for ($uId = 0; $uId < sizeof($result[$i]); $uId++) {

                        $uNames.= $result[$i][$uId]['userName'] . ',';
                    }
                    $uNames = trim($uNames, ',');

                    $reporters[$i] = $uNames;
                    $uNames = '';
                } else {
                    $reporters[$i] = "empty";
                }
            }
        }

        return $reporters;
    }

    /*
     * Get user-reporter details based on filterdata
     * @param array $filterData
     */
    public function ReporterFilterDetails($filterData)
    {
        $reporters[] = array();
        $uNames = '';
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');
        if (count($filterData) > 0) {
            for ($i = 0; $i < count($filterData); $i++) {
                $result[$i] = $userTaskRepository
                        ->getReporter($filterData[$i][0]['id']);
                if (count($result[$i]) > 0) {
                    for ($uId = 0; $uId < sizeof($result[$i]); $uId++) {

                        $uNames.= $result[$i][$uId]['userName'] . ',';
                    }
                    $uNames = trim($uNames, ',');

                    $reporters[$i] = $uNames;
                    $uNames = '';
                } else {
                    $reporters[$i] = "empty";
                }
            }
        }

        return $reporters;
    }

    /*
     * Get the user-reporter details 
     * @param array $filterData
     */
    public function ReporterFilterDetails1($filterData)
    {
        $reporters[] = array();
        $uNames = '';
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');
        if (count($filterData) > 0) {
            for ($i = 0; $i < count($filterData); $i++) {
                $result[$i] = $userTaskRepository
                        ->getReporter($filterData[$i]['id']);
                if (count($result[$i]) > 0) {
                    for ($uId = 0; $uId < sizeof($result[$i]); $uId++) {
                        $uNames.= $result[$i][$uId]['userName'] . ',';
                    }
                    $uNames = trim($uNames, ',');
                    $reporters[$i] = $uNames;
                    $uNames = '';
                } else {
                    $reporters[$i] = "empty";
                }
            }
        }

        return $reporters;
    }

    /*
     * Update user login password
     * @param string $fromEmail
     * @param string $value
     */
    public function updatePassword($fromEmail, $value)
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->updatePwd($fromEmail, $value);
    }

    /*
     * register projects
     * @param object $projects
     */
    public function register($projects)
    {
        $today = new DateTime('now');
        $projects->setCreateDate($today);
        $projects->setUser($this->getCurrentUser());
        $this->save($projects);
    }

    /*
     * persist the object
     * @param object $user
     */
    public function save($user) 
    {
        try {
            $this->em->persist($user);
            $this->em->flush();
            return $user->getId();
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

     /*
     * register projects
     * @param object $projects
     */
    public function register1($projects)
    {
        $today = new DateTime('now');
        $projects->setCreateDate($today);
        $projects->setUser($this->getCurrentUser());
        $this->save1($projects);
    }	

     /*
     * persist the object
     * @param object $user
     * returns pid of projects
     */
    public function save1($user) 
    {
        try {
            $this->em->persist($user);
            $this->em->flush();
            return $user->getPid();
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    /*
     * Get the userdata
     * @param string $toEmail 
     */
    public function getData($toEmail)
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->finbByEmail($toEmail);
    }

    //get asset data
    public function getAssetData()
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->getAssetStatus();
    }

    /*
     * Get user data based on filtering criteria
     * @string $value
     */
    public function getUserFilterData($value) 
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->UserFilterData($value);
    }

    /*
     * Get user-reporter data based on filtering citeria
     * @param string $value
     */
    public function getReporterFilterData($value) 
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->ReporterFilterData($value);
    }

    /*
     * Get the lead corresponding to resource id
     * @param int $resourceId
     */
    public function getLead($resourceId)
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->getLeadEmail($resourceId);
    }

    /*
     * Get the resource name
     * @param int $resourceId
     */
    public function getResourceName($resourceId) 
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->getResourceNam($resourceId);
    }

    //get the list of projects
    public function getAllProjects()
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->getProjectsDetails();
    }

    //update projectname
    public function updateProject($name, $id)
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->updateProj($name, $id);
    }
    //update clientname
    public function updateClient($name, $id)
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->updateclientName($name, $id);
    }
    //Get team details
    public function getTeamData()
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->getTeams();
    }
    
    /*
     * update team name
     * @param int $id
     * @param string $teamname
     */
    public function updateTeam($teamname, $id, $status)
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->updateTeamName($teamname, $id, $status);
    }

    /*
     * get the project details by filtering villing status
     * @param string $criteria
     */
    public function filterBillingStatus($criteria) {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->getBillabilityData($criteria);
    }

    /*
     * Get the team details
     * 
     * @param int $teamNumber
     * 
     * return array
     */
    public function getTeamName($teamNumber)
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->getTeam($teamNumber);
    }
    public function updateStatus($status,$projId)
    {
         $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->updateProjStatus($status,$projId);
    }
    
    /*
     * Get the Action table details
     * 
     * returns array
     */
    public function getActionsData()
    {
         $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->getActions();
    }
    
    /*
     * Get the Action table details
     * 
     * returns array
     */
    public function getRoles()
    {
         $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->getRolesData();
    }
    
    /*
     * Get the size of ACtions table
     * 
     * @return array
     */
    public function getSizeOfActions()
    {
         $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->getActionsSize();
    }  
    
    /*
     * get the default roles-permisssions data
     * 
     * @param int $role_id 
     * 
     * @returns array
     */
    public function getDefaultActionsData($role_id)
    {
         $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->DefaultActionsData($role_id);
    }
    
    /*
     * Delete the previous records because insert data will update the roles-permissions data
     * 
     * @param int role_id
     * 
     * @returns array
     */
    public function deleteRoles($role_id)
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->deleteRole($role_id);
    }
    
    /*
     * get the permissions of user
     * 
     * @param int roleId
     * 
     * returns array
     */
    public function findUserPermissions($roleId)
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->getUserPermissions($roleId);
    }
    
    /*
     * Get the projects of a user based on user_id
     * @param $id
     * @returns array
     */
     public function getUserProject($id)
    {
        $userSkillRepository = $this->em->getRepository('VlreleasesUserBundle:UserTask');
        return $userSkillRepository->getUserProjects($id);
    }
     //Get liveapps details
    public function getLiveAppsData()
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->getLiveApps();
    }
    
    //get all the uploaded files details
    public function getUploadFiles()
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->getUploadsData();
    }
    
    //delete the selected uploaded file
    public function deleteFile($id)
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->getUpdatedUploadFilesData($id);
    }
    
    //get holidays daya
    public function getHolidaysData()
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->getHolidaysDetails();
    }
    
    /*
     * get the id of holiday to be deleted
     * @param int $hid
     * @returns updated holidaysList array
     */
    public function deleteHolidaysData($id)
    {
        $userTaskRepository = $this->em
                ->getRepository('VlreleasesUserBundle:UserTask');

        return $userTaskRepository->getUpdatedHolidays($id);
    }
    
}

?>
