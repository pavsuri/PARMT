<?php

namespace Vlreleases\UserBundle\Services;

use Doctrine\ORM\EntityManager;
use Vlreleases\UserBundle\Entity\User;

class UserProfileService {

    private $em;
    private $session;
    private $currentUser = null;

    public function __construct($em, $session) {
        $this->em = $em;
        $this->session = $session;
        $userRepository = $this->em->getRepository('VlreleasesUserBundle:User');
        $user = $userRepository->findOneById($this->session->get('userId'));
        $this->currentUser = $user;
    }

    public function saveProfilePersonal($personalProfileData) {
        $this->currentUser->setPersonalProfile($personalProfileData);
        $this->em->persist($this->currentUser);
        $this->em->flush();
    }

    public function getUserProjects() {
        $projects = $this->currentUser->getProjects();

        return $projects;
    }

    public function saveProfileProject($projectId, $user) {
        $projectRepository = $this->em->getRepository('VlreleasesUserBundle:Project');
        $project = $projectRepository->findOneById($projectId);
        $user->addProject($project);
        $this->em->persist($user);
        $this->em->flush();
    }

    public function deleteProfileProject($projectId, $user) {
        $projectRepository = $this->em->getRepository('VlreleasesUserBundle:Project');
        $project = $projectRepository->findOneById($projectId);
        $user->removeProject($project);
        $this->em->persist($user);
        $this->em->flush();
    }

    public function saveProfileWork($workProfile) {
        $this->currentUser->setWorkProfile($workProfile);
        $this->em->persist($this->currentUser);
        $this->em->flush();
    }

    public function saveProfileSkill($skillId, $user, $experience) {
        $skillRepository = $this->em->getRepository('VlreleasesUserBundle:Skill');
        $skill = $skillRepository->findOneById($skillId);
        $userSkill = new \Vlreleases\UserBundle\Entity\UserSkill();
        $userSkill->setSkill($skill);
        $userSkill->setUser($user);
        $userSkill->setExperience($experience);
        $this->em->persist($userSkill);
        $this->em->flush();

        return $userSkill->getId();
    }

    public function getUserSkills() {
        $skills = $this->currentUser->getSkills();

        return $skills;
    }
    
    public function getUserSkill($user1) {
        $skills = $user1->getSkills();

        return $skills;
    }

    public function deleteProfileSkill($skillId, $user) {
        $userSkillRepository = $this->em->getRepository('VlreleasesUserBundle:UserSkills');
        $userSkills = $userSkillRepository->findOneById($skillId);
        try {
            $this->em->remove($userSkills);
            $this->em->flush();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function saveProfileCustomSkill($skill, $user, $experience) {
        $customSkill = new \Vlreleases\UserBundle\Entity\CustomSkill();
        $customSkill->setName($skill);
        $this->em->persist($customSkill);
        $this->em->flush();
        $userSkill = new \Vlreleases\UserBundle\Entity\UserCustomSkill();
        $userSkill->setSkill($customSkill);
        $userSkill->setUser($user);
        $userSkill->setExperience($experience);
        $this->em->persist($userSkill);
        $this->em->flush();

        return $userSkill->getId();
    }
   
}

?>
