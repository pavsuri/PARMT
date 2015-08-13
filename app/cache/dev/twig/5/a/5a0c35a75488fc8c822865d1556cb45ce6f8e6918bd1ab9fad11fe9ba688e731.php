<?php

/* VlreleasesUserBundle:User:dashboard.html.twig */
class __TwigTemplate_5a0c35a75488fc8c822865d1556cb45ce6f8e6918bd1ab9fad11fe9ba688e731 extends Twig_Template
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
        $__internal_f37a156c19ec44b1e7ad76dca9878b602bae1c2b378c26910674f5036b9a7ebd = $this->env->getExtension("native_profiler");
        $__internal_f37a156c19ec44b1e7ad76dca9878b602bae1c2b378c26910674f5036b9a7ebd->enter($__internal_f37a156c19ec44b1e7ad76dca9878b602bae1c2b378c26910674f5036b9a7ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:dashboard.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\"><head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>NITI</title>    
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "bootstrap.css\" rel=\"stylesheet\"> 
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["fontsPath"]) ? $context["fontsPath"] : $this->getContext($context, "fontsPath")), "html", null, true);
        echo "font-awesome.css\" rel=\"stylesheet\">\t
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "morris.css\" rel=\"stylesheet\">    
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "style.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "plugins.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "demo.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "bootstrap-datetimepicker.css\" rel=\"stylesheet\">
       <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
    </head>
    <body class=\"pace-done\">\t
        <div id=\"wrapper\"> 
            ";
        // line 20
        $this->loadTemplate("VlreleasesUserBundle:User:layout.html.twig", "VlreleasesUserBundle:User:dashboard.html.twig", 20)->display($context);
        // line 21
        echo "            
            <div class=\"\" id=\"page-wrapper\">
                <div class=\"page-content page-content-ease-in\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"page-title\">
                                <h1>Dashboard</h1>                            
                            </div>
                        </div>                   
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"tile green\" style=\"height: 320px\">
                                <h4>Hours / Month</h4>
                                <p></p>
                                <div style=\"position: relative;\" id=\"morris-chart-dashboard\"></div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12 dailyTaskHolder\" id = \"dashboardForm\">
                            <div class=\"widget\">
                                <!-- Widget head -->
                                <div class=\"widget-head\">
                                    <div class=\"pull-left\">Quick Daily Task</div>                  
                                    <div class=\"clearfix\"></div>
                                </div>              

                                <!-- Widget content -->
                                <form ";
        // line 52
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_homepage");
        echo " method=\"post\">
                                    ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("vlreleases_user_login"), "method" => "POST"));
        echo "
                                    <div class=\"widget-content\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-3\">                               
                                                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "projects", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            </div>
                                            <div class=\"col-lg-3\">                               
                                                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "activities", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\"> 
                                                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "task", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Task")));
        echo " 

                                            </div>

                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-3\">\t\t\t\t\t\t
                                                <div id=\"timepicker\" class=\"input-append date\">
                                                    <span class=\"add-on\">\t\t\t\t\t\t\t\t\t
                                                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "totalHours", array()), 'widget', array("attr" => array("class" => "form-control", "data-format" => "hh:mm", "placeholder" => "Total Hours")));
        echo " 

                                                        <i class=\"fa fa-clock-o\"></i>
                                                    </span>
                                                </div>\t\t\t\t\t\t\t\t
                                            </div>
                                            <div class=\"col-lg-3\"> 
                                                <button class=\"btn btn-green\"  type = \"submit\" name=\"btnSub\" id=\"btnSub\">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>


                            <!-- Widget ends -->
                        </div>
                    </div>
                </div>
            </div>
        </div>\t

        <!-- global scripts -->
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>

        <!-- morris charts -->
        <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "raphael-2.js\"></script>
        <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "morris.js\"></script>

        <!-- theme scripts -->
        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "chart-demo.js\"></script>
        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>
        <script src=\"http://malsup.github.com/jquery.form.js\"></script> 
        <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "typeahead/js/bootstrap-typeahead.js\"></script>
        <script>
            var hours_data = \$.parseJSON('";
        // line 112
        echo $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userHoursByDay", array());
        echo "');
            var userNameYkey = 'hours';
            var userNameLabel = 'Hours';
            var hideSaveOption = '";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "hideSaveOption", array()), "html", null, true);
        echo "';
            if (hideSaveOption) {
                \$('#dashboardForm').hide();
            }
        </script>
       
    </body>
</html>";
        
        $__internal_f37a156c19ec44b1e7ad76dca9878b602bae1c2b378c26910674f5036b9a7ebd->leave($__internal_f37a156c19ec44b1e7ad76dca9878b602bae1c2b378c26910674f5036b9a7ebd_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 115,  201 => 112,  196 => 110,  191 => 108,  187 => 107,  181 => 104,  177 => 103,  171 => 100,  167 => 99,  163 => 98,  136 => 74,  124 => 65,  116 => 60,  110 => 57,  103 => 53,  99 => 52,  66 => 21,  64 => 20,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
