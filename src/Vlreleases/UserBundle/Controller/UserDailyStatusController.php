<?php

namespace Vlreleases\UserBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Vlreleases\UserBundle\Entity\UserTask;

class UserDailyStatusController extends Controller 
{

    /**
     *
     * @var \Vlreleases\UserBundle\Services\UserService 
     */
    private $userService;

    /**
     * Get the users daily status report data.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * returns Json response
     */
    public function dailystatusAction(Request $request) 
    {
        $usertask_id = 0;
        $userDashBoardService = $this->get('UserDashBoardService');
        $session = $request->getSession();
        if ($request->request->get('userTaskId')) {
            $userDailyService = $this->get('UserDailyStatusService');
            $id = $request->request->get('userTaskId');
            $userTaskData = $userDailyService->getOneUserTask($id);
            $return = array();
            $return['projectName'] = $userTaskData->getProject()->getName();
            $return['projectId'] = $userTaskData->getProject()->getId();
            $return['activityId'] = $userTaskData->getActivity()->getId();
            $return['description'] = $userTaskData->getDescription();
            $return['duration'] = $this
                    ->convertToHours($userTaskData->getDuration());
            $response = new JsonResponse();
            $response->setData($return);

            return $response;
        }
        $userData['errorMessage'] = null;
        if ($request->isMethod('POST')) {
            if ($request->request->get('type') == 'ajax') {
                if ($request->request->get('selectedDate') > 0) {
                    $selectedDate = $request->request->get('selectedDate');
                    $selectedDate = new \DateTime($selectedDate);
                } else {
                    $selectedDate = new \DateTime();
                }
                $userData['userDailyStatusData'] = $this->getUserDailyStatusData($session->get('userId'), $selectedDate);
                $response = new JsonResponse();
                $return = array();
                $return['data'] = $this->renderView('VlreleasesUserBundle:User:userDailyStatusAjax.html.twig', array('userData' => $userData));
                $return['hideSaveOption'] = (bool) $userDashBoardService->isTaskEditable($selectedDate);
                if (!$return['hideSaveOption']) {
                    if (empty($userData['userDailyStatusData'])) {
                        $return['hideSubmitOption'] = true;
                    } else {
                        $return['hideSubmitOption'] = false;
                    }
                } else {
                    $return['hideSubmitOption'] = true;
                }
                $response->setData($return);

                return $response;
            }

            $projects = $request->request->get('project');
            $activities = $request->request->get('activity');
            $task = $request->request->get('task');
            $totalHours = $request->request->get('totalHours');
            $taskId = $request->request->get('taskId');
            $selectedDate = $request->request->get('selectedDate');
            if (new \DateTime($selectedDate) > new \DateTime()) {
                $userData['errorMessage'] = 'Date connot be in future';
            } else {
                if ($projects && $activities && $task && $totalHours) {
                    for ($i = 0; $i < count($projects); $i++) {
                        $dashBoardData = array('project' => $projects[$i],
                            'activity' => $activities[$i],
                            'task' => $task[$i],
                            'totalHours' => $totalHours[$i],
                            'selectedDate' => $selectedDate
                        );
                        $userTask = $userDashBoardService
                                ->prepareUserTask($dashBoardData, $taskId);
                        $usertask_id = $userDashBoardService
                                ->persistUserTask($userTask);
                    }
                }
            }
            $userData['userDailyStatusData'] = $this
                    ->getUserDailyStatusData($session->get('userId'), 
                            new \DateTime($selectedDate));
            $response = new JsonResponse();
            $return = array();
            $return['data'] = $this
            ->renderView('VlreleasesUserBundle:User:userDailyStatusAjax.html.twig',
                    array('userData' => $userData));
            $return['hideSaveOption'] = (bool) $userDashBoardService
                    ->isTaskEditable(new \DateTime($selectedDate));
            if (!$return['hideSaveOption']) {
                if (empty($userData['userDailyStatusData'])) {
                    $return['hideSubmitOption'] = true;
                } else {
                    $return['hideSubmitOption'] = false;
                }
            } else {
                $return['hideSubmitOption'] = true;
            }
            $response->setData($return);
            return $response;
        }

        $userActivityList = $userDashBoardService->findAllUserActivities();
        $userData['activities'] = $userActivityList;
        $userProjectsList = $userDashBoardService->getUserProjects();
        $userData['projects'] = $userProjectsList;
        $userData['userHoursByDay'] = $userDashBoardService->getUserHoursPerDate();
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
        if ($request->request->get('selectedDate') > 0 || $request->query
                ->get('selectedDate')) {
            $selectedDate = ($request->request->get('selectedDate')) ? $request
                    ->request->get('selectedDate') : $request
                    ->query->get('selectedDate');
            $selectedDate = new \DateTime($selectedDate);
        } else {
            $selectedDate = new \DateTime();
        }
        $userData['userDailyStatusData'] = $this
              ->getUserDailyStatusData($session->get('userId'), $selectedDate);


        if (empty($userData['userDailyStatusData'])) {
            $userData['hideSubmitOption'] = true;
        } else {
            $userData['hideSubmitOption'] = false;
        }
        $userData['hideSaveOption'] = (bool) $userDashBoardService
                ->isTaskEditable($selectedDate);
        
        return $this
                ->render('VlreleasesUserBundle:User:userDailyStatus.html.twig',
                        array('userData' => $userData,
                            '$usertask_id' => $usertask_id));
    }

