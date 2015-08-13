<?php

namespace Vlreleases\UserBundle\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ManagerDashboardController extends Controller 
{ 
    /**
     *
     * @var \Vlreleases\UserBundle\Services\UserService 
     */
    private $userService;
    
    /**
     *display manager dashboard. 
     * 
     * @param Request $request
     * 
     * @return type array
     */
    public function managerDashboardAction(Request $request)
    {   
        $form = $this->createForm('leaddashboardform'); 
        $projectId = $request->request->get('project');
        $session = $request->getSession();
        $userType = $session->get('userType');
 	$session->set('projectId', $projectId);
        //Added to redirect the user to the appropriate
        // dashboard according to the user type
        switch ($userType) {
            case 9:
                return $this->redirect($this->generateUrl('vlreleases_user_lead'));
                break;
            case 4:
                break;
            default:
                return $this->redirect($this->generateUrl('vlreleases_user_homepage'));
                break;
        }
        $userService = $this->get('UserService');
        $userId= $session->get('userId');
        $userData['projects'] = $userService->getProjects();
        $userData['resources'] = $userService
                ->getResourceCountPerProject($projectId);
        $userData['resourcesNames'] = $userService
                ->getResourcesPerProject($projectId);
        $userData['resourceHours'] = round($userService
                ->getResourceHours($projectId),2);
        $userData['resourceHoursPerDate'] = $userService
                ->getResourceHoursPerDate($projectId);
        $userData['pendingApprovals'] = count($userService
                ->getPendingApprovals('pending', $projectId));
        $userData['allApprovals'] = count($userService
                ->getPendingApprovals('approved', $projectId));
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
        if ($request->isMethod('POST')) {
            $response = new JsonResponse();
            $response->setData($userData);            
            return $response;
        }
        
        return $this
                ->render('VlreleasesUserBundle:User:managerDashboard.html.twig', 
                        array('form' => $form->createView(),
                            'userData' => $userData));
    }
    
     /**
     * Get the resources for a particular project
     * 
     * @param Request $request
     * 
     */
    public function taskApprovalAction(Request $request)
    {
        $userService = $this->get('UserService');
        $userData['projects'] = $userService->getProjects();
        $projectId = $request->request->get('project');
        $userData['resources'] = $userService->getResourcesPerProject($projectId);
    }  
    
    /**
     * Get the list of menus for search bar to work
     *
     * 
     * @return response
     */
     public function getMenusAction() 
    {
        $menusData = array();
        $systemTableService = $this->get('SystemTableService');
        $menus = $systemTableService->getMenus();
        foreach ($menus as $menu) {
            $menusData[] = array ('id' => $menu->getId(), 'name' => $menu->getName());
        }
        $response = new JsonResponse();
        $response->setData($menusData); 
        return $response;          
    }
  
    /**
     * Retuns the UserService.
     * 
     * @return \Vlreleases\UserBundle\Services\UserService
     */
    public function getUserService()
    {
        if (!$this->userService) {
            $this->userService = $this->get('UserService');
        }
        return $this->userService;
    }
}

?>
