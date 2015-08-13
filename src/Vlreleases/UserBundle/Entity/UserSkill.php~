<?php

namespace Vlreleases\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSkill
 */
class UserSkill extends UserSkills 
{
    /**
     * @var \Vlreleases\UserBundle\Entity\Skill
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
     * @param \Vlreleases\UserBundle\Entity\Skill $skill
     * @return UserSkill
     */
    public function setSkill(\Vlreleases\UserBundle\Entity\Skill $skill = null)
    {
        $this->skill = $skill;

        return $this;
    }

    /**
     * Get skill
     *
     * @return \Vlreleases\UserBundle\Entity\Skill 
     */
    public function getSkill()
    {
        return $this->skill;
    }
    
    
}
