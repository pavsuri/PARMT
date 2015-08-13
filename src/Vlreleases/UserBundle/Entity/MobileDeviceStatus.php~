<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MobileDeviceStatus
 */
class MobileDeviceStatus
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
    private $endTime;

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
    private $assignee;


    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     * @return MobileDeviceStatus
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
     * Set expectedEndTime
     *
     * @param \DateTime $expectedEndTime
     * @return MobileDeviceStatus
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
     * Set endTime
     *
     * @param \DateTime $endTime
     * @return MobileDeviceStatus
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime 
     */
    public function getEndTime()
    {
        return $this->endTime;
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
     * @return MobileDeviceStatus
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
     * Set assignee
     *
     * @param \Vlreleases\UserBundle\Entity\User $assignee
     * @return MobileDeviceStatus
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
}
