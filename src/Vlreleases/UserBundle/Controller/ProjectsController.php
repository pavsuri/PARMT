<?php

namespace Vlreleases\UserBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Vlreleases\UserBundle\Form\AddProjectForm;
use Vlreleases\UserBundle\Form\CreateProjectForm;
use Vlreleases\UserBundle\Entity\Project;
use Vlreleases\UserBundle\Entity\Projects;
use Vlreleases\UserBundle\Entity\Client;
use Doctrine\ORM\EntityManager;
use \DateTime;


class ProjectsController extends Controller
{
    /**
     *
     * @var type string
     */
     private $screenName;
     
     /**
     *
     * @var \Vlreleases\UserBundle\Services\UserService 
     */
    private $userService;
    
    
     /**
     * Lists the products.
     * 
     * @return type array 
     */
    public function listProjectsAction(Request $request) 
    {
        
        $projects = array();
        $addProjectForm = $this->createForm(new AddProjectForm(), array());
        $session = $request->getSession();
        $projectId = $session->get('projectId');
        $userService = $this->get('UserService');
        $userData['userName'] = $session->get('userName');
        $userData['userType'] = $session->get('userType');
        $userData['userRole'] = $session->get('userRole');
        $user = $this->getUserService()->findOneById($session->get('userId'));
         $userData['photo'] = 'default.jpg'; 
        if (!is_null($user->getPersonalProfile())) {
            $userData['photo'] = $user->getPersonalProfile()->getPhoto();
        }
        $projectsService = $this->get('ProjectsService');
        $projects = $userService->getAllProjects();
        
        return $this
                ->render('VlreleasesUserBundle:User:displayProjectList.html.twig', 
                        array('userData' => $userData,'projects' => $projects,
                      ));
    }
    /**
     * Get the details of projectlist .
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * return type array
     */
    public function projectsListAction(Request $request) 
    {
        $screenName = 'projects';
        $flag = 0;
        $projects = array();
        $addProjectForm = $this->createForm(new AddProjectForm(), array());
        $session = $request->getSession();
        $projectId = $session->get('projectId');
        $userService = $this->get('UserService');
        $userData['userName'] = $session->get('userName');
        $userData['userType'] = $session->get('userType');
	$roleId = $session->get('userRole');       
        $em = $this->getDoctrine()->getManager();
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));
        $user = $this->getUserService()->findOneById($session->get('userId'));
        if ($user->getPersonalProfile() == '') {
             $userData['photo'] = 'default.jpg'; 
        }
        else if($user->getPersonalProfile()->getPhoto())
        {
            $userData['photo'] = $user->getPersonalProfile()->getPhoto();
        }
        else {
            $userData['photo'] = 'default.jpg';
        }
        $userData['userRole'] = $session->get('userRole');
        $projectsService = $this->get('ProjectsService');
        $projects = $userService->getAllProjects();
        
        return $this
                ->render('VlreleasesUserBundle:User:projectsList.html.twig', 
                        array('userData' => $userData,'projects' => $projects,
                            'flag' => $flag,
                       'addProjectForm' => $addProjectForm->createView()));
    }

    /**
     * Loads the add project details form .
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     */
    public function projectsCreationAction(Request $request) 
    {
        $session = $request->getSession();
        $projectId = $session->get('projectId');
        $userService = $this->get('UserService');
        $userData['userName'] = $session->get('userName');
        $userData['userRole'] = $session->get('userRole');
        $user = $this->getUserService()->findOneById($session->get('userId'));
        if ($user->getPersonalProfile() == '') {
             $userData['photo'] = 'default.jpg'; 
        }
        else if($user->getPersonalProfile()->getPhoto())
        {
            $userData['photo'] = $user->getPersonalProfile()->getPhoto();
        }
        else {
            $userData['photo'] = 'default.jpg';
        }
        $userData['userType'] = $session->get('userType');
        return $this
                ->render('VlreleasesUserBundle:User:addProject.html.twig',
                        array('userData' => $userData,
                    'addProjectForm' => $addProjectForm->createView()));
    }

    /**
     * Register the project details.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * returns array
     */
    public function getProjectDataAction(Request $request)
    {
        $screenName = 'projects';
        $errorValue = 0;
        $flag = 0;
        $userService = $this->get('UserService');
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();
        if ($request->isMethod('GET')) {
            $id = $request->query->get('projectId');
            if (!empty($id)) {
                 $projects  = $em->getRepository('VlreleasesUserBundle:Projects')
                ->findOneBy(array("pid" => $id));
            }
        } else if ($request->isMethod('POST')) {
            
            $data = $request->request->all();
            $projectNameId = $data['addProjectform']['projectName'];
            $pId = $request->request->get('updateprojectId');
            if ($pId) {
                $projects  = $em->getRepository('VlreleasesUserBundle:Projects')
                ->findOneBy(array("pid" => $pId));
            } else {
                $projects = new Projects();
                $project_entity = $em->getRepository('VlreleasesUserBundle:Project')
                        ->findOneBy(array("id" => $projectNameId));                
                $projects->setProjectName($project_entity);
                $client_entity = $em->getRepository('VlreleasesUserBundle:Client')
                        ->findOneBy(array("id" => $data['addProjectform']['client']));                
                $projects->setClient($client_entity);
                $phase_entity = $em->getRepository('VlreleasesUserBundle:Phase')
                        ->findOneBy(array("id" => $data['addProjectform']['phase']));                
                $projects->setPhase($phase_entity);
                $date = new \DateTime($data['addProjectform']['startDate']);
                $projects->setStartDate($date);
                $projects->setBugTool($data['addProjectform']['bugTool']);
                $projects->setDescription($data['addProjectform']['description']);
                $projects->setBillingStatus($data['addProjectform']['billingStatus']);
                $projects->setSvnPath($data['addProjectform']['svnpath']);
                $projects->setLifeCycleStatus($data['addProjectform']['lifeCycleStatus']);
                $platform_entity = $em->getRepository('VlreleasesUserBundle:Platforms')
                        ->findOneBy(array("id" => $data['addProjectform']['platforms']));
                $projects->setPlatforms($platform_entity);                               
            }
        }

        $addProjectForm = $this->createForm(new AddProjectForm(), $projects);
        if ($request->isMethod('POST')) {
            $addProjectForm->handleRequest($request);
            //@fix-me:Think of a better solution.
            //Setting the status since it is gettig reset above to zero.
            $projects->setStatus(1);
            $userService->register1($projects);
            $flag = 1;
            $addProjectForm = $this->getEmptyForm();
        }
        
        $userData['userName'] = $session->get('userName');
        $userData['userType'] = $session->get('userType');
        $userData['userRole'] = $session->get('userRole');
        $user = $this->getUserService()->findOneById($session->get('userId'));
        if ($user->getPersonalProfile() == '') {
             $userData['photo'] = 'default.jpg'; 
        }
        else if($user->getPersonalProfile()->getPhoto())
        {
            $userData['photo'] = $user->getPersonalProfile()->getPhoto();
        }
        else {
            $userData['photo'] = 'default.jpg';
        }
	$roleId = $session->get('userRole');
        $userRolesPermissions = $userService->findUserPermissions($roleId);
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));
        $projectsService = $this->get('ProjectsService');
        $projects = $userService->getAllProjects();
        
        return $this
                ->render('VlreleasesUserBundle:User:projectsList.html.twig', 
                        array('userData' => $userData,'projects' => $projects,
                            'flag' => $flag,
                       'addProjectForm' => $addProjectForm->createView()));
    }
    
    public function getAddProjectFormDataAction(Request $request)
    {
        $pId = $request->query->get('projectId');
        $projects = new Projects();
        $this->session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
            if ($pId) {
                $projects  = $em->getRepository('VlreleasesUserBundle:Projects')
                ->findOneBy(array("pid" => $pId));
            }
            
            $addProjectForm = $this->createForm(new AddProjectForm(), $projects);
            
        return $this
            ->render('VlreleasesUserBundle:User:addProject.html.twig',
                    array(
                    'addProjectForm' => $addProjectForm->createView(),
                    'userName' => $this->session->get('userName'),
                    'userType' => $this->session->get('userType'),
                     )
        );
    }

    public function getPlatformIdAction(Request $request)
    {
         $pId = $request->query->get('projectId');
         $em = $this->getDoctrine()->getManager();
         if ($pId) {
                $projects = $em->getRepository('VlreleasesUserBundle:Projects')
                ->findOneBy(array("pid" => $pId));
            }
        echo $projects->getPlatforms()->getId();
        exit;
    }

    /**
     * Register a new project.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     */
    public function getCreateProjectDataAction(Request $request)
    {
        $name = $request->get('pname');
        $project = new Project;
        $userService = $this->get('UserService');
        $em = $this->getDoctrine()->getManager();
        $project_entity  = $em->getRepository('VlreleasesUserBundle:Project')
                ->findOneBy(array("name" => $name));
        if (empty($project_entity))
        {
            $project->setName($name);
            $project->setStatus('1');
            $result = $userService->save1($project);
            if(!empty($result))
               $error = 0;
            else
               $error = 1; 
        }
        else {
            $error = 1;    
        }
        
        echo $error;exit;
    }

    /**
     * Register a new client.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     */
    public function getCreateClientDataAction(Request $request)
    {
        $clientName = $request->get('cname');
        $client = new Client;
        $userService = $this->get('UserService');
        $em = $this->getDoctrine()->getManager();
        $client_entity = $em->getRepository('VlreleasesUserBundle:Client')
                ->findOneBy(array("clientName" => $clientName));
        if (empty($client_entity)) {
            $client->setClientName($clientName);
            $client->setStatus('1');
            $result = $userService->save($client);
            if(!empty($result))
               $err = 0;
            else
               $err = 1; 
        }
       else {
           $err = 1;    
        }
        echo $err;exit;
    }

    /*
     * Get the project name to be edit through ajax call from twig
     * 
     * return ajax response(return the project details if exist already)
     */
    public function editProjectNameAction(Request $request)
    {
        $id = $request->get('chname');
        $em = $this->getDoctrine()->getManager();
        $project_entity  = $em->getRepository('VlreleasesUserBundle:Project')
                            ->findOneBy(array("id" => $id));
        $value1 = $project_entity->getName();
        $value2 = $project_entity->getId();
        $value = $value1.'^'.$value2;
          echo $value;exit;
    }

    /*
     * update the project name 
     * 
     * return response through ajax call
     */
    public function updateProjectNameAction(Request $request)
    {
        $value = 0;
        $id = $request->get('editid');
        $name = $request->get('editname');
        $userService = $this->get('UserService');
         $em = $this->getDoctrine()->getManager();
        $projectexist  = $em->getRepository('VlreleasesUserBundle:Project')
                            ->findOneBy(array("name" => $name));
        if(empty($projectexist))
            $value=$userService->updateProject($name, $id);
        if($value == '1')
        {
            echo "project name updated successfully"; 
            exit;
        }
        else
        {
            echo "project already existed";
            exit;
        }
        
    }

    /*
     * Get the client name to be edit through ajax call from twig
     * 
     * return ajax response(return the client details if exist already)
     */
    public function editClientNameAction(Request $request)
    {
        $id = $request->get('clname');
        $em = $this->getDoctrine()->getManager();
        $project_entity  = $em->getRepository('VlreleasesUserBundle:Client')
                            ->findOneBy(array("id" => $id));
        $value1 = $project_entity->getclientName();
        $value2 = $project_entity->getId();
        $value = $value1.'^'.$value2;
          echo $value;exit;
    }

    /*
     * update the client name 
     * 
     * return response through ajax call
     */
    public function updateClientNameAction(Request $request)
    {
        $value = 0;
        $id = $request->get('editid1');
        $name = $request->get('editname1');
        $userService = $this->get('UserService');
        $em = $this->getDoctrine()->getManager();
        $clientexist  = $em->getRepository('VlreleasesUserBundle:Client')
                            ->findOneBy(array("clientName" => $name));
        if(empty($clientexist))
            $value=$userService->updateClient($name, $id);
        if($value == '1')
        {
            echo "client name updated successfully"; 
            exit;
        }
        else
        {
            echo "client already existed";
            exit;
        }
        
    }
    
    /*
     * get the projectId,statusId through ajax call
     * 
     * returns the updated status
     */
    public function updateStatusAction(Request $request)
    {
        $screenName = 'projects';
        $projId = $request->get('proId');
        $id = $request->get('statusid');
        $session = $request->getSession();
        $userService = $this->get('UserService');
        if($id == '1')
        {
            $status = '0';
            $value1=$userService->updateStatus($status,$projId);
        }
        else
        {
            $status = '1';
            $value1=$userService->updateStatus($status,$projId);
        }
        if($value1 == '1')
        {
            $userService = $this->get('UserService');
            $userData['userName'] = $session->get('userName');
            $userData['userType'] = $session->get('userType');
            $userData['userRole'] = $session->get('userRole');
            $user = $this->getUserService()->findOneById($session->get('userId'));
            if ($user->getPersonalProfile() == '') {
             $userData['photo'] = 'default.jpg'; 
			}
			else if($user->getPersonalProfile()->getPhoto())
			{
				$userData['photo'] = $user->getPersonalProfile()->getPhoto();
			}
			else {
				$userData['photo'] = 'default.jpg';
			}
            $projectsService = $this->get('ProjectsService');
            $projects = $userService->getAllProjects();
	    $roleId = $session->get('userRole');
            $userRolesPermissions = $userService->findUserPermissions($roleId);
            $em = $this->getDoctrine()->getManager();
            $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
            $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId())); 
            echo $template = $this
                  ->renderView('VlreleasesUserBundle:User:displayProjectList.html.twig',
                    array('userData' => $userData, 'projects' => $projects));
            exit;
        }
            
        else
        {
            echo "updated failed";exit;
        }
            
    }
        /**
     * creates a empty form
     * 
     * @return $addProjectForm 
     */
    private function getEmptyForm() 
    {
        $project = new Projects();
        $addProjectForm = $this->createForm(new AddProjectForm(), $project);
        
        return $addProjectForm;
    }
    
    /**
     * Loads a new addProject Form.
     * 
     * @return addProjectForm 
     */
    public function clickRegisterAction() 
    {
        $addProjectForm = $this->getEmptyForm();
       return $this->render('VlreleasesUserBundle:User:addProject.html.twig', 
               array(
                    'addProjectForm' => $addProjectForm->createView()));
    }
   
    /**
     * Filters the projects depends on billability.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * returns array
     */
    public function filterBillabilityDataAction(Request $request)
    {
        $screenName = 'projects';
        $flag = 0;
        $addProjectForm = $this->createForm(new AddProjectForm(), array());
        $session = $request->getSession();
        $projectId = $session->get('projectId');
        $userService = $this->get('UserService');
        $userData['userName'] = $session->get('userName');
        $userData['userType'] = $session->get('userType');
        $userData['userRole'] = $session->get('userRole');
        $user = $this->getUserService()->findOneById($session->get('userId'));
        if ($user->getPersonalProfile() == '') {
             $userData['photo'] = 'default.jpg'; 
        }
        else if($user->getPersonalProfile()->getPhoto())
        {
            $userData['photo'] = $user->getPersonalProfile()->getPhoto();
        }
        else {
            $userData['photo'] = 'default.jpg';
        }
	$roleId = $session->get('userRole');
        $userRolesPermissions = $userService->findUserPermissions($roleId);
        $em = $this->getDoctrine()->getManager();
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));
        $criteria = '';

        switch($request->get('rValue'))
        {
            case 'Billable to VL':
                $criteria = $request->get('rValue');
                $projects = $userService->filterBillingStatus($criteria);
                break;
            case 'Billable to Client':
                $criteria = $request->get('rValue');
                $projects = $userService->filterBillingStatus($criteria);
                break;
            case 'POC':
                $criteria = $request->get('rValue');
                $projects = $userService->filterBillingStatus($criteria);
                break;
            case 'All':
                $criteria = $request->get('rValue');
                $projects = $userService->getAllProjects();
                break;
                
        }
        
        echo $template = $this->renderView('VlreleasesUserBundle:User:displayProjectList.html.twig',
                array('userData' => $userData,'projects' => $projects));exit;
        
        
    }

     /**
     * Retuns the User Service.
     * 
     * @return \Vlreleases\UserBundle\Services\UserService
     */
    private function getUserService() {
        if (!$this->userService) {
            $this->userService = $this->get('UserService');
        }
        return $this->userService;
    }

}
