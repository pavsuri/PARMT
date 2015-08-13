<?php

/* VlreleasesUserBundle:MobileDevice:addCategories.html.twig */
class __TwigTemplate_b82c1776b2138b3861802b076e81023960cae25b57392c9406e9dd9222eec407 extends Twig_Template
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
        $__internal_ce59f1cedb666f6070ae0ff37f2826716a0b074ef1bbf78930c577f7f01522d3 = $this->env->getExtension("native_profiler");
        $__internal_ce59f1cedb666f6070ae0ff37f2826716a0b074ef1bbf78930c577f7f01522d3->enter($__internal_ce59f1cedb666f6070ae0ff37f2826716a0b074ef1bbf78930c577f7f01522d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:MobileDevice:addCategories.html.twig"));

        // line 1
        echo "<div id='addCategoriesHTML'>
    <form id='AddCategoriesForm' action='";
        // line 2
        echo $this->env->getExtension('routing')->getPath("vlreleases_categories_register");
        echo "' method='POST'>
        <div class=\"widget-content\">
            <div class=\"addTextBoxDiv\">
                <div class=\"addTask\">
                    <div class=\"row\">   
                        <div class=\"col-lg-3\">
                            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addCategoriesForm"]) ? $context["addCategoriesForm"] : $this->getContext($context, "addCategoriesForm")), "name", array()), 'errors');
        echo "
                            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addCategoriesForm"]) ? $context["addCategoriesForm"] : $this->getContext($context, "addCategoriesForm")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "name")));
        echo "
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addCategoriesForm"]) ? $context["addCategoriesForm"] : $this->getContext($context, "addCategoriesForm")), "active", array()), 'errors');
        echo "
                            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addCategoriesForm"]) ? $context["addCategoriesForm"] : $this->getContext($context, "addCategoriesForm")), "active", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "active")));
        echo "
                        </div>
                        ";
        // line 15
        if (array_key_exists("errorValue", $context)) {
            // line 16
            echo "                            ";
            if (((isset($context["errorValue"]) ? $context["errorValue"] : $this->getContext($context, "errorValue")) > 0)) {
                // line 17
                echo "                                <div class=\"col-lg-3\">
                                    <h4 align=\"left\">* Category already existed</h4> 
                                </div>
                            ";
            }
            // line 21
            echo "                        ";
        }
        // line 22
        echo "
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["addCategoriesForm"]) ? $context["addCategoriesForm"] : $this->getContext($context, "addCategoriesForm")), 'rest');
        echo "
                    </div>\t\t\t
                </div>\t\t\t\t\t\t
                <div class=\"row\">
                    <div class=\"col-lg-12\"> 
                        <!--<div class=\"btn btn-green\" name=\"btnSave\" id=\"btnSave\">Submit</div>--->
                        <input type=\"button\" class=\"btn btn-green\" name=\"btndeviceAddCategory\" id=\"btndeviceAddCategory\" value=\"Add\">

                        <span  id='spinnerShow' style='display:none;'><img src=";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span>
                        <div class=\"btn btn-green\" name=\"btnCancel\" id=\"btnCancel\">Cancel</div>
                    </div>
                </div>
            </div>\t\t\t\t\t
        </div>\t\t\t\t
    </form>
</div>  

";
        
        $__internal_ce59f1cedb666f6070ae0ff37f2826716a0b074ef1bbf78930c577f7f01522d3->leave($__internal_ce59f1cedb666f6070ae0ff37f2826716a0b074ef1bbf78930c577f7f01522d3_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:MobileDevice:addCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 31,  70 => 23,  67 => 22,  64 => 21,  58 => 17,  55 => 16,  53 => 15,  48 => 13,  44 => 12,  38 => 9,  34 => 8,  25 => 2,  22 => 1,);
    }
}
