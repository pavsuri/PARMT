<?php

namespace Vlreleases\UserBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AddProjectFieldSubscriber implements EventSubscriberInterface
{
    private $session;
    private $userDashBoardService;
    
    public function __construct($session, $userDashBoardService) 
    {
        $this->session = $session;
        $this->userDashBoardService = $userDashBoardService;
    }
    public static function getSubscribedEvents()
    {
        // Tells the dispatcher that you want to listen on the form.pre_set_data
        // event and that the preSetData method should be called.
        return array(FormEvents::PRE_SET_DATA => 'getProjectListBasedOnUser');
    }

    public function getProjectListBasedOnUser(FormEvent $event)
    {
        $userId = $this->session->get('userId');
        $form = $event->getForm();
        $projectsObj = $this->userDashBoardService->getUserProjects();
        $projects = array();
        
        foreach ($projectsObj as $projectId => $project) {						
            $projects[$project->getId()]= $project->getName();
        }
        $form->add ('projects','choice', array(
            'choices' => (array) $projects,
            'empty_value' => 'Select Project',
            'required' => true));
        //$form->add($this->factory->createNamed('cities', 'choice', null, array('choices'=>array(1=>'Chennai', 2=>'Hyderabad'))));
    }
}
