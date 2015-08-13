<?php


namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Class holds the UserBundle repository classes.
 *
 * @category Usertask
 * @package  UserBundle
 */
class UserRepository extends EntityRepository
{
    /**
     * 
     * @param int $projectId
     * @return array
     */
    public function findAllResourcesUnderManager($projectId)
    {
        $qb = $this->createQueryBuilder('u');
        
        $qb->andWhere($qb->expr()->in('u.type', ':types'));
        $qb->setParameter('types', array(1,2,3,9));
        
        $qb->andWhere($qb->expr()->eq('u.status', true));
        
        if ($projectId > 0) {
            $qb->join('u.projects', 'p');
            $qb->andWhere($qb->expr()->eq('p.id', ':projectId'));
            $qb->setParameter('projectId', $projectId);
        }
        return $qb->getQuery()->getResult();
    }
}
