<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 */
class Client
{
    /**
     * @var string
     */
    public $clientName;

    /**
     * @var boolean
     */
    public $status;

    /**
     * @var integer
     */
    public $id;


    /**
     * Set name
     *
     * @param string $clientName
     * @return Skill
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Skill
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
