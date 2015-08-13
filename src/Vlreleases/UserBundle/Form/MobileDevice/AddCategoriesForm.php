<?php

namespace Vlreleases\UserBundle\Form\MobileDevice;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AddCategoriesForm extends AbstractType {

    public function getName() {
        return 'addCategories';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('id', 'hidden', array(
        ));

        $builder->add('name', 'text', array(
        ));

        $builder->add('active', 'choice', array(
            'choices' => array(
                '1' => 'Active',
                '0' => 'Inactive'
            ),
            'empty_value' => 'Select Status'
        ));
    }

}

?>
