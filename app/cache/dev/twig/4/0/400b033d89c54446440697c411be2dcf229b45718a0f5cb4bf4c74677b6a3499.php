<?php

/* VlreleasesUserBundle:User:user-reporters.html.twig */
class __TwigTemplate_400b033d89c54446440697c411be2dcf229b45718a0f5cb4bf4c74677b6a3499 extends Twig_Template
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
        $__internal_877f2873528e6ef9d49315768c09a839e06d6e3aeeef0bedabf083a94fdcca3d = $this->env->getExtension("native_profiler");
        $__internal_877f2873528e6ef9d49315768c09a839e06d6e3aeeef0bedabf083a94fdcca3d->enter($__internal_877f2873528e6ef9d49315768c09a839e06d6e3aeeef0bedabf083a94fdcca3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:user-reporters.html.twig"));

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
        <!--[if (lt IE 9) & (!IEMobile)]>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "respond.src.js\"></script>
        <![endif]-->
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>

    </head>
    <body class=\"pace-done\">\t
        <div id=\"wrapper\">      
             ";
        // line 24
        $this->loadTemplate("VlreleasesUserBundle:User:layout.html.twig", "VlreleasesUserBundle:User:user-reporters.html.twig", 24)->display($context);
        // line 25
        echo "
            <div class=\"\" id=\"page-wrapper\">
                <div class=\"page-content page-content-ease-in user-reporter\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"page-title\">
                                <h1>User-Reporters</h1>                            
                            </div>
                            <div>
                                <p class=\"radioBtn\"><strong>Filter By:</strong>
                                    <span> <input type=\"radio\" name=\"filterReporters\" value=\"Jyo\">Reporting To Jyo</span>
                                    <span> <input type=\"radio\" name=\"filterReporters\" value=\"Non Jyo\">Not Reporting To Jyo</span>
                                    <span> <input type=\"radio\" name=\"filterReporters\" value=\"Display All\">Display All</span>
                                </p>
                               
                            </div>
                            <div class=\"widget device-search\">
                                <!-- Widget Header -->
                                <div class=\"widget-head\">
                                    <div class=\"pull-left\">Search</div>\t\t\t\t\t
                                </div>
                                <!-- Widget Header End-->
                                <div class=\"clearfix\"></div>\t\t\t\t
                                <!-- Widget content -->
                                <!---- include searchOptions.html.twig----->
                                ";
        // line 50
        $this->loadTemplate("VlreleasesUserBundle:User:searchReporter.html.twig", "VlreleasesUserBundle:User:user-reporters.html.twig", 50)->display($context);
        // line 51
        echo "                            </div>

                        </div> 
                    </div>
                    <div class=\"userPagination\">
                        ";
        // line 57
        echo "                        ";
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["usersProfile"]) ? $context["usersProfile"] : $this->getContext($context, "usersProfile")), "profiles", array())) > 0) && ($this->getAttribute($this->getAttribute((isset($context["usersProfile"]) ? $context["usersProfile"] : $this->getContext($context, "usersProfile")), "paginator", array()), "getTotalPages", array(), "method") > 1))) {
            // line 58
            echo "                            ";
            echo twig_include($this->env, $context, "VlreleasesUserBundle:Paginator:paginator_navigator.html.twig", array("paginator" => $this->getAttribute((isset($context["usersProfile"]) ? $context["usersProfile"] : $this->getContext($context, "usersProfile")), "paginator", array())));
            echo "
                        ";
        }
        // line 60
        echo "                    </div>
                    <div id=\"ajaxUserDetails\">
            <div class=\"profileTable\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-striped\">

                        <thead class=\"table-head\">
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Employee Id</th>
                                <th>Email</th>
                                <th>Reporting Persons</th>

                            </tr>
                        </thead>
                        <tbody>

                            ";
        // line 78
        $context["counter"] = ((($this->getAttribute($this->getAttribute((isset($context["usersProfile"]) ? $context["usersProfile"] : $this->getContext($context, "usersProfile")), "paginator", array()), "getCurrentPage", array(), "method") - 1) * 30) + 1);
        // line 79
        echo "
                            ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["usersProfile"]) ? $context["usersProfile"] : $this->getContext($context, "usersProfile")), "profiles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["details"]) {
            // line 81
            echo "                                ";
            $context["uId"] = $this->getAttribute($context["details"], "id", array());
            // line 82
            echo "                                <tr>
                                    <td>";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("vlreleases_user_displayProfile");
            echo "?userId=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "name", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "employeeId", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "email", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reporters"]) ? $context["reporters"] : $this->getContext($context, "reporters")), $this->getAttribute($context["details"], "id", array()), array(), "array"), "html", null, true);
            echo "</td>
                                </tr>

                                ";
            // line 90
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 91
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                        </tbody>
                    </table>
                </div>
            </div>
                        </div>
                </div>
            </div>

            <!-- global scripts-->
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
            <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>
            <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
            <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>


            <!-- morris charts -->
            <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "raphael-2.js\"></script>
            <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "morris.js\"></script>

            <!-- theme scripts -->
            <!--<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "chart-demo.js\"></script> -->
            <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>

            <script src=\"http://malsup.github.com/jquery.form.js\"></script> 
            <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "typeahead/js/bootstrap-typeahead.js\"></script>

<script>
        //Enabling   
           \$(\"#sidebar-user .subMenu\").css(\"display\",\"block\");

</script>
 <script>
\$(document).ready(
        function () {
             \$('input:radio[name=filterReporters]').click(function() {
                var radioVal = \$('input:radio[name=filterReporters]:checked').val();
                \$.ajax({
                   type: \"POST\",
                   url: \"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_filterReporterData");
        echo "\",
                   cache: false,
                   data: {rvalue:radioVal},
                   success: function(msg){
                       \$(\"#ajaxUserDetails\").html(msg);
                   }                   
               });
          
              });
        });
</script>

    </body>
</html>

";
        
        $__internal_877f2873528e6ef9d49315768c09a839e06d6e3aeeef0bedabf083a94fdcca3d->leave($__internal_877f2873528e6ef9d49315768c09a839e06d6e3aeeef0bedabf083a94fdcca3d_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:user-reporters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 130,  234 => 116,  228 => 113,  224 => 112,  218 => 109,  214 => 108,  207 => 104,  203 => 103,  199 => 102,  187 => 92,  181 => 91,  179 => 90,  173 => 87,  169 => 86,  165 => 85,  157 => 84,  153 => 83,  150 => 82,  147 => 81,  143 => 80,  140 => 79,  138 => 78,  118 => 60,  112 => 58,  109 => 57,  102 => 51,  100 => 50,  73 => 25,  71 => 24,  61 => 17,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
