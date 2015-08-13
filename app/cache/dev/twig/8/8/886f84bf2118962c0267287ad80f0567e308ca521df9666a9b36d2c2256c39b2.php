<?php

/* VlreleasesUserBundle:User:projectsList.html.twig */
class __TwigTemplate_886f84bf2118962c0267287ad80f0567e308ca521df9666a9b36d2c2256c39b2 extends Twig_Template
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
        $__internal_ad6b088870ccdd0626a3d7b50c3c47c598951b50ecf6f46bcb310a6a5736cd31 = $this->env->getExtension("native_profiler");
        $__internal_ad6b088870ccdd0626a3d7b50c3c47c598951b50ecf6f46bcb310a6a5736cd31->enter($__internal_ad6b088870ccdd0626a3d7b50c3c47c598951b50ecf6f46bcb310a6a5736cd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:projectsList.html.twig"));

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
            #projectFilter{
                margin-bottom:10px;
            }
            #projectadd1{
                margin-left:-10px;
                margin-right:-5px; 
                margin-bottom: 10px;
            }
            #projectedit1{
                margin-left:-20px;
                margin-right:-20px; 
                margin-bottom: 10px;
            }
            #clientadd1{
                margin-left:-10px;
                margin-right:-5px; 
                margin-bottom: 10px;
            }
            #clientedit1{
                margin-left:-20px;
                margin-right:-20px; 
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body class=\"pace-done\">\t
        <div id=\"wrapper\">  
            ";
        // line 48
        $this->loadTemplate("VlreleasesUserBundle:User:layout.html.twig", "VlreleasesUserBundle:User:projectsList.html.twig", 48)->display($context);
        // line 49
        echo "            
            <div class=\"device-list\" id=\"page-wrapper\">
                <div class=\"page-content page-content-ease-in dsp\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"page-title\">
                                <h1>Project List</h1>
                            </div>
                            
                <div>
                    <div class=\"filter\">
                        
                            <p class=\"radioBtn\"><strong>Filter By:</strong>
                                <span><input type=\"radio\" name=\"filterBillability\"  value=\"Billable to VL\" >Billable to VL </span>
                                 <span><input type=\"radio\" name=\"filterBillability\"  value=\"Billable to Client\">Billable to Client </span>
                                 <span><input type=\"radio\" name=\"filterBillability\"  value=\"POC\" >POC </span>
                                 <span><input type=\"radio\" name=\"filterBillability\"  value=\"All\" >Display All </span>
                            </p>
                        
                    </div>
