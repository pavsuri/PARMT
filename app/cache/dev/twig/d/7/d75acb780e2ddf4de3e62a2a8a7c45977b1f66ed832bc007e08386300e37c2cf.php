<?php

/* VlreleasesUserBundle:User:registration.html.twig */
class __TwigTemplate_d75acb780e2ddf4de3e62a2a8a7c45977b1f66ed832bc007e08386300e37c2cf extends Twig_Template
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
        $__internal_6bdcfbd65b816a18e3c58d02dd82d7d2cb06ae22e551b4fdb2183656c16a3b03 = $this->env->getExtension("native_profiler");
        $__internal_6bdcfbd65b816a18e3c58d02dd82d7d2cb06ae22e551b4fdb2183656c16a3b03->enter($__internal_6bdcfbd65b816a18e3c58d02dd82d7d2cb06ae22e551b4fdb2183656c16a3b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:registration.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Niti</title>
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "bootstrap.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "bootstrap-datetimepicker.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["fontsPath"]) ? $context["fontsPath"] : $this->getContext($context, "fontsPath")), "html", null, true);
        echo "font-awesome.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "style.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "plugins.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "demo.css\" rel=\"stylesheet\">
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>
        <style>
            body{
                background-color: #ecf0f1;
            }
            #imagePreview {
                background-position: center center;
                background-size: cover;
                -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
                display: inline-block;
                margin-left: 60px;
            }
            #block1{
                background-color: #D3D3D3;
                border: 1px solid #d1d1d1;
                box-shadow: 0 0 5px #d1d1d1;
                border-radius: 5px;
                margin-top: 10px;
                margin-left: 400px;
                width:500px;
                height:400px;
                float:center;
                padding:10px;

            }
            .form-group > td {
                text-align: left;
            }
            #imageBlock{
                float:right;    
                width:200px;
                height:300px;
            }
            .container{
                background-color: rgb(44, 62, 80); 
                height: 100%;
            }

            .input-append input.form-control, .input-append input.form-control{position:relative;}
            .input-append .icon-calendar, .input-append .icon-time{position:absolute; top:7px; right:25px; font-size:20px;}
            .input-append .icon-calendar{cursor:pointer;}
            .inpts{margin: 10px 0 0 0;}
            .inpts input[type=\"submit\"]{float:left;}
            .inpts input[type=\"reset\"]{float:right;}
</style>

<script>
    \$(document).ready(function(){
        \$(\"#registerSubmit\").click(function(){
        var pass = \$(\"#register_password\").val(); 
            var cpass = \$(\"#password_confirmation\").val();
            if(pass != cpass){               
                \$(\"#passError\").html(\"confirm password not matched with password\");
              return false;
          }
       }); 

       \$(\"#userfile\").on(\"change\", function()
       {
           var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file
                reader.onloadend = function(){ // setimage data as background of div                  
                \$(\"#imagePreview\").css(\"background-image\", \"url(\"+this.result+\")\");
                \$(\"#imagePreview\").css({\"height\": \"100\",\"width\":\"100\"});
            }
        }    
       });
    });

</script>

</head>
<body class=\"container\">

    <div class=\"formContainer registerForm\">            
        <div class=\"register-form\">
            <div class=\"form-title\">
                <h1>REGISTRATION FORM</h1>
            </div>
        <form action=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_getRegisterData");
        echo "\" class=\"form-horizontal\" name=\"registrationForm\" method=\"post\" id='registrationForm' enctype=\"multipart/form-data\">
            <div class=\"form-group\">
                <label for=\"\" class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5 control-label\">Name <span>*</span></label>
                <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-7\">
                    <input class=\"form-control\" type=text name='name' id='name' required pattern=\"[a-zA-Z]+\" title=\"Please enter valid name\"/>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"\" class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5 control-label\">Employee Id <span>*</span></label>
                <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-7\">
                    <input class=\"form-control\" type=text name=empId id='empId'  required pattern=\"[a-zA-Z0-9]{4,7}\" title=\"Please enter valid employee id\"/>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"\" class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5 control-label\">Password<span>*</span></label>
                <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-7\">
                    <input class=\"form-control\" type=password name='password' id=register_password />
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"\" class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5 control-label\">Confirm Password<span>*</span></label>
                <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-7\">
                    <input class=\"form-control\" type=password name='password_confirmation' id=password_confirmation />
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"\" class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5 control-label\">Email<span>*</span></label>
                <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-7\">
                    <input class=\"form-control\" type=email required pattern=\"[a-zA-Z0-9._]+\\@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,4}\" title=\"pls enter valid email\" name='email' id='email' />
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"\" class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5 control-label\">DOB<span>*</span></label>
                <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-7\" id=\"datepicker\" class=\"input-append\">
                    <span class=\"add-on\">
                        <input  class=\"form-control\" name='dob'  required=\"required\" data-format=\"yyyy-MM-dd\" class=\"form-control\" placeholder=\"Date Of Birth\"  type=\"date\">                                                                    
                    </span>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"\" class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5 control-label\">Mobile Number<span>*</span></label>
                <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-7\">
                    <input  class=\"form-control\" type=text name='mobile' id='mobile' required pattern=\"[0-9]{10}\" title=\"enter 10digits\"/>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"\" class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5 control-label\">Gender<span>*</span></label>
                <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                    <input  type=\"radio\" name='gender' value=\"male\" checked>Male
                    <input  type=\"radio\" name='gender' value=\"female\">Female
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"\" class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5 control-label\">DOJ To Jyo Program<span>*</span></label>
                <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-7\" id=\"datepicker\" class=\"input-append\"> 
                    <span class=\"add-on\">
                        <input class=\"form-control\" name='doj' required=\"required\" data-format=\"yyyy-MM-dd\" class=\"form-control\" placeholder=\"Date Of Joining\"  type=\"date\">                                                                    
                    </span>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"\" class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5 control-label\">Upload Image<span>*</span></label>
                <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-7\">
                    <input type=\"file\" name='userfile' id='userfile' required title=\"upload image\">
                </div>
            </div>
            <div id='imagePreview'></div>
            <div class=\"form-group\">
                <label for=\"\" class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5 control-label sr-only\">Upload Image<span>*</span></label>
                <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-7 inpts\">
                    <input class=\"btn btn-green\" type=\"submit\" name='submit' value=\"Register\" id=\"registerSubmit\"/>
                    <input class=\"btn btn-green\" type=\"reset\" name='reset'/>
                    <input class=\"btn btn-green\" type=\"button\" value=\"cancel\" onclick=\"javascript:window.location='http://niti.stg.valuelabs.com';\"/>
                </div>
            </div>
        </form>
    </div>
    </div>
</body>
</html>

";
        
        $__internal_6bdcfbd65b816a18e3c58d02dd82d7d2cb06ae22e551b4fdb2183656c16a3b03->leave($__internal_6bdcfbd65b816a18e3c58d02dd82d7d2cb06ae22e551b4fdb2183656c16a3b03_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 97,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
