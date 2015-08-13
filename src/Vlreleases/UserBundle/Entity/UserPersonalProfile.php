<?php

namespace Vlreleases\UserBundle\Entity;


use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Doctrine\ORM\EntityRepository;



use Doctrine\ORM\Mapping as ORM;

/**
 * UserPersonalProfile
 */
class UserPersonalProfile
{
    /**
     * @var string
     */
    protected $name;
    
 

    /**
     * @var integer
     */
    protected $employeeId;

    /**
     * @var \DateTime
     */
    protected $dob;
    
        /**
     * @var \DateTime
     */
    protected $doj;

         /**
     * @var \DateTime
     */
    protected $dojj;
    /**
     * @var string
     */
    protected $mobile;

    /**
     * @var string
     */
    protected $photo;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var integer
     */
    protected $id;


  /* public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('name', new NotBlank(array('message' => 'Name should not be blank')));
        $metadata->addPropertyConstraint('employeeId', new NotBlank(array('message' => 'EmployeeId should not be blank')));
       // $metadata->addPropertyConstraint('dob', new NotBlank(array('message' => 'Date of birth should not be blank')));
        $metadata->addPropertyConstraint('mobile', new NotBlank(array('message' => 'Mobile should not be blank')));
       // $metadata->addPropertyConstraint('photo', new NotBlank(array('message' => 'Photo should not be blank')));
        $metadata->addPropertyConstraint('email', new NotBlank(array('message' => 'Email should not be blank')));
    }  */
    /**
     * Set name
     *
     * @param string $name
     * @return UserPersonalProfile
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
     * Set employeeId
     *
     * @param integer $employeeId
     * @return UserPersonalProfile
     */
    public function setEmployeeId($employeeId)
    {
        $this->employeeId = $employeeId;

        return $this;
    }

    /**
     * Get employeeId
     *
     * @return integer 
     */
    public function getEmployeeId()
    {
        return $this->employeeId;
    }

    /**
     * Set dob
     *
     * @param \DateTime $dob
     * @return UserPersonalProfile
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime 
     */
    public function getDob()
    {
       // print_r($this->dob);exit;
        return $this->dob;
    }
    
      /**
     * Set dob
     *
     * @param \DateTime $dob
     * @return UserPersonalProfile
     */
    public function setDoj($doj)
    {
        $this->doj = $doj;

        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime 
     */
    public function getDoj()
    {
       // print_r($this->dob);exit;
        return $this->doj;
    }

       /**
     * Set dob
     *
     * @param \DateTime $dob
     * @return UserPersonalProfile
     */
    public function setDojj($dojj)
    {
        $this->dojj = $dojj;

        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime 
     */
    public function getDojj()
    {
       // print_r($this->dob);exit;
        return $this->dojj;
    }


    /**
     * Set mobile
     *
     * @param string $mobile
     * @return UserPersonalProfile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return UserPersonalProfile
     */
    public function setPhoto($photo)
    {
       $this->photo = $photo;
        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return UserPersonalProfile
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
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
        return $this->id = $id;
    }
    
    
}
