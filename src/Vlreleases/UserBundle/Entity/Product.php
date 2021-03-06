<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Product
 */
class Product
{
    /**
     * @var string
     */
    private $productname;

    /**
     * @var string
     */
    private $ownername;
    
    /**
     * @var string
     */
    private $os;

    /**
     * @var string
     */
    private $brand;

    /**
     * @var string
     */
    private $serialNumber;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $description;

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
     * @var \Vlreleases\UserBundle\Entity\ProductStatus
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
     * @var \Vlreleases\UserBundle\Entity\User
     */
    private $createdBy;

    /**
     * @var \Vlreleases\UserBundle\Entity\Category
     */
    private $category;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->requesters = new \Doctrine\Common\Collections\ArrayCollection();
        $this->assignedUsers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set productname
     *
     * @param string $productname
     * @return Product
     */
    public function setProductname($productname)
    {
        $this->productname = $productname;

        return $this;
    }

    /**
     * Get productname
     *
     * @return string 
     */
    public function getProductname()
    {
        return $this->productname;
    }
    
     /**
     * Set productname
     *
     * @param string $productname
     * @return Product
     */
    public function setOwnername($ownername)
    {
        $this->ownername = $ownername;

        return $this;
    }

    /**
     * Get productname
     *
     * @return string 
     */
    public function getOwnername()
    {
        return $this->ownername;
    }

    /**
     * Set os
     *
     * @param string $os
     * @return Product
     */
    public function setOs($os)
    {
        $this->os = $os;

        return $this;
    }

    /**
     * Get os
     *
     * @return string 
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return Product
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set serialNumber
     *
     * @param string $serialNumber
     * @return Product
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
     * Set version
     *
     * @param string $version
     * @return Product
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
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Product
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
     * @return Product
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
     * @return Product
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
     * @return Product
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
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
     * set id
     *
     * @return integer 
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * Set deviceStatus
     *
     * @param \Vlreleases\UserBundle\Entity\ProductStatus $deviceStatus
     * @return Product
     */
    public function setDeviceStatus(\Vlreleases\UserBundle\Entity\ProductStatus $deviceStatus = null)
    {
        $this->deviceStatus = $deviceStatus;

        return $this;
    }

    /**
     * Get deviceStatus
     *
     * @return \Vlreleases\UserBundle\Entity\ProductStatus 
     */
    public function getDeviceStatus()
    {
        return $this->deviceStatus;
    }

    /**
     * Add requesters
     *
     * @param \Vlreleases\UserBundle\Entity\ProductQueue $requesters
     * @return Product
     */
    public function addRequester(\Vlreleases\UserBundle\Entity\ProductQueue $requesters)
    {
        $this->requesters[] = $requesters;

        return $this;
    }

    /**
     * Remove requesters
     *
     * @param \Vlreleases\UserBundle\Entity\ProductQueue $requesters
     */
    public function removeRequester(\Vlreleases\UserBundle\Entity\ProductQueue $requesters)
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
     * @param \Vlreleases\UserBundle\Entity\ProductStatus $assignedUsers
     * @return Product
     */
    public function addAssignedUser(\Vlreleases\UserBundle\Entity\ProductStatus $assignedUsers)
    {
        $this->assignedUsers[] = $assignedUsers;

        return $this;
    }

    /**
     * Remove assignedUsers
     *
     * @param \Vlreleases\UserBundle\Entity\ProductStatus $assignedUsers
     */
    public function removeAssignedUser(\Vlreleases\UserBundle\Entity\ProductStatus $assignedUsers)
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
     * Set createdBy
     *
     * @param \Vlreleases\UserBundle\Entity\User $createdBy
     * @return Product
     */
    public function setCreatedBy(\Vlreleases\UserBundle\Entity\User $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
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

    /**
     * Set category
     *
     * @param \Vlreleases\UserBundle\Entity\Category $category
     * @return Product
     */
    public function setCategory(\Vlreleases\UserBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }
    
    

    /**
     * Get category
     *
     * @return \Vlreleases\UserBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
