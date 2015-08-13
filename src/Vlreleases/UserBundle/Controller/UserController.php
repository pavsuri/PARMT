<?php

namespace Vlreleases\UserBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Vlreleases\UserBundle\Form\LoginForm;
use Vlreleases\UserBundle\Form\UserDashBoardForm;
use Vlreleases\UserBundle\Form\SearchUserForm;
use Vlreleases\UserBundle\Form\SearchReporterForm;
use Vlreleases\UserBundle\Form\UserProfile\PersonalDetailsForm;
use Vlreleases\UserBundle\Form\UserProfile\WorkDetailsForm;
use Vlreleases\UserBundle\Entity\Registration;
use Vlreleases\UserBundle\Entity\RolesPermissions;
use Vlreleases\UserBundle\Entity\UserPersonalProfile;
use Vlreleases\UserBundle\Entity\UserWorkProfile;
use Vlreleases\UserBundle\Entity\User;
use Vlreleases\UserBundle\Entity\Type;
use Doctrine\ORM\EntityManager;


class UserController extends Controller
{
     /**
     * @var \Vlreleases\UserBundle\Services\UserService 
     */
    private $userService;
    
    /**
     * @var type boolean 
     */
    private $flag1;
    
    /**
     * @var \Vlreleases\UserBundle\Services\TypeService 
     */
    private $typeService;

    /**
     * performs the server side login validations and enters to a screen 
     * corresponding to type of user.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * @return type array
     * 
     */
    public function loginAction(Request $request) {
        $flag1 = '0';
        $error = array('message' => '');
        $form = $this->createForm(new LoginForm());
        if ($request->isMethod('POST')) {
            $session = $request->getSession();
            $em = $this->getDoctrine()->getManager();
            $form->bind($request);
            $email = $form->get('email')->getData();
            $password = $form->get('password')->getData();
            $userService = $this->get('UserService');
            $currentUser = $userService->isValidUser($email, $password);
            //Checking if the user instance is created
            
            if ($currentUser instanceof \Vlreleases\UserBundle\Entity\User) {
                $session->set('email', $email);
                $session->set('userId', $currentUser->getId());
                $session->set('userName', ucfirst($currentUser->getUserName()));
                $session->set('userType', $currentUser->getType()->getId());
                $session->set('userRole', $currentUser->getRole()->getId());
                
                //Added to redirect the user to the appropriate 
                //dashboard accordign to the user type
                switch ($currentUser->getType()->getId()) {

                    case 9:
                        return $this
                        ->redirect($this->generateUrl('vlreleases_user_lead'));
                        break;
                    case 4:
                        return $this
                        ->redirect($this
                                ->generateUrl('vlreleases_user_manager'));
                        break;
                    default:
                        return $this
                        ->redirect($this
                                ->generateUrl('vlreleases_user_homepage'));
                        break;
                }
            }
            else {
                $error = array('message' => 'Invalid Login Credentials');
            }
        }
        
        return $this->render('VlreleasesUserBundle:User:login.html.twig', 
                array(
                    'form' => $form->createView(), 
                    'error' => $error, 
                    'flag1' => $flag1));
    }

     /**
     * Ends the session and enters to a logout screen 
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     */ 
    
    public function logoutAction(Request $request)
    {
        $request->getSession()->invalidate();
        
        return $this->redirect($this->generateUrl('vlreleases_user_login'));
    }

    /**
     * Navigate to a user registration screen 
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     */ 
    public function registerAction(Request $request)
    {
         return $this->render('VlreleasesUserBundle:User:registration.html.twig');
    }

