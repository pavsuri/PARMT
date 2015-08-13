<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserCustomSkill
 */
class UserCustomSkill extends UserSkills
{
    /**
     * @var \Vlreleases\UserBundle\Entity\CustomSkill
     */
    private $skill;

    private $experience;
    
    public function getExperience()
    {
        return $this->experience;
    }
    
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }
    /**
     * Set skill
     *
     * @param \Vlreleases\UserBundle\Entity\CustomSkill $skill
     * @return UserCustomSkill
     */
    public function setSkill(\Vlreleases\UserBundle\Entity\CustomSkill $skill = null)
    {
        $this->skill = $skill;

        return $this;
    }

    /**
     * Get skill
     *
     * @return \Vlreleases\UserBundle\Entity\CustomSkill 
     */
    public function getSkill()
    {
        return $this->skill;
    }
}
