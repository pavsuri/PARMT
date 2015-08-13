<?php
namespace Vlreleases\UserBundle\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Vlreleases\UserBundle\Form\UploadFileForm;
use Vlreleases\UserBundle\Entity\Uploads;

class UploadFileController extends Controller 
{
    /**
     * @var \Vlreleases\UserBundle\Services\UserService 
     */
    private $userService;
    
    /*
     * default action for upload file controller
     */
    public function indexAction(Request $request)
    { 
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
        $uploadFilesData = $this->getUserService()->getUploadFiles();
        
       return $this->render('VlreleasesUserBundle:User:uploads.html.twig', 
               array('uploadFilesData' => $uploadFilesData,
                    'userData' => $userData,'flag' => $flag,
                    'userType' => $session->get('userType'),
                    'userName' => $session->get('userName')));  

    }
     
    /*
     * make the upload file action complete based on the type of file uploaded
     * 
     * @param \Symfony\Component\HttpFoundation\Request $resquest
     */
    public function fileUploadAction(Request $request)
    {  
        $return_url = '';
        $uniqueId = '';
        $flag = 0;
        $session = $request->getSession();
        $userId = $session->get('userId');
        $emailTo = $session->get('email');
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
        if($_POST['filetypetouploadfile'] == 'android')       
        {
            error_reporting(0);
            ini_set("display_errors",1);
            define("LOG_PATH","/opt/lampp/htdocs/niti/niti_logs/upload_file_script_".date('Y-m-d').".log");
            error_log(date('Y-m-d_G:i:s')." ::: inside upload.php".PHP_EOL, 3, LOG_PATH);
            if ($_FILES["fileName"]["error"] > 0) {
                echo "Return Code: " . $_FILES["fileName"]["error"] . "<br>";
              } 
            else {
                error_log(date('Y-m-d G:i:s').' ::: 111111 filename '.$_FILES["fileName"]["name"].PHP_EOL, 3, LOG_PATH);                
                $ext = pathinfo($_FILES["fileName"]["name"], PATHINFO_EXTENSION); // get file extension
                error_log(date('Y-m-d G:i:s').' ::: filename extension: '.$ext.PHP_EOL, 3, LOG_PATH);
                     
                $uniqueId = uniqid();
                $filename = $_FILES["fileName"]["name"];
                $extn = substr(strrchr($filename, "."), 1);                    
                $filenaam = substr($filename, 0, strlen($extn));
                $newFileName = $filenaam.'_'.$uniqueId;
                $entireFileName = $newFileName.'.'.$extn;                        
                move_uploaded_file($_FILES["fileName"]["tmp_name"],
                $_SERVER['DOCUMENT_ROOT']."/upload/" . $uniqueId.'.'.$extn);                          
                //download-Link 
                $return_url = "http://localhost/upload/" . $uniqueId;
                //$return_url = "http://niti.stg.valuelabs.com/upload/" . $uniqueId;
                $uploads = new Uploads();
                $uploads->setFileName($_FILES["fileName"]["name"]);
                $uploads->setUserId($userId);
                $uploads->setUniqueId($uniqueId.'.'.$extn);
                $uploadedtime = new \DateTime();
                $uploads->setUploadedDate($uploadedtime);
                $userService = $this->get('UserService');	
                $generatedId = $userService->save($uploads);
                if($generatedId)
                {
                    $flag = 1;
                    $this->emailDownloadLink($emailTo, $return_url);
                }
            }
            
        }
        else if($_POST['filetypetouploadfile'] == 'ios')
        {
            error_reporting(0);
            ini_set("display_errors",1);
            define("LOG_PATH","/opt/lampp/htdocs/niti/niti_logs/upload_file_script_".date('Y-m-d').".log");

            //error_log(date('Y-m-d G:i:s')." ::: ".PHP_EOL, 3, LOG_PATH);
            error_log(date('Y-m-d_G:i:s')." ::: inside upload.php".PHP_EOL, 3, LOG_PATH);
            //print_r($_FILES);
            if ($_FILES["fileName"]["error"] > 0) {

              echo "Return Code: " . $_FILES["fileName"]["error"] . "<br>";
            } 
            else {
               
                error_log(date('Y-m-d G:i:s').' ::: 111111 filename '.$_FILES["fileName"]["name"].PHP_EOL, 3, LOG_PATH);
                //$ext = pathinfo($path, PATHINFO_EXTENSION);
                $ext = pathinfo($_FILES["fileName"]["name"], PATHINFO_EXTENSION); // get file extension

                error_log(date('Y-m-d G:i:s').' ::: filename extension: '.$ext.PHP_EOL, 3, LOG_PATH);
                 $uniqueId = uniqid();
                $filename = $_FILES["fileName"]["name"];
                $extn = substr(strrchr($filename, "."), 1);                    
                $filenaam = substr($filename, 0, strlen($extn));
                $newFileName = $filenaam.'_'.$uniqueId;
                $entireFileName = $newFileName.'.'.$extn;                        
                move_uploaded_file($_FILES["fileName"]["tmp_name"],
                $_SERVER['DOCUMENT_ROOT']."/upload/" . $uniqueId);                          
                //download-Link  
                $return_url = "http://localhost/upload/" . $uniqueId;
                //$return_url = "http://niti.stg.valuelabs.com/upload/" . $uniqueId;
                $uploads = new Uploads();
                $uploads->setFileName($_FILES["fileName"]["name"]);
                $uploads->setUserId($userId);
                $uploads->setUniqueId($uniqueId);
                $uploadedtime = new \DateTime();
                $uploads->setUploadedDate($uploadedtime);
               
                $userService = $this->get('UserService');	
                $generatedId = $userService->save($uploads);
                if($generatedId)
                    {
                        $flag = 1;
                        $this->emailDownloadLink($emailTo, $return_url);
                    }               
                
              }
              
              // file upload ends here

                      // create plist file starts

            error_log(date('Y-m-d G:i:s')." :::before iphone if block ".PHP_EOL, 3, LOG_PATH);
         //if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod')||strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) {
                    error_log(date('Y-m-d G:i:s')." ::: inside iPhone..HTTP_USER_AGENT: ".$_SERVER['HTTP_USER_AGENT'].PHP_EOL, 3, LOG_PATH);
                      try{

                            $file_name = $_SERVER['DOCUMENT_ROOT']."/upload/".$uniqueId.".plist"; // abcd.ipa.plist
                            $f_handle = fopen($file_name, "w") or die("Unable to open file!");
                            $data = '<?xml version="1.0" encoding="UTF-8"
                    <!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
                    <plist version="1.0">
                    <dict>
                        <key>items</key>
                        <array>
                            <dict>
                                <key>assets</key>
                                <array>
                                    <dict>
                                        <key>kind</key>
                                        <string>software-package</string>
                                        <key>url</key>
                                       <? <string>http://localhost/upload/'.$uniqueId.'</string>
                                    </dict>
                                </array>
                                <key>metadata</key>
                                            <dict>
                                                    <key>bundle-identifier</key>
                                                    <string>com.valuelabs.PowerWaterCorp</string>
                                                    <key>bundle-version</key>
                                                    <string>2.0</string>
                                                    <key>kind</key>
                                                    <string>software</string>
                                                    <key>title</key>
                                                    <string>'.$uniqueId.'</string>
                                            </dict>
                            </dict>
                        </array>
                    </dict>
                    </plist>';

                            fwrite($f_handle, $data);
                            fclose($f_handle);
                            // create plist file ends
                      }
                      catch(Exception $e){
                            //echo " caught exception: ".$e->getMessage();
                            error_log(date('Y-m-d G:i:s')." caught exception: ".$e->getMessage().PHP_EOL, 3, LOG_PATH);  
                      }

                    // create html file data starts

                    $html_filename = $_SERVER['DOCUMENT_ROOT']."/upload/".$uniqueId.".php";
                    $html_f_handle = fopen($html_filename,"w") or die("Unable to open file!");
                    $html_data =
                    '<?php

                    error_log(" :::  HTTP_USER_AGENT:".$_SERVER["HTTP_USER_AGENT"].PHP_EOL, 3, "upload_file_download_log.log");
                    
                    <html>
                    <body>
                    <a href="itms-services://?action=download-manifest&amp;url=http://localhost/upload/'.$file_name.'">
                            click this link to download
                    </a>
                    </body>
                    </html>
                    ';
                    // create html file data

                    fwrite($html_f_handle,$html_data);
                    fclose($html_f_handle);
                      
        }
        else if($_POST['filetypetouploadfile'] == 'blackberry')
            {
                error_reporting(0);
            ini_set("display_errors",1);
            define("LOG_PATH","/opt/lampp/htdocs/niti/niti_logs/upload_file_script_".date('Y-m-d').".log");
            error_log(date('Y-m-d_G:i:s')." ::: inside upload.php".PHP_EOL, 3, LOG_PATH);
            if ($_FILES["fileName"]["error"] > 0) {
                echo "Return Code: " . $_FILES["fileName"]["error"] . "<br>";
              } 
            else {
                error_log(date('Y-m-d G:i:s').' ::: 111111 filename '.$_FILES["fileName"]["name"].PHP_EOL, 3, LOG_PATH);                
                $ext = pathinfo($_FILES["fileName"]["name"], PATHINFO_EXTENSION); // get file extension
                error_log(date('Y-m-d G:i:s').' ::: filename extension: '.$ext.PHP_EOL, 3, LOG_PATH);
                     
                $uniqueId = uniqid();
                $filename = $_FILES["fileName"]["name"];
                $extn = substr(strrchr($filename, "."), 1);                    
                $filenaam = substr($filename, 0, strlen($extn));
                $newFileName = $filenaam.'_'.$uniqueId;
                $entireFileName = $newFileName.'.'.$extn;                        
                move_uploaded_file($_FILES["fileName"]["tmp_name"],
                $_SERVER['DOCUMENT_ROOT']."/upload/" . $uniqueId);                          
                //download-Link 
                $return_url = "http://localhost/upload/" . $uniqueId;
                //$return_url = "http://niti.stg.valuelabs.com/upload/" . $uniqueId;
                $uploads = new Uploads();
                $uploads->setFileName($_FILES["fileName"]["name"]);
                $uploads->setUserId($userId);
                $uploads->setUniqueId($uniqueId);
                $uploadedtime = new \DateTime();
                $uploads->setUploadedDate($uploadedtime);
                $userService = $this->get('UserService');	
                $generatedId = $userService->save($uploads);
                if($generatedId)
                {
                    $flag = 1;
                    $this->emailDownloadLink($emailTo, $return_url);
                }
            }
        }
          
        $uploadFilesData = $this->getUserService()->getUploadFiles();          
//        return $this->render('VlreleasesUserBundle:User:uploadSuccess.html.twig', 
//                    array('userData' => $userData,'return_url' => $return_url,
//                        'uploadFilesData' => $uploadFilesData,
//                        'flag' => $flag));  
        return $this->render('VlreleasesUserBundle:User:uploads.html.twig', 
               array('uploadFilesData' => $uploadFilesData,
                    'userData' => $userData,'flag' => $flag,
                    'userType' => $session->get('userType'),
                    'userName' => $session->get('userName')));
        
     
     }
        
     
    /**
     * Will send download link to the user who uploads file
     * 
     * */
    public function emailDownloadLink($emailTo, $return_url) {
        $path = 'http://localhost/Vl-releases2/web/userPhotos/44077.jpg';
        $message = \Swift_Message::newInstance()
                ->setSubject('Uploaded File Link')
                ->setFrom('surendra.yallabandi@valuelabs.net')
                ->setTo($emailTo)
                ->setBody(
                $this->renderView(
                        'VlreleasesUserBundle:User:uploadsTest.html.twig', array('url' => $return_url,'email' => $emailTo)
                ), "text/html"
        );
        $this->get('mailer')->send($message);
    }
 
    /**get the id of uploded file record through ajax and delete that
     * 
     */
    public function deleteUploadedFileAction(Request $request)
    {
        $id = $request->get('fileId');             
        $uploadFilesData = $this->getUserService()->deleteFile($id);
        
        echo $template = $this->renderView('VlreleasesUserBundle:User:displayUploads.html.twig',
                array('uploadFilesData' => $uploadFilesData ));        
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
