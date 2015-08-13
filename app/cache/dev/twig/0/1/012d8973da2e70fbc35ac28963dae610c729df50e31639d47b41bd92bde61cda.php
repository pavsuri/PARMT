<?php

/* VlreleasesUserBundle:User:addHolidayDetails.html.twig */
class __TwigTemplate_012d8973da2e70fbc35ac28963dae610c729df50e31639d47b41bd92bde61cda extends Twig_Template
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
        $__internal_7fd2747ee2ad8e7c2c9611b8a38622b2fe30b2ffea1599aba74c7e346d09f353 = $this->env->getExtension("native_profiler");
        $__internal_7fd2747ee2ad8e7c2c9611b8a38622b2fe30b2ffea1599aba74c7e346d09f353->enter($__internal_7fd2747ee2ad8e7c2c9611b8a38622b2fe30b2ffea1599aba74c7e346d09f353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:addHolidayDetails.html.twig"));

        // line 1
        echo "<div id='addHolidayHTML' style=\"padding: 10px\">
    <form name=\"holidayDetails\" class=\"form-horizontal\" method='post'>
        <div class=\"form-group\">
            <label for=\"holidayDes\" class=\"col-md-3 control-label\">Holiday Description:</label>
            <div class=\"col-md-4\">
                <input class=\"form-control\" type=text name='holidayname' id='holidayDes' placeholder=\"Enter Holiday Name\"/>
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"\" class=\"col-md-3 control-label\">Holiday Date</label>
            <div class=\"col-md-4\" id=\"datepicker\" class=\"input-append\">
                <span class=\"add-on\">
                    <input  class=\"form-control\" name='holidaydate' id=\"holdaydat\" data-format=\"yyyy-MM-dd\" placeholder=\"yyyy-mm-dd\"  type=\"date\">                                                                    
                </span>
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"\" class=\"col-md-3 control-label\"></label>
            <div class=\"col-md-4\">
                <input class=\"btn btn-green\" type=\"submit\" name='submit' value=\"Add Holiday\" id=\"registerHoliday\"/>
                <button class=\"btn btn-green\" onclick=\"location.href = 'localhost/Vl-releases2/web/app_dev.php/holidaysList/index';\">Cancel</button>
            </div>
        </div>
        <input type=\"hidden\" id=\"holidayId\" value=\"\">         
    </form>     
    <div class=\"clearfix\"></div>
</div>                               

        
";
        
        $__internal_7fd2747ee2ad8e7c2c9611b8a38622b2fe30b2ffea1599aba74c7e346d09f353->leave($__internal_7fd2747ee2ad8e7c2c9611b8a38622b2fe30b2ffea1599aba74c7e346d09f353_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:addHolidayDetails.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
