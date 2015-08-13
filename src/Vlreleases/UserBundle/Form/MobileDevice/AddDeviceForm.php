<?php

namespace Vlreleases\UserBundle\Form\MobileDevice;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AddDeviceForm extends AbstractType {

    public function getName() {
        return 'addDevice';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
   {
        $builder->add('project', 'entity', array(
            'class' => 'VlreleasesUserBundle:Project',
            'property' => 'name',
            'empty_value' => 'Select Project'
        ));
        $builder->add('id', 'hidden', array(
        ));
        $builder->add('name', 'text', array(
        ));

        $builder->add('version', 'text', array(
        ));

        $builder->add('brand', 'entity', array(
            'class' => 'VlreleasesUserBundle:MobileBrand',
            'property' => 'name',
            'empty_value' => 'Select Brand'
        ));

        $builder->add('os', 'entity', array(
            'class' => 'VlreleasesUserBundle:MobileOs',
            'property' => 'name',
            'empty_value' => 'Select OS'
        ));
        $builder->add('active', 'choice', array(
            'choices' => array(
                '1' => 'Active',
                '0' => 'Inactive'
            ),
            'empty_value' => 'Select Status'
        ));

        $builder->add('UUID', 'text', array(
        ));

        $builder->add('serialNumber', 'text', array(
        ));
    }

}

?>
