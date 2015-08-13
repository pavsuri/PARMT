<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Phase
 */
class Phase
{
    /**
     * @var string
     */
    private $phaseName;

    

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     * @return Phase
     */
    public function setPhaseName($phaseName)
    {
        $this->$phaseName = $phaseName;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getPhaseName()
    {
        return $this->phaseName;
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
