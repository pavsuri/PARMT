<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MobileDeviceQueue
 */
class MobileDeviceQueue
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
     * @var \Vlreleases\UserBundle\Entity\MobileDevice
     */
    private $mobileDevice;

    /**
     * @var \Vlreleases\UserBundle\Entity\User
     */
    private $requester;


    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     * @return MobileDeviceQueue
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
     * Set mobileDevice
     *
     * @param \Vlreleases\UserBundle\Entity\MobileDevice $mobileDevice
     * @return MobileDeviceQueue
     */
    public function setMobileDevice(\Vlreleases\UserBundle\Entity\MobileDevice $mobileDevice = null)
    {
        $this->mobileDevice = $mobileDevice;

        return $this;
    }

    /**
     * Get mobileDevice
     *
     * @return \Vlreleases\UserBundle\Entity\MobileDevice 
     */
    public function getMobileDevice()
    {
        return $this->mobileDevice;
    }

    /**
     * Set requester
     *
     * @param \Vlreleases\UserBundle\Entity\User $requester
     * @return MobileDeviceQueue
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
