<?php

namespace Vlreleases\UserBundle\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * ApprovalList controller
 * 
 * Daily Statusreport approval list  
 */

class ApprovalListController extends Controller 
{
    /**
     * 
     * @var UserService
     */
    private $userService;

    /**
     * Get the Lead approvallist of last one week
     * 
     * @param Request $request
     * 
     * @return type array
     */
    public function approvalListAction(Request $request)
    { 
        $session = $request->getSession();
        $userId = $session->get('userId');
        $projectId = $session->get('projectId');
        $userService = $this->get('UserService');
        $userData['projId']=$projectId;
        $userData['resources'] = $userService->getResourceCountPerProject($projectId);
        $userData['resourcesIds'] =  $userService->getResourcesIdPerProject($projectId);
        $userData['userName'] = $session->get('userName');
        $userData['userRole'] = $session->get('userRole');
        $userData['resourcesNames'] = $userService->getResourcesPerProject($projectId);
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
        $result=array();
        $result = $userService->findApprovalList($userData);
        
        return $this->render('VlreleasesUserBundle:User:approvalList.html.twig', array('result' => $result,'userData' => $userData));  
    }
     
    /**
     * Retuns the User Service.
     * 
     * @return \Vlreleases\UserBundle\Services\UserService
     */
    private function getUserService()
    {
        if (!$this->userService) {
            $this->userService = $this->get('UserService');
        }
        
        return $this->userService;
    }
    
}
   