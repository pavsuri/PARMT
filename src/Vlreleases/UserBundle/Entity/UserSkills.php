<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSkills
 */
abstract class UserSkills
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \vlreleases\UserBundle\Entity\User
     */
    private $user;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param \vlreleases\UserBundle\Entity\User $user
     * @return UserSkills
     */
    public function setUser(\vlreleases\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \vlreleases\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

}
