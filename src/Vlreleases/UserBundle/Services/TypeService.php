<?php

namespace Vlreleases\UserBundle\Services;

use Doctrine\ORM\EntityManager;

class TypeService {

    private $em;
    private $repository;

    /**
     * Constructor
     */
    public function __construct($em) {
        $this->repository = $em->getRepository('VlreleasesUserBundle:Type');
    }

    public function getType($id) {
        $type = $this->repository->find($id);

        return $type;
    }

}
