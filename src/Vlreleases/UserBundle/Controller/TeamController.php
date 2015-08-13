<?php

namespace Vlreleases\UserBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Vlreleases\UserBundle\Entity\Team;
use Doctrine\ORM\EntityManager;
use Vlreleases\UserBundle\Services\UserService;

class TeamController extends Controller
{
    /**
     *
     * @var type string
     */
    private $screenName;
    
     /**
     * @var \Vlreleases\UserBundle\Services\UserService 
     */
    private $userService;

    /**
     * Get the total teamlist details.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * @return type array
     * 
     */
    public function indexAction(Request $request) 
    {
        $screenName = 'team';
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
        $teams = $userService->getTeamData();
	$roleId = $session->get('userRole');
        $userRolesPermissions = $userService->findUserPermissions($roleId);
        $em = $this->getDoctrine()->getManager();
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));
        
        return $this->render('VlreleasesUserBundle:User:teamsList.html.twig', 
                array('userData' => $userData, 'teams' => $teams));
    }

    /**
     * Edit team name and persists in doctrine.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     *  
     */
    public function editTeamAction(Request $request) 
    {
        $screenName = 'team';
        $teamname = $request->get('tname');
        if($request->get('status')=="active")
            $status = '1';
        else
            $status = '0';
        $id = $request->get('tid');
        $em = $this->getDoctrine()->getManager();
        $userService = $this->get('UserService');
        
        $team = new Team();

        
            if ($id) {
                $resultupdate = $userService->updateTeam($teamname, $id, $status);
                if (empty($resultupdate)) {
                    $session = $request->getSession();
                    $userData['userName'] = $session->get('userName');
                    $user = $this->getUserService()
                            ->findOneById($session->get('userId'));
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
		    $roleId = $session->get('userRole');
        	    $userRolesPermissions = $userService->findUserPermissions($roleId);
       		    $em = $this->getDoctrine()->getManager();
        	    $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                            ->findOneBy(array("screenName" => $screenName));
                    $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                        ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));
              
                    $teams = $userService->getTeamData();
                    echo $template = $this->renderView('VlreleasesUserBundle:User:teamsList1.html.twig', array('userData' => $userData, 'teams' => $teams));
                }
            } 
            else {
                $teamStatus = $em->getRepository('VlreleasesUserBundle:Team')
                ->findOneBy(array("tname" => $teamname));
                if (empty($teamStatus)) {
                    $team->setTname($teamname);
                    $team->setStatus($status);
                    $result = $userService->save($team);

                    if (!empty($result)) {

                        $session = $request->getSession();
                        $userData['userName'] = $session->get('userName');
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
			$roleId = $session->get('userRole');
        		$userRolesPermissions = $userService->findUserPermissions($roleId);
        		$em = $this->getDoctrine()->getManager();
        		$action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                            ->findOneBy(array("screenName" => $screenName));
                        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                            ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));
                        $teams = $userService->getTeamData();
                        echo $template = $this->renderView('VlreleasesUserBundle:User:teamsList1.html.twig', array('userData' => $userData, 'teams' => $teams));
                    }
                }
            }
         
        exit;
    }

    /**
     * Get the team name corresponding to team_id for editing.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     *  
     */
    public function getTeamAction(Request $request) 
    {
        $data = '';
        $teamNumber = $request->get('teamid');
        $userService = $this->get('UserService');
        $teamname = $userService->getTeamName($teamNumber);
        if (!empty($teamname)) {
            $data = $teamname['0']['tname'];
            if($teamname['0']['status'] == '1')
                $data .= "^active";
            else 
                $data .= "^inactive";
            echo $data;
            exit;
        }
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
