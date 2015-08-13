<?php

/* VlreleasesUserBundle:User:usersProfile.html.twig */
class __TwigTemplate_859b519142e2931319f4cf804c8be2b89488c8e326e0a4b66abc8a5ff57445de extends Twig_Template
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
        $__internal_f734e1590dead46c016289f29541426cb83803b9df7c8d45fcd785ad4b8bb759 = $this->env->getExtension("native_profiler");
        $__internal_f734e1590dead46c016289f29541426cb83803b9df7c8d45fcd785ad4b8bb759->enter($__internal_f734e1590dead46c016289f29541426cb83803b9df7c8d45fcd785ad4b8bb759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:usersProfile.html.twig"));

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
        <style>
            .modal.modal-wide .modal-dialog {
                width: 55%;
                table-layout: fixed;
                word-wrap: break-word;
            }
        </style>
    </head>
    <body class=\"pace-done\">\t
        <div id=\"wrapper\">   
             ";
        // line 30
        $this->loadTemplate("VlreleasesUserBundle:User:layout.html.twig", "VlreleasesUserBundle:User:usersProfile.html.twig", 30)->display($context);
        // line 31
        echo "            
            <div class=\"\" id=\"page-wrapper\">

                <div class=\"page-content page-content-ease-in\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"page-title\">
                                <h1>Users</h1>                            
                            </div>
                            <div>
                                
                                    <p class=\"radioBtn\"><strong>Filter By:</strong>
                                       <span> <input type=\"radio\" id=\"jyo\" name=\"filterUsersType5\" value=\"Jyo\">Reporting To Jyo</span>
                                      <span>  <input type=\"radio\" id=\"nonjyo\" name=\"filterUsersType5\" value=\"Non Jyo\">Not Reporting To Jyo</span>
                                      <span>  <input type=\"radio\" id=\"all\" name=\"filterUsersType5\" value=\"Display All\">Display All</span>
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
        // line 58
        $this->loadTemplate("VlreleasesUserBundle:User:searchUser.html.twig", "VlreleasesUserBundle:User:usersProfile.html.twig", 58)->display($context);
        // line 59
        echo "                            </div>

                        </div> 
                    </div>
                    <div class=\"userPagination\">
                        ";
        // line 65
        echo "                        ";
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["usersProfile"]) ? $context["usersProfile"] : $this->getContext($context, "usersProfile")), "profiles", array())) > 0) && ($this->getAttribute($this->getAttribute((isset($context["usersProfile"]) ? $context["usersProfile"] : $this->getContext($context, "usersProfile")), "paginator", array()), "getTotalPages", array(), "method") > 1))) {
            // line 66
            echo "                            ";
            echo twig_include($this->env, $context, "VlreleasesUserBundle:Paginator:paginator_navigator.html.twig", array("paginator" => $this->getAttribute((isset($context["usersProfile"]) ? $context["usersProfile"] : $this->getContext($context, "usersProfile")), "paginator", array())));
            echo "
                        ";
        }
        // line 68
        echo "                    </div>
                    <div id=\"ajaxUserDetails\">
                <div class=\"profileTable\">
                <div class=\"table-responsive\">
                    <table cellspacing=\"0\" cellpadding=\"5\" border=\"0\" class=\"table table-bordered table-striped\" id=\"userprofile-table\">

                        <thead class=\"table-head\">
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Employee Id</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Extension Number</th>
                                <th>Work Station</th>
                                <th>System Id</th>
                                <th>System Ip</th>
                                <th>Team</th>


                            </tr>
                        </thead>
                        <tbody>
                         
                            ";
        // line 93
        $context["counter"] = ((($this->getAttribute($this->getAttribute((isset($context["usersProfile"]) ? $context["usersProfile"] : $this->getContext($context, "usersProfile")), "paginator", array()), "getCurrentPage", array(), "method") - 1) * 30) + 1);
        // line 94
        echo "
                            ";
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["usersProfile"]) ? $context["usersProfile"] : $this->getContext($context, "usersProfile")), "profiles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["details"]) {
            // line 96
            echo "
                                <tr>
                                    <td>";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("vlreleases_user_displayProfile");
            echo "?userId=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "name", array()), "html", null, true);
            echo "</a></td>
                                    <td><div style=\"display:block;width:64px;\" data-toggle=\"modal\" data-target=\"#ImageModal\"  style=\"padding:0px;\"><img  onClick=\"testi('";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "photo", array()), "html", null, true);
            echo "+";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "name", array()), "html", null, true);
            echo "+";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "employeeId", array()), "html", null, true);
            echo "');\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["userThumbImagePath"]) ? $context["userThumbImagePath"] : $this->getContext($context, "userThumbImagePath")), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "photo", array()), "html", null, true);
            echo "\" alt=\"\"/></div></td>
                                    <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "employeeId", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "email", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "mobile", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "extensionNumber", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "workStation", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "systemId", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "systemIp", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "tname", array()), "html", null, true);
            echo "</td>

                                </tr>

                                ";
            // line 112
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 113
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                        </tbody>
                    </table>
                </div>
                </div>
            </div>
                </div>
            </div>
                                 
 <div id=\"ImageModal\" class=\"modal modal-wide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
 <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;  </button>
        <div id=\"id-name\">
            
        </div>
      </div>
      <div class=\"modal-body\" style=\"display: block;\">
        <img  id=\"myImg\" class=\"niti_img\" src=\"\" alt=\"\"  height=\"600\" width=\"650\" align=\"middle\"/>
        
      </div>
      
    </div>
  </div>
