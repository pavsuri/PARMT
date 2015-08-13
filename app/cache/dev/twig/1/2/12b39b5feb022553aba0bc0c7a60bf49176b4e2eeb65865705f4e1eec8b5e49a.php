<?php

/* VlreleasesUserBundle:UserProfile:workProfile.html.twig */
class __TwigTemplate_12b39b5feb022553aba0bc0c7a60bf49176b4e2eeb65865705f4e1eec8b5e49a extends Twig_Template
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
        $__internal_5f4ba79de895a0557e33041360ed149b42aa397c611def2fd52ae95fcadb942e = $this->env->getExtension("native_profiler");
        $__internal_5f4ba79de895a0557e33041360ed149b42aa397c611def2fd52ae95fcadb942e->enter($__internal_5f4ba79de895a0557e33041360ed149b42aa397c611def2fd52ae95fcadb942e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:UserProfile:workProfile.html.twig"));

        // line 1
        echo "<form id='workdetailsform' action='";
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_profile_handleWorkProfileData");
        echo "' method='POST'>

    <div class=\"userTitle\"><a href=\"javascript:void(0)\">Work<span class=\"pull-right\"><i class=\"iconChange fa fa-sort-down\"></i></span></a></div>
    <div class=\"userHolder\">
        ";
        // line 5
        if ( !$this->getAttribute($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "vars", array()), "valid", array())) {
            // line 6
            echo "            <div class=\"row error-div\">

                <div class=\"col-lg-12\">
                    <div class=\"alert alert-error\">
                        ";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "department", array()), 'errors');
            echo "
                        ";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "designation", array()), 'errors');
            echo "
                        ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "band", array()), 'errors');
            echo " 
                        ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "team", array()), 'errors');
            echo " 
                        ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "workStation", array()), 'errors');
            echo "    
                        ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "extensionNumber", array()), 'errors');
            echo "
                        ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "dateOfJoining", array()), 'errors');
            echo "   
                        ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "systemIp", array()), 'errors');
            echo "
                        ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "systemId", array()), 'errors');
            echo "
                        ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "assetTag", array()), 'errors');
            echo "
                        ";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "totalExperience", array()), 'errors');
            echo "
                    </div>

                </div>

            </div>
        ";
        }
        // line 27
        echo "        <div class=\"row\">
            <div class=\"col-lg-3\"> 
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "department", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Select Department")));
        echo "
            </div>                                                            
            <div class=\"col-lg-3\">

                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "designation", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Select Designation")));
        echo "
            </div>
            <div class=\"col-lg-3\">

                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "band", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Select Designation")));
        echo "
            </div>
            <div class=\"col-lg-3\">

                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "team", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Select Team")));
        echo "
            </div>
            <div class=\"col-lg-3\">

                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "workStation", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Work Station")));
        echo "
            </div>\t\t\t\t\t\t\t
            <div class=\"col-lg-3\">

                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "extensionNumber", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ext.No")));
        echo "
            </div>
            <div class=\"col-lg-3\">   

                <div id=\"dateofjoin\" class=\"input-append\">\t\t\t\t\t\t\t
                    <span class=\"add-on\">
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "dateOfJoining", array()), 'widget', array("attr" => array("id" => "datePicker", "data-format" => "yyyy-MM-dd", "class" => "form-control", "placeholder" => "Date of Joining")));
        echo "                                                                    
                         <i class=\"fa fa-calendar icon-calendar\"></i>
                    </span>
                </div>
            </div>
            <div class=\"col-lg-3\">

                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "systemIp", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "System IP")));
        echo "
            </div>
            <div class=\"col-lg-3\">

                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "systemId", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "System Login ID")));
        echo "                                                            
            </div>
            <div class=\"col-lg-3\">  

                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "assetTag", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "VL Asset Tag")));
        echo "                                                            
            </div>
            <div class=\"col-lg-3\">

                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "totalExperience", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Total Years of Experience")));
        echo "                                                            
            </div>
            <div class=\"col-lg-3\">
                ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), "leadName", array()), 'widget', array("attr" => array("class" => "leadName_typeahead form-control", "placeholder" => "Reporting Lead")));
        echo "                                                            
                <span  id='searchLead' style='display:none;'><img src=";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span>
            </div>
            
            <div class=\"col-lg-3\">\t\t\t\t\t\t\t
                <input type=\"button\" class=\"btn btn-green\" name=\"btnworkAdd\" id=\"btnworkAdd\" value=\"Add\">
                <span  id='spinnerWorkProfile' style='display:none;'><img src=";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span>
            </div>
           
        </div>
    </div>
    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["userWorkProfileForm"]) ? $context["userWorkProfileForm"] : $this->getContext($context, "userWorkProfileForm")), 'rest');
        echo "
</form>
";
        
        $__internal_5f4ba79de895a0557e33041360ed149b42aa397c611def2fd52ae95fcadb942e->leave($__internal_5f4ba79de895a0557e33041360ed149b42aa397c611def2fd52ae95fcadb942e_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:UserProfile:workProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 88,  185 => 83,  177 => 78,  173 => 77,  167 => 74,  160 => 70,  153 => 66,  146 => 62,  136 => 55,  127 => 49,  120 => 45,  113 => 41,  106 => 37,  99 => 33,  92 => 29,  88 => 27,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  54 => 14,  50 => 13,  46 => 12,  42 => 11,  38 => 10,  32 => 6,  30 => 5,  22 => 1,);
    }
}
