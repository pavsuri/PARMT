<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activity
 */
class Activity
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     * @return Activity
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return ucfirst($this->name);
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Activity
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
