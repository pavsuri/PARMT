<?php

/* VlreleasesUserBundle:User:uploadsTest.html.twig */
class __TwigTemplate_dfefa0557b73c183819a03c180a24dba8ed9de45ac8a532f098f978adeea3985 extends Twig_Template
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
        $__internal_1aacb45ccf2948f757ec8c71b0311362b37cd5782266e9159ccbcba6deed7965 = $this->env->getExtension("native_profiler");
        $__internal_1aacb45ccf2948f757ec8c71b0311362b37cd5782266e9159ccbcba6deed7965->enter($__internal_1aacb45ccf2948f757ec8c71b0311362b37cd5782266e9159ccbcba6deed7965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:uploadsTest.html.twig"));

        // line 1
        echo "
        Hi ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo ", 
      <br><br>
      File uploaded successfully and below is download link for it.
      <br>
      <a href =\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">Click it</a>
      <br><br>
 Thanks & Regards,<br>
        NITI

";
        
        $__internal_1aacb45ccf2948f757ec8c71b0311362b37cd5782266e9159ccbcba6deed7965->leave($__internal_1aacb45ccf2948f757ec8c71b0311362b37cd5782266e9159ccbcba6deed7965_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:uploadsTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  25 => 2,  22 => 1,);
    }
}
