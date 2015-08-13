<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 */
class Type
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var integer
     */
    public $id;


    /**
     * Set name
     *
     * @param string $name
     * @return Type
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
        return $this->name;
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
