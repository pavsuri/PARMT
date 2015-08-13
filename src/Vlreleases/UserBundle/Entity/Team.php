<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 */
class Team
{
    /**
     * @var string
     */
    private $tname;

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
     * @return Team
     */
    public function setTname($tname)
    {
        $this->tname = $tname;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getTname()
    {
        return $this->tname;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Team
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
        if($this->status == "1")
        {
            $this->status = "active";
        }
        else
        {
            $this->status = "inactive";
        }
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
     public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

}
