<?php

/* VlreleasesUserBundle:User:managerDashboard.html.twig */
class __TwigTemplate_af3812ce0938302d3d673ce1a99062749735aef58cab890d418d15c6b8cbb02a extends Twig_Template
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
        $__internal_9f32ee1e390cff5e41d73427de0182f1339d104d2709eedb760013fdfe5a993a = $this->env->getExtension("native_profiler");
        $__internal_9f32ee1e390cff5e41d73427de0182f1339d104d2709eedb760013fdfe5a993a->enter($__internal_9f32ee1e390cff5e41d73427de0182f1339d104d2709eedb760013fdfe5a993a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:managerDashboard.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\"><head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>Niti</title>    
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
<script>
    \$(document).ready(
        function () {
            \$('#leaddashboardform_projects').change(
                    function () {
                        var projectId = \$(this).val();

                        \$.post(
                                '";
        // line 26
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_manager");
        echo "', {project: projectId}, function (data) {
                            (\$('#approved_id').html(data.allApprovals));
                            \$('#pendingApprovals_id').html(data.pendingApprovals);
                            \$('#resourceHours_id').html(data.resourceHours);
                            \$('#resources_Id').html(data.resources);

                            if (\$('#leaddashboardform_projects').val() != '') {
                                \$('.resourceAnchor1').show();
                                \$('.approveAnchor1').show();
                                \$('.resourceAnchor2').hide();
                                \$('.approveAnchor2').hide();
                            }
                            else {
                                \$('.resourceAnchor1').hide();
                                \$('.approveAnchor1').hide();
                                \$('.resourceAnchor2').show();
                                \$('.approveAnchor2').show();

                            }
                            if (data.allApprovals < 1) {
                                \$('.approveAnchor1').hide();
                                \$('.approveAnchor2').show();
                            }

                            if (data.resources < 1) {
                                \$('.resourceAnchor1').hide();
                                \$('.resourceAnchor2').show();
                            }
                       });
                });
        });
