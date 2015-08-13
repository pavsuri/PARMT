<?php

/* VlreleasesUserBundle:UserProfile:projectProfile.html.twig */
class __TwigTemplate_783f63dca2e49b5ba716a8d58d7b8e635ac6aab0741971a418ce01fe907bcf2d extends Twig_Template
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
        $__internal_17b5ddbfad3c3b4760dd8a8c1ad49cccadcd988d49c4cec421d2a67d510a2305 = $this->env->getExtension("native_profiler");
        $__internal_17b5ddbfad3c3b4760dd8a8c1ad49cccadcd988d49c4cec421d2a67d510a2305->enter($__internal_17b5ddbfad3c3b4760dd8a8c1ad49cccadcd988d49c4cec421d2a67d510a2305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:UserProfile:projectProfile.html.twig"));

        // line 1
        echo "<form id='projectdetailsform' action='";
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_profile_handleProjectProfileData");
        echo "' method='POST'>
    <div class=\"userTitle\"><a href=\"javascript:void(0)\">Project<span class=\"pull-right\"><i class=\"iconChange fa fa-sort-down\"></i></span></a></div>
    <div class=\"userHolder\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <input type=\"text\"  id=\"ProjectText\" name=\"ProjectText\" class=\"typeahead form-control\" placeholder=\"Enter Project\">
                <span id='spinnerProjectLoad' style='display:none;'><img src=";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span>
            </div>
            
            <div class=\"col-lg-1\">\t\t\t\t\t\t\t\t
                <input type=\"button\" class=\"addproject btn btn-green\" name=\"btnProAdd\" id=\"btnProAdd\" value=\"Add\">
                <span id='spinnerProjectProfile' style='display:none;'><img src=";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span>
            </div>
            
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\" id=\"projectView\">
                ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userProjects"]) ? $context["userProjects"] : $this->getContext($context, "userProjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 19
            echo "
                    <div id=\"expertDelete_";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "getId", array()), "html", null, true);
            echo "\" class=\"badge badgeProject\">
                        <span class=\"pull-left text\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "getName", array()), "html", null, true);
            echo "</span>
                        <span class=\"pull-left\"><i id='";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "getId", array()), "html", null, true);
            echo "' class=\"deleteProject fa fa-times\"></i></span>

                    </div>  
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo " 
                <span  id='spinnerDeleteProject' style='display:none;'><img src=";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span>
            </div>
        </div>
        <span style='display:none;' id='projectiddata'></span>
    </div>
</form>";
        
        $__internal_17b5ddbfad3c3b4760dd8a8c1ad49cccadcd988d49c4cec421d2a67d510a2305->leave($__internal_17b5ddbfad3c3b4760dd8a8c1ad49cccadcd988d49c4cec421d2a67d510a2305_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:UserProfile:projectProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 26,  74 => 25,  64 => 22,  60 => 21,  56 => 20,  53 => 19,  49 => 18,  40 => 12,  32 => 7,  22 => 1,);
    }
}
