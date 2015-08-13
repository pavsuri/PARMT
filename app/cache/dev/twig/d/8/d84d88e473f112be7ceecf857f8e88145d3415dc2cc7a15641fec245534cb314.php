<?php

/* VlreleasesUserBundle:User:resetPassword.html.twig */
class __TwigTemplate_d84d88e473f112be7ceecf857f8e88145d3415dc2cc7a15641fec245534cb314 extends Twig_Template
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
        $__internal_4eaa55061ffb7595a5bc70eaf5fd4ba46db28bbc4bd72d072d76df42efc0f214 = $this->env->getExtension("native_profiler");
        $__internal_4eaa55061ffb7595a5bc70eaf5fd4ba46db28bbc4bd72d072d76df42efc0f214->enter($__internal_4eaa55061ffb7595a5bc70eaf5fd4ba46db28bbc4bd72d072d76df42efc0f214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:resetPassword.html.twig"));

        // line 1
        echo "<html>
    <head>
        <title>
            NITI
        </title>
    </head>
    <body>
        <form class=\"form-horizontal\" name=\"registrationForm\" method=\"post\" id='registrationForm' enctype=\"multipart/form-data\">
            <table calss=\"table table-striped\" style=\"margin-top: 10px;\">
                <tr class=\"form-group\">
                    <td>Password<span style=\"color: red;\">*</span></td>
                    <td><input class=\"form-control\" type=password name='password' id=\"reset_password\" /></td>
                </tr>
                <tr class=\"form-group\">
                    <td>Confirm Password<span style=\"color: red;\">*</span></td>
                    <td><input class=\"form-control\" type=password name='password_confirmation' id=\"resetpassword_confirmation\" /></td>
                    <td id=\"pswdError\"></td>
                </tr>
                <tr class=\"form-group\">
                    <td><input class=\"btn btn-success\" type=\"submit\" name='submit' value=\"Reset Password\" id=\"resetSubmit\"></td>
                    <td><span  id='spinner' style='display:none;'><img src=";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span></td>
                    <td id=\"resetResult\"></td>
                </tr>
            </table>

        </form>
     
</body>
</html> ";
        
        $__internal_4eaa55061ffb7595a5bc70eaf5fd4ba46db28bbc4bd72d072d76df42efc0f214->leave($__internal_4eaa55061ffb7595a5bc70eaf5fd4ba46db28bbc4bd72d072d76df42efc0f214_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:resetPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 21,  22 => 1,);
    }
}
