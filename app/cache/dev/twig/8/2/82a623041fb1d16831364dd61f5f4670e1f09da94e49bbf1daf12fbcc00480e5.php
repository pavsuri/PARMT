<?php

/* VlreleasesUserBundle:User:teamsList.html.twig */
class __TwigTemplate_82a623041fb1d16831364dd61f5f4670e1f09da94e49bbf1daf12fbcc00480e5 extends Twig_Template
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
        $__internal_184a9fd5e7983c037b76fc70460007a651e64ed0dbebf856cc7c9409a6bd9559 = $this->env->getExtension("native_profiler");
        $__internal_184a9fd5e7983c037b76fc70460007a651e64ed0dbebf856cc7c9409a6bd9559->enter($__internal_184a9fd5e7983c037b76fc70460007a651e64ed0dbebf856cc7c9409a6bd9559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:teamsList.html.twig"));

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
        $this->loadTemplate("VlreleasesUserBundle:User:layout.html.twig", "VlreleasesUserBundle:User:teamsList.html.twig", 24)->display($context);
        // line 25
        echo "            
            <div class=\"device-list\" id=\"page-wrapper\">
                <div class=\"page-content page-content-ease-in dsp\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"page-title\">
                                <h1>Teams</h1>
                            </div>
                        </div>             
                    </div>
                    ";
        // line 36
        echo "\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getAdd", array()) == "true")) {
            // line 37
            echo "                    <div class=\"widget\">
                        <!-- Widget Header -->
                        
                        <div class=\"widget-head\">
                            <div class=\"pull-left\">Register Team</div>\t\t\t\t\t
                        </div>
                        <!-- Widget Header End-->
                        <div class=\"clearfix\"></div>\t\t\t\t
                        <!-- Widget content -->
                        
                        <li id='addCategories' style=\"list-style: none;\">
                            <div id=\"teamEdit\">
                        <form name=\"teamForm\" id=\"teamForm\" method=\"post\">
                        <div class=\"table-responsive\">   
                            <table   calss=\"table table-striped\" style=\"margin-top: 10px;\" id=\"table1\">
                                
                                <tr class=\"form-group\">
                                    <td class=\"col-md-3\"><div class=\"text-center\">
                                            <label>Team Name</label></td>
                                    <td><input class=\"form-control\" type=name name='tname' id='tname' required pattern=\"[a-zA-Z0-9]+\" title=\"Please enter valid name\"></td>
                                <input type=\"hidden\" id=\"tid\" name=\"tid\" value=''>
                                <td>
                                    <select id=\"teamStatus\">
                                        <option value=\"active\">Active</option>
                                        <option value=\"inactive\">Inactive</option>
                                    </select>
                                </td>
                                <td><input   data-url=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("vlreleases_team_editTeam");
            echo "\" class=\"btn btn-success teamCreation\" type=\"button\" name='submit' id='submit' value='Add'></td>
                                <td><span  id='spinnerAddDevice3' style='display:none;'><img src=";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
            echo "spinner.gif /></span></td>
                                <td><div id=\"resultteamProject\"></div></td>
                                </tr>

                            </table> 
                    </div>
                        </form>
                    </div>     
                        </li>
                        
                    </div>
                    ";
        }
        // line 77
        echo "                    <div id=\"ajaxteam\">
                    <div class=\"profileTable\">
                       <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                           <thead class=\"table-head\">
                                <tr>
                                    <th>S.No</th>
                                    <th>Team</th>
                                    <th>Status</th>
                                    ";
        // line 86
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getEdit", array()) == "true")) {
            // line 87
            echo "                                        <th>Edit</th>
                                    ";
        }
        // line 89
        echo "                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 92
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getView", array()) == "true")) {
            // line 93
            echo "                                ";
            $context["counter"] = 1;
            // line 94
            echo "                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams")));
            foreach ($context['_seq'] as $context["_key"] => $context["resNames"]) {
                // line 95
                echo "                                    <tr>
                                        <td>";
                // line 96
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "</td>
                                        <td>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "tname", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "status", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 100
                echo "\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getEdit", array()) == "true")) {
                    // line 101
                    echo "                                            <td class=\"dlEdit\" ><span class='editTeam' id='";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "id", array()), "html", null, true);
                    echo "' data-path=\"";
                    echo $this->env->getExtension('routing')->getPath("vlreleases_team_getTeam");
                    echo "\">Edit</span></td>
                                        ";
                } else {
                    // line 103
                    echo "                                            
                                        ";
                }
                // line 105
                echo "                                        
                                    </tr>
                                    ";
                // line 107
                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                // line 108
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resNames'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "  
\t\t\t\t\t\t\t";
        }
        // line 110
        echo "                           </tbody>
                        </table>
                    </div>
                    </div>
                    <!-- global scripts-->
                    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
                    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>
                    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
                    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>


                    <!-- morris charts -->
                    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "raphael-2.js\"></script>
                    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "morris.js\"></script>

                    <!-- theme scripts -->
                    <!--<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "chart-demo.js\"></script> -->
                    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>

                    <script src=\"http://malsup.github.com/jquery.form.js\"></script> 
                    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "typeahead/js/bootstrap-typeahead.js\"></script>
    <script>
