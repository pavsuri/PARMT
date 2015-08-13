<?php

namespace Vlreleases\UserBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AddDateFieldSubscriber implements EventSubscriberInterface
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
        return array(FormEvents::PRE_SET_DATA => 'getDateProjectListBasedOnUser');
    }

    public function getDateProjectListBasedOnUser(FormEvent $event)
    {
        $userId = $this->session->get('userId');
        $form = $event->getForm();
        //$projectsObj = $this->userDashBoardService->getUserTasksPerProject();
        
        
     $form->add('startdate', 'date', array(
            'input'  => 'datetime',
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd',
   
));
       
      $form->add('enddate', 'date', array(
          'input'  => 'datetime',
          'widget' => 'single_text',
          'format' => 'yyyy-MM-dd',
          
  
));
     
        //$form->add($this->factory->createNamed('cities', 'choice', null, array('choices'=>array(1=>'Chennai', 2=>'Hyderabad'))));
    }
}
