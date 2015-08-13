<?php

namespace Vlreleases\UserBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AddResourceFieldSubscriber implements EventSubscriberInterface
{
    private $session;
    private $userService;
    
    public function __construct($session, $userService) 
    {
        $this->session = $session;
        $this->userService = $userService;
    }
    public static function getSubscribedEvents()
    {
        // Tells the dispatcher that you want to listen on the form.pre_set_data
        // event and that the preSetData method should be called.
        return array(FormEvents::SUBMIT => 'getResourceListBasedOnProject');
    }

    public function getResourceListBasedOnProject(FormEvent $event)
    {
		$resources = array();
        $form = $event->getForm();
	    $userId = $this->session->get('userId');
        
        $resourcesObj = $this->userService->getResourcesPerProject($form->get('projects')->getData());
		
        foreach ($resourcesObj as $resource) {						
            $resources[$resource['id']]= ucfirst($resource['name']);
        }
		
		$form->add ('resources','choice', array(
            'choices' => (array) $resources,
            'empty_value' => 'Select Resources',
            'required' => true));
    }
}
