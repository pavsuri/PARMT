<?php

namespace Vlreleases\UserBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AddActivityFieldSubscriber implements EventSubscriberInterface
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
        return array(FormEvents::PRE_SET_DATA => 'getActivityList');
    }

    public function getActivityList(FormEvent $event)
    {
        
        $form = $event->getForm();
        $activities = $this->userDashBoardService->findAllUserActivities();
        
        foreach ($activities as $activityId => $activity) {						
            $activityList[$activity->getId()]= $activity->getName();
        }
        $form->add ('activities','choice', array(
            'choices' => (array) $activityList,
            'empty_value' => 'Select Activity',
            'required' => true));
        //$form->add($this->factory->createNamed('cities', 'choice', null, array('choices'=>array(1=>'Chennai', 2=>'Hyderabad'))));
    }
}