</div>

<!-- global scripts-->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>
<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>


<!-- morris charts -->
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "raphael-2.js\"></script>
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "morris.js\"></script>

<!-- theme scripts -->
<!--<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "chart-demo.js\"></script> -->
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>

<script src=\"http://malsup.github.com/jquery.form.js\"></script> 
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "typeahead/js/bootstrap-typeahead.js\"></script>

<script>
        //Enabling  submenu display  
           \$(\"#sidebar-user .subMenu\").css(\"display\",\"block\");

</script>
<script>
   function testi(b)
    {
        var arr=b.split('+');
        document.getElementById(\"myImg\").src = \"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["userImagePath"]) ? $context["userImagePath"] : $this->getContext($context, "userImagePath")), "html", null, true);
        echo "\"+arr['0'];
        document.getElementById(\"id-name\").innerHTML =arr['1']+\" - \"+arr['2'];
    }
      
    </script>
    <script>
        \$(document).ready(
             function (){

        //ajax call for user details based on reporting person 
        \$('input:radio[name=filterUsersType5]').click(function() {
          
        var radioVal = \$(this).val();

        \$.ajax({
           type: \"POST\",
           url: \"";
        // line 183
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_filterUserData");
        echo "\",
           cache: false,
           data: {uvalue:radioVal},
           success: function(msg){
                \$(this).attr( 'checked' );
               \$(\"#ajaxUserDetails\").html(msg);
               
           }                   
        });

        });

        
        }
);
            </script>
</body>
</html>

";
        
        $__internal_f734e1590dead46c016289f29541426cb83803b9df7c8d45fcd785ad4b8bb759->leave($__internal_f734e1590dead46c016289f29541426cb83803b9df7c8d45fcd785ad4b8bb759_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:usersProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 183,  311 => 167,  297 => 156,  291 => 153,  287 => 152,  281 => 149,  277 => 148,  270 => 144,  266 => 143,  262 => 142,  232 => 114,  226 => 113,  224 => 112,  217 => 108,  213 => 107,  209 => 106,  205 => 105,  201 => 104,  197 => 103,  193 => 102,  189 => 101,  178 => 100,  170 => 99,  166 => 98,  162 => 96,  158 => 95,  155 => 94,  153 => 93,  126 => 68,  120 => 66,  117 => 65,  110 => 59,  108 => 58,  79 => 31,  77 => 30,  61 => 17,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
