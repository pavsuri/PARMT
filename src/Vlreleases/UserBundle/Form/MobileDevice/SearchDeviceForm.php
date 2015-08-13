<?php
namespace Vlreleases\UserBundle\Form\MobileDevice;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SearchDeviceForm extends AbstractType
{
    public function getName() {
        return 'searchDevice';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('os', 'entity', array(
            'class' => 'VlreleasesUserBundle:MobileOs',
            'property' => 'name',
            'empty_value' => 'Select OS'
        ));
        
	$builder->add('brand', 'entity', array(
            'class' => 'VlreleasesUserBundle:MobileBrand',
            'property' => 'name',
            'empty_value' => 'Select Brand'
        ));       

        $builder->add('name', 'text', array(	
        ));
    }
}
?>
