<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * group emails
 */
class GroupEmails
{

    /**
     * @var varchar
     */
    private $groupEmail;

    /**
     * @var varchar
     */
    private $createdBy;
    
    /**
     * @var varchar
     */
    private $createdDate;

    /**
     * @var integer
     */
    private $id;

   

    /**
     * Set groupEmail
     *
     * @param varchar groupEmail
     * 
     * @return groupEmail
     */
    public function setGroupEmail($groupEmail)
    {
        $this->groupEmail = $groupEmail;

        return $this;
    }

    /**
     * Get groupEmail
     *
     * @return string 
     */
    public function getGroupEmail()
    {
        return $this->groupEmail;
    }

    /**
     * Set createdBy
     *
     * @param varchar createdBy
     * 
     * @return createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return createdBy 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
    
    /**
     * Set createdDate
     *
     * @param date createdDate
     * @return createdDate
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return date 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $groupusers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groupusers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add groupuser
     *
     * @param \Vlreleases\UserBundle\Entity\GroupmailUsers $groupuser
     *
     * @return GroupEmails
     */
    public function addGroupuser(\Vlreleases\UserBundle\Entity\GroupmailUsers $groupuser)
    {
        $this->groupusers[] = $groupuser;

        return $this;
    }

    /**
     * Remove groupuser
     *
     * @param \Vlreleases\UserBundle\Entity\GroupmailUsers $groupuser
     */
    public function removeGroupuser(\Vlreleases\UserBundle\Entity\GroupmailUsers $groupuser)
    {
        $this->groupusers->removeElement($groupuser);
    }

    /**
     * Get groupusers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroupusers()
    {
        return $this->groupusers;
    }
}
