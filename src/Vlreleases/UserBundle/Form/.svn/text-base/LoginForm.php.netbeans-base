<?php

namespace Vlreleases\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LoginForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email','text')
            ->add('password','password',array('mapped' => false));
    }

    public function getName()
    {
        return 'loginform';
    }
}

?>