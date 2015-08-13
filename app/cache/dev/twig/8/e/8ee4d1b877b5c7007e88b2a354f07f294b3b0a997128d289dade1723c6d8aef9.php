<?php

/* VlreleasesUserBundle:User:holidaysList.html.twig */
class __TwigTemplate_8ee4d1b877b5c7007e88b2a354f07f294b3b0a997128d289dade1723c6d8aef9 extends Twig_Template
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
        $__internal_3b91d5622311933d09c44121ab8a5ae44ab0b6df991401cee07485bcdb34c66b = $this->env->getExtension("native_profiler");
        $__internal_3b91d5622311933d09c44121ab8a5ae44ab0b6df991401cee07485bcdb34c66b->enter($__internal_3b91d5622311933d09c44121ab8a5ae44ab0b6df991401cee07485bcdb34c66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:holidaysList.html.twig"));

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
        $this->loadTemplate("VlreleasesUserBundle:User:layout.html.twig", "VlreleasesUserBundle:User:holidaysList.html.twig", 22)->display($context);
        // line 23
        echo "            <div class=\"\" id=\"page-wrapper\">
                <div class=\"page-content page-content-ease-in\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"page-title\">
                                <h1>Holidays List</h1>                            
                            </div>
                        </div>                   
                    </div>
                ";
        // line 32
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getAdd", array()) == "true")) {
            // line 33
            echo "                    <div class=\"right btn clickHolidayBut\" id=\"addHoliday\">
                        <i class=\"fa fa-plus\"></i>
                        <span class='clickHoliday'>Add Holiday </span>
                    </div>
                ";
        }
        // line 38
        echo "                     <div id='resultFlag' class=\"clearfix\"></div>     
                    <div class=\"row app-register\">
                        <div class=\"col-lg-12\">
                            <div class=\"widget\" id=\"holidaysList\">
                                <!-- Widget Header -->

                                <div class=\"widget-head\">
                                    <div class=\"pull-left\">Add Live Apps Details</div>\t\t\t\t\t
                                </div>

                                <!-- Widget Header End-->
                                <div class=\"clearfix\"></div>\t\t\t\t
                                <!-- Widget content -->
                                <li id='addholidays' style=\"list-style: none;\">
                                    ";
        // line 52
        $this->loadTemplate("VlreleasesUserBundle:User:addHolidayDetails.html.twig", "VlreleasesUserBundle:User:holidaysList.html.twig", 52)->display($context);
        // line 53
        echo "                                </li>
                            </div>
                        </div>
                                                                                              
                    </div>
                    <div id=\"ajaxHolidays\">
                             ";
        // line 59
        $this->loadTemplate("VlreleasesUserBundle:User:displayHolidaysList.html.twig", "VlreleasesUserBundle:User:holidaysList.html.twig", 59)->display($context);
        // line 60
        echo "                    </div>
                    <br>
                    
                  
<!-- Logout Modal Popup -->
<!-- global scripts-->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>


<!-- morris charts -->
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "raphael-2.js\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "morris.js\"></script>

<!-- theme scripts -->
<!--<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "chart-demo.js\"></script> -->
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>

<script src=\"http://malsup.github.com/jquery.form.js\"></script> 
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "typeahead/js/bootstrap-typeahead.js\"></script>


<script>
    \$(document).ready(function (){
        \$(\"#holidaysList\").css('display','none');
           \$(\".clickHolidayBut\").click(function(){
                \$(\"#holidaysList\").toggle();
           });
        
        //registers the holiday details through ajax call
        \$(\"#registerHoliday\").click(function(){
            if(\$(\"#holidayId\").val())
                id = \$(\"#holidayId\").val();
           name = \$(\"#holidayDes\").val();
           date = \$(\"#holdaydat\").val();
            \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("vlreleases_holidaysList_registerHoliday");
        echo "\",
                    cache: false,
                    data: {hname: name, hdate:date, id: id },
                    success: function (result) {
                        \$(\"#holidayDes\").val('');
                        \$(\"#holdaydat\").val('');
                       if(result == 'failed')
                       {
                           \$(\"#resultFlag\").html(\"Holiday already existed\");
                            setTimeout(function () {
                                     \$(\"#resultFlag\").fadeOut(1000);
                                 }, 3000)
                       }
                       else{   
                           \$(\"#ajaxHolidays\").html(result); 
                            \$(\"#resultFlag\").html(\"Holiday added/updated successfully\");
                            setTimeout(function () {
                                     \$(\"#resultFlag\").fadeOut(1000);
                                 }, 3000)                                                  
                        }   
                    }
                });
                return false;
        });
        
        //populating form values when click on edit
          \$(\"body\").on( \"click\", '.holidayEdit' , function() {
            value = \$(this).attr(\"value\");
            var arr = value.split('+');
            \$(\"#holidaysList\").css('display','block');
            \$(\"#holidayId\").val(arr[0]);
            \$(\"#holidayDes\").val(arr[1]);
            \$(\"#holdaydat\").val(arr[2]);
           \$(\"#registerHoliday\").attr('value', 'Update');
        });
        
        //delete the holiday and details through ajax
        \$(\"body\").on( \"click\", '.holidayDelete' , function() {
            id = \$(this).attr(\"holidayId\"); 
            \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("vlreleases_holidaysList_deleteHoliday");
        echo "\",
                    cache: false,
                    data: {hid: id},
                    success: function (result) {
                           \$(\"#resultFlag\").html(\"Holiday deleted successfully\");   
                           setTimeout(function () {
                                     \$(\"#resultFlag\").fadeOut(1000);
                                 }, 3000)
                            \$(\"#ajaxHolidays\").html(result);
                        }   
                    });
            });

    });
</script>
</body>
</html>

";
        
        $__internal_3b91d5622311933d09c44121ab8a5ae44ab0b6df991401cee07485bcdb34c66b->leave($__internal_3b91d5622311933d09c44121ab8a5ae44ab0b6df991401cee07485bcdb34c66b_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:holidaysList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 140,  181 => 99,  160 => 81,  154 => 78,  150 => 77,  144 => 74,  140 => 73,  133 => 69,  129 => 68,  125 => 67,  116 => 60,  114 => 59,  106 => 53,  104 => 52,  88 => 38,  81 => 33,  79 => 32,  68 => 23,  66 => 22,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
