<?php

namespace Vlreleases\UserBundle\Services;

use Doctrine\ORM\EntityManager;

class GroupMailsService {

    //private $em;
    private $repository;

    /**
     * Constructor
     */
    public function __construct($em) {
        $this->em = $em;
        $this->repository = $em->getRepository('VlreleasesUserBundle:GroupEmails');
    }

      //get groupmails details
    public function getGruopMailsData()
    {        
        $query = $this->em->createQuery('SELECT g.id,g.groupEmail,gr.userName,g.createdDate
            FROM Vlreleases\UserBundle\Entity\GroupEmails g
                  JOIN Vlreleases\UserBundle\Entity\User gr
                  WHERE gr.id=g.createdBy');
        $result = $query->getResult();
        
        return $result;
    }
     
    //get membersdata of group mail
    public function getGroupMembers($id)
    {        
        $qb = $this->em->createQueryBuilder();
        $qb->select('u.userName,u.email,g.groupEmail');
        $qb->from('Vlreleases\UserBundle\Entity\GroupmailUsers', 'gu');
        $qb->leftJoin('gu.userId', 'u');
        $qb->leftJoin('gu.group', 'g');
        $qb->where("gu.group = '$id'");
        $result = $qb->getQuery()->getResult();

        return $result;

    }
   
    /*
     * var int gId
     * delete the group corresponding to given id
     */
    public function deleteGroup($gId)
    {
        //$em = $this->getEntityManager();
        $q = $this->em->createQueryBuilder();
        $q->delete('Vlreleases\UserBundle\Entity\GroupEmails', 'ge');
        $q->where("ge.id = '$gId'");
        $result = $q->getQuery()->getResult();
        
        return $result;
    }
    
    
       /*
     * Delete the records alrdy inserted before updating egroupmailusers table
     * @param int $gId
     * @returns array
     */
    public function deleteGruopMailUsers($gId)
    {        
        $q = $this->em->createQueryBuilder();
        $q->delete('Vlreleases\UserBundle\Entity\GroupmailUsers', 'gu');
        $q->where("gu.group = '$gId'");
        $result = $q->getQuery()->getResult();
        
        return $result;
    }
    
    /*
     * persist the object
     * @param object $gEmailUsers
     */
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
