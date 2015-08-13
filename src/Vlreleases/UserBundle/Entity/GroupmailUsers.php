<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * group GroupmailUsers
 */
class GroupmailUsers
{
    /**
     * @var integer
     */
    private $groupId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $id;
    /**
     * Set groupId
     *
     * @param integer groupId
     * 
     * @return groupId
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId
     *
     * @return integer 
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set UserId
     *
     * @param integer UserId
     * 
     * @return UserId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get UserId
     *
     * @return UserId 
     */
    public function getUserId()
    {
        return $this->userId;
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
     * @var \Vlreleases\UserBundle\Entity\GroupEmails
     */
    private $group;


    /**
     * Set group
     *
     * @param \Vlreleases\UserBundle\Entity\GroupEmails $group
     *
     * @return GroupmailUsers
     */
    public function setGroup(\Vlreleases\UserBundle\Entity\GroupEmails $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \Vlreleases\UserBundle\Entity\GroupEmails
     */
    public function getGroup()
    {
        return $this->group;
    }
}
