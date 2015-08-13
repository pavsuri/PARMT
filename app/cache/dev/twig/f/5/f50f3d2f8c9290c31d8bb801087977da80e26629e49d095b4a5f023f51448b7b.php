<?php

/* VlreleasesUserBundle:UserProfile:skillProfile.html.twig */
class __TwigTemplate_f50f3d2f8c9290c31d8bb801087977da80e26629e49d095b4a5f023f51448b7b extends Twig_Template
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
        $__internal_6d024b335f0cc560022dbf9ccf943fe949e2fbce27a530981e5859ddf09a21f4 = $this->env->getExtension("native_profiler");
        $__internal_6d024b335f0cc560022dbf9ccf943fe949e2fbce27a530981e5859ddf09a21f4->enter($__internal_6d024b335f0cc560022dbf9ccf943fe949e2fbce27a530981e5859ddf09a21f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:UserProfile:skillProfile.html.twig"));

        // line 1
        echo "<form id='skilldetailsform' action='";
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_profile_handleSkillsData");
        echo "' method='POST'>
    <div class=\"userTitle\"><a href=\"javascript:void(0)\">Expertise<span class=\"pull-right\"><i class=\"iconChange fa fa-sort-down\"></i></span></a></div>
    <div class=\"userHolder\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <input type=\"text\" id=\"Expertise\" name=\"Expertise\" class=\"expertisetypeahead form-control\" placeholder=\"Expertise\">
                <span  id='spinnerSkillLoad' style='display:none;'><img src=";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span>
            </div>\t\t\t\t\t\t\t
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <input type=\"text\" id=\"YearsofExperience\" name=\"YearsofExperience\" class=\"form-control\" placeholder=\"Years of Experience\">
            </div>
            
            <div class=\"col-lg-1\">
                <input type=\"button\" class=\"addskill btn btn-green\" name=\"btnAdd\" id=\"btnAddSkill\" value=\"Add\">
                <span  id='spinnerSkillProfile' style='display:none;'><img src=";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span>
            </div>
           
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\" id=\"expertiseView\">
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userSkills"]) ? $context["userSkills"] : $this->getContext($context, "userSkills")));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 24
            echo "                    <div id=\"skillDelete_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "getId", array()), "html", null, true);
            echo "\" class=\"badge badgeExpert\">
                        <span class=\"expertExp\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "getExperience", array()), "html", null, true);
            echo "</span>
                        <span class=\"pull-left text\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["skill"], "getSkill", array()), "getName", array()), "html", null, true);
            echo "</span>
                        <span class=\"pull-left expertClose\"><i id='";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "getId", array()), "html", null, true);
            echo "' class=\"deleteSkill fa fa-times\"></i></span>
                    </div>   
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                <span  id='spinnerDeleteSkill' style='display:none;'><img src=";
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span>                                  
            </div>
        </div>
    </div>
    <span style='display:none;' id='skillsiddata'></span>
</form>
<div id=\"errorMsg\" style=\"display:none;\"></div>

";
        
        $__internal_6d024b335f0cc560022dbf9ccf943fe949e2fbce27a530981e5859ddf09a21f4->leave($__internal_6d024b335f0cc560022dbf9ccf943fe949e2fbce27a530981e5859ddf09a21f4_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:UserProfile:skillProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 30,  71 => 27,  67 => 26,  63 => 25,  58 => 24,  54 => 23,  45 => 17,  32 => 7,  22 => 1,);
    }
}
