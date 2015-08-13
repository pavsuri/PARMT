<?php

namespace Vlreleases\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller 
{
     /**
     *
     * @var \Vlreleases\UserBundle\Services\UserService 
     */
    private $userService;
    
    /**
     * Display the default dashboard
     * 
     * @param Request $request
     * 
     * @return type array
     */
    public function dashboardAction(Request $request) 
    {

        $form = $this->createForm('userdashboardform');
        $session = $request->getSession();
        $userDashBoardService = $this->get('UserDashBoardService');
        $userActivityList = $userDashBoardService->findAllUserActivities();
        $userData['activities'] = $userActivityList;
        $userProjectsList = $userDashBoardService->getUserProjects();
        $userData['projects'] = $userProjectsList;
        $userData['userHoursByDay'] = $userDashBoardService
                                            ->getUserHoursPerDate();
        $userData['userName'] = $session->get('userName');
        $userData['userType'] = $session->get('userType');
        $userData['userRole'] = $session->get('userRole');
        $userData['personalProfile'] = $session->get('personalProfile');
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
        $userData['hideSaveOption'] = (bool) $userDashBoardService
                ->isTaskEditable(new \DateTime());
        
        if ($request->isMethod('POST')) {
            $form->bind($request);
            $dashBoardDat =array('project' => $form->get('projects')->getData(),
                'activity' => $form->get('activities')->getData(),
                'task' => $form->get('task')->getData(),
                'totalHours' => $form->get('totalHours')->getData());

            if ($dashBoardData['project'] > 0 &&
                    $dashBoardData['activity'] > 0 &&
                    $session->get('userId') > 0 &&
                    strlen($dashBoardData['task']) > 0) {
                $userTask = $userDashBoardService
                        ->prepareUserTask($dashBoardData);
                $userDashBoardService->persistUserTask($userTask);
            }
            
            return $this
                    ->redirect($this->generateUrl('vlreleases_user_homepage'));
        }

        return $this
                ->render('VlreleasesUserBundle:User:dashboard.html.twig', 
                        array('form' => $form->createView(), 
                            'userData' => $userData));
    }
    
    /**
     * Get memus - Makes search bar work.
     */
    public function getMenusAction() {
        $menusData = array();
        $systemTableService = $this->get('SystemTableService');
        $menus = $systemTableService->getMenus();
        foreach ($menus as $menu) {
            $menusData[] = array('id' => $menu->getId(), 'name' => $menu->getName());
        }

        $response = new JsonResponse();
        $response->setData($menusData);

        return $response;
    }

    /**
     * Retuns the Mobile Device Service.
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
