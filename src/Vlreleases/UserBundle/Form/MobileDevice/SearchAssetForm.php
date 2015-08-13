<?php
namespace Vlreleases\UserBundle\Form\MobileDevice;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SearchAssetForm extends AbstractType
{
    public function getName() {
        return 'searchAsset';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('category', 'entity', array(
            'class' => 'VlreleasesUserBundle:Category',
            'property' => 'name',
            'empty_value' => 'Select Category'
        ));
        
	$builder->add('productname', 'entity', array(
            'class' => 'VlreleasesUserBundle:Product',
            'property' => 'productname',
            'empty_value' => 'Select Product'
        ));       
        
        

      
    }
}
?>
