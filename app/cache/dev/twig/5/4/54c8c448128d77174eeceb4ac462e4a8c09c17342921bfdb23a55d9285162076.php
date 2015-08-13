<?php

/* VlreleasesUserBundle:User:userDailyStatus.html.twig */
class __TwigTemplate_54c8c448128d77174eeceb4ac462e4a8c09c17342921bfdb23a55d9285162076 extends Twig_Template
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
        $__internal_0cbbf12e28e6e7f9fefc5605dcd889c0f78726622b9c9996d1cc6e36e74e3b70 = $this->env->getExtension("native_profiler");
        $__internal_0cbbf12e28e6e7f9fefc5605dcd889c0f78726622b9c9996d1cc6e36e74e3b70->enter($__internal_0cbbf12e28e6e7f9fefc5605dcd889c0f78726622b9c9996d1cc6e36e74e3b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:userDailyStatus.html.twig"));

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
        $this->loadTemplate("VlreleasesUserBundle:User:layout.html.twig", "VlreleasesUserBundle:User:userDailyStatus.html.twig", 20)->display($context);
        // line 21
        echo "            
            <div class=\"\" id=\"page-wrapper\">
                <div class=\"page-content page-content-ease-in dsp\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"page-title\">
                                <h1>Daily Status Report</h1>                            
                            </div>
                            <div id = 'idDateErrorMessage' style=\"color: red\">
                                ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "errorMessage", array()), "html", null, true);
        echo "  
                            </div>
                        </div>                   
                    </div>
                    <form action=";
        // line 34
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_dailystatus");
        echo " method='POST' id='savehours'>\t
                        <div class=\"row\">

                            <div class=\"col-lg-12\">
                                <div id=\"datepicker\" class=\"input-append\">\t\t\t\t\t\t\t
                                    <span class=\"add-on\">
                                        ";
        // line 40
        $context["selectedDate"] = twig_date_format_filter($this->env, "now", "Y-m-d");
        // line 41
        echo "                                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "selectedDate"), "method")) {
            // line 42
            echo "                                            ";
            $context["selectedDate"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "selectedDate"), "method");
            // line 43
            echo "                                        ";
        }
        echo "   

                                        <input data-format=\"yyyy-MM-dd\" type=\"text\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["selectedDate"]) ? $context["selectedDate"] : $this->getContext($context, "selectedDate")), "html", null, true);
        echo "\" name=\"selectedDate\" id=\"statusDatePicker\" class=\"form-control \" placeholder=\"Select Date\"></input>

                                    </span>
                                </div>
                            </div>               
                        </div>
                        <div>



                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"widget\">
                                    <div class=\"clearfix\"></div>\t\t\t\t
                                    <!-- Widget content -->

                                    <div class=\"widget-content\">\t\t\t\t
                                        <div class=\"addTextBoxDiv\">
                                            <div class=\"addTask\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-3\">                               
                                                        <select class=\"form-control\" name=\"project[]\" id=\"selProject\">
                                                            <option value=0>Select Project</option>
                                                            ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "projects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 70
            echo "                                                                <option value= ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "getId", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "getName", array()), "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "       
                                                        </select> 
                                                    </div>
                                                    <div class=\"col-lg-3\">                               
                                                        <select class=\"form-control\" name=\"activity[]\" id=\"selActivity\">
                                                            <option value=0>Select Activity</option>
                                                            ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "activities", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 78
            echo "                                                                <option value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "getId", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "getName", array()), "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                                                        </select> 
                                                    </div>
                                                    <div class=\"col-lg-1\"> 
                                                        <i class=\"changeIcon fa fa-plus-circle\"></i>\t
                                                    </div>
                                                </div>

                                                <div class=\"row \">
                                                    <div class=\"col-lg-6\"> 
                                                        <input type=\"text\" id=\"task\" name=\"task[]\" class=\"form-control\" placeholder=\"Task\">
                                                    </div>\t\t\t\t\t\t\t
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-lg-3\">\t\t\t\t\t\t
                                                        <div id=\"timepicker\" class=\"input-append date\">
                                                            <span class=\"add-on\">\t\t\t\t\t\t\t\t\t
                                                                <input data-format=\"hh:mm\" type=\"text\" name=\"totalHours[]\" id=\"totalHours\" class=\"form-control\" placeholder=\"Total Hours\">
                                                                <i class=\"fa fa-clock-o\"></i>
                                                            </span>
                                                        </div>\t\t\t\t\t\t\t\t
                                                    </div>\t\t\t\t\t\t\t
                                                </div>
                                                <input type =\"hidden\" id = \"taskId\" name = \"taskId\">
                                            </div>
                                            <div class=\"remove\"></div>
                                            <div class=\"row\">
                                                <div class=\"col-lg-12\"> 
                                                    <button class=\"btn btn-green pull-right\" name=\"btnSave\" id=\"btnSave\">Save</button>
                                                </div>
                                            </div>
                                        </div>\t\t\t\t\t
                                    </div>
                                    </form>
                                </div>
                                <!-- Widget ends -->
                            </div>
                        </div>

                        <div class=\"table-responsive\">
                            ";
        // line 119
        if ($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userDailyStatusData", array())) {
            // line 120
            echo "                                <table id='userStatusTable' class=\"table table-bordered table-striped\">
                                    <colgroup>\t\t\t\t\t
                                        <col class=\"col-xs-5\">
                                        <col class=\"col-xs-1\">
                                        <col class=\"col-xs-1\">
                                        <col class=\"col-xs-1\">
                                    </colgroup>
                                    <thead id='userStatusTableHeader' class=\"table-head\">
                                        <tr>
                                            <th>Task</th>
                                            <th>Hours</th>
                                            <th>Status</th>
                                            <th id='actionHolder'>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
            // line 136
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userDailyStatusData", array())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 137
                echo "                                            <tr id=\"userdata_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userDailyStatusData", array()), $context["i"], array(), "array"), "id", array()), "html", null, true);
                echo "\">
                                                <td>
                                                    ";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userDailyStatusData", array()), $context["i"], array(), "array"), "description", array()), "html", null, true);
                echo " <span class=\"badge badge-pro\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userDailyStatusData", array()), $context["i"], array(), "array"), "project", array()), "html", null, true);
                echo "</span>
                                                </td>     
                                                <td>";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userDailyStatusData", array()), $context["i"], array(), "array"), "totalhours", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userDailyStatusData", array()), $context["i"], array(), "array"), "hourStatus", array()), "html", null, true);
                echo "</td>
                                                ";
                // line 143
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userDailyStatusData", array()), $context["i"], array(), "array"), "hourStatus", array()) == "Saved") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userDailyStatusData", array()), $context["i"], array(), "array"), "hourStatus", array()) == "Rejected"))) {
                    // line 144
                    echo "                                                    <td>
                                                        <a class='editTask' href=\"javascript:void(0)\" id=\"";
                    // line 145
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userDailyStatusData", array()), $context["i"], array(), "array"), "id", array()), "html", null, true);
                    echo "\">Edit</a>
                                                        |
                                                        <a class='deleteTask' href=\"javascript:void(0)\" id=\"";
                    // line 147
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userDailyStatusData", array()), $context["i"], array(), "array"), "id", array()), "html", null, true);
                    echo "\">Delete</a>
                                                    </td>
                                                ";
                } else {
                    // line 150
                    echo "                                                    <td id='actionDataHolder'>-</td>
                                                ";
                }
                // line 152
                echo "
                                            </tr>   
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo " 

                                    </tbody>
                                </table>
                            </div>
                        ";
        }
        // line 159
        echo "           



                </div>
                <div class=\"row\" id='submithourbutton'>
                    <div class=\"col-lg-12 marbottom\">

                        <button class=\"btn btn-green\" name=\"btnSub\" id=\"submitHours\">Submit</button>
                    </div>
                </div>
            </div>
        </div>\t

