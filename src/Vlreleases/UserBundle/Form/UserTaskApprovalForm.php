<?php

namespace Vlreleases\UserBundle\Form;

use Vlreleases\UserBundle\Form\EventListener\AddProjectFieldSubscriber;
use Vlreleases\UserBundle\Form\EventListener\AddResourceFieldSubscriber;
use Vlreleases\UserBundle\Form\EventListener\AddDateFieldSubscriber;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UserTaskApprovalForm extends AbstractType
{

    private $projectFieldSubscriber;
    private $resourceFieldSubscriber;
    private $dateFieldSubscriber;
    
    
    public function __construct($projectFieldSubscriber, 
            $resourceFieldSubscriber, $dateFieldSubscriber) 
    {
        $this->projectFieldSubscriber = $projectFieldSubscriber;
        $this->resourceFieldSubscriber = $resourceFieldSubscriber;
       $this->dateFieldSubscriber = $dateFieldSubscriber;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

       $builder->addEventSubscriber($this->projectFieldSubscriber);
       $builder->addEventSubscriber($this->resourceFieldSubscriber);
       $builder->addEventSubscriber($this->dateFieldSubscriber);
       
    }

    public function getName()
    {
        return 'usertaskapprovalform';
    }
}
?>