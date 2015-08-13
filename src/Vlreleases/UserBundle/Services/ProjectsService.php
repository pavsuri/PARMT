<?php

namespace Vlreleases\UserBundle\Services;

use Doctrine\ORM\EntityManager;

class ProjectsService {

    private $em;
    private $repository;

    /**
     * Constructor
     */
    public function __construct($em) 
    {
        $this->repository = $em->getRepository('VlreleasesUserBundle:Projects');
    }

    public function getAllProjects()
    {
        $projects = $this->repository->findAll();

        return $projects;
    }

}