<!-- global scripts -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>


<!-- morris charts -->
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "raphael-2.js\"></script>
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "morris.js\"></script>

<!-- theme scripts -->
<!--<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "chart-demo.js\"></script> -->
<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>

<script src=\"http://malsup.github.com/jquery.form.js\"></script> 
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "typeahead/js/bootstrap-typeahead.js\"></script>

<script>
    var hours_data;
    \$(document).ready(
            
            function () {
                \$(document).on('click', '.editTask', 
                        function () {
                            id = \$(this).attr('id');
                            if (id) {
                                \$.post(
                                  '";
        // line 201
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_dailystatus");
        echo "',{userTaskId:id}, function (data) {
                                        \$('#selProject').val(data.projectId);
                                        \$('#selActivity').val(data.activityId);
                                        \$('#task').val(data.description);
                                        \$('#totalHours').val(data.duration);
                                        \$('.changeIcon').hide();
                                        \$('#taskId').val(id);
                                  }
                                );
                            }
                        }
                ); 
  
                \$(document).on('click', '.deleteTask',
                        function () {
                            id = \$(this).attr('id');
                            if (id) {
                                \$.post(
                                  '";
        // line 219
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_dailystatus_delete");
        echo "',{userTaskId:id}, function (data) {
                                      var deleteRow = 'userdata_'+id;
                                                                           
                                      if (data.status) {
                                          \$('#'+deleteRow).remove();
                                          var rowCount = \$('#userStatusTable tr').length;
                                          if (rowCount == 1) {
                                              \$('#userStatusTableHeader').remove();
                                              \$('#submithourbutton').hide();
                                          }
                                              
                                      }

                                      
                                  }, 'json'
                                );
                            }
                        }
                );
                
                \$('#submitHours').click(
                    function (event) {
                        event.preventDefault();
                        url = \"";
        // line 242
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_dailystatus_submithours");
        echo "\"+\"?status=pending&selectedDate=\"+\$('#statusDatePicker').val();
                        \$(location).attr('href',url);
                    }
                );

                \$(document).on('blur', '#statusDatePicker',
                   function () {
                    \$('#idDateErrorMessage').html(\"\");   
                    var selectedDate = \$('#statusDatePicker').val();
                    var selDate = new Date(selectedDate);
                    var toDay = new Date();
                    var today = new Date();
                    var lastWeek = new Date(today.getFullYear(), today.getMonth(), today.getDate() - 7);
                        if (selDate > toDay) {
                            \$('#idDateErrorMessage').html(\"Date connot be in future\");
                            \$('#idDateErrorMessage').css(\"color\", \"red\");
                            \$('.widget-content').hide();
                            \$('#submithourbutton').hide();
                            \$('.table-responsive').hide();
                        }
                        else if(selDate < lastWeek)
                        {
                            
                             \$('#idDateErrorMessage').html(\"Status report can be send upto previous week only\");
                            \$('#idDateErrorMessage').css(\"color\", \"red\");
                            \$('.widget-content').hide();
                            \$('#submithourbutton').hide();
                            \$('.table-responsive').hide();
                        }
                        else {
                            \$('#idDateErrorMessage').html(\"\");
                            \$.post(
                                  '";
        // line 274
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_dailystatus");
        echo "',{'type':'ajax', 'selectedDate':selectedDate}, 
                                    function (data) {
                                        \$('.table-responsive').html(data.data);
                                        \$('.table-responsive').show();
                                        if (data.hideSaveOption) {
                                            \$('.widget-content').hide();
                                            \$('#submithourbutton').hide();
                                            
                                        }else{
                                           \$('.widget-content').show();
                                           if(data.hideSubmitOption){                                            
                                             \$('#submithourbutton').hide();  
                                           }else{
                                             \$('#submithourbutton').show(); 
                                           }
                                       }
                                   }, 'json'
                            );
                        }
                        
                   }
                );
                
                \$('#btnSave').click(
                    function (event) {
                        var isValidText = false;
                        var isValidDropdown = false;
                      event.preventDefault();
                      \$('div').find('input:text')
                      .each(function() {
                       var value = \$(this).val();
                       id = \$(this).attr('id');
                       if (value == '') {
                           isValidText = false;
                           \$('#'+id).css('border', '1px solid red')
                       } else {
                           isValidText = true;
                           \$('#'+id).css('border', '1px solid #ccc')
                       }
                         });    
                         
                      \$('div').find('select')
                      .each(function() {
                       var selectValue = \$(this).val();
                       
                       dropDownId = \$(this).attr('id');
                       
                       if (selectValue == 0) {
                           isValidDropdown = false;
                           \$('#'+dropDownId).css('border', '1px solid red')
                       } else {
                           \$('#'+dropDownId).css('border', '1px solid #ccc')
                           isValidDropdown = true;
                       }
                         }); 
                         
                         if (isValidText && isValidDropdown) {
                              var formId = 'savehours';
                              var action = \$('form#'+formId).attr('action');
                              postData = \$('form#' + formId).serialize();
                              var date = \$('#statusDatePicker').val();                              
                              \$.post(action, postData, function(data) {
                                        \$(\"#\"+formId)[0].reset();
                                        \$('#taskId').val('');
                                        \$('#statusDatePicker').val(date);
                                        \$('.table-responsive').html(data.data);
                                        \$('.table-responsive').show();
                                        \$(\".remove\").slideUp();\t
                                        if (data.hideSaveOption) {
                                            \$('.widget-content').hide();
                                            \$('#submithourbutton').hide();
                                            }else{
                                           \$('.widget-content').show();
                                           if(data.hideSubmitOption){                                            
                                             \$('#submithourbutton').hide();  
                                           }else{
                                             \$('#submithourbutton').show(); 
                                           }
                                       }
                              });
                         }
                    }
                ); 


                var hideSaveOption = '";
        // line 359
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "hideSaveOption", array()), "html", null, true);
        echo "';
                var hideSubmitOption = '";
        // line 360
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "hideSubmitOption", array()), "html", null, true);
        echo "';
                if(hideSubmitOption){
                   \$('#submithourbutton').hide();
                }else{
                   \$('#submithourbutton').show();
                }
                if (hideSaveOption) {
                    \$('.widget-content').hide();
                    \$('#submithourbutton').hide();
                    }
               
                \$(\".hoverId\").hover(function(){
                \$(\"#subMenu\").css(\"display\",\"block\");
               }, function(){
                    \$(\"#subMenu\").css(\"display\",\"none\");
                });
                            
                 \$(\".hoverId1\").hover(function(){
                \$(\"#subMenu1\").css(\"display\",\"block\");
               }, function(){
                    \$(\"#subMenu1\").css(\"display\",\"none\");
                });
            }
    );
   
    
</script>
</body>
</html>";
        
        $__internal_0cbbf12e28e6e7f9fefc5605dcd889c0f78726622b9c9996d1cc6e36e74e3b70->leave($__internal_0cbbf12e28e6e7f9fefc5605dcd889c0f78726622b9c9996d1cc6e36e74e3b70_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:userDailyStatus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  536 => 360,  532 => 359,  444 => 274,  409 => 242,  383 => 219,  362 => 201,  347 => 189,  341 => 186,  337 => 185,  331 => 182,  327 => 181,  320 => 177,  316 => 176,  312 => 175,  294 => 159,  286 => 154,  278 => 152,  274 => 150,  268 => 147,  263 => 145,  260 => 144,  258 => 143,  254 => 142,  250 => 141,  243 => 139,  237 => 137,  233 => 136,  215 => 120,  213 => 119,  172 => 80,  161 => 78,  157 => 77,  149 => 71,  138 => 70,  134 => 69,  107 => 45,  101 => 43,  98 => 42,  95 => 41,  93 => 40,  84 => 34,  77 => 30,  66 => 21,  64 => 20,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
