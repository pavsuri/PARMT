<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductStatus
 */
class ProductStatus
{
    /**
     * @var \DateTime
     */
    private $startTime;

    /**
     * @var \DateTime
     */
    private $expectedEndTime;

    /**
     * @var \DateTime
     */
    public $submittedTime;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Vlreleases\UserBundle\Entity\Product
     */
    private $productDevice;

    /**
     * @var \Vlreleases\UserBundle\Entity\User
     */
    private $assignee;


    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     * @return ProductStatus
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime 
     */
    public function getStartTime()
    {
        //print_r($this->startTime);exit;
        return $this->startTime;
    }

    /**
     * Set expectedEndTime
     *
     * @param \DateTime $expectedEndTime
     * @return ProductStatus
     */
    public function setExpectedEndTime($expectedEndTime)
    {
        $this->expectedEndTime = $expectedEndTime;

        return $this;
    }

    /**
     * Get expectedEndTime
     *
     * @return \DateTime 
     */
    public function getExpectedEndTime()
    {
        
        return $this->expectedEndTime;
    }

    /**
     * Set submittedTime
     *
     * @param \DateTime $submittedTime
     * @return ProductStatus
     */
    public function setSubmittedTime($submittedTime)
    {
        $this->submittedTime = $submittedTime;
     //print_r($this->submittedTime);exit;
       return $this;
    }

    /**
     * Get submittedTime
     *
     * @return \DateTime 
     */
    public function getSubmittedTime()
    {
       //print_r($this->submittedTime);
        return $this->submittedTime;
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
     * Set assignee
     *
     * @param \Vlreleases\UserBundle\Entity\User $assignee
     * @return ProductStatus
     */
    public function setAssignee(\Vlreleases\UserBundle\Entity\User $assignee = null)
    {
        $this->assignee = $assignee;

        return $this;
    }

    /**
     * Get assignee
     *
     * @return \Vlreleases\UserBundle\Entity\User 
     */
    public function getAssignee()
    {
        return $this->assignee;
    }
    /**
     * @var \Vlreleases\UserBundle\Entity\Product
     */
    private $product;


    /**
     * Set product
     *
     * @param \Vlreleases\UserBundle\Entity\Product $product
     * @return ProductStatus
     */
    public function setProduct(\Vlreleases\UserBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Vlreleases\UserBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}
