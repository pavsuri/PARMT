<?php

namespace Vlreleases\UserBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Vlreleases\UserBundle\Entity\Actions;
use Vlreleases\UserBundle\Entity\Role;
use Vlreleases\UserBundle\Entity\RolesPermissions;
use Doctrine\ORM\EntityManager;
use Vlreleases\UserBundle\Services\UserService;

class ActionsController extends controller
{
     /**
     * @var \Vlreleases\UserBundle\Services\UserService 
     */
    private $userService;
    
    /*
     * Default method which displays the roles-permissions page
     * 
     *  @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     *  @retuns twig file
     */
    public function indexAction(Request $request)
    {
        $flag = 0;
        $session = $request->getSession();
        $roleId = 1;
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
        $actions = $userService->getActionsData();
        $roles = $userService->getRoles();
        $permissionsData = $userService->getDefaultActionsData('1');
        $userRoles = array();
        $size = sizeof($permissionsData);
        for($i=0;$i<$size;$i++)
        {
           $userRoles[$permissionsData[$i]->getActions()->getId()]['add'] = (int)$permissionsData[$i]->getAdd();
           $userRoles[$permissionsData[$i]->getActions()->getId()]['edit'] = (int)$permissionsData[$i]->getEdit();
           $userRoles[$permissionsData[$i]->getActions()->getId()]['view'] = (int)$permissionsData[$i]->getView();
        }

       return $this->render('VlreleasesUserBundle:User:actions.html.twig', 
                array('userData' => $userData, 'actions' => $actions,
                'flag' => $flag,'permissionsData' => $permissionsData,
                    'userRoles' => $userRoles,'roleId' => $roleId,'roles' => $roles));
    }
    
    /*
     * Get the roles-permissions data
     * 
     *  @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * return twig file
     */
    public function getRoleDataAction(Request $request)
    {
        $result = array();
        $arr = array();
        $flag = 0;
        $role_id = $request->get('roleName');
        $roleId = $request->get('roleName');
        $result = $request->get('myarray');
        $em = $this->getDoctrine()->getManager();
        $userService = $this->get('UserService');
        $size = $userService->getSizeOfActions();
        $userService->deleteRoles($role_id);
        foreach($result as $key=>$obj)
        {
            $rolesPermissions = new RolesPermissions();
            $role_entity = $em->getRepository('VlreleasesUserBundle:Role')
                ->findOneBy(array("id" => $role_id)); 
            $rolesPermissions->setRole($role_entity);
            $action_entity = $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("id" => $key)); 
            $rolesPermissions->setActions($action_entity);
            foreach($obj as $position=>$role)
            {
                switch ($role) {
                case 'add':
                    $rolesPermissions->setAdd(1);
                    break;
                case 'edit':
                    $rolesPermissions->setEdit(1);
                    break;
                case 'view':
                    $rolesPermissions->setView(1);
                    break;
                } 
                
            }
            if($rolesPermissions->getAdd()==null)
                $rolesPermissions->setAdd(0);
            if($rolesPermissions->getEdit()==null)
                $rolesPermissions->setEdit(0);
            if($rolesPermissions->getView()==null)
                $rolesPermissions->setView(0);
            $em->persist($rolesPermissions);
            $em->flush();
            $flag = 1;
            $em->clear();
        }
        $roles = $userService->getRoles();
        $session = $request->getSession();
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
        $actions = $userService->getActionsData();
        $permissionsData = $userService->getDefaultActionsData($role_id);
        $userRoles = array();
        $size = sizeof($permissionsData);
        for($i=0;$i<$size;$i++)
        {
           $userRoles[$permissionsData[$i]->getActions()->getId()]['add'] = (int)$permissionsData[$i]->getAdd();
           $userRoles[$permissionsData[$i]->getActions()->getId()]['edit'] = (int)$permissionsData[$i]->getEdit();
           $userRoles[$permissionsData[$i]->getActions()->getId()]['view'] = (int)$permissionsData[$i]->getView();
        }
        
       return $this->render('VlreleasesUserBundle:User:actions.html.twig', 
                array('userData' => $userData, 'actions' => $actions,
                'flag' => $flag,'permissionsData' => $permissionsData,
                    'userRoles' => $userRoles,'roleId' => $roleId,'roles' => $roles));
    }

    /*
     * get the role and permissions data using ajax call
     * 
     *  @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * @returns array to twig
     */
    public function ajaxRoleDataAction(Request $request)
    {
        $flag = 0;
        $session = $request->getSession();
        $roleId = $request->get('ajaxRole');
        $userService = $this->get('UserService');
        $roles = $userService->getRoles();
        $permissionsData = $userService->getDefaultActionsData($roleId);
        $userRoles = array();
        $size = sizeof($permissionsData);
        for($i=0;$i<$size;$i++)
        {
           $userRoles[$permissionsData[$i]->getActions()->getId()]['add'] = (int)$permissionsData[$i]->getAdd();
           $userRoles[$permissionsData[$i]->getActions()->getId()]['edit'] = (int)$permissionsData[$i]->getEdit();
           $userRoles[$permissionsData[$i]->getActions()->getId()]['view'] = (int)$permissionsData[$i]->getView();
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
        $actions = $userService->getActionsData();
         echo $template = $this->renderView('VlreleasesUserBundle:User:ajaxActions.html.twig',
                 array('userData' => $userData, 'actions' => $actions,
                'flag' => $flag,'permissionsData' => $permissionsData,
                    'userRoles' => $userRoles,'roleId' => $roleId,'roles' => $roles));
        exit;
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