     /**
     * Register a new user 
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     */ 
    public function getRegisterDataAction(Request $request)
    {
        $files = $request->files;
        $folderPath = getcwd() . '/userPhotos';
        $userFiles = $files->get('userfile');
        $filename = $userFiles->getClientOriginalName();
        $profilePic = time() . "-" . $filename;

        $flag = 0;
        if ($request->getMethod() == 'POST') {
            $data = $request->request->all();
            $fromEmail = $data['email'];
        }
        $pswd = md5($data['password']);
        $registration = new Registration();
        $registration->setName($data['name']);
        $registration->setEmpId($data['empId']);
        $registration->setPassword($pswd);
        $registration->setEmail($data['email']);
        $registration->setDob($data['dob']);
        $registration->setMobile($data['mobile']);
        $registration->setGender($data['gender']);
        $registration->setDoj($data['doj']);
        if ($registration->setImage($profilePic)) {
            $proImg = $request->files->get('userfile');
            if ($userFiles->getClientOriginalName() != "") {
                $proImg->move($folderPath, $profilePic);
            }
        }

        $userService = $this->get('UserService');
        $check = $userService->save($registration);
        if ($fromEmail && $check) {
            $this->emailRegister($data, $profilePic, $fromEmail);
            $flag = 1;
        }

        return $this
       ->render('VlreleasesUserBundle:User:registrationSuccessFailure.html.twig', 
               array('flag' => $flag));
    }

    /**
     * Will send user registration details mail to the admin for approval
     * 
     * */
    public function emailRegister($data, $profilePic, $fromEmail) {
        $path = 'http://niti.stg.valuelabs.com/Vl-releases2/web/userPhotos/'.$profilePic;
         $message = \Swift_Message::newInstance();
        $data['image_src'] = $message->embed(\Swift_Image::fromPath($path));
       
                $message->setSubject('User Registration Details')
                ->setFrom($fromEmail)
                ->setTo('keerthi.gunda@valuelabs.net')
                ->setBody(
                $this->renderView(
                        'VlreleasesUserBundle:MobileDevice:mailUserRegistration.html.twig', array('data' => $data, 'path' => $path)
                ), "text/html"
        );
        $this->get('mailer')->send($message);
    }

    /**
     * Get the status of new employee registration by admin. 
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     */ 
    public function registerStatusAction(Request $request) {

        $action = $_GET['action'];
        $toEmail = $_GET['mail'];
        if ($toEmail && $action)
            $this->emailApproveReject($toEmail, $action);
        return $this->render('VlreleasesUserBundle:User:registrationComplete.html.twig');
    }

    /**
     * Sends email regarding registration status by admin to the corresponding user. 
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     */
    public function emailApproveReject($toEmail, $action) {

        if ($action == "approve") {
            
            $userService = $this->get('UserService');
            $data = $userService->getData($toEmail);
            $em = $this->getDoctrine()->getManager();
            $role_entity = $em->getRepository('VlreleasesUserBundle:Role')
                ->findOneBy(array("id" => '1'));
            $user = new User();
            $user->setUserName($data['0']->name);
            $user->setPassword($data['0']->password);
            $user->setEmpId($data['0']->empId);
            $user->setEmail($data['0']->email);
            $user->setStatus('1');
            $user->setRole($role_entity);
            $typeService = $this->getTypeService();
            $type = $typeService->getType(1);
            if ($type instanceof Type) {
                $user->setType($type);
            }
            $userId = $userService->save($user);
            
            if ($userId) {
             $message1 = "Your registration request for NITI has been accepted and You can login now";
            }
        }
        else if ($action == "reject") {
            
            $message1 = "Your registration request for NITI was rejected.";
        }

        $message = \Swift_Message::newInstance()
                ->setSubject('NITI Registration Status')
                ->setFrom('surendra.yallabandi@valuelabs.net')
                ->setTo($toEmail)
                ->setBody($message1)
                ->setContentType("text/html");
        $this->get('mailer')->send($message);
    }

    /**
     * Navigates to forgot password screen. 
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     */
    public function forgotPasswordAction(Request $request) {

        return $this->render('VlreleasesUserBundle:User:forgotPassword.html.twig');
    }

