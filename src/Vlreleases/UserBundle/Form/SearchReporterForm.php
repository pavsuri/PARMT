<?php
namespace Vlreleases\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SearchReporterForm extends AbstractType
{
    public function getName() {
        return 'searchReporterform';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array(	
            'required'    => false
        ));
        $builder->add('emailId', 'text', array(	
            'required'    => false
        ));
        
    }
}
?>
