<?php

/* VlreleasesUserBundle:UserProfile:personalProfile.html.twig */
class __TwigTemplate_56625a123488180d5fed4f017b7f61b03ea3e6a8bdd856213f806299b6740df2 extends Twig_Template
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
        $__internal_506f12df99c9d7e72c94b21f96e0509f9e46c8da9f5961ad12e22cb71b16635f = $this->env->getExtension("native_profiler");
        $__internal_506f12df99c9d7e72c94b21f96e0509f9e46c8da9f5961ad12e22cb71b16635f->enter($__internal_506f12df99c9d7e72c94b21f96e0509f9e46c8da9f5961ad12e22cb71b16635f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:UserProfile:personalProfile.html.twig"));

        // line 1
        echo "<html>
    <head>
        <title>
            personalprofile
        </title>
    </head>
    <body>
        <form id='personaldetailsform' action='";
        // line 8
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_profile_handlePersonalProfileData");
        echo "' method='POST'>
            <div class=\"userTitle\"><a href=\"javascript:void(0)\">Personal<span class=\"pull-right\"><i class=\"iconChange fa fa-sort-down\"></i></span></a></div>
            <div class=\"userHolder showDiv\">
                ";
        // line 11
        if ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 12
            echo "                    <div class=\"row error-div\">
                        <div class=\"col-lg-12\">
                            <div class=\"alert alert-error\">
                                ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
            echo "
                                ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employeeId", array()), 'errors');
            echo "  
                                ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dob", array()), 'errors');
            echo "
                                ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobile", array()), 'errors');
            echo "
                                ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo", array()), 'errors');
            echo "
                                ";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
            echo "
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 25
        echo "                <div class=\"row\">
                    <div class=\"col-lg-3\">       
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget');
        echo " 
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name")));
        echo "
                    </div>
                    <div class=\"col-lg-3\">   
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employeeId", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Emp ID")));
        echo "
                    </div>
                    <div class=\"col-lg-3\">      
                        <div id=\"datepicker\" class=\"input-append\">
                           <span class=\"add-on\">
                                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dob", array()), 'widget', array("attr" => array("id" => "datePicker", "data-format" => "yyyy-MM-dd", "class" => "form-control", "placeholder" => "Date Of Birth")));
        echo "                                                                    

                                <i class=\"fa fa-calendar icon-calendar\"></i>
                            </span>
                        </div>
                    </div>
                    <div class=\"col-lg-3\">  
                        <div id=\"datepicker\" class=\"input-append\">
                            <span class=\"add-on\">
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "doj", array()), 'widget', array("attr" => array("id" => "datePicker", "data-format" => "yyyy-MM-dd", "class" => "form-control", "placeholder" => "Date Of Joining")));
        echo "                                                                    
                                <i class=\"fa fa-calendar icon-calendar\"></i>
                            </span>
                        </div>                                                
                    </div> 

                    <div class=\"col-lg-3\">  
                        <div id=\"datepicker\" class=\"input-append\">
                            <span class=\"add-on\">
                                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dojj", array()), 'widget', array("attr" => array("id" => "datePicker", "data-format" => "yyyy-MM-dd", "class" => "form-control", "placeholder" => "Date Of Joining To Jyo")));
        echo "                                                                    
                                <i class=\"fa fa-calendar icon-calendar\"></i>
                            </span>
                        </div>                                                
                    </div> 
                    <div class=\"col-lg-3\">
                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobile", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Phone")));
        echo "
                    </div>
                    <div class=\"col-lg-3\">  
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email")));
        echo "
                   </div>
                        <div class=\"clearfix\"></div>                           
                    <div class=\"col-lg-3\"> 
                        <span class=\"btn btn-upload fileinput-button\">
                            <i class=\"fa fa-plus\"></i>
                            <span>Select Photo</span>
                            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photoUploader", array()), 'widget');
        echo " 
                        </span>
                    </div>
                    <div class=\"col-lg-3\">
                        <button id='upload' class=\"btn btn-success fileinput-button\">Upload Photo</button> <span style='display:none;' id='selectedfile'></span>
                        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo", array()), 'widget');
        echo "
                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    </div>
                    <div class=\"col-lg-3\">\t
                        <input type=\"button\" class=\"btn btn-green\" name=\"btnpersonalAdd\" id=\"btnpersonalAdd\" value=\"Add\">
                        <span id='spinnerPersonalProfile' style='display:none;'><img src=";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span>
                    </div>                        
                </div>\t\t\t\t\t\t\t
            </div>
        </form>
    </body>
</html>";
        
        $__internal_506f12df99c9d7e72c94b21f96e0509f9e46c8da9f5961ad12e22cb71b16635f->leave($__internal_506f12df99c9d7e72c94b21f96e0509f9e46c8da9f5961ad12e22cb71b16635f_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:UserProfile:personalProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 80,  155 => 76,  151 => 75,  143 => 70,  133 => 63,  127 => 60,  118 => 54,  106 => 45,  94 => 36,  86 => 31,  80 => 28,  76 => 27,  72 => 25,  64 => 20,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  44 => 15,  39 => 12,  37 => 11,  31 => 8,  22 => 1,);
    }
}
