<?php

namespace Vlreleases\UserBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ResourceNamesController extends Controller
{
    /**
     *
     * @var \Vlreleases\UserBundle\Services\UserService 
     */
    private $userService;

    /**
     * Get the resource names corresponding to a project.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * @return type array
     * 
     */
    public function getResourcesNamesAction(Request $request)
    {
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
        $userData['resources'] = $userService
                ->getResourceCountPerProject($projectId);
        $userData['resourcesNames'] = $userService
                ->getResourcesPerProject($projectId);

        return $this
                ->render('VlreleasesUserBundle:User:resourcesNames.html.twig',
                        array('userData' => $userData));
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