    /**
     * Generate a new password and persist the password in database. 
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     */
    public function forgotPasswordGenerationAction(Request $request) {
        $error['message'] = '';
        $form = $this->createForm(new LoginForm());
        $flag1 = '0';
        if ($request->getMethod() == 'POST') {
            $data = $request->request->all();
            $fromEmail = $data['email'];
        }
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $pwd = '';
        for ($i = 0; $i < 5; $i++) {
            $pwd.= $characters[rand(0, strlen($characters) - 1)];
        }
        if ($fromEmail) {
            $this->emailForgotPassword($pwd, $fromEmail);
            $flag1 = '1';
        }
        $value = md5($pwd);
        $userService = $this->get('UserService');
        $pwdStatus = $userService->updatePassword($fromEmail, $value);

        return $this->render('VlreleasesUserBundle:User:login.html.twig', array(
                    'form' => $form->createView(), 'error' => $error,
            'flag1' => $flag1));
    }

    /**
     * Will send user new password 
     * 
     * */
    public function emailForgotPassword($pwd, $fromEmail) {

        $message = \Swift_Message::newInstance()
                ->setSubject('User Registration Details')
                ->setFrom('keerthi.gunda@valuelabs.net')
                ->setTo($fromEmail)
                ->setBody(
                $this->renderView(
                        'VlreleasesUserBundle:MobileDevice:mailForgotPassword.html.twig', array('pwd' => $pwd, 'fromEmail' => $fromEmail)
                ), "text/html"
        );
        $this->get('mailer')->send($message);
    }

    /*
     * get the reset password details
     */
    public function resetPasswordAction(Request $request)
    {
         $email = $request->get('uId');
         $pswd = $request->get('pwd');
         $pwd = md5($pswd);
         $cpswd = $request->get('cpwd');
         $userService = $this->get('UserService');
        $pwdStatus = $userService->updatePassword($email, $pwd);
        if($pwdStatus == '1'){
            echo "Password updated successfully";exit;
        }
        else {
            echo "password reset failed";exit;
        }
        
    }

    /*
     * get userId to fetch user details from db
     */
    public function displayProfileAction(Request $request)
    {
        $userDetails = array();
        $session = $request->getSession();
        $id = $request->get('userId');
        $userId = $session->get('userId');
        $userProfileService = $this->get('UserProfileService');
        $userData['userName'] = $session->get('userName');
        $userData['userType'] = $session->get('userType');
        $userData['emailId'] = $session->get('email');
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
        if($id == $userId)
        {
            //Personal details
            $userPersonalProfile = $user->getPersonalProfile();
            $userPersonalProfileForm = $this
                    ->createForm(new PersonalDetailsForm(), $userPersonalProfile);
             //Project Details
            $userProjects = $userProfileService->getUserProjects();
            //Work details
            $userWorkProfile = $user->getWorkProfile();
            $userWorkProfileForm = $this
                    ->createForm(new WorkDetailsForm(), $userWorkProfile);
            //Skill Details
            $userSkills = $userProfileService->getUserSkills();
            return $this->render('VlreleasesUserBundle:UserProfile:profile.html.twig',
                array(
                    'form' => $userPersonalProfileForm->createView(),
                    'userProjects' => $userProjects,
                    'userWorkProfileForm' => $userWorkProfileForm->createView(),
                    'userSkills' => $userSkills,
                    'userName' => $session->get('userName'),
                    'userData' => $userData,
                    'userType' => $session->get('userType'),
                    
        ));
        }
        else 
        {   
            $em = $this->getDoctrine()->getManager();
            $user1 = $em->getRepository('VlreleasesUserBundle:User')
                    ->findOneBy(array('id' =>$id));    
               //Personal details
               $userData['userPersonalProfile'] = $em->getRepository('VlreleasesUserBundle:UserPersonalProfile')
                    ->findOneBy(array('id' =>$user1->getPersonalProfile()->getId()));
				

                //work details
               $userData['userWorkProfile'] = $em->getRepository('VlreleasesUserBundle:UserWorkProfile')
                    ->findOneBy(array('id' =>$user1->getWorkProfile()->getId()));
                if($user1->getWorkProfile()->getDepartment())
                    $userData['Department'] = $user1->getWorkProfile()->getDepartment()->getName();
                else
                    $userData['Department'] = '';
                if($user1->getWorkProfile()->getDesignation())
                    $userData['Designation'] = $user1->getWorkProfile()->getDesignation()->getName();
                else
                    $userData['Designation'] = '';
                if( $user1->getWorkProfile()->getBand())
                    $userData['Band'] = $user1->getWorkProfile()->getBand()->getName();
                else
                    $userData['Band'] = '';
                if($user1->getWorkProfile()->getTeam())
                    $userData['Team'] = $user1->getWorkProfile()->getTeam()->getTname();
                else
                    $userData['Team'] = '';
             //Project Details
                $userService = $this->get('UserService');
            $userData['userProjects'] = $userService->getUserProject($id);
           //Skill Details        
            $userSkills = $userProfileService->getUserSkill($user1);        
           $userData['userRole'] = $session->get('userRole');
            return $this->render('VlreleasesUserBundle:User:displayProfile.html.twig',
                    array(                    
                        'userData' => $userData,
                        'userSkills' => $userSkills                     
            ));
        }
    }

