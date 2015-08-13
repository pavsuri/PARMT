<?php

namespace Vlreleases\UserBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Vlreleases\UserBundle\Entity\Team;
use Doctrine\ORM\EntityManager;
use Vlreleases\UserBundle\Services\UserService;

class ResumeController extends Controller
{
    
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
        $resumeData = '';
        $userData['testmail'] = 0;
        $session = $request->getSession();
        $userService = $this->get('UserService');	
        $user = $this->getUserService()->findOneById($session->get('userId'));
        $userData['userName'] = $session->get('userName');
        $userData['userType'] = $session->get('userType');
        $userData['userRole'] = $session->get('userRole');
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
          $em = $this->getDoctrine()->getManager();
          $teamsData = $this->get('ResumeService')->getTeamsData();          
        
        return $this->render('VlreleasesUserBundle:User:resumeBuilder.html.twig', 
               array('teamsData' => $teamsData,'resumeData' => $resumeData,
                    'userData' => $userData,
                    'userType' => $session->get('userType'),
                    'userName' => $session->get('userName')));         
    }

    //get the users corressponding to a team
    public function getUsersOfTeamAction(Request $request)
    {       
        $tId = $request->get('team');       
        $users = $this->get('ResumeService')->getTeamUsers($tId);
        $usersData = json_encode($users);         
        echo $usersData;exit;
    }

    //get the user-id and from ajax call and builds resume here
    public function buildResumeAction(Request $request)
            
    {
        $id = $request->get('uId');     
        $resumeData = $this->get('ResumeService')->getUSerDetails($id);   
        //var_dump($resumeData->getProjects()->getName());exit;
        echo $template = $this->renderView('VlreleasesUserBundle:User:userResume.html.twig',
                        array('resumeData' => $resumeData ));        

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
    /**
     * Retuns the ResumeService
     * 
     * @return \Vlreleases\UserBundle\Services\ResumeService
     */
    private function getResumeService() {
        if (!$this->resumeService) {
            $this->resumeService = $this->get('ResumeService');
        }

        return $this->resumeService;
    }

}
