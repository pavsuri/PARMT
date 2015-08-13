<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 */
class Actions
{
    /**
     * @var string
     */
    private $screenName;

    /**
     * @var boolean
     */
    private $screenStatus;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     * @return Team
     */
    public function setScreenName($screenName)
    {
        $this->screenName = $screenName;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getScreenName()
    {
        return $this->screenName;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Team
     */
    public function setScreenStatus($screenStatus)
    {
        $this->screenStatus = $screenStatus;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getScreenStatus()
    {
       return $this->screenStatus;
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
     public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

}
