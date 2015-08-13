<?php

namespace Vlreleases\UserBundle\Entity;


use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Doctrine\ORM\EntityRepository;



use Doctrine\ORM\Mapping as ORM;

/**
 * UserPersonalProfile
 */
class Registration
{
    
      /**
     * @var integer
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    

    /**
     * @var string
     */
    public $empId;
    
    
     /**
     * @var string
     */
    public $password;

       /**
     * @var string
     */
    public $email;
    
    /**
     * @var \DateTime
     */
    public $dob;

    /**
     * @var string
     */
    public $mobile;

    
     /**
     * @var string
     */
    public $gender;
    
    
       /**
     * @var \DateTime
     */
    public $doj;
    
    
    /**
     * @var string
     */
    public $image;

 

  


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
    public function setEmpId($empId)
    {
        $this->empId = $empId;
        
        return $this;
    }
        /**
     * Get employeeId
     *
     * @return integer 
     */
    public function getEmpId()
    {
        return $this->empId;
    }

    /**
     * Get employeeId
     *
     * @return integer 
     */
    public function getPassword()
    {
        return $this->password;
    }
    
        /**
     * Set employeeId
     *
     * @param integer $employeeId
     * @return UserPersonalProfile
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
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
     * Set dob
     *
     * @param \DateTime $dob
     * @return UserPersonalProfile
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
        //echo $this->dob;exit;
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
     * Set mobile
     *
     * @param string $mobile
     * @return UserPersonalProfile
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
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
     * Set photo
     *
     * @param string $photo
     * @return UserPersonalProfile
     */
    public function setImage($image)
    {
       
        $this->image = $image;
       //echo $this->image;exit;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->$image;
    }


   
    
}