     /*
     * get emailId to fetch user details from db
     */
    public function getEmailProfileAction(Request $request)
    {
        $userDetails = array();
        $session = $request->getSession();
        $emailId = $request->get('email');
        $userId = $session->get('userId');
        $userProfileService = $this->get('UserProfileService');
        $userData['userName'] = $session->get('userName');
        $userData['userType'] = $session->get('userType');
        $userData['userRole'] = $session->get('userRole');
        $userData['emailId'] = $session->get('email');
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

        if($emailId == $userData['emailId'])
        {
            //Personal details
            $userPersonalProfile = $user->getPersonalProfile();
            $userPersonalProfileForm = $this
                    ->createForm(new PersonalDetailsForm(), $userPersonalProfile);
             //Project Details
            $userProjects = $userProfileService->getUserProjects();
            //Work details
            $userWorkProfile = $user->getWorkProfile();
            //var_dump($userWorkProfile);exit;
            $userWorkProfileForm = $this
                    ->createForm(new WorkDetailsForm(), $userWorkProfile);
            //Skill Details
            $userSkills = $userProfileService->getUserSkills();
            return $this->render('VlreleasesUserBundle:UserProfile:profile.html.twig',
                array(
                    'form' => $userPersonalProfileForm->createView(),
                    'userProjects' => $userProjects,
                    'userWorkProfileForm' => $userWorkProfileForm->createView(),
                    'userSkills' => $userSkills,
                    'userName' => $session->get('userName'),
                    'userData' => $userData,
                    'userType' => $session->get('userType'),
                    
        ));
        }
        else 
        {   
                $em = $this->getDoctrine()->getManager();
                $user1 = $em->getRepository('VlreleasesUserBundle:User')
                    ->findOneBy(array('email' =>$emailId)); 
               //Personal details
               $userData['userPersonalProfile'] = $em->getRepository('VlreleasesUserBundle:UserPersonalProfile')
                    ->findOneBy(array('id' =>$user1->getPersonalProfile()->getId()));
				

                //work details
               $userData['userWorkProfile'] = $em->getRepository('VlreleasesUserBundle:UserWorkProfile')
                    ->findOneBy(array('id' =>$user1->getWorkProfile()->getId()));
                if($user1->getWorkProfile()->getDepartment())
                    $userData['Department'] = $user1->getWorkProfile()->getDepartment()->getName();
                else
                    $userData['Department'] = '';
                if($user1->getWorkProfile()->getDesignation())
                    $userData['Designation'] = $user1->getWorkProfile()->getDesignation()->getName();
                else
                    $userData['Designation'] = '';
                if( $user1->getWorkProfile()->getBand())
                    $userData['Band'] = $user1->getWorkProfile()->getBand()->getName();
                else
                    $userData['Band'] = '';
                if($user1->getWorkProfile()->getTeam())
                    $userData['Team'] = $user1->getWorkProfile()->getTeam()->getTname();
                else
                    $userData['Team'] = '';
             //Project Details
                $userService = $this->get('UserService');
            $userData['userProjects'] = $userService->getUserProject($user1->getId());
           //Skill Details        
            $userSkills = $userProfileService->getUserSkill($user1);        
           $userData['userRole'] = $session->get('userRole');
            return $this->render('VlreleasesUserBundle:User:displayProfile.html.twig',
                    array(                    
                        'userData' => $userData,
                        'userSkills' => $userSkills                     
            ));
        }
    }


