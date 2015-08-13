<?php

namespace Proxies\__CG__\Vlreleases\UserBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class UserWorkProfile extends \Vlreleases\UserBundle\Entity\UserWorkProfile implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'extensionNumber', 'highestEducation', 'passedoutYear', 'totalExperience', 'dateOfJoining', 'workStation', 'systemIp', 'systemId', 'assetTag', 'gtalkId', 'skypeId', 'leadName', 'id', 'department', 'designation', 'band', 'team');
        }

        return array('__isInitialized__', 'extensionNumber', 'highestEducation', 'passedoutYear', 'totalExperience', 'dateOfJoining', 'workStation', 'systemIp', 'systemId', 'assetTag', 'gtalkId', 'skypeId', 'leadName', 'id', 'department', 'designation', 'band', 'team');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (UserWorkProfile $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setExtensionNumber($extensionNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExtensionNumber', array($extensionNumber));

        return parent::setExtensionNumber($extensionNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getExtensionNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtensionNumber', array());

        return parent::getExtensionNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setHighestEducation($highestEducation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHighestEducation', array($highestEducation));

        return parent::setHighestEducation($highestEducation);
    }

    /**
     * {@inheritDoc}
     */
    public function getHighestEducation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHighestEducation', array());

        return parent::getHighestEducation();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassedoutYear($passedoutYear)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassedoutYear', array($passedoutYear));

        return parent::setPassedoutYear($passedoutYear);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassedoutYear()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassedoutYear', array());

        return parent::getPassedoutYear();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalExperience($totalExperience)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalExperience', array($totalExperience));

        return parent::setTotalExperience($totalExperience);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalExperience()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalExperience', array());

        return parent::getTotalExperience();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateOfJoining($dateOfJoining)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateOfJoining', array($dateOfJoining));

        return parent::setDateOfJoining($dateOfJoining);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateOfJoining()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateOfJoining', array());

        return parent::getDateOfJoining();
    }

    /**
     * {@inheritDoc}
     */
    public function setWorkStation($workStation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWorkStation', array($workStation));

        return parent::setWorkStation($workStation);
    }

    /**
     * {@inheritDoc}
     */
    public function getWorkStation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorkStation', array());

        return parent::getWorkStation();
    }

    /**
     * {@inheritDoc}
     */
    public function setSystemIp($systemIp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSystemIp', array($systemIp));

        return parent::setSystemIp($systemIp);
    }

    /**
     * {@inheritDoc}
     */
    public function getSystemIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSystemIp', array());

        return parent::getSystemIp();
    }

    /**
     * {@inheritDoc}
     */
    public function setSystemId($systemId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSystemId', array($systemId));

        return parent::setSystemId($systemId);
    }

    /**
     * {@inheritDoc}
     */
    public function getSystemId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSystemId', array());

        return parent::getSystemId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAssetTag($assetTag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAssetTag', array($assetTag));

        return parent::setAssetTag($assetTag);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssetTag()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssetTag', array());

        return parent::getAssetTag();
    }

    /**
     * {@inheritDoc}
     */
    public function setGtalkId($gtalkId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGtalkId', array($gtalkId));

        return parent::setGtalkId($gtalkId);
    }

    /**
     * {@inheritDoc}
     */
    public function getGtalkId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGtalkId', array());

        return parent::getGtalkId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSkypeId($skypeId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSkypeId', array($skypeId));

        return parent::setSkypeId($skypeId);
    }

    /**
     * {@inheritDoc}
     */
    public function getSkypeId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSkypeId', array());

        return parent::getSkypeId();
    }

    /**
     * {@inheritDoc}
     */
    public function setLeadName($leadName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLeadName', array($leadName));

        return parent::setLeadName($leadName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLeadName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLeadName', array());

        return parent::getLeadName();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepartment(\Vlreleases\UserBundle\Entity\Department $department = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartment', array($department));

        return parent::setDepartment($department);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartment', array());

        return parent::getDepartment();
    }

    /**
     * {@inheritDoc}
     */
    public function setDesignation(\Vlreleases\UserBundle\Entity\Designation $designation = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDesignation', array($designation));

        return parent::setDesignation($designation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDesignation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDesignation', array());

        return parent::getDesignation();
    }

    /**
     * {@inheritDoc}
     */
    public function setBand(\Vlreleases\UserBundle\Entity\Band $band = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBand', array($band));

        return parent::setBand($band);
    }

    /**
     * {@inheritDoc}
     */
    public function getBand()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBand', array());

        return parent::getBand();
    }

    /**
     * {@inheritDoc}
     */
    public function setTeam(\Vlreleases\UserBundle\Entity\Team $team = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTeam', array($team));

        return parent::setTeam($team);
    }

    /**
     * {@inheritDoc}
     */
    public function getTeam()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTeam', array());

        return parent::getTeam();
    }

}
