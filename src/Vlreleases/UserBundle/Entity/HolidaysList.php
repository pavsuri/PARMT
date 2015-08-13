<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HolidaysList
 */
class HolidaysList
{

    /**
     * @var varchar
     */
    private $holidayName;

    /**
     * @var varchar
     */
    private $holidayDate;

    /**
     * @var integer
     */
    private $id;

   

    /**
     * Set holidayName
     *
     * @param boolean $holidayName
     * 
     * @return HolidayName
     */
    public function setHolidayName($holidayName)
    {
        $this->holidayName = $holidayName;

        return $this;
    }

    /**
     * Get HolidayName
     *
     * @return string 
     */
    public function getHolidayName()
    {
        return $this->holidayName;
    }

    /**
     * Set holidayDate
     *
     * @param date $holidayDate
     * @return holidayDate
     */
    public function setHolidayDate($holidayDate)
    {
        $this->holidayDate = $holidayDate;

        return $this;
    }

    /**
     * Get holidayDate
     *
     * @return date 
     */
    public function getHolidayDate()
    {
        return $this->holidayDate;
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
