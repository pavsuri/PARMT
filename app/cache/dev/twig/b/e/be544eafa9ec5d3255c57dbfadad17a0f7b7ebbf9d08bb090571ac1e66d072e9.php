<?php

/* VlreleasesUserBundle:User:uploadSuccess.html.twig */
class __TwigTemplate_be544eafa9ec5d3255c57dbfadad17a0f7b7ebbf9d08bb090571ac1e66d072e9 extends Twig_Template
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
        $__internal_f69d14a09d3fd37672606e10840dbd29cc006b1f12034bddf5d600a3368ec647 = $this->env->getExtension("native_profiler");
        $__internal_f69d14a09d3fd37672606e10840dbd29cc006b1f12034bddf5d600a3368ec647->enter($__internal_f69d14a09d3fd37672606e10840dbd29cc006b1f12034bddf5d600a3368ec647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:uploadSuccess.html.twig"));

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
        $this->loadTemplate("VlreleasesUserBundle:User:layout.html.twig", "VlreleasesUserBundle:User:uploadSuccess.html.twig", 22)->display($context);
        // line 23
        echo "            
            <div class=\"\" id=\"page-wrapper\">
                <div class=\"page-content page-content-ease-in\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"page-title\">
                                <h1>Uploads</h1>                            
                            </div>
                        </div>                   
                    </div>
                    <div class=\"row\">
                        ";
        // line 34
        if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == "1")) {
            // line 35
            echo "                            File uploaded successfully.                            
                        ";
        } else {
            // line 37
            echo "                             File uploading failed 
                        ";
        }
        // line 39
        echo "                    </div>
                    <br>
                     <div>
                            <div class=\"profileTable\">
                       <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                           <thead class=\"table-head\">
                                <tr>
                                    <th>S.No</th>
                                    <th>File Name</th>
                                    <th>Uploaded By</th>
                                    <th>Uploaded On</th>
                                    <th>Download Link</th>
                                    <th>Delete</th>
                                    ";
        // line 56
        echo "                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 60
        echo "                                ";
        $context["counter"] = 1;
        // line 61
        echo "                                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["uploadFilesData"]) ? $context["uploadFilesData"] : $this->getContext($context, "uploadFilesData")));
        foreach ($context['_seq'] as $context["_key"] => $context["resNames"]) {
            // line 62
            echo "                                    <tr>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "</td>
                                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "fileName", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "userName", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["resNames"], "uploadedDate", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                        <td><a href=\"http://localhost/upload/";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "uniqueId", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "fileName", array()), "html", null, true);
            echo "</a></td>
                                        <td>delete</td>
                                    </tr>
                                    ";
            // line 70
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 71
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resNames'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
\t\t\t\t";
        // line 73
        echo "                           </tbody>
                        </table>
                    </div>
                    </div>
                        </div>
                    <!-- Logout Modal Popup -->
                    <div class=\"modal fade\" id=\"myModal\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-customize\">    
                            <div id=\"logout\" >
                                <div class=\"logout-message\">
                                    <img id=\"imageDisplay\" alt=\"\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["userImagePath"]) ? $context["userImagePath"] : $this->getContext($context, "userImagePath")), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "photo", array()), "html", null, true);
        echo "\" class=\"img-circle img-logout\">
                                    <h3>
                                        <i class=\"fa fa-sign-out text-green\"></i> Ready to go?
                                    </h3>
                                    <p>Select \"Logout\" below if you are ready<br> to end your current session.</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <a class=\"btn btn-green\" href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_logout");
        echo "\">
                                                <strong>Logout</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <button class=\"logout_close btn btn-green\" data-dismiss=\"modal\">Cancel</button>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
<!-- Logout Modal Popup -->
<!-- global scripts-->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>


<!-- morris charts -->
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "raphael-2.js\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "morris.js\"></script>

<!-- theme scripts -->
<!--<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "chart-demo.js\"></script> -->
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>

<script src=\"http://malsup.github.com/jquery.form.js\"></script> 
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "typeahead/js/bootstrap-typeahead.js\"></script>


<script>
        \$(document).ready(
             function (){

     \$('input.searchtypeahead').typeahead({

    ajax: {url: '";
        // line 129
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_lead_getMenus");
        echo "',
            triggerLength: 3,
            preDispatch: function (query) {

                \$('#searchLoad').show();
            },
            preProcess: function (data) {\$('#searchLoad').hide(); return data;},
            },

    });   
 ";
        // line 151
        echo "     \$(\".dropdown-menu\").click(function(){
            var fmenu=\$(\".searchtypeahead\").val();

         switch(fmenu)
         {
             case \"dashboard\":
                  location.href='";
        // line 157
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_lead");
        echo "';
                  break;
             case \"daily status report\":
                  location.href='";
        // line 160
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_dailystatus");
        echo "';
                  break;
             case \"profile\":
                  location.href='";
        // line 163
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_profile_home");
        echo "';
                  break;
             case \"add category\":
                  location.href='";
        // line 166
        echo $this->env->getExtension('routing')->getPath("vlreleases_categories");
        echo "';
                  break;
             case \"add products\":
                  location.href='";
        // line 169
        echo $this->env->getExtension('routing')->getPath("vlreleases_products");
        echo "';
                  break;
             case \"take asset\":
                  location.href='";
        // line 172
        echo $this->env->getExtension('routing')->getPath("vlreleases_products_takeassetList");
        echo "';
                  break;
             case \"users\":
                  location.href='";
        // line 175
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_usersProfile");
        echo "';
                  break;
             case \"users-reporters\":
                  location.href='";
        // line 178
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_reportersProfile");
        echo "';
                  break;
             case \"projects\":
                location.href = '";
        // line 181
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_projectsList");
        echo "';
                break;
             case \"teams\":
                location.href = '";
        // line 184
        echo $this->env->getExtension('routing')->getPath("vlreleases_team");
        echo "';
                break;
\t\t  case \"rolespermissions\":
                        location.href = '";
        // line 187
        echo $this->env->getExtension('routing')->getPath("vlreleases_actions");
        echo "';
                        break;
                    case \"liveapps\":
                        location.href = '";
        // line 190
        echo $this->env->getExtension('routing')->getPath("vlreleases_liveApps");
        echo "';
                        break;
\t\tcase \"uploadfiles\":
\t\t\tlocation.href = '";
        // line 193
        echo $this->env->getExtension('routing')->getPath("vlreleases_uploadFile");
        echo "';
\t\t\tbreak;
         }

        });

    }
    );
            </script>
</body>
</html>
";
        
        $__internal_f69d14a09d3fd37672606e10840dbd29cc006b1f12034bddf5d600a3368ec647->leave($__internal_f69d14a09d3fd37672606e10840dbd29cc006b1f12034bddf5d600a3368ec647_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:uploadSuccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 193,  333 => 190,  327 => 187,  321 => 184,  315 => 181,  309 => 178,  303 => 175,  297 => 172,  291 => 169,  285 => 166,  279 => 163,  273 => 160,  267 => 157,  259 => 151,  246 => 129,  234 => 120,  228 => 117,  224 => 116,  218 => 113,  214 => 112,  207 => 108,  203 => 107,  199 => 106,  180 => 90,  169 => 83,  157 => 73,  149 => 71,  147 => 70,  139 => 67,  135 => 66,  131 => 65,  127 => 64,  123 => 63,  120 => 62,  115 => 61,  112 => 60,  107 => 56,  91 => 39,  87 => 37,  83 => 35,  81 => 34,  68 => 23,  66 => 22,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
