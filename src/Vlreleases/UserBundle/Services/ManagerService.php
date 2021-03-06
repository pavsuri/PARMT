<?php

namespace Vlreleases\UserBundle\Services;

use Doctrine\ORM\EntityManager;

class ManagerService {

    private $session;
    private $userId;
    private $repository;
    private $currentUser;
    private $userTaskRepository;
    private $resourceIds = array();
    private $userProjectIds = array();

    /**
     * Constructor
     */
    public function __construct($em, $session) {
        $this->repository = $em->getRepository('VlreleasesUserBundle:User');
        $this->session = $session;
        $this->userId = $this->session->get('userId');
        $this->currentUser = $this->getCurrentUser();
        $this->userTaskRepository = $em->getRepository('VlreleasesUserBundle:UserTask');
        $this->projectRepository = $em->getRepository('VlreleasesUserBundle:Project');
    }

    public function getCurrentUser() {
        return $this->repository->findOneById($this->userId);
    }

    public function findOneById($user) {
        $currentUser = $this->repository->findOneById($user);
        return $currentUser;
    }

    public function getProjects() {
        return $this->projectRepository->findBy(array('status' => true));
    }

    public function getResources() {
        return $this->repository->findAllResourcesUndermanager();
    }

    public function getResourceCountPerProject($projectId = null) {
        $resources = $this->repository->findAllResourcesUndermanager($projectId);

        return count($resources);
    }

    public function getResourceHours($projectId = null) {
        $result = $this->userTaskRepository->findResourceHoursUndermanager($projectId);
        return $result['duration'];
    }

    public function getResourceHoursPerDate($projectId = null) {
        $results = $this->userTaskRepository->getResourceHoursPerDateUnderManager($projectId);
        $data = array();

        foreach ($results as $result) {
            $data[] = array('date' => $result['date']->format('Y-m-d'), 'hours' => round($result['duration']));
        }
        return json_encode($data);
    }

    public function getPendingApprovals($status, $projectId) {
        $result = $this->userTaskRepository->getPendingApprovalsUnderManager($status, $projectId);
        return count($result);
    }

}

?>
