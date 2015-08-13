<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Band
 */
class LiveApps
{
    /**
     * @var string
     */
    private $appName;

    /**
     * @var boolean
     */
    private $os;
    
    /**
     * @var string
     */
    private $version;

    /**
     * @var boolean
     */
    private $appLink;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $appname
     * @return LiveApps
     */
    public function setAppName($appName)
    {
        $this->appName = $appName;

        return $this;
    }

    /**
     * Get appname
     *
     * @return string 
     */
    public function getAppName()
    {
        return $this->appName;
    }
    
    /**
     * Set version
     *
     * @param string $version
     * @return LiveApps
     */
    public function setAppLink($appLink)
    {
        $this->appLink = $appLink;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getAppLink()
    {
        return $this->appLink;
    }
    /**
     * Set version
     *
     * @param string $version
     * @return LiveApps
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set os
     *
     * @param string os
     * @return os
     */
    public function setOs($os)
    {
        $this->os = $os;

        return $this;
    }

    /**
     * Get os
     *
     * @return os 
     */
    public function getOs()
    {
        return $this->os;
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
}
