<?php

namespace Vlreleases\UserBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Vlreleases\UserBundle\Form\AddLiveAppForm;
use Vlreleases\UserBundle\Entity\LiveApps;
use Doctrine\ORM\EntityManager;

class LiveAppsController extends Controller
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
     * Get the resource names corresponding to a project.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * @return type array
     * 
     */
    public function indexAction(Request $request)
    {
        $screenName = 'live apps';
        $addFlag = 0;
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
        $userData['liveApps'] = $this->getUserService()->getLiveAppsData();
        $addLiveAppForm = $this->createForm(new AddLiveAppForm(), array());
        $roleId = $session->get('userRole');
        $userRolesPermissions = $userService->findUserPermissions($roleId);
        $em = $this->getDoctrine()->getManager();
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));
        return $this
                ->render('VlreleasesUserBundle:User:liveApps.html.twig',
                        array('userData' => $userData,'addFlag' => $addFlag,
                            'addLiveAppForm' => $addLiveAppForm->createView()));
    }

    /*
     * Get the app details to persist in the database
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * @return type array
     */
    public function getAppDataAction(Request $request)
    {
        $screenName = 'live apps';
        $data = $request->request->all();
        if ($request->isMethod('POST'))
        {        
            $userService = $this->get('UserService');       
            $liveApps = new LiveApps();
            $liveApps->setAppName($data['addLiveAppform']['AppName']);
            $liveApps->setOs($data['addLiveAppform']['OS']);
            $liveApps->setVersion($data['addLiveAppform']['version']);
            $liveApps->setAppLink($data['addLiveAppform']['link']);
            $appId = $userService->save($liveApps);
            if($appId)
            {
                $addFlag = 1;
            }
        }
        $session = $request->getSession();
         $userData['userName'] = $session->get('userName');
        $userData['userType'] = $session->get('userType');
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
        $userData['liveApps'] = $this->getUserService()->getLiveAppsData();
        $userData['userRole'] = $session->get('userRole');
        $addLiveAppForm = $this->createForm(new AddLiveAppForm(), array());
         $roleId = $session->get('userRole');
        $userRolesPermissions = $userService->findUserPermissions($roleId);
        $em = $this->getDoctrine()->getManager();
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));
        return $this
                ->render('VlreleasesUserBundle:User:liveApps.html.twig',
                        array('userData' => $userData,'addFlag' => $addFlag,
                            'addLiveAppForm' => $addLiveAppForm->createView()));

    }

     /**
     * Loads a new addapplive Form.
     * 
     * @return addLiveAppForm 
     */
    public function clickRegisterAction() 
    {
        $addLiveAppForm = $this->getEmptyForm();
        return $this->render('VlreleasesUserBundle:User:addLiveApp.html.twig', 
               array(
                    'addLiveAppForm' => $addLiveAppForm->createView()));
    }
    
    /**
     * creates a empty form
     * 
     * @return $addProjectForm 
     */
    private function getEmptyForm() 
    {
        $liveApps = new LiveApps();
        $addLiveAppForm = $this->createForm(new AddLiveAppForm(), $liveApps);
        
        return $addLiveAppForm;
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
