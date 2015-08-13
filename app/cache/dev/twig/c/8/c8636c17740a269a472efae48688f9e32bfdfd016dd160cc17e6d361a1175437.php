<?php

/* VlreleasesUserBundle:Layout:deviceLayout.html.twig */
class __TwigTemplate_c8636c17740a269a472efae48688f9e32bfdfd016dd160cc17e6d361a1175437 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "VlreleasesUserBundle:Layout:deviceLayout.html.twig", 1);
        $this->blocks = array(
            'extrajavascripts' => array($this, 'block_extrajavascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_540903730c992b01d433a510340cd5bdc1203c29e7275d9630677a5bb637ea59 = $this->env->getExtension("native_profiler");
        $__internal_540903730c992b01d433a510340cd5bdc1203c29e7275d9630677a5bb637ea59->enter($__internal_540903730c992b01d433a510340cd5bdc1203c29e7275d9630677a5bb637ea59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:Layout:deviceLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_540903730c992b01d433a510340cd5bdc1203c29e7275d9630677a5bb637ea59->leave($__internal_540903730c992b01d433a510340cd5bdc1203c29e7275d9630677a5bb637ea59_prof);

    }

    // line 2
    public function block_extrajavascripts($context, array $blocks = array())
    {
        $__internal_bf69d45067f7b724581a73ddd80f2016f0e4a6d48520b9e57d167ec8addacf1f = $this->env->getExtension("native_profiler");
        $__internal_bf69d45067f7b724581a73ddd80f2016f0e4a6d48520b9e57d167ec8addacf1f->enter($__internal_bf69d45067f7b724581a73ddd80f2016f0e4a6d48520b9e57d167ec8addacf1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrajavascripts"));

        // line 3
        echo "<script src=\"http://malsup.github.com/jquery.form.js\"></script> 
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "typeahead/js/bootstrap-typeahead.js\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "/mobiledevice.js\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "/category.js\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "/product.js\"></script>
";
        
        $__internal_bf69d45067f7b724581a73ddd80f2016f0e4a6d48520b9e57d167ec8addacf1f->leave($__internal_bf69d45067f7b724581a73ddd80f2016f0e4a6d48520b9e57d167ec8addacf1f_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:Layout:deviceLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  51 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
