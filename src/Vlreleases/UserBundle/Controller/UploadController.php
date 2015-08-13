<?php

namespace Vlreleases\UserBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Vlreleases\UserBundle\Entity\UploadedFiles;

class UploadController extends Controller
{
    /**
     *
     * @var \Vlreleases\UserBundle\Services\UserService 
     */
    private $userService;

    /**
     * Get the resource names corresponding to a project.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     * 
     * @return type array
     * 
     */
    public function indexAction(Request $request)
    {
        $successFlag = 0;
        $session = $request->getSession();
        $userService = $this->get('UserService');
        $userData['userName'] = $session->get('userName');
        $userData['userType'] = $session->get('userType');
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
        $downloadLinksData = $userService->getLinks();
        
        return $this
                ->render('VlreleasesUserBundle:User:uploadFile.html.twig',
                        array('userData' => $userData,'successFlag' =>$successFlag,
                            'downloadLinksData' => $downloadLinksData));
    }


    public function uploadFileAction(Request $request)
    {
        $session = $request->getSession();
        $successFlag = 0;
        $files = $request->files;   
        if ($files) {
            $uploadedFile = $files->get('droppedFile');
            //var_dump($uploadedFile);
            $filesName = $uploadedFile->getClientOriginalName();
            $exts = explode('.', $filesName);
            $ext = $exts[count($exts) - 1];
            //echo $ext;exit;
            $folderPath = getcwd() . '\UploadedFiles';
            $uploadedFile->move($folderPath, $filesName);
            $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
            $uniqueNo = '';
            for ($i = 0; $i < 7; $i++) {
                $uniqueNo.= $characters[rand(0, strlen($characters) - 1)];
            }
            $uploads = new UploadedFiles();
            $uploads->setFile($filesName);
            $uploads->setFileLocation($folderPath);
            $uploads->setUniqueId($uniqueNo);
            $downloadLink = $folderPath.'\\'.$filesName;
            $userService = $this->get('UserService');
            $generatedId = $userService->save($uploads);
            if($generatedId)
                $successFlag = 1;                   
        }
        $downloadLinksData = $userService->getLinks(); 
        $userData['userName'] = $session->get('userName');
        $userData['userType'] = $session->get('userType');
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
        
        return $this
                ->render('VlreleasesUserBundle:User:uploadFile.html.twig',
                        array('userData' => $userData,'successFlag' => $successFlag,
                            'downloadLinksData' => $downloadLinksData));
        
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
