<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 */
class RolesPermissions
{

    /**
     * @var boolean
     */
    private $add;

    /**
     * @var boolean
     */
    private $edit;

    /**
     * @var boolean
     */
    private $view;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Vlreleases\UserBundle\Entity\Role
     */
    private $role;

    /**
     * @var \Vlreleases\UserBundle\Entity\Actions
     */
    private $actions;


    /**
     * Set add
     *
     * @param boolean $add
     * @return RolesPermissions
     */
    public function setAdd($add)
    {
        $this->add = $add;

        return $this;
    }

    /**
     * Get add
     *
     * @return boolean 
     */
    public function getAdd()
    {
        return $this->add;
    }

    /**
     * Set edit
     *
     * @param boolean $edit
     * @return RolesPermissions
     */
    public function setEdit($edit)
    {
        $this->edit = $edit;

        return $this;
    }

    /**
     * Get edit
     *
     * @return boolean 
     */
    public function getEdit()
    {
        return $this->edit;
    }

    /**
     * Set view
     *
     * @param boolean $view
     * @return RolesPermissions
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Get view
     *
     * @return boolean 
     */
    public function getView()
    {
        return $this->view;
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
     * Set role
     *
     * @param \Vlreleases\UserBundle\Entity\Role $role
     * @return RolesPermissions
     */
    public function setRole(\Vlreleases\UserBundle\Entity\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \Vlreleases\UserBundle\Entity\Role 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set actions
     *
     * @param \Vlreleases\UserBundle\Entity\Actions $actions
     * @return RolesPermissions
     */
    public function setActions(\Vlreleases\UserBundle\Entity\Actions $actions = null)
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * Get actions
     *
     * @return \Vlreleases\UserBundle\Entity\Actions 
     */
    public function getActions()
    {
        return $this->actions;
    }
}
