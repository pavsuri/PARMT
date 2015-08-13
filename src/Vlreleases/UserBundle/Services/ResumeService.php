<?php

namespace Vlreleases\UserBundle\Services;

use Doctrine\ORM\EntityManager;

class ResumeService {

    //private $em;
    private $repository;

    /**
     * Constructor
     */
    public function __construct($em) {
        $this->em = $em;
        $this->repository = $em->getRepository('VlreleasesUserBundle:GroupEmails');
    }

    //get all the teams
    public function getTeamsData()
    {
        $q = $this->em->createQueryBuilder();
        $q->select('t');
        $q->from('Vlreleases\UserBundle\Entity\Team', 't');       
        $result = $q->getQuery()->getResult();
        
        return $result;
    }
    
    //get users corresponding to team
    public function getTeamUsers($tId)
    {
        $q = $this->em->createQueryBuilder();
        $q->select('u.id,u.email');
        $q->from('Vlreleases\UserBundle\Entity\User', 'u'); 
        $q->innerjoin('u.workProfile','uw');     
        $q->where("uw.team = '$tId' ");
        $q->orderBy('u.email','ASC');    
        $result = $q->getQuery()->getResult();
        
        return $result;
    }
    
    //get userdetails to build resume
    public function getUSerDetails($id)
    {
        $q = $this->em->createQueryBuilder();
        $q->select('u.id,u.userName,u.workExperience,upp.employeeId,upp.email,
                upp.dob,upp.doj,upp.mobile,
                upp.photo,uwp.highestEducation,uwp.passedoutYear,up.name');
        $q->from('Vlreleases\UserBundle\Entity\User', 'u'); 
        $q->innerjoin('u.personalProfile','upp');
        $q->innerjoin('u.workProfile','uwp');
        $q->innerjoin('u.projects','up');        
        $q->where("u.id = '$id'");
        
        $result = $q->getQuery()->getResult();
     
        return $result;
    }
    
    public function save($gEmailUsers) 
    {

        try {
            $this->em->persist($gEmailUsers);
            $this->em->flush();
            return $gEmailUsers->getId();
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

}
