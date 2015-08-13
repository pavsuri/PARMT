<?php

/* VlreleasesUserBundle:User:addProject.html.twig */
class __TwigTemplate_5cdc0f0573d6b2c8d4959b167e10996d137a5467e71ad6e84f4393d9b9a0b8ae extends Twig_Template
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
        $__internal_ecd5c4500551fd6071feeb8b27d63f33efb4b6612feef31b35c9be31bd5a2b60 = $this->env->getExtension("native_profiler");
        $__internal_ecd5c4500551fd6071feeb8b27d63f33efb4b6612feef31b35c9be31bd5a2b60->enter($__internal_ecd5c4500551fd6071feeb8b27d63f33efb4b6612feef31b35c9be31bd5a2b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:addProject.html.twig"));

        // line 1
        echo "
<div id='addProjectHTML'>
    <form id='AddProjectForm'  method='POST' action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_getProjectData");
        echo "\">
        <input type=\"hidden\" id=\"updateprojectId\"  name=\"updateprojectId\" value=''>
        <div class=\"widget-content\">
            <div class=\"addTextBoxDiv\">
                <div class=\"addTask\">
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "projectName", array()), 'errors');
        echo "
                            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "projectName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " select project")));
        echo "
                        </div>
                        <input type=\"hidden\" id=\"tid\" name=\"tid\" value=''>
                        <div class=\"col-lg-1 projectHide\" id=\"projectadd1\">

                            <button type=\"button\" class=\"btn btn-green glyphicon glyphicon-plus\" data-toggle=\"modal\" data-target=\"#myModal1\">
                            </button>
                        </div>
                       
                        <div class=\"col-lg-1 projectHide\" id=\"projectedit1\">

                            <button type=\"button\" class=\"btn btn-green glyphicon glyphicon-edit\" id=\"prj-add\" data-toggle=\"modal\" data-target=\"#editmodal\">
                            </button>
                        </div>
                        <div class=\"col-lg-2\">
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "client", array()), 'errors');
        echo "
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "client", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "select client")));
        echo "
                        </div>
                        <div class=\"col-lg-1 projectHide\" id=\"clientadd1\">

                            <button type=\"button\" class=\"btn btn-green glyphicon glyphicon-plus\" data-toggle=\"modal\" data-target=\"#client\">
                            </button>
                        </div>
                        <div class=\"col-lg-1 projectHide\" id=\"clientedit1\">

                            <button type=\"button\" class=\"btn btn-green glyphicon glyphicon-edit\" id=\"cln-add\" data-toggle=\"modal\" data-target=\"#clientedit\">
                            </button>
                        </div>
                        <div class=\"col-lg-2\">
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "phase", array()), 'errors');
        echo "
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "phase", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "select phase")));
        echo "
                        </div>
                        <div class=\"col-lg-3\">      
                            <div id=\"datepicker\" class=\"input-append\">
                                <span class=\"add-on\">
                                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "startDate", array()), 'widget', array("attr" => array("id" => "datePicker", "data-format" => "yyyy-MM-dd", "class" => "form-control", "placeholder" => "startDate")));
        echo "                                                                    
                                    <i class=\"fa fa-calendar icon-calendar\"></i>
                                </span>
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "bugTool", array()), 'errors');
        echo "
                            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "bugTool", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "bugTrackingTool")));
        echo "
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "description", array()), 'errors');
        echo "
                            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "description")));
        echo "
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "billingStatus", array()), 'errors');
        echo "
                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "billingStatus", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Select Billingstatus")));
        echo "
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "svnpath", array()), 'errors');
        echo "
                            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "svnpath", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "svnpath")));
        echo "
                        </div>
                       <div class=\"col-lg-3\">
                            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "lifeCycleStatus", array()), 'errors');
        echo "
                            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "lifeCycleStatus", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "project status")));
        echo "
                        </div>
                       <div class=\"col-lg-3\">
                            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "platforms", array()), 'errors');
        echo "
                            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), "platforms", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "select platform")));
        echo "
                        </div>
                       ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["addProjectForm"]) ? $context["addProjectForm"] : $this->getContext($context, "addProjectForm")), 'rest');
        echo "
                        </div>\t\t\t\t\t
                    </div>\t\t
                        <div class=\"row\">
                            <div class=\"col-lg-12\" id=\"buttons\"> 
                                <!--<div class=\"btn btn-green\" name=\"btnSave\" id=\"btnSave\">Submit</div>--->
                                <input type=\"submit\" class=\"btn btn-green\" name=\"btndeviceAddProject\" id=\"btndeviceAddProject_id\" value=\"Add\">

                                <span  id='spinnerAddDevice' style='display:none;'><img src=";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span>
                                <div class=\"btn btn-green\" name=\"btnCancel\" id=\"prj-Cancel\">Cancel</div>
                            </div>
                       </div>
                     </div>
            </div> 
    </form>
         
                   <input type=\"hidden\" id=\"prj-name\"  value=''>
                   <input type=\"hidden\" id=\"cln-name\"  value=''>
           
  </div>                               
 <script>
    //edit project name
    \$(document).ready(
            function() {
        \$(\"#addProjectform_projectName\").change(function() {
        path = \"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_editProjectName");
        echo "\";
        chname = \$('#addProjectform_projectName').val();
           
                    \$.ajax({
                        type: \"POST\",
                        url: path  ,
                        cache: false,
                        data: {chname: chname},
                        success: function (result) {
                             \$(\"#prj-name\").val(result);  
                        }
                    });
        
            });
            //get old project name
            \$(\"#prj-add\").click(function(){
\t       var arr1 = \$(\"#prj-name\").val();
               var arr = \$(\"#prj-name\").val().split('^');
               if(arr1 == '')
\t\t{
\t\t\talert(\"please select a project to edit\");return false;
\t\t}
\t\telse
\t\t{
                \t\$(\"#prjname\").val(arr[0]);
\t\t}
           }); 
           
        //update client name  
        \$(\"#addProjectform_client\").change(function() {
        path = \"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_editClientName");
        echo "\";
        clname = \$('#addProjectform_client').val();
        
             \$.ajax({
                        type: \"POST\",
                        url: path  ,
                        cache: false,
                        data: {clname: clname},
                        success: function (result) {
                             \$(\"#cln-name\").val(result);  
                        }
                    });
        
            });
         //get old client name
            \$(\"#cln-add\").click(function(){
\t\tvar arr2 = \$(\"#cln-name\").val();
                var arr3 = \$(\"#cln-name\").val().split('^');
\t\tif(arr2 == '')
\t\t{
\t\t\talert(\"please select a client name to edit\");return false;
\t\t}
\t\telse
\t\t{
                \t \$(\"#clntname\").val(arr3[0]);
\t\t}
           }); 
         
     });
 </script>
";
        
        $__internal_ecd5c4500551fd6071feeb8b27d63f33efb4b6612feef31b35c9be31bd5a2b60->leave($__internal_ecd5c4500551fd6071feeb8b27d63f33efb4b6612feef31b35c9be31bd5a2b60_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:addProject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 130,  189 => 100,  169 => 83,  158 => 75,  153 => 73,  149 => 72,  143 => 69,  139 => 68,  133 => 65,  129 => 64,  123 => 61,  119 => 60,  113 => 57,  109 => 56,  103 => 53,  99 => 52,  90 => 46,  82 => 41,  78 => 40,  62 => 27,  58 => 26,  40 => 11,  36 => 10,  26 => 3,  22 => 1,);
    }
}
