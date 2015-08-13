<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 */
class Uploads
{
    /**
     * @var string
     */
    private $userId;
    
     /**
     * @var string
     */
    private $fileName;

    /**
     * @var int
     */
    private $uniqueId;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var datetime
     */
    private $uploadedDate;
    

    /**
     * Set file
     *
     * @param string $file
     * @return UploadedFiles
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get File
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set fileLocation
     *
     * @param string $fileLocation
     * @return UploadedFiles
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getUserId()
    {        
        return $this->userId;
    }
    

    /**
     * Get $uniqueId
     *
     * @return integer 
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }
    
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;

        return $this;
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
     public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getUploadedDate()
    {
        return $this->uploadedDate;
    }
     public function setUploadedDate($uploadedDate)
    {
        $this->uploadedDate = $uploadedDate;

        return $this;
    }

}
