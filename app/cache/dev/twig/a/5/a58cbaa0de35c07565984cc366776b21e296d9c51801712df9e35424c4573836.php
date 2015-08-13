<?php

/* VlreleasesUserBundle:MobileDevice:searchProducts.html.twig */
class __TwigTemplate_a58cbaa0de35c07565984cc366776b21e296d9c51801712df9e35424c4573836 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a6ce846d4f4b2b4dba45a32aee26ae3b180a6d3d60d69ccd057bb1eebde79c0 = $this->env->getExtension("native_profiler");
        $__internal_2a6ce846d4f4b2b4dba45a32aee26ae3b180a6d3d60d69ccd057bb1eebde79c0->enter($__internal_2a6ce846d4f4b2b4dba45a32aee26ae3b180a6d3d60d69ccd057bb1eebde79c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:MobileDevice:searchProducts.html.twig"));

        // line 1
        echo "<form id='searchProductform' action='";
        echo $this->env->getExtension('routing')->getPath("vlreleases_products_listDevice");
        echo "' method='POST'>

    <div class=\"widget-content\">\t\t\t\t\t
        <div class=\"row\">
            <div class=\"col-lg-2\">\t\t\t\t\t\t\t
                ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchProductForm"]) ? $context["searchProductForm"] : $this->getContext($context, "searchProductForm")), "category", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Select category")));
        echo " 
            </div>
            <div class=\"col-lg-2\">
                ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchProductForm"]) ? $context["searchProductForm"] : $this->getContext($context, "searchProductForm")), "productname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Product Name")));
        echo "
            </div>
            
            <div class=\"col-lg-2\">
                <span  id='spinnerSearchDevice' style='display:none;'><img src=";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span> 
                <div class=\"btn btn-green\" name=\"btnSubmit\" id=\"searchDeviceSubmit1\">Search</div>
            </div>
        </div>\t
    </div>
    <span style='display:none;' id='deviceNameListURL'>";
        // line 18
        echo $this->env->getExtension('routing')->getPath("vlreleases_products_listDeviceName");
        echo "</span>
</form>
";
        
        $__internal_2a6ce846d4f4b2b4dba45a32aee26ae3b180a6d3d60d69ccd057bb1eebde79c0->leave($__internal_2a6ce846d4f4b2b4dba45a32aee26ae3b180a6d3d60d69ccd057bb1eebde79c0_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:MobileDevice:searchProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 18,  44 => 13,  37 => 9,  31 => 6,  22 => 1,);
    }
}
