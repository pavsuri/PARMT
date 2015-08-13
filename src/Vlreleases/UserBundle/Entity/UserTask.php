<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserTask
 */
class UserTask
{
    /**
     * @var integer
     */
    private $duration;

    /**
     * @var string
     */
    private $status = 'saved';

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $time;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \vlreleases\UserBundle\Entity\User
     */
    private $user;

    /**
     * @var \Vlreleases\UserBundle\Entity\Project
     */
    private $project;

    /**
     * @var \Vlreleases\UserBundle\Entity\Activity
     */
    private $activity;


    /**
     * Set duration
     *
     * @param integer $duration
     * @return UserTask
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return UserTask
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return UserTask
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return UserTask
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
     * Set time
     *
     * @param \DateTime $time
     * @return UserTask
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
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
    /**
     * Set user
     *
     * @param \vlreleases\UserBundle\Entity\User $user
     * @return UserTask
     */
    public function setUser(\vlreleases\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \vlreleases\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set project
     *
     * @param \Vlreleases\UserBundle\Entity\Project $project
     * @return UserTask
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
     * Set activity
     *
     * @param \Vlreleases\UserBundle\Entity\Activity $activity
     * @return UserTask
     */
    public function setActivity(\Vlreleases\UserBundle\Entity\Activity $activity = null)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity
     *
     * @return \Vlreleases\UserBundle\Entity\Activity 
     */
    public function getActivity()
    {
        return $this->activity;
    }
}
