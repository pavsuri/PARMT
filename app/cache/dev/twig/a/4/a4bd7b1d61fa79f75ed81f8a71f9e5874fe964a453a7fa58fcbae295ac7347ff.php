<?php

/* VlreleasesUserBundle:MobileDevice:addProducts.html.twig */
class __TwigTemplate_a4bd7b1d61fa79f75ed81f8a71f9e5874fe964a453a7fa58fcbae295ac7347ff extends Twig_Template
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
        $__internal_370b7c696715f799b960c95b3049d7962887bd62cba633b07539b4de955cdf9e = $this->env->getExtension("native_profiler");
        $__internal_370b7c696715f799b960c95b3049d7962887bd62cba633b07539b4de955cdf9e->enter($__internal_370b7c696715f799b960c95b3049d7962887bd62cba633b07539b4de955cdf9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:MobileDevice:addProducts.html.twig"));

        // line 1
        echo "
<div id='addProductsHTML'>
    <form id='AddProductsForm' action='";
        // line 3
        echo $this->env->getExtension('routing')->getPath("vlreleases_products_register");
        echo "' method='POST'>
        <div class=\"widget-content\">
            <div class=\"addTextBoxDiv\">
                <div class=\"addTask\">
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), "category", array()), 'errors');
        echo "
                            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), "category", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Select category")));
        echo "
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), "productname", array()), 'errors');
        echo "
                            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), "productname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Product name")));
        echo "
                        </div>
                        <div class=\"col-lg-3\" id=\"autocompleteId\">
                            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), "ownername", array()), 'errors');
        echo "
                            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), "ownername", array()), 'widget', array("attr" => array("class" => "ownernametypeahead form-control", "placeholder" => "Asset Owner")));
        echo "
\t\t            <span  id='searchownerspinner' style='display:none;'><img src=";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span>
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), "os", array()), 'errors');
        echo "
                            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), "os", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "os")));
        echo "
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), "brand", array()), 'errors');
        echo "
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), "brand", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Brand")));
        echo "
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), "serialNumber", array()), 'errors');
        echo "
                            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), "serialNumber", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Serial Number")));
        echo "
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), "version", array()), 'errors');
        echo "
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), "version", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "version")));
        echo "
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), "description", array()), 'errors');
        echo "
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "description")));
        echo "
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), "active", array()), 'errors');
        echo "
                            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), "active", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "active")));
        echo "
                        </div>
                        ";
        // line 45
        if (array_key_exists("errorValue", $context)) {
            // line 46
            echo "                            ";
            if (((isset($context["errorValue"]) ? $context["errorValue"] : $this->getContext($context, "errorValue")) > 0)) {
                // line 47
                echo "                                <div class=\"col-lg-3\">
                                    <h4 align=\"left\">*Product already existed</h4> 
                                </div>
                            ";
            }
            // line 51
            echo "                        ";
        }
        // line 52
        echo "
                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["addProductsForm"]) ? $context["addProductsForm"] : $this->getContext($context, "addProductsForm")), 'rest');
        echo "
                    </div>\t\t\t
                </div>\t\t\t\t\t\t
                <div class=\"row\">
                    <div class=\"col-lg-12\"> 
                        <input type=\"button\" class=\"btn btn-green\" name=\"btndeviceAddProduct\" id=\"btndeviceAddProduct\" value=\"Add\">
                        <span  id='spinnerAddDevice' style='display:none;'><img src=";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span>
                        <div class=\"btn btn-green\" name=\"btnCancel\" id=\"btnCancel\">Cancel</div>
                    </div>
                </div>
            </div>\t\t\t\t\t
        </div>\t\t\t\t
    </form>
</div>     ";
        
        $__internal_370b7c696715f799b960c95b3049d7962887bd62cba633b07539b4de955cdf9e->leave($__internal_370b7c696715f799b960c95b3049d7962887bd62cba633b07539b4de955cdf9e_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:MobileDevice:addProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 59,  145 => 53,  142 => 52,  139 => 51,  133 => 47,  130 => 46,  128 => 45,  123 => 43,  119 => 42,  113 => 39,  109 => 38,  103 => 35,  99 => 34,  93 => 31,  89 => 30,  83 => 27,  79 => 26,  73 => 23,  69 => 22,  63 => 19,  59 => 18,  55 => 17,  49 => 14,  45 => 13,  39 => 10,  35 => 9,  26 => 3,  22 => 1,);
    }
}
