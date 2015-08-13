<?php

namespace Vlreleases\UserBundle\Services;

use Doctrine\ORM\EntityManager;

class ActivityService {

    private $em;
    private $repository;

    /**
     * Constructor
     */
    public function __construct($em) {
        $this->repository = $em->getRepository('VlreleasesUserBundle:Activity');
    }

    public function getAllActivities() {
        $activities = $this->repository->findAll();

        return $activities;
    }

}