    /**
     * Converts the seconds to minutes.
     * 
     * @param $time type bigint
     * 
     * returns integer variable
     */
    private function convertToMinutes($time) {
        $time = substr($time, 0, 5);
        $times = explode(':', $time);
        $mins = $times[1] + ($times[0] * 60);
        return $mins;
    }

    /**
     * Converts minutes to hours.
     * 
     * @param int $minutes 
     * 
     * returns integer variable
     */
    private function convertToHours($minutes) {
        $hours = floor($minutes / 60); //round down to nearest minute. 
        $minutes = $minutes % 60;
        $minutes = ($minutes < 10) ? "0" . $minutes : $minutes;
        return $hours . ':' . $minutes;
    }

    /**
     * Get the user daily status data.
     * 
     * @param int $minutes
     * 
     * returns array
     */
    private function getUserDailyStatusData($currentUser, $date)
    {
        $taskData = array();
        $criteria = array();
        $criteria['user'] = $currentUser;
        $criteria['date'] = $date;
        $UserDailyStatusService = $this->get('UserDailyStatusService');
        $userTasks = $UserDailyStatusService->getUserDailyStatusData($criteria);

        foreach ($userTasks as $userTask) {
            $taskData[] = array(
                'id' => $userTask->getId(),
                'project' => $userTask->getProject()->getName(),
                'activity' => $userTask->getActivity()->getName(),
                'description' => $userTask->getDescription(),
                'totalhours' => $this->convertToHours($userTask->getDuration()),
                'hourStatus' => ucfirst($userTask->getStatus())
            );
        }
        
        return$taskData;
    }

    /**
     * Persist the user status report data into database and change the status.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     */
    public function submitHoursAction(Request $request)
    {

        $UserDailyStatusService = $this->get('UserDailyStatusService');
        $session = $request->getSession();
	$currentUserEmail = $session->get('email');
        if ($request->query->get('selectedDate') > 0) {
            $selectedDate = $request->query->get('selectedDate');
            $selectedDate = new \DateTime($selectedDate);
        } else {
            $selectedDate = new \DateTime();
        }
        $status = $request->query->get('status');
        $userId = $session->get('userId');
        $UserDailyStatusService->ChangeTaskStatus($userId, $status, $selectedDate);
        $criteria = array();
        $criteria['user'] = $userId;
        $criteria['date'] = $selectedDate;
        $taskData = array();
        $getTaskData = $UserDailyStatusService->getUserDailyStatusData($criteria);
        foreach ($getTaskData as $userTask) {
            $taskData[] = array(
                'id' => $userTask->getId(),
                'project' => $userTask->getProject()->getName(),
                'activity' => $userTask->getActivity()->getName(),
                'description' => $userTask->getDescription(),
                'totalhours' => $this->convertToHours($userTask->getDuration()),
                'hourStatus' => ucfirst($userTask->getStatus())
            );
        }

        $ids = '';
        for ($i = 0; $i < sizeof($taskData); $i++) {
            $ids.= $taskData[$i]['id'] . ',';
        }

        $userService = $this->get('UserService');
        $resourceName = $userService->getResourceName($userId);
        $resourceEmail = $resourceName['0']['email'];
        $Email = $userService->getLead($userId);
	if($Email)
	{
		for($i=0;$i<sizeof($Email);$i++)
		{
			//send status report mail to the lead
        $message = \Swift_Message::newInstance()
                ->setSubject('Daily Status Report')
                ->setFrom($resourceEmail)
                ->setTo($Email[$i]['email'])
                ->setBody(
                $this->renderView(
              'VlreleasesUserBundle:MobileDevice:mailUserPendingTasks.html.twig', 
                        array('taskData' => $taskData, 
                            'selectedDate' => $selectedDate, 
                            'ids' => $ids,
                            'resourceEmail' => $resourceEmail)), 
                        "text/html");
        $this->get('mailer')->send($message);

		}
		$url = $this->generateUrl('vlreleases_user_dailystatus');
        	$url = $url . '?selectedDate=' . $request->query->get('selectedDate');

       		 return $this->redirect($url);
	}
	else
	{
		$message = \Swift_Message::newInstance()
                ->setSubject('NITI Daily Status Report Failure')
                ->setFrom('surendra.yallabandi@valuelabs.net')
                ->setTo($currentUserEmail)
                ->setBody(
		$this->renderView(
              'VlreleasesUserBundle:User:mailUserReport.html.twig', 
                        array('taskData' => $taskData, 
                            'selectedDate' => $selectedDate, 
                            'ids' => $ids,
                            'resourceEmail' => $resourceEmail)), 
                        "text/html");
        $this->get('mailer')->send($message);
	
        $url = $this->generateUrl('vlreleases_user_dailystatus');
        $url = $url . '?selectedDate=' . $request->query->get('selectedDate');

        return $this->redirect($url);

	}

    }

    /**
     * Deletes the task and its details.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     */
    public function deleteTaskAction(Request $request) 
    {
        $response = new JsonResponse();
        $id = $request->request->get('userTaskId');
        $userDailyService = $this->get('UserDailyStatusService');
        $return = array('status' => $userDailyService->deleteTask($id));
        $response->setData($return);

        return $response;
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
