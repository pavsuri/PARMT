<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductQueue
 */
class ProductQueue
{
    /**
     * @var \DateTime
     */
    private $startTime;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Vlreleases\UserBundle\Entity\Product
     */
    private $product;

    /**
     * @var \Vlreleases\UserBundle\Entity\User
     */
    private $requester;


    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     * @return ProductQueue
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
        return $this->startTime;
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
     * Set product
     *
     * @param \Vlreleases\UserBundle\Entity\Product $product
     * @return ProductQueue
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

    /**
     * Set requester
     *
     * @param \Vlreleases\UserBundle\Entity\User $requester
     * @return ProductQueue
     */
    public function setRequester(\Vlreleases\UserBundle\Entity\User $requester = null)
    {
        $this->requester = $requester;

        return $this;
    }

    /**
     * Get requester
     *
     * @return \Vlreleases\UserBundle\Entity\User 
     */
    public function getRequester()
    {
        return $this->requester;
    }
}
