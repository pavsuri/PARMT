<?php

/* VlreleasesUserBundle:User:actions.html.twig */
class __TwigTemplate_091b1f29c384f1d00cc688d7e27496b5cec43662b9769f3ea47cecf94d59ae3d extends Twig_Template
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
        $__internal_1ba1156b803609f330de882c50b3f5c9abc708b4b0e7e8e9a2c9d9200bf7b5dd = $this->env->getExtension("native_profiler");
        $__internal_1ba1156b803609f330de882c50b3f5c9abc708b4b0e7e8e9a2c9d9200bf7b5dd->enter($__internal_1ba1156b803609f330de882c50b3f5c9abc708b4b0e7e8e9a2c9d9200bf7b5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:actions.html.twig"));

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
        $this->loadTemplate("VlreleasesUserBundle:User:layout.html.twig", "VlreleasesUserBundle:User:actions.html.twig", 24)->display($context);
        // line 25
        echo "            
            <div class=\"device-list\" id=\"page-wrapper\">
                <div class=\"page-content page-content-ease-in dsp\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"page-title\">
                                <h1>Roles-Permissions</h1>
                            </div>
                        </div>             
                    </div>
                 
                    
                    ";
        // line 37
        if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == 1)) {
            // line 38
            echo "                        <div id=\"resultmsg\">Your have successfully updated permissions</div>
                    ";
        }
        // line 40
        echo "                    
                    <form name=\"teamForm\" id=\"teamForm\" method=\"post\" action=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("vlreleases_actions_getRoleData");
        echo "\">
                        
                        <div id=\"roles\">
                            <strong>Select Role:</strong>
                            <select id=\"roleName\" name=\"roleName\">
                                ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 47
            echo "                                       <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((((isset($context["roleId"]) ? $context["roleId"] : $this->getContext($context, "roleId")) == $this->getAttribute($context["role"], "id", array()))) ? ("selected") : (" "));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "name", array()), "html", null, true);
            echo "</option>
                                       
                                    
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "     
                            </select>
                            <span  id='spinnerRole' style='display:none;'>
                                <img src=";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif />
                            </span>
                    </div> 
                        <br>
                <div class=\"table-responsive\" id=\"roleTable\">
                    <table cellspacing=\"0\" cellpadding=\"5\" border=\"0\" class=\"table table-bordered table-striped\" id=\"userprofile-table\">
                            <thead class=\"table-head\">
                                <tr>
                                    <th>S.No</th>
                                    <th>Screen Name</th>
                                    <th>Add</th>
                                    <th>Edit</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 69
        $context["counter"] = 1;
        // line 70
        echo "                                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 71
            echo "                                    <tr>
                                        <td>";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "</td>
                                        <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "screenName", array()), "html", null, true);
            echo "</td>
                                        ";
            // line 74
            if ($this->getAttribute((isset($context["userRoles"]) ? $context["userRoles"] : null), $this->getAttribute($context["data"], "id", array()), array(), "array", true, true)) {
                // line 75
                echo "                                            <td><input type=\"checkbox\" name=myarray[";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "][] value=\"add\" ";
                echo (($this->getAttribute($this->getAttribute((isset($context["userRoles"]) ? $context["userRoles"] : $this->getContext($context, "userRoles")), $this->getAttribute($context["data"], "id", array()), array(), "array"), "add", array(), "array")) ? ("checked") : (""));
                echo " /></td>
                                            <td><input type=\"checkbox\" name=myarray[";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "][] value=\"edit\" ";
                echo (($this->getAttribute($this->getAttribute((isset($context["userRoles"]) ? $context["userRoles"] : $this->getContext($context, "userRoles")), $this->getAttribute($context["data"], "id", array()), array(), "array"), "edit", array(), "array")) ? ("checked") : (""));
                echo " /></td>
                                            <td><input type=\"checkbox\" name=myarray[";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "][] value=\"view\" ";
                echo (($this->getAttribute($this->getAttribute((isset($context["userRoles"]) ? $context["userRoles"] : $this->getContext($context, "userRoles")), $this->getAttribute($context["data"], "id", array()), array(), "array"), "view", array(), "array")) ? ("checked") : (""));
                echo " /></td>
                                        ";
            } else {
                // line 79
                echo "                                            <td><input type=\"checkbox\" name=myarray[";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "][] value=\"add\" /></td>
                                            <td><input type=\"checkbox\" name=myarray[";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "][] value=\"edit\" /></td>
                                            <td><input type=\"checkbox\" name=myarray[";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "][] value=\"view\" /></td>
                                        ";
            }
            // line 83
            echo "                                        ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 84
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
                            </tbody>
                        </table>
                </div>\t\t
                            <p align=\"center\">
                                <input class=\"btn btn-success\" type=\"submit\" name='roleSubmit' value=\"Save Changes\" id=\"roleSubmit\">
                            </p>\t\t
                    </form>
<!-- global scripts-->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>


<!-- morris charts -->
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "raphael-2.js\"></script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "morris.js\"></script>

<!-- theme scripts -->
<!--<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "chart-demo.js\"></script> -->
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>

<script src=\"http://malsup.github.com/jquery.form.js\"></script> 
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "typeahead/js/bootstrap-typeahead.js\"></script>


<script>
\$(document).ready(
    function () {            
        \$(\"#roleName\").change(function(){
        \$(\"#resultmsg\").hide();
            var role = \$(this).val();
            if( role>0)
            {
                \$(\"#roleTable\").html('');
                \$(\"#roleSubmit\").hide();
                \$('#spinnerRole').show();
                \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("vlreleases_actions_ajaxRoleData");
        echo "\",
                    cache: false,
                    data: {ajaxRole: role},
                    success: function(result){
                        \$('#spinnerRole').hide();
                        \$(\"#roleTable\").html(result);
                        \$(\"#roleSubmit\").show();
                    }
                });
            }

        }); 
    });
</script>
    </body>
    </html>
";
        
        $__internal_1ba1156b803609f330de882c50b3f5c9abc708b4b0e7e8e9a2c9d9200bf7b5dd->leave($__internal_1ba1156b803609f330de882c50b3f5c9abc708b4b0e7e8e9a2c9d9200bf7b5dd_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 124,  256 => 108,  250 => 105,  246 => 104,  240 => 101,  236 => 100,  229 => 96,  225 => 95,  221 => 94,  204 => 84,  201 => 83,  196 => 81,  192 => 80,  187 => 79,  180 => 77,  174 => 76,  167 => 75,  165 => 74,  161 => 73,  157 => 72,  154 => 71,  149 => 70,  147 => 69,  128 => 53,  123 => 50,  108 => 47,  104 => 46,  96 => 41,  93 => 40,  89 => 38,  87 => 37,  73 => 25,  71 => 24,  61 => 17,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
