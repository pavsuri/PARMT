<?php

namespace Vlreleases\UserBundle\Services;

use Doctrine\ORM\EntityManager;

class UserDailyStatusService {

    private $em;
    private $repository;
    private $session;

    /**
     * Constructor
     */
    public function __construct($session, $em) {

        $this->session = $session;
        $this->repository = $em->getRepository('VlreleasesUserBundle:UserTask');
        $this->em = $em;
    }

    /**
     * 
     * @param array $criteria
     * @return array
     */
    public function getUserDailyStatusData($criteria) {
        $userDailyStatusData = $this->repository->getUserDailyStatusData($criteria);

        return $userDailyStatusData;
    }

    /**
     * 
     * @param id $id
     * @return \Vlreleases\UserBundle\Entity\UserTask
     */
    public function getOneUserTask($id) {
        $userDailyStatusData = $this->repository->findOneById($id);

        return $userDailyStatusData;
    }

    /**
     * 
     * @param int $userId
     * @param boolean $status
     * @param \DateTime $date
     */
    public function ChangeTaskStatus($userId, $status, $selectedDate) {
        $this->repository->ChangeTaskStatus($userId, $status, $selectedDate);
    }

    /**
     * 
     * @param taskId $id
     * @return boolean
     */
    public function deleteTask($id) {
        $userTask = $this->repository->find($id);
        try {
            $this->em->remove($userTask);
            $this->em->flush();
            return true;
        } catch (\Exception $e) {
            return false;
        }
        return false;
    }

}