\$(document).ready(function () {
    //creating new team using ajax
    \$(\".teamCreation\").click(function () {

        var myurl = \$(this).attr(\"data-url\");
        var name = \$(\"#tname\").val();
        var status = \$(\"#teamStatus\").val();
        var tid = \$(\"#tid\").val();

        \$('#spinnerAddDevice3').show();
        \$.ajax({
            type: \"POST\",
            url: myurl,
            cache: false,
            data: {tname: name, status: status, tid: tid},
            success: function (result) {

                if (result)
                {
                    \$('#resultteamProject').html(\"team added/updated successfully\");
                    \$('#spinnerAddDevice3').hide();
                    \$(\"#tname\").val('');
                    \$(\"#ajaxteam\").html(result);
                    setTimeout(function () {
                        \$(\"#resultteamProject\").fadeOut(1000);
                    }, 3000)
                }
                else
                {
                    \$('#resultteamProject').html(\"team already existed\");
                    \$('#spinnerAddDevice3').hide();
                    \$(\"#tname\").val('');

                    setTimeout(function () {
                        \$(\"#resultteamProject\").fadeOut(1000);
                    }, 3000)

                }
            }



        });
    });


    //edit team details
    \$(\"body\").on(\"click\", '.editTeam', function () {
        teamId = \$(this).attr('id');
        var path = \$(this).attr(\"data-path\");
        \$(\"#submit\").attr('value', 'Update');
        \$.ajax({
            type: \"POST\",
            url: path,
            dataType: \"html\",
            cache: false,
            data: {teamid: teamId},
            success: function (result) {
                var arr = result.split('^');
                 \$(\"#tname\").val(arr[0]);
                 \$(\"#teamStatus\").val(arr[1]);

                 \$(\"#tid\").val(teamId);
                }
           }
        );

    });

    function showFlashAlert(message)
    {

        \$('#spinnerAddDevice3').hide();
        \$('#resultteamProject').html(message);
        \$('#resultteamProject').show();
        setTimeout(function () {
            \$(\"#resultteamProject\").fadeOut(1000);
        }, 3000)
    }

});
    </script>
    </body>
    </html>";
        
        $__internal_184a9fd5e7983c037b76fc70460007a651e64ed0dbebf856cc7c9409a6bd9559->leave($__internal_184a9fd5e7983c037b76fc70460007a651e64ed0dbebf856cc7c9409a6bd9559_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:teamsList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 130,  250 => 127,  246 => 126,  240 => 123,  236 => 122,  229 => 118,  225 => 117,  221 => 116,  213 => 110,  204 => 108,  202 => 107,  198 => 105,  194 => 103,  186 => 101,  183 => 100,  179 => 98,  175 => 97,  171 => 96,  168 => 95,  163 => 94,  160 => 93,  158 => 92,  153 => 89,  149 => 87,  147 => 86,  136 => 77,  121 => 65,  117 => 64,  88 => 37,  85 => 36,  73 => 25,  71 => 24,  61 => 17,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
