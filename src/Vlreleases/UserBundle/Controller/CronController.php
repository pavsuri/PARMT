<?php

namespace Vlreleases\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CronController extends Controller
{
     /**
     * Get the asset delay data.
     * 
     * @param Request $request
     * 
     * @return type array
     */
    public function assetDelayAction(Request $request) {

        $userService = $this->get('UserService');
        $emailService = $this->get('EmailService');
        $data = $userService->getAssetData();
        for ($i = 0; $i < sizeof($data); $i++) {
            $this->assetDelaymail($data[$i]['email'], $data[$i]['productname']);
        }
        echo "task completed";
        exit;
    }

    /**
     * Sends asset delay mail.
     * 
     * @param string $email
     * 
     * @param string $productName
     * 
     * @return email
     * 
     */
    public function assetDelaymail($email, $productName) {

        $message = \Swift_Message::newInstance()
                ->setSubject('Asset Submission Reminder')
                ->setFrom('keerthi.gunda@valuelabs.net')
                ->setTo($email)
                ->setBody(
                $this->renderView(
                        'VlreleasesUserBundle:MobileDevice:mailAssetSubmissionDelay.html.twig', array('productName' => $productName, 'email' => $email)
                ), "text/html"
        );
        $this->get('mailer')->send($message);
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
     * Retuns the Email Service.
     * 
     * @return \Vlreleases\UserBundle\Services\EmailService
     */
    private function getEmailService() {
        if (!$this->emailService) {
            $this->emailService = $this->get('EmailService');
        }
        
        return $this->emailService;
    }

}
