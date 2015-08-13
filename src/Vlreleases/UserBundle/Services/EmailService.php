<?php

namespace Vlreleases\UserBundle\Services;

use Doctrine\ORM\EntityManager;

class EmailService {

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
    }

}
