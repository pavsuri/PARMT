<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Ip;
use Symfony\Component\Validator\Constraints\Number;

/**
 * UserWorkProfile
 */
class UserWorkProfile
{
    /**
     * @var integer
     */
    protected $extensionNumber;

    /**
     * @var string
     */
    protected $highestEducation;

    /**
     * @var integer
     */
    protected $passedoutYear;

    /**
     * @var string
     */
    protected $totalExperience;

    /**
     * @var \DateTime
     */
    protected $dateOfJoining;

    /**
     * @var string
     */
    protected $workStation;

    /**
     * @var string
     */
    protected $systemIp;

    /**
     * @var string
     */
    protected $systemId;

    /**
     * @var string
     */
    protected $assetTag;

    /**
     * @var string
     */
    protected $gtalkId;

    /**
     * @var string
     */
    protected $skypeId;
    
     /**
     * @var string
     */
    protected $leadName;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \Vlreleases\UserBundle\Entity\Department
     */
    protected $department;

    /**
     * @var \Vlreleases\UserBundle\Entity\Designation
     */
    protected $designation;

    /**
     * @var \Vlreleases\UserBundle\Entity\Band
     */
    protected $band;

    /**
     * @var \Vlreleases\UserBundle\Entity\Team
     */
    protected $team;

    //public static function loadValidatorMetadata(ClassMetadata $metadata)
    //{
      //  $metadata->addPropertyConstraint('department', new NotBlank(array('message' => 'Department should not be blank')));
        //$metadata->addPropertyConstraint('designation', new NotBlank(array('message' => 'Designation should not be blank')));
        //$metadata->addPropertyConstraint('band', new NotBlank(array('message' => 'Band should not be blank')));
       // $metadata->addPropertyConstraint('workStation', new NotBlank(array('message' => 'WorkStation should not be blank')));
       // $metadata->addPropertyConstraint('extensionNumber', new NotBlank(array('message' => 'ExtensionNumber should not be blank')));
        //$metadata->addPropertyConstraint('extensionNumber', new Number(array('message' => 'Extension number should be number')));
        //$metadata->addPropertyConstraint('dateOfJoining', new NotBlank(array('message' => 'DateOfJoining should not be blank')));
        //$metadata->addPropertyConstraint('systemIp', new NotBlank(array('message' => 'System IP should not be blank')));
        //$metadata->addPropertyConstraint('systemIp', new Ip(array('message' => 'Not a Ip')));
         //$metadata->addPropertyConstraint('systemId', new NotBlank(array('message' => 'SystemId should not be blank')));
        //$metadata->addPropertyConstraint('assetTag', new NotBlank(array('message' => 'AssetTag should not be blank')));
        //$metadata->addPropertyConstraint('totalExperience', new NotBlank(array('message' => 'TotalExperience should not be blank')));
        //$metadata->addPropertyConstraint('totalExperience', new Number(array('message' => 'Total experience should be number')));
   // }    

    /**
     * Set extensionNumber
     *
     * @param integer $extensionNumber
     * @return UserWorkProfile
     */
    public function setExtensionNumber($extensionNumber)
    {
        $this->extensionNumber = $extensionNumber;

        return $this;
    }

    /**
     * Get extensionNumber
     *
     * @return integer 
     */
    public function getExtensionNumber()
    {
        return $this->extensionNumber;
    }

    /**
     * Set highestEducation
     *
     * @param string $highestEducation
     * @return UserWorkProfile
     */
    public function setHighestEducation($highestEducation)
    {
        $this->highestEducation = $highestEducation;

        return $this;
    }

    /**
     * Get highestEducation
     *
     * @return string 
     */
    public function getHighestEducation()
    {
        return $this->highestEducation;
    }

    /**
     * Set passedoutYear
     *
     * @param integer $passedoutYear
     * @return UserWorkProfile
     */
    public function setPassedoutYear($passedoutYear)
    {
        $this->passedoutYear = $passedoutYear;

        return $this;
    }

    /**
     * Get passedoutYear
     *
     * @return integer 
     */
    public function getPassedoutYear()
    {
        return $this->passedoutYear;
    }

    /**
     * Set totalExperience
     *
     * @param string $totalExperience
     * @return UserWorkProfile
     */
    public function setTotalExperience($totalExperience)
    {
        $this->totalExperience = $totalExperience;

        return $this;
    }

