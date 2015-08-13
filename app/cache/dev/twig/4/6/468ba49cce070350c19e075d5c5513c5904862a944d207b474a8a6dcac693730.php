<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_468ba49cce070350c19e075d5c5513c5904862a944d207b474a8a6dcac693730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e126208a00112d6fc058e065ed60b3b3d8c877524a169a3a918f8e47ff21cddc = $this->env->getExtension("native_profiler");
        $__internal_e126208a00112d6fc058e065ed60b3b3d8c877524a169a3a918f8e47ff21cddc->enter($__internal_e126208a00112d6fc058e065ed60b3b3d8c877524a169a3a918f8e47ff21cddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e126208a00112d6fc058e065ed60b3b3d8c877524a169a3a918f8e47ff21cddc->leave($__internal_e126208a00112d6fc058e065ed60b3b3d8c877524a169a3a918f8e47ff21cddc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3e8039254387810f93e3ba3b508e8ad57ba70748c28e750008832a8756500d9 = $this->env->getExtension("native_profiler");
        $__internal_f3e8039254387810f93e3ba3b508e8ad57ba70748c28e750008832a8756500d9->enter($__internal_f3e8039254387810f93e3ba3b508e8ad57ba70748c28e750008832a8756500d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f3e8039254387810f93e3ba3b508e8ad57ba70748c28e750008832a8756500d9->leave($__internal_f3e8039254387810f93e3ba3b508e8ad57ba70748c28e750008832a8756500d9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a87200338eb0c9e1849a725ab3d481e94b7734abc596ce79584e20064a5e20f0 = $this->env->getExtension("native_profiler");
        $__internal_a87200338eb0c9e1849a725ab3d481e94b7734abc596ce79584e20064a5e20f0->enter($__internal_a87200338eb0c9e1849a725ab3d481e94b7734abc596ce79584e20064a5e20f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a87200338eb0c9e1849a725ab3d481e94b7734abc596ce79584e20064a5e20f0->leave($__internal_a87200338eb0c9e1849a725ab3d481e94b7734abc596ce79584e20064a5e20f0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ce7175b30bbf4d1a646e29ac3e062940c62c5592fcf8098c39c606fc9a960db = $this->env->getExtension("native_profiler");
        $__internal_6ce7175b30bbf4d1a646e29ac3e062940c62c5592fcf8098c39c606fc9a960db->enter($__internal_6ce7175b30bbf4d1a646e29ac3e062940c62c5592fcf8098c39c606fc9a960db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6ce7175b30bbf4d1a646e29ac3e062940c62c5592fcf8098c39c606fc9a960db->leave($__internal_6ce7175b30bbf4d1a646e29ac3e062940c62c5592fcf8098c39c606fc9a960db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
