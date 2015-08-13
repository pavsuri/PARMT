<?php

namespace Vlreleases\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AddLiveAppForm extends AbstractType {

    public function getName() {

        return 'addLiveAppform';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('AppName', 'text', array(
        ));
        $builder->add('OS', 'choice', array(
            'choices' => array(
                'iOS' => 'iOS',
                'android' => 'android'
            ),
            'empty_value' => 'Select OS'
        ));
        $builder->add('version', 'text', array(
        ));
         $builder->add('link', 'text', array(
        ));
       
        
        
    }

}

?>
