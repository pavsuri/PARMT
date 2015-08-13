<?php

namespace Vlreleases\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AddProjectForm extends AbstractType {

    public function getName() {

        return 'addProjectform';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('projectName', 'entity', array(
            'class' => 'VlreleasesUserBundle:Project',
            'property' => 'name',
            'empty_value' => 'Select project'
        ));
        $builder->add('client', 'entity', array(
            'class' => 'VlreleasesUserBundle:Client',
            'property' => 'clientName',
            'empty_value' => 'Select client'
        ));
        $builder->add('phase', 'entity', array(
            'class' => 'VlreleasesUserBundle:Phase',
            'property' => 'phaseName',
            'empty_value' => 'Select phase'
        ));
        $builder->add('startDate', 'date', array(
            'input' => 'datetime',
            'widget' => 'single_text'));
        $builder->add('bugTool', 'text', array(
        ));
        $builder->add('description', 'text', array(
        ));
        $builder->add('billingStatus', 'choice', array(
            'choices' => array(
                'POC' => 'POC',
                'Billable To Client' => 'Billable To Client',
                'Billable To VL' => 'Billable To VL',
            ),
            'empty_value' => 'Select billingstatus'
        ));
        $builder->add('svnpath', 'text', array(
        ));       
        $builder->add('lifeCycleStatus', 'choice', array(
            'choices' => array(
                'Kick Off' => 'Kick Off',
                'Requirements Gathering' => 'Requirements Gathering',
                'Development' => 'Development',
                'Testing' => 'Testing',
                'UAT' => 'UAT',
                'Signed Off' => 'Signed Off',
                'Maintainance' => 'Maintainance',
            ),
            'empty_value' => 'Select projectstatus'
        ));        
        $builder->add('platforms', 'entity', array(
            'class' => 'VlreleasesUserBundle:Platforms',
            'property' => 'platformName',
            'empty_value' => 'Select Platform',
        ));
        
    }

}

?>