</script>
    </head>
    <body class=\"pace-done\">\t
        <div id=\"wrapper\">        
            ";
        // line 61
        $this->loadTemplate("VlreleasesUserBundle:User:layout.html.twig", "VlreleasesUserBundle:User:managerDashboard.html.twig", 61)->display($context);
        // line 62
        echo "            
            <div class=\"\" id=\"page-wrapper\" style=\"min-height: 863px;\">
                <div class=\"page-content page-content-ease-in\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"page-title\">
                                <h1>Dashboard</h1>                            
                            </div>
                        </div>                   
                    </div>

                    <div class=\"row marbottom\">\t\t\t\t
                        <div class=\"col-lg-12\">
                            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "projects", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </select>  
                        </div>               
                    </div>

                    <!-- Resource Status Start -->
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"circle-tile\">                           
                                <div class=\"circle-tile-heading blue\">

                                    ";
        // line 86
        if (($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "resources", array()) > 0)) {
            // line 87
            echo "                                        <a class=\"resourceAnchor1\" style=\"display:none\" href=";
            echo $this->env->getExtension('routing')->getPath("vlreleases_resourceNames_getResourcesNames");
            echo "><i class=\"fa fa-users fa-fw fa-3x\"></i></a>                        
                                        <a class=\"resourceAnchor2\" href=\"javascript:void(0)\"><i class=\"fa fa-users fa-fw fa-3x\"></i></a>
                                        ";
        } else {
            // line 90
            echo "                                        <i class=\"fa fa-tasks fa-fw fa-3x\"></i>
                                    ";
        }
        // line 92
        echo "

                                </div>                           
                                <div class=\"circle-tile-content blue\">
                                    <div class=\"circle-tile-description text-faded\" id=\"resources_Id\">";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "resources", array()), "html", null, true);
        echo "</div>
                                    <div class=\"circle-tile-number text-faded\">Resources</div>
                                    <div class=\"circle-tile-footer\"></div>
                                </div>
                            </div>
                        </div> 

                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"circle-tile\">
                                <div class=\"circle-tile-heading orange\">
                                    <i class=\"fa fa-clock-o fa-fw fa-3x\"></i>
                                </div>
                                <div class=\"circle-tile-content orange\">
                                    <div class=\"circle-tile-description text-faded\" id=\"resourceHours_id\">";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "resourceHours", array()), "html", null, true);
        echo "</div>
                                    <div class=\"circle-tile-number text-faded\">Effort</div>
                                    <div class=\"circle-tile-footer\"></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"circle-tile\">
                                <div class=\"circle-tile-heading red\">
                                    ";
        // line 118
        if (($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "pendingApprovals", array()) > 0)) {
            // line 119
            echo "                                        <a href=";
            echo $this->env->getExtension('routing')->getPath("vlreleases_user_taskapproval");
            echo "><i class=\"fa fa-tasks fa-fw fa-3x\"></i></a>
                                        ";
        } else {
            // line 121
            echo "                                        <i class=\"fa fa-tasks fa-fw fa-3x\"></i>
                                    ";
        }
        // line 123
        echo "                                </div>
                                <div class=\"circle-tile-content red\">
                                    <div class=\"circle-tile-description text-faded\" id=\"pendingApprovals_id\">";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "pendingApprovals", array()), "html", null, true);
        echo "</div>
                                    <div class=\"circle-tile-number text-faded\">Pending</div>
                                    <div class=\"circle-tile-footer\"></div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"circle-tile\">
                                <div class=\"circle-tile-heading green\">

                                    ";
        // line 136
        if (($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "allApprovals", array()) > 0)) {
            // line 137
            echo "                                        <a class=\"approveAnchor1\" style=\"display:none\" href=";
            echo $this->env->getExtension('routing')->getPath("vlreleases_approvalList_approvalList");
            echo "><i class=\"fa fa-tasks fa-fw fa-3x\"></i></a>
                                        <a class=\"approveAnchor2\"  href=\"javascript:void(0)\" ><i class=\"fa fa-tasks fa-fw fa-3x\"></i></a>

                                    ";
        } else {
            // line 141
            echo "                                        <i class=\"fa fa-tasks fa-fw fa-3x\"></i>
                                    ";
        }
        // line 143
        echo "
                                </div>
                                <div class=\"circle-tile-content green\">
                                    <div class=\"circle-tile-description text-faded\" id=\"approved_id\">";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "allApprovals", array()), "html", null, true);
        echo "</div>
                                    <div class=\"circle-tile-number text-faded\">Approved</div>
                                    <div class=\"circle-tile-footer\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Resource Status End -->


                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"tile green\" style=\"height: 320px\">
                                <h4>Resource Utilization</h4>
                                <p></p>
                                <div style=\"position: relative;\" id=\"morris-chart-dashboard\"></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>\t

        <!-- global scripts -->
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>
        <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
        <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>

        <!-- morris charts -->
        <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "raphael-2.js\"></script>
        <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "morris.js\"></script>

        <!-- theme scripts -->
        <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "chart-demo.js\"></script>
        <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>
        <script src=\"http://malsup.github.com/jquery.form.js\"></script> 
        <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "typeahead/js/bootstrap-typeahead.js\"></script>
        <script>
            var hours_data = \$.parseJSON('";
        // line 187
        echo $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "resourceHoursPerDate", array());
        echo "');
            var userNameYkey = 'hours';
            var userNameLabel = 'Hours';
        </script>

    </body>
</html>
";
        
        $__internal_9f32ee1e390cff5e41d73427de0182f1339d104d2709eedb760013fdfe5a993a->leave($__internal_9f32ee1e390cff5e41d73427de0182f1339d104d2709eedb760013fdfe5a993a_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:managerDashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 187,  298 => 185,  293 => 183,  289 => 182,  283 => 179,  279 => 178,  273 => 175,  269 => 174,  265 => 173,  235 => 146,  230 => 143,  226 => 141,  218 => 137,  216 => 136,  202 => 125,  198 => 123,  194 => 121,  188 => 119,  186 => 118,  174 => 109,  158 => 96,  152 => 92,  148 => 90,  141 => 87,  139 => 86,  125 => 75,  110 => 62,  108 => 61,  70 => 26,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
