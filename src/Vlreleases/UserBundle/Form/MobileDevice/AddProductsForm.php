<?php

namespace Vlreleases\UserBundle\Form\MobileDevice;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AddProductsForm extends AbstractType {

    public function getName() {
        return 'addProducts';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
   {

        $builder->add('id', 'hidden', array(
        ));
        $builder->add('category', 'entity', array(
            'class' => 'VlreleasesUserBundle:Category',
            'property' => 'name',
            'empty_value' => 'Select Category'
        ));

        $builder->add('productname', 'text', array(
        ));
	$builder->add('ownername', 'text', array(
        ));               
        $builder->add('os', 'text', array(
        ));
        $builder->add('brand', 'text', array(
        ));
        $builder->add('serialNumber', 'text', array(
        ));
        $builder->add('version', 'text', array(
        ));
        $builder->add('description', 'text', array(
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
