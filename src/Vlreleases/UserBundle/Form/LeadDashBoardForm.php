<?php

namespace Vlreleases\UserBundle\Form;

use Vlreleases\UserBundle\Form\EventListener\AddProjectFieldSubscriber;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LeadDashBoardForm extends AbstractType
{
    private $projectFieldSubscriber;
    private $ActivityFieldSubscriber;
    
    public function __construct($projectFieldSubscriber,$ActivityFieldSubscriber) 
    {
        $this->projectFieldSubscriber = $projectFieldSubscriber;
        $this->ActivityFieldSubscriber = $ActivityFieldSubscriber;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

       $builder->addEventSubscriber($this->projectFieldSubscriber);
       $builder->addEventSubscriber($this->ActivityFieldSubscriber);
	   
    }

    public function getName()
    {
        return 'leaddashboardform';
    }
}

?>