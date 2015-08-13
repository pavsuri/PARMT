<?php

namespace Vlreleases\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CreateProjectForm extends AbstractType {

    public function getName() {

        return 'createProjectform';
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('projName', 'text', array(
        ));
    }

}

?>
