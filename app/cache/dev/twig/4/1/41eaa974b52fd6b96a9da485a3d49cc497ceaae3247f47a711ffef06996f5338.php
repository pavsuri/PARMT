<?php

/* VlreleasesUserBundle:User:addGroupMailDetails.html.twig */
class __TwigTemplate_41eaa974b52fd6b96a9da485a3d49cc497ceaae3247f47a711ffef06996f5338 extends Twig_Template
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
        $__internal_16e7871c125afb3cd2345f539559dcf15b8dd83cda0893941e047a5275aaa48a = $this->env->getExtension("native_profiler");
        $__internal_16e7871c125afb3cd2345f539559dcf15b8dd83cda0893941e047a5275aaa48a->enter($__internal_16e7871c125afb3cd2345f539559dcf15b8dd83cda0893941e047a5275aaa48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:addGroupMailDetails.html.twig"));

        // line 1
        echo "<div id='addHolidayHTML' style=\"padding: 10px\">
    <form name=\"groupEmailDetails\" class=\"form-horizontal\" method='post'>
        <div class=\"form-group\">
            <label class=\"col-sm-4 col-md-3 control-label\">Group EmailId:</label>
            <div class=\"col-sm-4 col-md-3\">
                <input class=\"form-control\" type=text name='groupEmail' id='grpmailid' placeholder=\"Enter Group Email\"/>
            </div>
        </div>
         <div class=\"form-group\">
             <label class=\"col-sm-4 col-md-3 control-label\">Select User:</label>
            <div class=\"col-sm-4 col-md-3\">
                <input type=\"text\" id=\"groupuseremailid\" name=\"userofgroup\" class=\"groupusertypeahead form-control\" placeholder=\"User Email\"/>
                 <button class=\"btn btn-green\" id=\"addUser\">Add</button>
                <span  id='spinnerUserLoad' style='display:none;'><img src=";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span>               
            </div>\t\t\t\t\t\t\t
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-4 col-md-3 control-label\"></label>
            <div class=\"col-md-6\" id=\"showUsers\">
            
            </div>\t\t\t\t\t\t\t
       </div>
            
        <div class=\"inpts pull-right addGroupView\">
            <input class=\"btn btn-green\" type=\"submit\" name='submit' value=\"Save\" id=\"registerGroup\"/>
            <button class=\"btn btn-green\" onclick=\"location.href = 'localhost/Vl-releases2/web/app_dev.php/GroupMails/index';\">Cancel</button>
        </div>
    </form>     
    <div class=\"clearfix\"></div>
</div>                               

        
";
        
        $__internal_16e7871c125afb3cd2345f539559dcf15b8dd83cda0893941e047a5275aaa48a->leave($__internal_16e7871c125afb3cd2345f539559dcf15b8dd83cda0893941e047a5275aaa48a_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:addGroupMailDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,  22 => 1,);
    }
}
