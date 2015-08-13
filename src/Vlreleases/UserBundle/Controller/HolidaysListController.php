<?php
namespace Vlreleases\UserBundle\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Vlreleases\UserBundle\Form\UploadFileForm;
use Vlreleases\UserBundle\Entity\HolidaysList;
use Doctrine\ORM\EntityManager;

class HolidaysListController extends Controller 
{
    /**
     * @var \Vlreleases\UserBundle\Services\UserService 
     */
    private $userService;
    
    /**
     *
     * @var type string
     */
     private $screenName;
     
    /*
     * default action for upload file controller
     */
    public function indexAction(Request $request)
    { 
        $screenName = 'holiday list';
        $flag = 0;
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
        $holidaysData = $this->getUserService()->getHolidaysData();
        $roleId = $session->get('userRole');
        $em = $this->getDoctrine()->getManager();
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));
        
        return $this->render('VlreleasesUserBundle:User:holidaysList.html.twig', 
               array('holidaysData' => $holidaysData,
                    'userData' => $userData,'flag' => $flag,
                    'userType' => $session->get('userType'),
                    'userName' => $session->get('userName')));  

    }
     
    /*get the holiday details through ajax call
     *@return the result through ajax 
     */
    public function registerHolidayAction(Request $request)
    {
        $save = 0;
        $screenName = 'holiday list';
        $session = $request->getSession();
        $dayName = $request->get('hname');
        $dayDate = $request->get('hdate');
        $hId = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $roleId = $session->get('userRole');       
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));
        
        if($hId) {
            $this->getUserService()->deleteHolidaysData($hId);
            $save = 1;
        }
        else {
            $entityLog = $em->getRepository('VlreleasesUserBundle:HolidaysList')
                    ->findOneBy(array("holidayName" => $dayName));
            if (empty($entityLog)) {  
                $save = 1;
                
            } else {
                $save = 0;                
            }   
        }
        
        if( $save == 1)
        {
            $holidaysObj = new HolidaysList();
            $holidaysObj->setHolidayName($dayName);
            $holidaysObj->setHolidayDate($dayDate);        
            $resultFlag = $this->getUserService()->save($holidaysObj);
            if($resultFlag)
            {
                $holidaysData = $this->getUserService()->getHolidaysData();            
                echo $template = $this->renderView('VlreleasesUserBundle:User:displayHolidaysList.html.twig',
                    array('holidaysData' => $holidaysData,'userData' => $userData ));        
                exit;
            }
        } else {
            echo "failed";exit;
        }
        
    }

    /*
     * get the id of holiday through ajax
     * returns array of updated holiday list through ajax
     */
    public function deleteHolidayAction(Request $request)
    {
        $screenName = 'holiday list';
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();
        $roleId = $session->get('userRole');       
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));       
        $id = $request->get('hid');
        $holidaysData = $this->getUserService()->deleteHolidaysData($id);
        
        echo $template = $this->renderView('VlreleasesUserBundle:User:displayHolidaysList.html.twig',
                    array('holidaysData' => $holidaysData,'userData' => $userData ));  
        exit;
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
