<?php

namespace Vlreleases\UserBundle\Form\UserProfile;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PersonalDetailsForm extends AbstractType {

    public function getName() {
        return 'userpersonaldetails';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('id', 'hidden');
        $builder->add('name', 'text');
        $builder->add('employeeId', 'text');
        $builder->add('dob', 'date', array('input' => 'datetime',
            'widget' => 'single_text'));
        $builder->add('doj', 'date', array('input' => 'datetime', 
            'widget' => 'single_text'));
        $builder->add('dojj', 'date', array('input' => 'datetime', 
            'widget' => 'single_text'));
        $builder->add('mobile', 'text');
        $builder->add('photoUploader', 'file', array('data_class' => null, 
            'mapped' => false));
        $builder->add('photo', 'hidden');
        $builder->add('email', 'text');
    }

}

?>
