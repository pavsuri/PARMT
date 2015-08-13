<?php

/* VlreleasesUserBundle:User:liveApps.html.twig */
class __TwigTemplate_fc7ef46bad4091cef7d72d6fdfc13d77d3b0f99a0e41b9df078cf22b3dce01e5 extends Twig_Template
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
        $__internal_a8b4f49b730428bcc0d447ea637b1904f2e7adb918a328367c78c3a5a422f19e = $this->env->getExtension("native_profiler");
        $__internal_a8b4f49b730428bcc0d447ea637b1904f2e7adb918a328367c78c3a5a422f19e->enter($__internal_a8b4f49b730428bcc0d447ea637b1904f2e7adb918a328367c78c3a5a422f19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:liveApps.html.twig"));

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

    </head>
    <body class=\"pace-done\">\t
        <div id=\"wrapper\">      
            ";
        // line 22
        $this->loadTemplate("VlreleasesUserBundle:User:layout.html.twig", "VlreleasesUserBundle:User:liveApps.html.twig", 22)->display($context);
        // line 23
        echo "            <div class=\"\" id=\"page-wrapper\">
                <div class=\"page-content page-content-ease-in\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"page-title\">
                                <h1>Live Apps</h1>                            
                            </div>
                        </div>                   
                    </div>
                    ";
        // line 32
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getAdd", array()) == "true")) {
            // line 33
            echo "                    <button  id=\"addliveappdet\"><i class=\"fa fa-plus\"></i>Add App Details</button>
                    ";
        }
        // line 35
        echo "                    <div class=\"row app-register\">
                        <div class=\"col-lg-12\">
                            <div class=\"widget\" id=\"addApp\">
                                <!-- Widget Header -->

                                <div class=\"widget-head\">
                                    <div class=\"pull-left\">Add Live Apps Details</div>\t\t\t\t\t
                                </div>

                                <!-- Widget Header End-->
                                <div class=\"clearfix\"></div>\t\t\t\t
                                <!-- Widget content -->
                                <li id='addLiveApp' style=\"list-style: none;\">
                                    ";
        // line 48
        $this->loadTemplate("VlreleasesUserBundle:User:addLiveApp.html.twig", "VlreleasesUserBundle:User:liveApps.html.twig", 48)->display($context);
        // line 49
        echo "                                </li>
                            </div>
                        </div>
                    </div>
\t\t";
        // line 53
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getView", array()) == "true")) {
            // line 54
            echo "
                     <div class=\"profileTable\">
                         <div class=\"table-responsive\">
                            <table cellspacing=\"0\" cellpadding=\"5\" border=\"0\" class=\"table table-bordered table-striped\" id=\"userprofile-table\">
                            <thead class=\"table-head\">
                                
                                <tr>
                                    <th>S.No</th>
                                    <th>App Name</th>
                                    <th>OS</th>
                                    <th>Uploaded Version</th>                    
                                    <th>iTunes Link/Play Store Link</th>                                                                       
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                ";
            // line 70
            $context["counter"] = 1;
            // line 71
            echo "                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "liveApps", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 72
                echo "                                        <td>";
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "</td>
                                        <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getAppName", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getOs", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getVersion", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 76
                if ((twig_slice($this->env, $this->getAttribute($context["data"], "getAppLink", array()), 0, 5) == "https")) {
                    // line 77
                    echo "                                            <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getAppLink", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getAppLink", array()), "html", null, true);
                    echo "</a></td>
                                        ";
                } else {
                    // line 79
                    echo "                                            <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getAppLink", array()), "html", null, true);
                    echo "</td>
                                        ";
                }
                // line 81
                echo "                                    </tr>
                                    ";
                // line 82
                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                // line 83
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "                               
                            </tbody>                        
                        </table>
                </div>
                     </div>
\t\t";
        }
        // line 115
        echo "<!-- global scripts-->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>


<!-- morris charts -->
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "raphael-2.js\"></script>
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "morris.js\"></script>

<!-- theme scripts -->
<!--<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "chart-demo.js\"></script> -->
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>

<script src=\"http://malsup.github.com/jquery.form.js\"></script> 
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "typeahead/js/bootstrap-typeahead.js\"></script>


<script>
        \$(document).ready(
             function (){ 
                 \$(\"#addApp\").hide();
          //animation for appp added success/failure message
          var result = ";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["addFlag"]) ? $context["addFlag"] : $this->getContext($context, "addFlag")), "html", null, true);
        echo ";
                if(result == 1)
                {
                    \$(\"#addappresult\").html(\"App added successfully\");
                      setTimeout(function () {
                            \$(\"#addappresult\").fadeOut(1000);
                                }, 10000)
                    
                    \$('#addLiveAppform_OS').val('');
                    \$('#addLiveAppform_version').val('');
                    \$('#addLiveAppform_link').val('');
                    
                }
             \$(\"button\").click(function(){
                    \$(\"#addApp\").toggle();
                });    
    });
            </script>
</body>
</html>

";
        
        $__internal_a8b4f49b730428bcc0d447ea637b1904f2e7adb918a328367c78c3a5a422f19e->leave($__internal_a8b4f49b730428bcc0d447ea637b1904f2e7adb918a328367c78c3a5a422f19e_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:liveApps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 139,  225 => 131,  219 => 128,  215 => 127,  209 => 124,  205 => 123,  198 => 119,  194 => 118,  190 => 117,  186 => 115,  173 => 83,  171 => 82,  168 => 81,  162 => 79,  154 => 77,  152 => 76,  148 => 75,  144 => 74,  140 => 73,  135 => 72,  130 => 71,  128 => 70,  110 => 54,  108 => 53,  102 => 49,  100 => 48,  85 => 35,  81 => 33,  79 => 32,  68 => 23,  66 => 22,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
