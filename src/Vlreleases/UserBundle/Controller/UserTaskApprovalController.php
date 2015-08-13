<?php

namespace Vlreleases\UserBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Vlreleases\UserBundle\Entity\UserTask;

class userTaskApprovalController extends Controller {

    /**
     *
     * @var \Vlreleases\UserBundle\Services\UserService 
     */
    private $userService;

     /**
     * Get the daily status reports data and send the details to pending form/approval depends on the status.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * returns array
     */
    public function taskApprovalAction(Request $request) 
    {
        $form = $this->createForm('usertaskapprovalform');
        $session = $request->getSession();
        $userType = $session->get('userType');
        $task_id = array();

        //Added to redirect the user to the appropriate dashboard accordign to the user type
        switch ($userType) {
            case 9:
                break;
            case 4:
                return $this->redirect($this->generateUrl('vlreleases_user_manager'));
                break;
            default:
                return $this->redirect($this->generateUrl('vlreleases_user_homepage'));
                break;
        }
        $userService = $this->get('UserService');
        $userData['projects'] = $userService->getProjects();
        $userData['userName'] = $session->get('userName');
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
        $UserDashboardService = $this->get('UserDashBoardService');

        if ($request->isMethod('POST')) {
            $form->bind($request);
            $projectId = $form->get('projects')->getData();
            $resourceId = $form->get('resources')->getData();
            $startDate = $form->get('startdate')->getData();
            $endDate = $form->get('enddate')->getData();
            if (array_key_exists('resources', $_POST['usertaskapprovalform'])) {
                $resourceId = $_POST['usertaskapprovalform']['resources'];
            }
            if ($projectId && $resourceId) {
                $pendingTasks = $UserDashboardService
                        ->getUserTasksPerProject($resourceId, $projectId, 
                                $startDate, $endDate);
                $userData['pendingApprovals'] = $this
                        ->convertPendingTasksData($pendingTasks);
                for ($i = 0; $i < sizeof($userData['pendingApprovals']); $i++) {
                    $task_id[$i] = $userData['pendingApprovals'][$i]['id'];
                }

                return $this
                ->render('VlreleasesUserBundle:User:userPendingTasks.html.twig', 
                        array('userData' => $userData, 
                            'form' => $form->createView()));
            } 
            else {
                return $this
                ->render('VlreleasesUserBundle:User:approvalForm.html.twig',
                        array('userData' => $userData, 
                            'form' => $form->createView()));
            }
        }

        return $this
                ->render('VlreleasesUserBundle:User:userTaskApproval.html.twig', 
                        array('userData' => $userData,
                            'form' => $form->createView()));
    }

     /**
     * Get the status report data and filter the pending reports data.
     * 
     * @param array $pendingTasks
     * 
     * returns array
     */
    private function convertPendingTasksData($pendingTasks)
    {
        $taskData = array();
        foreach ($pendingTasks as $task) {
            $taskData[] = array(
                'id' => $task['id'],
                'date' => $task['date']->format('Y-m-d'),
                'description' => $task['description'],
                'duration' => $this->convertToHours($task['duration']),
                'status' => ucfirst($task['status'])
            );
        }
        
        return $taskData;
    }

    /**
     * Converts minutes to hours.
     * 
     * @param int $minutes 
     * 
     * returns integer variable
     */
    private function convertToHours($minutes)
    {
        $hours = floor($minutes / 60); //round down to nearest minute. 
        $minutes = $minutes % 60;
        $minutes = ($minutes < 10) ? "0" . $minutes : $minutes;
        
        return $hours . ':' . $minutes;
    }
    
    /**
     * Will send status of daily status report mail to the employee.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
    */
    public function emailUpdateApprovalsAction(Request $request) 
    {
        $UserDashboardService = $this->get('UserDashBoardService');
        $status = $_GET['value'];
        $ids = $_GET['task_id'];
        $idValues = array();
        $idValues = explode(",", $ids);
        $toEmail = $_GET['resourceEmail'];

        if ($status == 'Approve') {
            $flag = $UserDashboardService->updateUserTaskEmail($idValues,$status);
            if ($flag) {
                $message1 = "Your Status report has been accepted";
            }
        } else {
            $flag = $UserDashboardService->updateUserTaskEmail($idValues,$status);
            if ($flag){
                $message1 = "Your Status report has been rejected."
                    . "Please contact your team lead for other details";
            }           
        }
        
        $message = \Swift_Message::newInstance()
                ->setSubject('NITI Daily Status Report Status')
                ->setFrom('surendra.yallabandi@valuelabs.net')
                ->setTo($toEmail)
                ->setBody($message1)
                ->setContentType("text/html");
        $this->get('mailer')->send($message);

        return $this
           ->render('VlreleasesUserBundle:User:registrationComplete.html.twig');
    }

    /**
     * Get the status report data and filters the reports that 
     * needs approval to the approval form.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
    */
    public function updateApprovalsAction(Request $request) 
    {
        $form = $this->createForm('usertaskapprovalform');
        $session = $request->getSession();
        $userType = $session->get('userType');

        //Added to redirect the user to the appropriate dashboard accordign to the user type
        switch ($userType) {
            case 9:
                break;
            case 4:
                return $this->redirect($this->generateUrl('vlreleases_user_manager'));
                break;
            default:
                return $this->redirect($this->generateUrl('vlreleases_user_homepage'));
                break;
        }
        $userService = $this->get('UserService');
        $userData['projects'] = $userService->getProjects();
        $userData['userName'] = $session->get('userName');
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
        $UserDashboardService = $this->get('UserDashBoardService');
        if ($request->isMethod('POST')) {
            $allApprovals = $request->request->get('approvals');
            $status = $request->request->get('status');
            $projectId = $request->request->get('projectId');
            $resourceId = $request->request->get('resourceId');
            $UserDashboardService->updateApprovals($allApprovals, $status);

            if ($projectId && $resourceId) {

                $pendingTasks = $UserDashboardService
                        ->getUserTasksPerProject($resourceId, $projectId);
                $userData['pendingApprovals'] = $this
                        ->convertPendingTasksData($pendingTasks);

                return $this
                ->render('VlreleasesUserBundle:User:userPendingTasks.html.twig',
                        array('userData' => $userData));
            } 
            else {
                
                return $this
                    ->render('VlreleasesUserBundle:User:approvalForm.html.twig',
                            array('userData' => $userData));
            }
        }
    }

    /**
     * Will send resources,usertasks corresponding to project to lead dashboard.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
    */    
    public function getResourcesTasksAction(Request $request)
    {
        $projectId = $request->request->get('projects');
        $resourceId = $request->request->get('resources');
        $session = $request->getSession();
        $userService = $this->get('UserService');
        $userService = $this->get('UserTaskRepository');
        $userData['projects'] = $userService->getProjects();
        $userData['resources'] = $userService->getResourcesPerProject($projectId);
        $userData['pendingApprovals'] = $userService
                ->getUserTasksPerProject($resourceId, $projectId);

        $userData['userName'] = $session->get('userName');
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
        if ($request->isMethod('POST')) {
            $response = new JsonResponse();
            $response->setData($userData);
            return $response;
        }

        return $this->render('VlreleasesUserBundle:User:leadDashboard.html.twig',
                array('form' => $form->createView(), 'userData' => $userData));
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