\t\t";
        // line 69
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getAdd", array()) == "true")) {
            // line 70
            echo "                    <div class=\"right btn\" id=\"addProjectDet\"><i class=\"fa fa-plus\"></i><span class='clickCreate'>Add Project Details</span></div>
                ";
        }
        // line 72
        echo "                </div>
                        </div>             
                    </div>
                    <div class=\"row project-register\">
                        <div class=\"col-lg-12\">
                            <div class=\"widget\">
                                <!-- Widget Header -->

                                <div class=\"widget-head\">
                                    <div class=\"pull-left\">Add Project Details</div>\t\t\t\t\t
                                </div>

                                <!-- Widget Header End-->
                                <div class=\"clearfix\"></div>\t\t\t\t
                                <!-- Widget content -->
                                <li id='addProjects' style=\"list-style: none;\">
                                    ";
        // line 88
        $this->loadTemplate("VlreleasesUserBundle:User:addProject.html.twig", "VlreleasesUserBundle:User:projectsList.html.twig", 88)->display($context);
        // line 89
        echo "                                </li>
                            </div>
                        </div>
                    </div>

                </div>  
                        ";
        // line 95
        if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == "1")) {
            // line 96
            echo "                <div id='resultContainer' style='display:none;color:red;background:#c2c2c2;width:100%;height:25px;text-align: center;clear: both;margin:8px;'>Project details added/updated successfully</div>
                        ";
        }
        // line 98
        echo "                <div class=\"table-responsive\" id=\"searchProjectList1\">
                    ";
        // line 99
        $this->loadTemplate("VlreleasesUserBundle:User:displayProjectList.html.twig", "VlreleasesUserBundle:User:projectsList.html.twig", 99)->display($context);
        // line 100
        echo "                </div>
                <span style='display:none;' id='clickCreateUrl'>";
        // line 101
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_clickRegister");
        echo "</span>
            </div>
            <div class=\"page-content page-content-ease-in dsp\">
                <span style='display:none;' id='CreateProjectUrl'>";
        // line 104
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_clickRegisterOne");
        echo "</span>
            </div>

        </div>
    </div>\t

    
    <!-- projectname edit  Modal popup -->
    <div class=\"modal fade\" id=\"editmodal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Edit Project</h4>
                </div>
                <div class=\"modal-body\">

                    <div id=\"prjeditresult\"></div>
                    <table   calss=\"table table-striped\" style=\"margin-top: 10px;\" id=\"table1\">

                        <tr class=\"form-group\">
                            <td class=\"col-md-3\"><div class=\"text-center\">
                                    <label>Project Name</label></td>
                            <td><input class=\"form-control\" type=name name='prjname' id='prjname'></td>
                            <td><input class=\"btn btn-green projectEdit\" type=\"button\" name='submit' id='submit' value='Edit' onclick=\"updatePName()\"></td>
                            <td><span  id='spinnerEditProject' style='display:none;'><img src=";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>        
    </div>
                        
    <!-- clientname edit  Modal popup -->
    <div class=\"modal fade\" id=\"clientedit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Edit Client</h4>
                </div>
                <div class=\"modal-body\">

                    <div id=\"clneditresult\"></div>
                    <table   calss=\"table table-striped\" style=\"margin-top: 10px;\" id=\"table1\">

                        <tr class=\"form-group\">
                            <td class=\"col-md-3\"><div class=\"text-center\">
                                    <label>Client Name</label></td>
                            <td><input class=\"form-control\" type=name name='clntname' id='clntname'></td>
                            <td><input class=\"btn btn-green clientEdit\" type=\"button\" name='submit' id='submit' value='Edit' onclick=\"updateCName()\"></td>
                            <td><span  id='spinnerEditClient' style='display:none;'><img src=";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>        
    </div>

    <!-- project Modal popup -->
    <div class=\"modal fade\" id=\"myModal1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Add Project</h4>
                </div>
                <div class=\"modal-body\">

                    <div id=\"result\"></div>
                    <table   calss=\"table table-striped\" style=\"margin-top: 10px;\" id=\"table1\">

                        <tr class=\"form-group\">
                            <td class=\"col-md-3\"><div class=\"text-center\">
                                    <label>Project Name</label></td>
                            <td><input class=\"form-control\" type=name name='pname' id='pname' required pattern=\"[a-zA-Z0-9]+\" title=\"Please enter valid name\"></td>
                            <td><input data-url=\"";
        // line 182
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_getCreateProjectData");
        echo "\" class=\"btn btn-green projectCreation\" type=\"button\" name='submit' id='submit' value='Add'></td>
                            <td><span  id='spinnerAddDevice5' style='display:none;'><img src=";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>        
    </div>

    <!-- client Modal popup-->
    <div class=\"modal fade\" id=\"client\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Add Client</h4>
                </div>
                <div class=\"modal-body\">
                    <div id=\"result1\"></div>
                    <table calss=\"table table-striped\" style=\"margin-top: 10px;\" id=\"table2\">

                        <tr class=\"form-group\">
                            <td class=\"col-md-3\"><div class=\"text-center\">
                                    <label>Client Name</label></td>
                            <td><input class=\"form-control\" type=name name='nameofclient' id='nameofclient' required pattern=\"[a-zA-Z0-9]+\" title=\"Please enter valid name\"></td>
                            <td><input data-url=\"";
        // line 208
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_getCreateClientData");
        echo "\" class=\"btn btn-green clientCreation\" type=\"button\" name='submit' id='submit' value='Add'></td>
                            <td><span  id='spinnerAddDevice6' style='display:none;'><img src=";
        // line 209
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span></td>
                        </tr>

                    </table>
                </div>

            </div>
        </div>
    </div>

    <!-- global scripts-->
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
    <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>


    <!-- morris charts -->
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "raphael-2.js\"></script>
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "morris.js\"></script>

    <!-- theme scripts -->
    <!--<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "chart-demo.js\"></script> -->
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>

    <script src=\"http://malsup.github.com/jquery.form.js\"></script> 
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "typeahead/js/bootstrap-typeahead.js\"></script>


    <script>
