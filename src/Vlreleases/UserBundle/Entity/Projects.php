<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projects
 */
class Projects
{
    /**
     * @var integer
     */
    private $user;

    /**
     * @var \DateTime
     */
    private $createDate;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @var boolean
     */
    private $projectStatus = 1;

    /**
     * @var string
     */
    private $svnPath;

    /**
     * @var string
     */
    private $bugTool;

    /**
     * @var string
     */
    private $bugToolLink;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var string
     */
    private $lifeCycleStatus;

    /**
     * @var string
     */
    private $billingStatus;

    /**
     * @var string
     */
    private $billingType;

    /**
     * @var string
     */
    private $billingCost;

    /**
     * @var string
     */
    private $liveLink;

    /**
     * @var integer
     */
    private $pid;

    /**
     * @var \Vlreleases\UserBundle\Entity\Project
     */
    private $projectName;

    /**
     * @var \Vlreleases\UserBundle\Entity\Phase
     */
    private $phase;

    /**
     * @var \Vlreleases\UserBundle\Entity\Client
     */
    private $client;

    private $platforms;


    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Projects
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Projects
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Projects
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Projects
     */
    public function setStatus($status)
    {
        $this->projectStatus = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
         if($this->projectStatus == "1")
        {
            $this->projectStatus = "active";
        }
        else
        {
            $this->projectStatus = "inactive";
        }
        return $this->projectStatus;
    }

    /**
     * Set svnPath
     *
     * @param string $svnPath
     * @return Projects
     */
    public function setSvnPath($svnPath)
    {
        $this->svnPath = $svnPath;

        return $this;
    }

    /**
     * Get svnPath
     *
     * @return string 
     */
    public function getSvnPath()
    {
        return $this->svnPath;
    }

    /**
     * Set bugTool
     *
     * @param string $bugTool
     * @return Projects
     */
    public function setBugTool($bugTool)
    {
        $this->bugTool = $bugTool;

        return $this;
    }

    /**
     * Get bugTool
     *
     * @return string 
     */
    public function getBugTool()
    {
        return $this->bugTool;
    }

    /**
     * Set bugToolLink
     *
     * @param string $bugToolLink
     * @return Projects
     */
    public function setBugToolLink($bugToolLink)
    {
        $this->bugToolLink = $bugToolLink;

        return $this;
    }

    /**
     * Get bugToolLink
     *
     * @return string 
     */
    public function getBugToolLink()
    {
        return $this->bugToolLink;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Projects
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
     * Set icon
     *
     * @param string $icon
     * @return Projects
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string 
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set lifeCycleStatus
     *
     * @param string $lifeCycleStatus
     * @return Projects
     */
    public function setLifeCycleStatus($lifeCycleStatus)
    {
        $this->lifeCycleStatus = $lifeCycleStatus;

        return $this;
    }

    /**
     * Get lifeCycleStatus
     *
     * @return string 
     */
    public function getLifeCycleStatus()
    {
        return $this->lifeCycleStatus;
    }

    /**
     * Set billingStatus
     *
     * @param string $billingStatus
     * @return Projects
     */
    public function setBillingStatus($billingStatus)
    {
        $this->billingStatus = $billingStatus;

        return $this;
    }

    /**
     * Get billingStatus
     *
     * @return string 
     */
    public function getBillingStatus()
    {
        return $this->billingStatus;
    }

    /**
     * Set billingType
     *
     * @param string $billingType
     * @return Projects
     */
    public function setBillingType($billingType)
    {
        $this->billingType = $billingType;

        return $this;
    }

    /**
     * Get billingType
     *
     * @return string 
     */
    public function getBillingType()
    {
        return $this->billingType;
    }

    /**
     * Set billingCost
     *
     * @param string $billingCost
     * @return Projects
     */
    public function setBillingCost($billingCost)
    {
        $this->billingCost = $billingCost;

        return $this;
    }

    /**
     * Get billingCost
     *
     * @return string 
     */
    public function getBillingCost()
    {
        return $this->billingCost;
    }

    /**
     * Set liveLink
     *
     * @param string $liveLink
     * @return Projects
     */
    public function setLiveLink($liveLink)
    {
        $this->liveLink = $liveLink;

        return $this;
    }

    /**
     * Get liveLink
     *
     * @return string 
     */
    public function getLiveLink()
    {
        return $this->liveLink;
    }

      /**
     * set id
     *
     * @return integer 
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set projectName
     *
     * @param \Vlreleases\UserBundle\Entity\Project $projectName
     * @return Projects
     */
    public function setProjectName(\Vlreleases\UserBundle\Entity\Project $projectName = null)
    {
        
        $this->projectName = $projectName;
        
        return $this;
    }

    /**
     * Get projectName
     *
     * @return \Vlreleases\UserBundle\Entity\Project 
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * Set phase
     *
     * @param \Vlreleases\UserBundle\Entity\Phase $phase
     * @return Projects
     */
    public function setPhase(\Vlreleases\UserBundle\Entity\Phase $phase = null)
    {
        $this->phase = $phase;

        return $this;
    }

    /**
     * Get phase
     *
     * @return \Vlreleases\UserBundle\Entity\Phase 
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * Set client
     *
     * @param \Vlreleases\UserBundle\Entity\Client $client
     * @return Projects
     */
    public function setClient(\Vlreleases\UserBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Vlreleases\UserBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }
    
    
        /**
     * Set projectName
     *
     * @param \Vlreleases\UserBundle\Entity\Project $projectName
     * @return Projects
     */
    public function setUser(\Vlreleases\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get projectName
     *
     * @return \Vlreleases\UserBundle\Entity\Project 
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Set phase
     *
     * @param \Vlreleases\UserBundle\Entity\Phase $phase
     * @return Projects
     */
    public function setPlatforms(\Vlreleases\UserBundle\Entity\Platforms $platforms = null)
    {
        $this->platforms = $platforms;

        return $this;
    }

    /**
     * Get phase
     *
     * @return \Vlreleases\UserBundle\Entity\Phase 
     */
    public function getPlatforms()
    {
        return $this->phase;
    }

    /**
     * Set projectStatus
     *
     * @param boolean $projectStatus
     * @return Projects
     */
    public function setProjectStatus($projectStatus)
    {
        $this->projectStatus = $projectStatus;

        return $this;
    }

    /**
     * Get projectStatus
     *
     * @return boolean 
     */
    public function getProjectStatus()
    {
        return $this->projectStatus;
    }
}
