<?php

/* VlreleasesUserBundle:User:addLiveApp.html.twig */
class __TwigTemplate_2e35aadbd4b0a7c88904959409fa6bbb0c6610187d1883018240437d34100380 extends Twig_Template
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
        $__internal_a95ada6a13c4bb481b94657c7a1d59f6b21f13310c5112b2cb4d994de17b0006 = $this->env->getExtension("native_profiler");
        $__internal_a95ada6a13c4bb481b94657c7a1d59f6b21f13310c5112b2cb4d994de17b0006->enter($__internal_a95ada6a13c4bb481b94657c7a1d59f6b21f13310c5112b2cb4d994de17b0006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:addLiveApp.html.twig"));

        // line 1
        echo "
<div id='addLiveAppHTML'>
    <form id='AddLiveAppForm' method=\"post\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("vlreleases_liveApps_getAppData");
        echo "\">
        <div class=\"widget-content\">
            <div class=\"addTextBoxDiv\">
                <div class=\"addTask\">
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addLiveAppForm"]) ? $context["addLiveAppForm"] : $this->getContext($context, "addLiveAppForm")), "AppName", array()), 'errors');
        echo "
                            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addLiveAppForm"]) ? $context["addLiveAppForm"] : $this->getContext($context, "addLiveAppForm")), "AppName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "AppName")));
        echo "
                        </div>                        
                        <div class=\"col-lg-3\">
                            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addLiveAppForm"]) ? $context["addLiveAppForm"] : $this->getContext($context, "addLiveAppForm")), "OS", array()), 'errors');
        echo "
                            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addLiveAppForm"]) ? $context["addLiveAppForm"] : $this->getContext($context, "addLiveAppForm")), "OS", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Select OS")));
        echo "
                        </div>
                        <br><br>
                        <div class=\"col-lg-3\">
                            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addLiveAppForm"]) ? $context["addLiveAppForm"] : $this->getContext($context, "addLiveAppForm")), "version", array()), 'errors');
        echo "
                            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addLiveAppForm"]) ? $context["addLiveAppForm"] : $this->getContext($context, "addLiveAppForm")), "version", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "version")));
        echo "
                        </div>
                       <div class=\"col-lg-3\">
                            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addLiveAppForm"]) ? $context["addLiveAppForm"] : $this->getContext($context, "addLiveAppForm")), "link", array()), 'errors');
        echo "
                            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addLiveAppForm"]) ? $context["addLiveAppForm"] : $this->getContext($context, "addLiveAppForm")), "link", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "iTunes/Play Store Link")));
        echo "
                        </div>
                       ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["addLiveAppForm"]) ? $context["addLiveAppForm"] : $this->getContext($context, "addLiveAppForm")), 'rest');
        echo "
                        </div>\t\t\t\t\t
                    </div>\t\t
                        <div class=\"row\">
                            <div class=\"col-lg-12\" id=\"buttons\"> 
                                <input type=\"submit\" class=\"btn btn-green\" name=\"btndeviceAddApp\" id=\"btndeviceAddApp_id\" value=\"Add\">
                                <span  id='spinnerAddApp' style='display:none;'><img src=";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span>
                                <div class=\"btn btn-green\" name=\"btnCancel\" id=\"prj-Cancel\">Cancel</div>
                                <div id=\"addappresult\"></div>
                            </div>
                       </div>
                           
                     </div>
            </div> 
    </form>
           
  </div>                               

        
";
        
        $__internal_a95ada6a13c4bb481b94657c7a1d59f6b21f13310c5112b2cb4d994de17b0006->leave($__internal_a95ada6a13c4bb481b94657c7a1d59f6b21f13310c5112b2cb4d994de17b0006_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:addLiveApp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  75 => 25,  70 => 23,  66 => 22,  60 => 19,  56 => 18,  49 => 14,  45 => 13,  39 => 10,  35 => 9,  26 => 3,  22 => 1,);
    }
}