\$(document).ready(
        function () {
            //projects list billability ajax calls
            \$('input:radio[name=filterBillability]').click(function() {
            var radioVal = \$('input:radio[name=filterBillability]:checked').val();
            \$.ajax({
               type: \"POST\",
               url: \"";
        // line 246
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_filterBillabilityData");
        echo "\",
               cache: false,
               data: {rValue:radioVal},
               success: function(msg){
                   \$(\"#ajaxproject\").html(msg);
               }                   
           });          
          });
          
           //cancel project add/edit functionality
            \$(\"body\").on(\"click\",'#prj-Cancel',function() {
                \$(\".project-register\").slideUp();
            });

            //project updated status 
            function showResult(message) {
                \$('#spinnerAddDevice').hide();
                \$('#resultContainer').html(message);
                \$('#resultContainer').show();
                setTimeout(function () {
                    \$(\"#resultContainer\").fadeOut(1000);
                }, 3000)
            }
            \$(\"body\").on(\"click\", '.clickCreate', function () {
                deviceId = \$(this).attr('id');
                ajaxUrl = \$('#clickCreateUrl').html();
                \$.get(ajaxUrl, function (data) {
                    \$(\"#addProjectHTML\").html(data);
                    \$(\"#btndeviceAddProject\").attr('value', 'Add');
                    \$('.project-register label').show();
                    \$(\".project-register\").slideToggle(\"fast\");

                }
                );
            });


            \$('.clickProject').click(function () {
                      \$(\"#project\").slideToggle(\"show\");
            });

            //add project popup
            \$(\".projectCreation\").click(function () {

                var myurl = \$(this).attr(\"data-url\");
                var projectname = \$(\"#pname\").val();

                \$('#spinnerAddDevice5').show();
                \$.ajax({
                    type: \"POST\",
                    url: myurl,
                    cache: false,
                    data: {pname: projectname},
                    success: function (result) {

                        if (result == '0')
                            showFlashAlert('project added successfully');
                        else
                            showFlashAlert('project already existed');
                    }
                });
            });

            //add client popup
            \$(\".clientCreation\").click(function () {
                var myurl = \$(this).attr(\"data-url\");
                var clientname = \$(\"#nameofclient\").val();

                \$('#spinnerAddDevice6').show();
                \$.ajax({
                    type: \"POST\",
                    url: myurl,
                    cache: false,
                    data: {cname: clientname},
                    success: function (result) {

                        if (result == '0')
                            showFlashAlert1('client added successfully');
                        else
                            showFlashAlert1('client already existed');
                    }
                });
            });

            //edit Project details
            \$(\"body\").on( \"click\", '.editProject' , function() {
            window.scrollTo(0, 0);
            var projectId = \$(this).attr('idToEdit');
            ajaxUrl = \$(\"#deatilsEdit\").html();
                    \$.get(ajaxUrl, {'projectId':projectId}, function (data) {
                    \$(\"#addProjectHTML\").html(data);
                    \$(\"#btndeviceAddProject_id\").attr('value', 'Update');
                    \$('.project-register label').show();
                    \$(\".project-register\").slideDown();
                    \$(\".projectHide\").hide();
                    \$(\".addTask\").find('.col-lg-2').removeClass('col-lg-2').addClass('col-lg-3');
                    document.getElementById(\"updateprojectId\").value=projectId;
                    //Setting the platform value thorug another ajax call.
                    //Did not work on the form builder with the entity.
                        \$.ajax({
                        type: \"GET\",
                        url:\"";
        // line 347
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_getPlatformId");
        echo "\"  ,
                        cache: false,
                        data: {projectId: projectId},
                        success: function (result) {
                             \$(\"#addProjectform_platforms\").val(result);
                        }
                    });
                }
            );

        });

         //update status
          \$(\"body\").on( \"click\", '.editStatus' , function() {
              proId = \$(this).attr('pro');

            if(\$(this).attr('id1'))
                statusid = \$(this).attr('id1');
            else
                statusid = \$(this).attr('id2');
            \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 369
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_updateStatus");
        echo "\",
                    cache: false,
                    data: {statusid: statusid,proId: proId},
                    success: function (result) {
                        \$(\"#ajaxproject\").html(result);
                    }
                });


          });


            function showFlashAlert1(message) {
                \$('#spinnerAddDevice6').hide();
                \$('#result1').html(message);
                \$('#result1').show();
                setTimeout(function () {
                    \$(\"#result1\").fadeOut(1000);
                }, 3000)
            }

            function showFlashAlert(message) {
                \$('#spinnerAddDevice5').hide();
                \$('#result').html(message);
                \$('#result').show();
                setTimeout(function () {
                    \$(\"#result\").fadeOut(1000);
                }, 3000)
            }

        });
</script>
<script>

    function updatePName()
    {
        var editname = \$(prjname).val();
        var value = \$(\"#prj-name\").val();
        var arr = value.split('^');
        var editid = arr[1];
        \$(\"#spinnerEditProject\").show();
        path = \"";
        // line 410
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_updateProjectName");
        echo "\";
          \$.ajax({
                    type: \"POST\",
                    url: path  ,
                    cache: false,
                    data: {editname: editname,editid: editid},
                    success: function (result) {
                        \$(\"#spinnerEditProject\").hide();
                        \$(\"#prjeditresult\").html(result);
                         setTimeout(function () {
                        \$(\"#prjeditresult\").fadeOut(1000);
                            }, 3000)
                        }

                });
    }           

    function updateCName()
       {

       var editname1 = \$(clntname).val();
        var value1 = \$(\"#cln-name\").val();
        var arr2 = value1.split('^');
        var editid1 = arr2[1];
        \$(\"#spinnerEditClient\").show();
        path = \"";
        // line 435
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_updateClientName");
        echo "\";
          \$.ajax({
                    type: \"POST\",
                    url: path  ,
                    cache: false,
                    data: {editname1: editname1,editid1: editid1},
                    success: function (result) {
                        \$(\"#spinnerEditClient\").hide();
                        \$(\"#clneditresult\").html(result);
                         setTimeout(function () {
                        \$(\"#clneditresult\").fadeOut(1000);
                            }, 3000)
                        }
                });
    }           
    </script>
                                                
</body>
</html>";
        
        $__internal_ad6b088870ccdd0626a3d7b50c3c47c598951b50ecf6f46bcb310a6a5736cd31->leave($__internal_ad6b088870ccdd0626a3d7b50c3c47c598951b50ecf6f46bcb310a6a5736cd31_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:projectsList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  561 => 435,  533 => 410,  489 => 369,  464 => 347,  360 => 246,  346 => 235,  340 => 232,  336 => 231,  330 => 228,  326 => 227,  319 => 223,  315 => 222,  311 => 221,  296 => 209,  292 => 208,  264 => 183,  260 => 182,  231 => 156,  201 => 129,  173 => 104,  167 => 101,  164 => 100,  162 => 99,  159 => 98,  155 => 96,  153 => 95,  145 => 89,  143 => 88,  125 => 72,  121 => 70,  119 => 69,  97 => 49,  95 => 48,  61 => 17,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
