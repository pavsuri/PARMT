<?php
namespace Vlreleases\UserBundle\Services;

use Doctrine\ORM\EntityManager;

class SystemTableService {
    private $em;
    
    public function __construct($em) 
    {
        $this->em = $em;
    }
    
    public function getProjects() 
    {
        $projectRepository = $this->em->getRepository('VlreleasesUserBundle:Project');
        $projects = $projectRepository->findAll();
        
        return $projects;
    }
    
    public function getSkills() 
    {
        $skillsRepository = $this->em->getRepository('VlreleasesUserBundle:Skill');
        $skills = $skillsRepository->findAll();  
        
        return $skills;
    }
     public function getMenus() 
    {
        $skillsRepository = $this->em->getRepository('VlreleasesUserBundle:Menus');
        $menus = $skillsRepository->findAll();  
        
        return $menus;
    }

    public function getLeads() 
    {
        $usersRepository = $this->em->getRepository('VlreleasesUserBundle:User');
        $leads = $usersRepository->findAll();  
        
        return $leads;
    }
  
}

?>