    /**
     * Get totalExperience
     *
     * @return string 
     */
    public function getTotalExperience()
    {
        return $this->totalExperience;
    }

    /**
     * Set dateOfJoining
     *
     * @param \DateTime $dateOfJoining
     * @return UserWorkProfile
     */
    public function setDateOfJoining($dateOfJoining)
    {
        $this->dateOfJoining = $dateOfJoining;

        return $this;
    }

    /**
     * Get dateOfJoining
     *
     * @return \DateTime 
     */
    public function getDateOfJoining()
    {
        return $this->dateOfJoining;
    }

    /**
     * Set workStation
     *
     * @param string $workStation
     * @return UserWorkProfile
     */
    public function setWorkStation($workStation)
    {
        $this->workStation = $workStation;

        return $this;
    }

    /**
     * Get workStation
     *
     * @return string 
     */
    public function getWorkStation()
    {
        return $this->workStation;
    }

    /**
     * Set systemIp
     *
     * @param string $systemIp
     * @return UserWorkProfile
     */
    public function setSystemIp($systemIp)
    {
        $this->systemIp = $systemIp;

        return $this;
    }

    /**
     * Get systemIp
     *
     * @return string 
     */
    public function getSystemIp()
    {
        return $this->systemIp;
    }

    /**
     * Set systemId
     *
     * @param string $systemId
     * @return UserWorkProfile
     */
    public function setSystemId($systemId)
    {
        $this->systemId = $systemId;

        return $this;
    }

    /**
     * Get systemId
     *
     * @return string 
     */
    public function getSystemId()
    {
        return $this->systemId;
    }

    /**
     * Set assetTag
     *
     * @param string $assetTag
     * @return UserWorkProfile
     */
    public function setAssetTag($assetTag)
    {
        $this->assetTag = $assetTag;

        return $this;
    }

    /**
     * Get assetTag
     *
     * @return string 
     */
    public function getAssetTag()
    {
        return $this->assetTag;
    }

    /**
     * Set gtalkId
     *
     * @param string $gtalkId
     * @return UserWorkProfile
     */
    public function setGtalkId($gtalkId)
    {
        $this->gtalkId = $gtalkId;

        return $this;
    }

    /**
     * Get gtalkId
     *
     * @return string 
     */
    public function getGtalkId()
    {
        return $this->gtalkId;
    }

    /**
     * Set skypeId
     *
     * @param string $skypeId
     * @return UserWorkProfile
     */
    public function setSkypeId($skypeId)
    {
        $this->skypeId = $skypeId;

        return $this;
    }

    /**
     * Get skypeId
     *
     * @return string 
     */
    public function getSkypeId()
    {
        return $this->skypeId;
    }
    
    /**
     * Set skypeId
     *
     * @param string $skypeId
     * @return UserWorkProfile
     */
    public function setLeadName($leadName)
    {
        $this->leadName = $leadName;

        return $this;
    }

    /**
     * Get skypeId
     *
     * @return string 
     */
    public function getLeadName()
    {
        return $this->leadName;
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
     * Set department
     *
     * @param \Vlreleases\UserBundle\Entity\Department $department
     * @return UserWorkProfile
     */
    public function setDepartment(\Vlreleases\UserBundle\Entity\Department $department = null)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return \Vlreleases\UserBundle\Entity\Department 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set designation
     *
     * @param \Vlreleases\UserBundle\Entity\Designation $designation
     * @return UserWorkProfile
     */
    public function setDesignation(\Vlreleases\UserBundle\Entity\Designation $designation = null)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return \Vlreleases\UserBundle\Entity\Designation 
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set band
     *
     * @param \Vlreleases\UserBundle\Entity\Band $band
     * @return UserWorkProfile
     */
    public function setBand(\Vlreleases\UserBundle\Entity\Band $band = null)
    {
        $this->band = $band;

        return $this;
    }

    /**
     * Get band
     *
     * @return \Vlreleases\UserBundle\Entity\Band 
     */
    public function getBand()
    {
        return $this->band;
    }

    /**
     * Set team
     *
     * @param \Vlreleases\UserBundle\Entity\Team $team
     * @return UserWorkProfile
     */
    public function setTeam(\Vlreleases\UserBundle\Entity\Team $team = null)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return \Vlreleases\UserBundle\Entity\Team 
     */
    public function getTeam()
    {
        return $this->team;
    }
}