    /**
     * Get the user data. 
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * return type array
     */
    public function usersProfileAction(Request $request) 
    {
        $searchUserForm = $this->createForm(new SearchUserForm(), array());
        $session = $request->getSession();
        $projectId = $session->get('projectId');
        $type = $session->get('userType');
        $userService = $this->get('UserService');
        $userData['userName'] = $session->get('userName');
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
        $page = $this->get('request')->query->get('page', 1);
         $mode = $this->get('request')->query->get('mode','');
        if($page > 0 && !empty($mode))
        {
            $this->usersAjaxPagination($page);
        }
        $count = $userService->getUsersCount();
        $uCount = $count[0][1];
        $usersProfile = array();
        $usersProfile = $userService->getUsersProfile($page, $uCount);

        return $this->render('VlreleasesUserBundle:User:usersProfile.html.twig',
                array('userData' => $userData, 'type' => $type,
                    'usersProfile' => $usersProfile,
                    'searchUserForm' => $searchUserForm->createView()));
    }
    
    //display users profile pagination through ajax 
    public function usersAjaxPagination($page)
    {
        $userService = $this->get('UserService');
        $count = $userService->getUsersCount();
        $uCount = $count[0][1];
        $usersProfile = array();
        $usersProfile = $userService->getUsersProfile($page, $uCount);
        
        echo $template = $this->renderView('VlreleasesUserBundle:User:ajaxUserPagination.html.twig',
                        array('usersProfile' => $usersProfile));exit;
    
    }

    /**
     * Get the user-reporter data. 
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * return type array
     */
    public function reportersProfileAction(Request $request)
    {
        $searchReporterForm = $this
                ->createForm(new SearchReporterForm(), array());
        $session = $request->getSession();
        $projectId = $session->get('projectId');
        $type = $session->get('userType');
        $userService = $this->get('UserService');
        $userData['userName'] = $session->get('userName');
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
        $usersProfile = array();
        $profileCount = $userService->getUsersCount();
        $page = $this->get('request')->query->get('page', 1);
        $mode = $this->get('request')->query->get('mode','');
        if($page > 0 && !empty($mode))
        {
            $this->reportersAjaxPagination($page);
        }
        $count = $userService->getUsersCount();
        $uCount = $count[0][1];
        $reporters = $userService->getAllReporters($uCount);
        $usersProfile = $userService->getUsersProfile($page, $uCount);
        return $this->render('VlreleasesUserBundle:User:user-reporters.html.twig',
                array('userData' => $userData, 'type' => $type,
                    'usersProfile' => $usersProfile,
                    'reporters' => $reporters,
                    'searchReporterForm' => $searchReporterForm->createView()));
    }

    //display reporters profile through pagination
     public function reportersAjaxPagination($page)
    {
         $userService = $this->get('UserService');
         $count = $userService->getUsersCount();
         $uCount = $count[0][1];
         $reporters = $userService->getAllReporters($uCount);
         $usersProfile = $userService->getUsersProfile($page, $uCount);
         echo $template = $this->renderView('VlreleasesUserBundle:User:ajaxReporterPagination.html.twig',
                        array('reporters' => $reporters,
                            'usersProfile' => $usersProfile));exit;
    
    }
    /**
     * Get the user data based on searching name/email/system id/team. 
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * return type array
     */
    public function searchByNameAction(Request $request)
    {
        $uName = $request->get('uname');
        $email = $request->get('uemail');
        $sysId = $request->get('usysid');
        $team = $request->get('uteam');        
	$searchUserForm = $this->createForm(new SearchUserForm(), array());
        $session = $request->getSession();
        $type = $session->get('userType');
        $userData['userName'] = $session->get('userName');
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
        $userService = $this->get('UserService');
        $userDetails = $userService->findByUname($uName, $email, $sysId, $team);
        
        echo $template = $this->renderView('VlreleasesUserBundle:User:userSearchDetails.html.twig',
                        array('userData' => $userData, 'type' => $type,
			'searchUserForm' => $searchUserForm->createView(),
                        'userDetails' => $userDetails));exit;
    }

