<?php

namespace Vlreleases\UserBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Vlreleases\UserBundle\Form\UserProfile\PersonalDetailsForm;
use Vlreleases\UserBundle\Form\UserProfile\WorkDetailsForm;
use Vlreleases\UserBundle\Entity\Department;
use Vlreleases\UserBundle\Entity\User;
use Vlreleases\UserBundle\Entity\UserPersonalProfile;
use Vlreleases\UserBundle\Entity\UserWorkProfile;
use Symfony\Component\HttpFoundation\Session;

class UserProfileController extends Controller
{
     /**
     * Default action that loads the profile forms.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * returns array
     */
    public function indexAction(Request $request) 
    {
        
        $userData = array();
        $userService = $this->get('UserService');
        $userProfileService = $this->get('UserProfileService');
        $user = $userService->getCurrentUser();
        $session = $request->getSession();
        $userData['userName'] = $session->get('userName');
        $userData['emailId'] = $session->get('email');
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
        
        if ($request->isMethod('POST')) {
            $userPersonalProfileForm->bind($request);
            $userProfileService->saveProfilePersonal($userPersonalProfileForm);
        }
        
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
    
    public function getProjectsAction()
    {
        $projectName = array();
        $systemTableService = $this->get('SystemTableService');
        $projects = $systemTableService->getProjects();
        foreach ($projects as $project) {
        $projectName[] = array ('id' => $project->getId(), 'name' => $project->getName());
        }
        $response = new JsonResponse();
        $response->setData($projectName); 

        return $response;        
    }
    /* Generate thumbnails */
     public function generate_image_thumbnail($source_image_path, $thumbnail_image_path) {
        $THUMBNAIL_IMAGE_MAX_WIDTH = 50;
        $THUMBNAIL_IMAGE_MAX_HEIGHT = 50;
        list($source_image_width, $source_image_height, $source_image_type) = getimagesize($source_image_path);
        switch ($source_image_type) {
            case IMAGETYPE_GIF:
                $source_gd_image = imagecreatefromgif($source_image_path);
                break;
            case IMAGETYPE_JPEG:
                $source_gd_image = imagecreatefromjpeg($source_image_path);
                break;
            case IMAGETYPE_PNG:
                $source_gd_image = imagecreatefrompng($source_image_path);
                break;
        }
        if ($source_gd_image === false) {
            return false;
        }
        $source_aspect_ratio = $source_image_width / $source_image_height;
        $thumbnail_aspect_ratio = $THUMBNAIL_IMAGE_MAX_WIDTH / $THUMBNAIL_IMAGE_MAX_HEIGHT;
        if ($source_image_width <= $THUMBNAIL_IMAGE_MAX_WIDTH && $source_image_height <= $THUMBNAIL_IMAGE_MAX_HEIGHT) {
            $thumbnail_image_width = $source_image_width;
            $thumbnail_image_height = $source_image_height;
        } elseif ($thumbnail_aspect_ratio > $source_aspect_ratio) {
            $thumbnail_image_width = (int) ($THUMBNAIL_IMAGE_MAX_HEIGHT * $source_aspect_ratio);
            $thumbnail_image_height = $THUMBNAIL_IMAGE_MAX_HEIGHT;
        } else {
            $thumbnail_image_width = $THUMBNAIL_IMAGE_MAX_WIDTH;
            $thumbnail_image_height = (int) ($THUMBNAIL_IMAGE_MAX_WIDTH / $source_aspect_ratio);
        }
        $thumbnail_gd_image = imagecreatetruecolor($thumbnail_image_width, $thumbnail_image_height);
        imagecopyresampled($thumbnail_gd_image, $source_gd_image, 0, 0, 0, 0, $thumbnail_image_width, $thumbnail_image_height, $source_image_width, $source_image_height);

        $img_disp = imagecreatetruecolor($THUMBNAIL_IMAGE_MAX_WIDTH, $THUMBNAIL_IMAGE_MAX_WIDTH);
        $backcolor = imagecolorallocate($img_disp, 0, 0, 0);
        imagefill($img_disp, 0, 0, $backcolor);

        imagecopy($img_disp, $thumbnail_gd_image, (imagesx($img_disp) / 2) - (imagesx($thumbnail_gd_image) / 2), (imagesy($img_disp) / 2) - (imagesy($thumbnail_gd_image) / 2), 0, 0, imagesx($thumbnail_gd_image), imagesy($thumbnail_gd_image));

        imagejpeg($img_disp, $thumbnail_image_path, 90);
        imagedestroy($source_gd_image);
        imagedestroy($thumbnail_gd_image);
        imagedestroy($img_disp);
        return true;
    }

     /**
     * Resizes a image and persist the photo in the personal profile .
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * returns Json response
     */
    public function uploadPhotoAction(Request $request) {
        $session = $request->getSession();
        $userService = $this->get('UserService');
        $user = $userService->getCurrentUser();
        if ($request->isMethod('POST')) {
            $files = $request->files;

            if ($files) {

                $userFiles = $files->get('userpersonaldetails');
                $name = rand(1, 100000) . '.jpg';
                $path = getcwd() . '/userPhotos';
                $thumbpath = getcwd() . '/userPhotos/thumbs';
                $userFiles['photoUploader']->move($path, $name);
                $this->generate_image_thumbnail($path . "/" . $name, 
                        $thumbpath . "/" . $name);
                $filepath = $path . '\/' . $name;
                $this->get('image.handling')->open($filepath)
                        ->forceResize(150, 150)
                        ->save($filepath);
                $userProfileService = $this->get('UserProfileService');
                $userPersonalProfile = $user->getPersonalProfile();
                $userPersonalProfile->setPhoto($name);
                $return = array('status' => true, 'name' => $name);
                $response = new JsonResponse();
                $response->setData($return);

                return $response;
            }
        }
    }

     /**
     * Get the personal profile data and persist in the database.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * returns personalProfile view
     */
    public function handlePersonalProfileDataAction(Request $request)
    {
  
        $userService = $this->get('UserService');
        $userProfileService = $this->get('UserProfileService');
        $user = $userService->getCurrentUser();
        //Personal details
        $userPersonalProfile = $user->getPersonalProfile();
        if (is_null($user->getPersonalProfile())) {
            $userPersonalProfile = new UserPersonalProfile();
        }
        $userPersonalProfileForm = $this->createForm(new PersonalDetailsForm(),
                $userPersonalProfile);
        if ($request->isMethod('POST')) {
            $userPersonalProfileForm->handleRequest($request);
            if ($userPersonalProfileForm->isValid()) {
                $userProfileService->saveProfilePersonal($userPersonalProfile);
            }

            return $this
           ->render('VlreleasesUserBundle:UserProfile:personalProfile.html.twig', 
                   array('form' => $userPersonalProfileForm->createView(),
                       ));
        }
    }

    /**
     * Get the project profile data and persist in the database.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * returns Json response
     */
    public function handleProjectProfileDataAction(Request $request)
    {
        $projectId = $request->get('projectId');
        $userService = $this->get('UserService');
        $userProfileService = $this->get('UserProfileService');
        $user = $userService->getCurrentUser();
        if ($request->get('action') == 'delete') {
            $userProfileService->deleteProfileProject($projectId, $user);
        }

        if ($request->get('action') == 'add') {
            $userProfileService->saveProfileProject($projectId, $user);
        }
        $return = array('status' => true, 'projectId' => $projectId);
        $response = new JsonResponse();
        $response->setData($return);

        return $response;
    }

     /**
     * Get the work profile data and persist in the database.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * returns Json response
     */
    public function handleWorkProfileDataAction(Request $request)
    {
        
        $userService = $this->get('UserService');
        $userProfileService = $this->get('UserProfileService');
        $user = $userService->getCurrentUser();
        //Work details
        $userWorkProfile = $user->getWorkProfile();
        if (is_null($user->getWorkProfile())) {
            $userWorkProfile = new UserWorkProfile();
        }
        $userWorkProfileForm = $this->createForm(new WorkDetailsForm(), $userWorkProfile);
        if ($request->isMethod('POST')) {
            $userWorkProfileForm->handleRequest($request);
            if ($userWorkProfileForm->isValid()) {
                $user->setWorkProfile($userWorkProfile);
                $userService->save($user);
            }

            return $this->render('VlreleasesUserBundle:UserProfile:workProfile.html.twig', 
                    array('userWorkProfileForm' => $userWorkProfileForm->createView(),
                        ));
        }
    }

     /**
     * Get the skills data and persist in the database.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * returns Json response
     */
    public function getSkillsAction() {
        $skillsData = array();
        $systemTableService = $this->get('SystemTableService');
        $skills = $systemTableService->getSkills();
        foreach ($skills as $skill) {
            $skillsData[] = array('id' => $skill->getId(), 'name' => $skill->getName());
        }
        $response = new JsonResponse();
        $response->setData($skillsData);

        return $response;
    }
    
     /**
     * Get the users data and persist in the database.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * returns Json response
     */
    public function getReportingLeadAction() {
        $leadsData = array();
        $systemTableService = $this->get('SystemTableService');
        $leads = $systemTableService->getLeads();
        foreach ($leads as $skill) {
            $leadsData[] = array('id' => $skill->getId(), 'name' => $skill->getEmail());
        }
        $response = new JsonResponse();
        $response->setData($leadsData);

        return $response;
    }

    /*
     * get the user email-ids for auto completion of texting user emailid
     * 
     * returns json response 
     */
    public function getLeadAction() 
    {
        $leadsData = array();
        $systemTableService = $this->get('SystemTableService');
        $leads = $systemTableService->getLeads();
        foreach ($leads as $skill) {
            $leadsData[] = array('id' => $skill->getId(), 'name' => $skill->getEmail());
        }
        $response = new JsonResponse();
        $response->setData($leadsData);

        return $response;
    }



     /**
     * Get the skills data and changes the data corresponding to operation selected.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * returns Json response
     */
    public function handleSkillsDataAction(Request $request) 
    {
        $savedSkillId = '';
        $skillId = $request->get('skillId');
        $customSkill = $request->get('customSkill');
        $experience = $request->get('experience');
        $userService = $this->get('UserService');
        $userProfileService = $this->get('UserProfileService');

        $user = $userService->getCurrentUser();
        if ($request->get('action') == 'delete') {
            $userProfileService->deleteProfileSkill($skillId, $user);
        }

        if ($request->get('action') == 'add') {
            $savedSkillId = $userProfileService->saveProfileSkill($skillId, $user, $experience);
        }

        if ($request->get('action') == 'addcustomskill') {
            $savedSkillId = $userProfileService->saveProfileCustomSkill($customSkill, $user, $experience);
        }
        $return = array('status' => true, 'experience' => $experience, 'skillId' => $skillId, 'customSkill' => $customSkill, 'savedSkillId' => $savedSkillId);

        $response = new JsonResponse();
        $response->setData($return);

        return $response;
    }

}

?>
