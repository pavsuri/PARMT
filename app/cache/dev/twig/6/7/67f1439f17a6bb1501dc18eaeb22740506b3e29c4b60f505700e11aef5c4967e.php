<?php

/* VlreleasesUserBundle:User:forgotPassword.html.twig */
class __TwigTemplate_67f1439f17a6bb1501dc18eaeb22740506b3e29c4b60f505700e11aef5c4967e extends Twig_Template
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
        $__internal_34f1ef9f96c67f65a5fe8fac2ab0a7a7611852568ae0d1d48ba1928962cd904c = $this->env->getExtension("native_profiler");
        $__internal_34f1ef9f96c67f65a5fe8fac2ab0a7a7611852568ae0d1d48ba1928962cd904c->enter($__internal_34f1ef9f96c67f65a5fe8fac2ab0a7a7611852568ae0d1d48ba1928962cd904c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:forgotPassword.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Niti</title>
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "bootstrap-datetimepicker.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["fontsPath"]) ? $context["fontsPath"] : $this->getContext($context, "fontsPath")), "html", null, true);
        echo "font-awesome.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "bootstrap.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "style.css\" rel=\"stylesheet\">
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>      
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>
        <style>
            .container{
                background-color: rgb(44, 62, 80); 
                height: 100%;
            }
            .input-append input.form-control, .input-append input.form-control{position:relative;}
            .input-append .icon-calendar, .input-append .icon-time{position:absolute; top:7px; right:25px; font-size:20px;}
            .input-append .icon-calendar{cursor:pointer;}
            .inpts{margin: 15px 0 0 0;}
            .inpts input[type=\"submit\"]{float:left;}
            .inpts input[type=\"reset\"]{float:right;}
        </style>

        <script type=\"text/javascript\">
            \$(function () {
                \$(\"#userfile\").on(\"change\", function ()
                {
                    var files = !!this.files ? this.files : [];
                    if (!files.length || !window.FileReader)
                        return; // no file selected, or no FileReader support

                    if (/^image/.test(files[0].type)) { // only image file
                        var reader = new FileReader(); // instance of the FileReader
                        reader.readAsDataURL(files[0]); // read the local file
                        reader.onloadend = function () { // set image data as background of div
                            \$(\"#imagePreview\").css(\"background-image\", \"url(\" + this.result + \")\");
                        }
                    }
                });
            });
        </script>
        <script>
            \$(document).ready(function () {
                \$(\"#registerSubmit\").click(function () {
                    var pass = \$(\"#register_password\").val();
                    var cpass = \$(\"#password_confirmation\").val();
                    if (pass != cpass) {
                        \$(\"#passError\").html(\"confirm password not matched with password\");
                        return false;
                    }
                });
            });

        </script>

    </head>
    <body class=\"container\">
        <div class=\"formContainer forgotPwd\">
            <div class=\"form-title\">
                <h4>Forgot Password</h4>
            </div>
            <form action=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_forgotPasswordGeneration");
        echo "\" method='post'>
                <div class=\"form-group\">
                    <label for=\"\" class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label\">Email-Id<span>*</span></label>
                    <div class=\"col-xs-12 col-sm-9 col-md-9 col-lg-9\">
                        <input class=\"form-control\" type=email name='email' id='email' required pattern=\"[a-zA-Z0-9._]+\\@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,4}\" title=\"Please enter valid email\"/>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"\" class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label\"></label>
                    <div class=\"col-xs-12 col-sm-9 col-md-9 col-lg-9 inpts\">
                        <input class=\"btn btn-green\" type=\"submit\" name='submit' id='submit' value='Submit'>
                        <input class=\"btn btn-green\" type=\"reset\" name='reset' id='reset'>
                        <input class=\"btn btn-green\" type=\"button\" value=\"cancel\" onclick=\"javascript:window.location='http://niti.stg.valuelabs.com';\"/>
                    </div>
                </div>                
            </form>
        </div>
    </body>
</html>

";
        
        $__internal_34f1ef9f96c67f65a5fe8fac2ab0a7a7611852568ae0d1d48ba1928962cd904c->leave($__internal_34f1ef9f96c67f65a5fe8fac2ab0a7a7611852568ae0d1d48ba1928962cd904c_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:forgotPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 65,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