     /**
     * Get the user data based on searching name/email/system id/team in user-reporter data. 
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * return type array
     */
    public function searchReporterAction(Request $request) 
    {        
        $uName = $request->get('rname');
        $email = $request->get('remail');
	$searchReporterForm = $this
                ->createForm(new SearchReporterForm(), array());
        $session = $request->getSession();
        $type = $session->get('userType');
        $userData['userName'] = $session->get('userName');
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
        $userService = $this->get('UserService');
        $userDetails = $userService->findByReporter($uName, $email);
        if ($userDetails) {
            $userDetails1 = $userService->searchReporterDetails($userDetails);
        } else {
            $userDetails1 = "";
        }

        echo $template = $this->renderView('VlreleasesUserBundle:User:reporterSearchDetails.html.twig', 
                   array('userData' => $userData, 'type' => $type,
                    'userDetails' => $userDetails,
	            'searchReporterForm' => $searchReporterForm->createView(),
                    'userDetails1' => $userDetails1));exit;

    }

    /**
     * Filters the users data depends on reporting person.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * returns array
     */
    public function filterUserDataAction(Request $request)
    {
	$searchUserForm = $this->createForm(new SearchUserForm(), array());
        $filterData = '';
        $filterData1 = '';
        $userService = $this->get('UserService');
        $session = $request->getSession();
        $type = $session->get('userType');
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
        $userData['userName'] = $session->get('userName');
        
        if ($request->get('uvalue') == 'Non Jyo') {
            $value = 'Non Jyo';
            $filterData = $userService->getUserFilterData($value);
        }
        else if ($request->get('uvalue') == 'Jyo') {
            $value = 'Jyo';
            $filterData = $userService->getUserFilterData($value);
        }
        else if ($request->get('uvalue') == 'Display All') {
            $value = 'Display All';
            $filterData1 = $userService->getUserFilterData($value);
        }
        
         echo $template = $this->renderView('VlreleasesUserBundle:User:userFilterData.html.twig',
                array('userData' => $userData, 'type' => $type,
	           'searchUserForm' => $searchUserForm->createView(),
                   'filterData' => $filterData, 'filterData1' => $filterData1));exit;

    }

    /**
     * Filters the users-reporter data depends on reporting person.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * returns array
     */
    public function filterReporterDataAction(Request $request)
    {
	$searchReporterForm = $this
                ->createForm(new SearchReporterForm(), array());

        $filterData = '';
        $filterData1 = '';
        $details = '';
        $details1 = '';
        $userService = $this->get('UserService');
        $session = $request->getSession();
        $type = $session->get('userType');
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
        $userService = $this->get('UserService');

             if ($request->get('rvalue') == 'Non Jyo') {
                $value = 'Non Jyo';
                $filterData = $userService->getReporterFilterData($value);
                if ($filterData) {
                    $details = $userService->ReporterFilterDetails($filterData);
            }
            }
            else if ($request->get('rvalue') == 'Jyo') {
                $value = 'Jyo';
                $filterData = $userService->getReporterFilterData($value);
                if ($filterData) {
                    $details = $userService->ReporterFilterDetails($filterData);
                }
            }
            else if ($request->get('rvalue') == 'Display All') {
                $value = 'Display All';
                $filterData1 = $userService->getReporterFilterData($value);
                if ($filterData1) {
                    $details1 = $userService->ReporterFilterDetails1($filterData1);
                }
            } 
      
        echo $template = $this->renderView('VlreleasesUserBundle:User:reporterFilterData.html.twig',
                    array('userData' => $userData, 'filterData' => $filterData, 
                    'type' => $type,'searchReporterForm' => $searchReporterForm->createView(),
                    'filterData1' => $filterData1, 'details' => $details,
                    'details1' => $details1));exit;
        
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
     * Retuns the Type Service.
     * 
     * @return \Vlreleases\UserBundle\Services\TypeService
     */
    private function getTypeService()
    {
        if (!$this->typeService) {
            $this->typeService = $this->get('TypeService');
        }
        
        return $this->typeService;
    }

}

?>
