<?php
namespace Vlreleases\UserBundle\Form\MobileDevice;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SearchProductForm extends AbstractType
{
    public function getName() {
        return 'searchProduct';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('category', 'entity', array(
            'class' => 'VlreleasesUserBundle:Category',
            'property' => 'name',
            'empty_value' => 'Select category'
        ));
         $builder->add('productname', 'text', array(	
        ));
	 
    
    }
}
?>
