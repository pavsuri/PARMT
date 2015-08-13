<?php
namespace Vlreleases\UserBundle\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Vlreleases\UserBundle\Form\UploadFileForm;
use Vlreleases\UserBundle\Entity\HolidaysList;
use Vlreleases\UserBundle\Entity\GroupEmails;
use Vlreleases\UserBundle\Entity\GroupmailUsers;
use Doctrine\ORM\EntityManager;

class GroupMailsController extends Controller 
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
     * @var \Vlreleases\UserBundle\Services\GroupMailsService 
     */
    private $groupMailsService;
    
    /*
     * default action for upload file page
     */
    public function indexAction(Request $request)
    { 
        $screenName = 'group mails';
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
        $roleId = $session->get('userRole');       
        $em = $this->getDoctrine()->getManager();
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));
        $groupMailsList = $this->get('GroupMailsService')->getGruopMailsData();        
        
        return $this->render('VlreleasesUserBundle:User:groupMails.html.twig', 
               array('groupMailsList' =>$groupMailsList,
                    'userData' => $userData,
                    'userType' => $session->get('userType'),
                    'userName' => $session->get('userName')));  

    }
     
    /*get the holiday details through ajax call
     *@return the result through ajax 
     */
    public function getMailMembersAction(Request $request)
    {  
        $id = $request->get('userId');
        $groupmailMembersData = $this->get('GroupMailsService')->getGroupMembers($id);
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
        
        return $this->render('VlreleasesUserBundle:User:displaygroupmailDetails.html.twig', 
               array('groupmailMembersData' =>$groupmailMembersData,
                    'userData' => $userData,
                    'userType' => $session->get('userType'),
                    'userName' => $session->get('userName')));        
    }

    //register grop members and its email id through ajax
    public function registerGroupMailAction(Request $request)
    {
        $successFlag = 0;
        $screenName = 'group mails';
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $roleId = $session->get('userRole');               
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));        
        $uId = $session->get('userId');        
        $mails = $request->get('mailsArray');     
        $email = $request->get('gEmail');
        $flag = $em->getRepository('VlreleasesUserBundle:GroupEmails')
                ->findOneBy(array("groupEmail" => $email));
        if($flag == null)
        {           
            $gEmails = new GroupEmails();
            $gEmails->setGroupEmail($request->get('gEmail'));
            $gEmails->setCreatedBy($uId);        
            $dbGid = $this->get('GroupMailsService')->save($gEmails);        
            $grp = $em->getRepository('VlreleasesUserBundle:GroupEmails')
            ->findOneBy(array("id" => $dbGid));
            if($dbGid)
            {
                for($i=0;$i<count($mails);$i++)
                {
                    $gEmailUsers = new GroupmailUsers();
                    $gEmailUsers->setGroup($grp);
                    $user = $em->getRepository('VlreleasesUserBundle:User')
                    ->findOneBy(array("email" => $mails[$i]));               
                    $gEmailUsers->setUserId($user);
                    $em->persist($gEmailUsers);                     
                }               
                $em->flush();                
            }
            $successFlag = 1;
            $groupMailsList = $this->get('GroupMailsService')->getGruopMailsData();

            echo $successFlag.'+'.$template = $this->renderView('VlreleasesUserBundle:User:displaygroupmailsList.html.twig',
                        array('groupMailsList' => $groupMailsList,'userData' => $userData));        

            exit;
        }
        else {
            $successFlag = 0;
                $groupMailsList = $this->get('GroupMailsService')->getGruopMailsData();
                echo $successFlag.'+'.$template = $this->renderView('VlreleasesUserBundle:User:displaygroupmailsList.html.twig',
                        array('groupMailsList' => $groupMailsList,'userData' => $userData));  
                exit;
            }
    }
   
    //edit group email
    public function editGroupEmailAction(Request $request)
    {       
        $gId = $request->get('grpId');
        $groupmailMembersData = $this->get('GroupMailsService')->getGroupMembers($gId);         
        $groupmailMembers = json_encode($groupmailMembersData);
        echo $groupmailMembers;exit;
    }

    //updating edited email group in the db
    public function updateGroupMailAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $screenName = 'group mails';
        $session = $request->getSession();        
        $roleId = $session->get('userRole');               
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId()));     
        $mails = $request->get('mailsArray');     
        $email = $request->get('gEmail');
        $grp = $em->getRepository('VlreleasesUserBundle:GroupEmails')
            ->findOneBy(array("groupEmail" => $email));
        $gId = $grp->getId();
        $this->get('GroupMailsService')->deleteGruopMailUsers($gId);
        for($i=0;$i<count($mails);$i++)
            {
                $gEmailUsers = new GroupmailUsers();
                $gEmailUsers->setGroup($grp);
                $user = $em->getRepository('VlreleasesUserBundle:User')
                ->findOneBy(array("email" => $mails[$i]));               
                $gEmailUsers->setUserId($user);
                $em->persist($gEmailUsers);             
            }               
            $em->flush();  
        $groupMailsList = $this->get('GroupMailsService')->getGruopMailsData();
        echo $template = $this->renderView('VlreleasesUserBundle:User:displaygroupmailsList.html.twig',
                        array('groupMailsList' => $groupMailsList,'userData' => $userData));        

            exit;
    }

    //get the groupemail id through ajax to delete the group
    public function deleteGroupAction(Request $request)
    {
        $screenName = 'group mails';
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();        
        $roleId = $session->get('userRole');               
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId())); 
        $gId = $request->get('grpId'); 
        $this->get('GroupMailsService')->deleteGroup($gId);                 
        $groupMailsList = $this->get('GroupMailsService')->getGruopMailsData();  
        echo $template = $this->renderView('VlreleasesUserBundle:User:displaygroupmailsList.html.twig',
                array('groupMailsList' => $groupMailsList,'userData' => $userData));  
        exit;         
        
        
    }
    
    //will send test mail to the group members
    public function testMailAction(Request $request)
    {
        $screenName = 'group mails';
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();        
        $roleId = $session->get('userRole');               
        $action_entity= $em->getRepository('VlreleasesUserBundle:Actions')
                ->findOneBy(array("screenName" => $screenName));
        $userData['rolePermission']  = $em->getRepository('VlreleasesUserBundle:RolesPermissions')
                ->findOneBy(array("role" => $roleId,'actions' =>$action_entity->getId())); 
        $id = $request->get('userId');
        $groupmailMembersData = $this->get('GroupMailsService')->getGroupMembers($id);
        $message1 = "This is test mail of NITI group email,Please ignore the mail";
        for($i=0;$i<count($groupmailMembersData);$i++)
        {
            $toEmail = $groupmailMembersData[$i]['email'];
            $message = \Swift_Message::newInstance()
                ->setSubject('NITI Test Mail')
                ->setFrom('keerthi.gunda@valuelabs.net')
                ->setTo($toEmail)
                ->setBody($message1)
                ->setContentType("text/html");
        $this->get('mailer')->send($message);
        }
        $userData['testmail'] = 1;              	
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
        $groupMailsList = $this->get('GroupMailsService')->getGruopMailsData();        
        
        return $this->render('VlreleasesUserBundle:User:groupMails.html.twig', 
               array('groupMailsList' =>$groupMailsList,
                    'userData' => $userData,
                    'userType' => $session->get('userType'),
                    'userName' => $session->get('userName')));  
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
    
    /**
     * Retuns the GroupMail Service.
     * 
     * @return \Vlreleases\UserBundle\Services\GroupMailService
     */
    private function getGroupMailsService()
    {
        if (!$this->groupMailsService) {
            $this->groupMailsService = $this->get('GroupMailsService');
        }
        return $this->groupMailsService;
    }
    
  
    
}
