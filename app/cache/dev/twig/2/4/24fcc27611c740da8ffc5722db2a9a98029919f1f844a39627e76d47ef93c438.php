<?php

/* VlreleasesUserBundle:User:login.html.twig */
class __TwigTemplate_24fcc27611c740da8ffc5722db2a9a98029919f1f844a39627e76d47ef93c438 extends Twig_Template
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
        $__internal_08977bf3d0726a1b85d59c933d6e5dbdaaac62f6b55274613fd7a5f9877cbe34 = $this->env->getExtension("native_profiler");
        $__internal_08977bf3d0726a1b85d59c933d6e5dbdaaac62f6b55274613fd7a5f9877cbe34->enter($__internal_08977bf3d0726a1b85d59c933d6e5dbdaaac62f6b55274613fd7a5f9877cbe34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:login.html.twig"));

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
    </head>
    <body class=\"login\">
        <div align=\"center\" style=\"color: white\"><h4>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
        echo "</h4></div>

        ";
        // line 20
        if (((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1")) == 1)) {
            // line 21
            echo "            <div align=\"center\" style=\"color: white\"> 
                your password has been reset and sent to your mail.Please check it.
            </div>
        ";
        }
        // line 25
        echo "
        <div class=\"container\">
            <div class=\"row\">               
                    <div class=\"portlet portlet-green\">
                        <div class=\"portlet-heading login-heading\">
                            <div class=\"portlet-title\">
                                <h4><strong>Login</strong></h4>
                            </div>                        
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"portlet-body\">
                            ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("vlreleases_user_login"), "method" => "POST"));
        echo "
                            <fieldset>
                                <div class=\"form-group\">

                                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "E-mail")));
        echo "
                                </div>
                                <div class=\"form-group\">

                                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Password")));
        echo "
                                </div>


                                <input class=\"btn btn-lg btn-green btn-block\" type='submit' value='Sign In'>
                            </fieldset>

                            ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                            <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_register");
        echo "\" class=\"btn btn-lg btn-green pull-left\">Register here</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_forgotPassword");
        echo "\" class=\"btn btn-lg btn-green pull-right forgot\">Forgot Password</a>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- global scripts -->
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
        <script>
        \$(document).ready(function(){
                \$(\"#forPwdHolder, .status\").hide();
                \$(\"#forPwd\").click(function(){
                        \$(\".status\").hide();
                        \$(\"#forPwdHolder\").toggle();
                })
\t\t
                \$(\"#forPwdSend\").click(function(){
                        \$(\"#forPwdHolder\").hide();
                        \$(\".status\").show();
                })
\t\t
        })
        </script>
    </body>
</html>";
        
        $__internal_08977bf3d0726a1b85d59c933d6e5dbdaaac62f6b55274613fd7a5f9877cbe34->leave($__internal_08977bf3d0726a1b85d59c933d6e5dbdaaac62f6b55274613fd7a5f9877cbe34_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 62,  131 => 61,  121 => 54,  116 => 52,  112 => 51,  102 => 44,  95 => 40,  88 => 36,  75 => 25,  69 => 21,  67 => 20,  62 => 18,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
