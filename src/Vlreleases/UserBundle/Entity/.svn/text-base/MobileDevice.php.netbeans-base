<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * MobileDevice
 */
class MobileDevice
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $UUID;

    /**
     * @var string
     */
    private $serialNumber;

    /**
     * @var \DateTime
     */
    private $createdDate;

    /**
     * @var \DateTime
     */
    private $lastModifiedDate;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var boolean
     */
    private $available;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Vlreleases\UserBundle\Entity\MobileDeviceStatus
     */
    private $deviceStatus;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $requesters;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $assignedUsers;

    /**
     * @var \Vlreleases\UserBundle\Entity\MobileOs
     */
    private $os;

    /**
     * @var \Vlreleases\UserBundle\Entity\MobileBrand
     */
    private $brand;

    /**
     * @var \Vlreleases\UserBundle\Entity\Project
     */
    private $project;

    /**
     * @var \Vlreleases\UserBundle\Entity\User
     */
    private $createdBy;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->requesters = new \Doctrine\Common\Collections\ArrayCollection();
        $this->assignedUsers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MobileDevice
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
     * Set version
     *
     * @param string $version
     * @return MobileDevice
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set UUID
     *
     * @param string $uUID
     * @return MobileDevice
     */
    public function setUUID($uUID)
    {
        $this->UUID = $uUID;

        return $this;
    }

    /**
     * Get UUID
     *
     * @return string 
     */
    public function getUUID()
    {
        return $this->UUID;
    }

    /**
     * Set serialNumber
     *
     * @param string $serialNumber
     * @return MobileDevice
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }

    /**
     * Get serialNumber
     *
     * @return string 
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return MobileDevice
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return MobileDevice
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return \DateTime 
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return MobileDevice
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set available
     *
     * @param boolean $available
     * @return MobileDevice
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    }

    /**
     * Get available
     *
     * @return boolean 
     */
    public function getAvailable()
    {
        return $this->available;
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
    
        /**
     * Get id
     *
     * @return integer 
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Set deviceStatus
     *
     * @param \Vlreleases\UserBundle\Entity\MobileDeviceStatus $deviceStatus
     * @return MobileDevice
     */
    public function setDeviceStatus(\Vlreleases\UserBundle\Entity\MobileDeviceStatus $deviceStatus = null)
    {
        $this->deviceStatus = $deviceStatus;

        return $this;
    }

    /**
     * Get deviceStatus
     *
     * @return \Vlreleases\UserBundle\Entity\MobileDeviceStatus 
     */
    public function getDeviceStatus()
    {
        return $this->deviceStatus;
    }

    /**
     * Add requesters
     *
     * @param \Vlreleases\UserBundle\Entity\MobileDeviceQueue $requesters
     * @return MobileDevice
     */
    public function addRequester(\Vlreleases\UserBundle\Entity\MobileDeviceQueue $requesters)
    {
        $this->requesters[] = $requesters;

        return $this;
    }

    /**
     * Remove requesters
     *
     * @param \Vlreleases\UserBundle\Entity\MobileDeviceQueue $requesters
     */
    public function removeRequester(\Vlreleases\UserBundle\Entity\MobileDeviceQueue $requesters)
    {
        $this->requesters->removeElement($requesters);
    }

    /**
     * Get requesters
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRequesters()
    {
        return $this->requesters;
    }

    /**
     * Add assignedUsers
     *
     * @param \Vlreleases\UserBundle\Entity\MobileDeviceStatus $assignedUsers
     * @return MobileDevice
     */
    public function addAssignedUser(\Vlreleases\UserBundle\Entity\MobileDeviceStatus $assignedUsers)
    {
        $this->assignedUsers[] = $assignedUsers;

        return $this;
    }

    /**
     * Remove assignedUsers
     *
     * @param \Vlreleases\UserBundle\Entity\MobileDeviceStatus $assignedUsers
     */
    public function removeAssignedUser(\Vlreleases\UserBundle\Entity\MobileDeviceStatus $assignedUsers)
    {
        $this->assignedUsers->removeElement($assignedUsers);
    }

    /**
     * Get assignedUsers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssignedUsers()
    {
        return $this->assignedUsers;
    }

    /**
     * Set os
     *
     * @param \Vlreleases\UserBundle\Entity\MobileOs $os
     * @return MobileDevice
     */
    public function setOs(\Vlreleases\UserBundle\Entity\MobileOs $os = null)
    {
        $this->os = $os;

        return $this;
    }

    /**
     * Get os
     *
     * @return \Vlreleases\UserBundle\Entity\MobileOs 
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Set brand
     *
     * @param \Vlreleases\UserBundle\Entity\MobileBrand $brand
     * @return MobileDevice
     */
    public function setBrand(\Vlreleases\UserBundle\Entity\MobileBrand $brand = null)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \Vlreleases\UserBundle\Entity\MobileBrand 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set project
     *
     * @param \Vlreleases\UserBundle\Entity\Project $project
     * @return MobileDevice
     */
    public function setProject(\Vlreleases\UserBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \Vlreleases\UserBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set createdBy
     *
     * @param \Vlreleases\UserBundle\Entity\User $createdBy
     * @return MobileDevice
     */
    public function setCreatedBy(\Vlreleases\UserBundle\Entity\User $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }
	
	/**
     * loadValidatorMetadata
     *
     */
	
	public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('project', new NotBlank());
        $metadata->addPropertyConstraint('name', new NotBlank());
        $metadata->addPropertyConstraint('version', new NotBlank());
        $metadata->addPropertyConstraint('brand', new NotBlank());
        $metadata->addPropertyConstraint('os', new NotBlank());
        $metadata->addPropertyConstraint('active', new NotBlank());
        $metadata->addPropertyConstraint('UUID', new NotBlank());
        $metadata->addPropertyConstraint('serialNumber', new NotBlank());
    }   
	
    /**
     * Get createdBy
     *
     * @return \Vlreleases\UserBundle\Entity\User 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
}
