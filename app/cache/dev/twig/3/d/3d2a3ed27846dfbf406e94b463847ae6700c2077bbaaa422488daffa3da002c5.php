<?php

/* VlreleasesUserBundle:User:searchReporter.html.twig */
class __TwigTemplate_3d2a3ed27846dfbf406e94b463847ae6700c2077bbaaa422488daffa3da002c5 extends Twig_Template
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
        $__internal_dfa23d52e0f19b842db0eb593368b441c84d9ee65d2a7bfae3260201996f8a48 = $this->env->getExtension("native_profiler");
        $__internal_dfa23d52e0f19b842db0eb593368b441c84d9ee65d2a7bfae3260201996f8a48->enter($__internal_dfa23d52e0f19b842db0eb593368b441c84d9ee65d2a7bfae3260201996f8a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:searchReporter.html.twig"));

        // line 1
        echo "<form id='searchReporterform'>
    <div class=\"widget-content\">\t\t\t\t\t
        <div class=\"row\">
            <div class=\"col-lg-2 searchReporter\">
                ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchReporterForm"]) ? $context["searchReporterForm"] : $this->getContext($context, "searchReporterForm")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Employee name")));
        echo "
            </div>
            <div class=\"col-lg-2 searchReporter\">
                ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchReporterForm"]) ? $context["searchReporterForm"] : $this->getContext($context, "searchReporterForm")), "emailId", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email Id", "id" => "searchEmail")));
        echo "
            </div>
            <div class=\"col-lg-1 searchReporter\">   
                <input type=\"button\" class=\"btn btn-green\" name=\"btnSubmit\" id=\"searchReporterSubmit\" value=\"Search\">
            </div>
        </div>
</form>

<script>
    \$(document).ready(
    function() {        
        \$('#searchReporterSubmit').click(function() {
        rName = \$('#searchReporterform_name').val();
        rEmail = \$('#searchReporterform_emailId').val();
                \$.ajax({
                   type: \"POST\",
                   url: \"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_searchReporter");
        echo "\",
                   cache: false,
                   data: {rname:rName, remail:rEmail},
                   success: function(msg){
                       \$(\"#ajaxUserDetails\").html(msg);
                       \$('#searchReporterform_name').val('');
                       \$('#searchReporterform_emailId').val('');
                   }                   
               });              
        });
 });

 </script>";
        
        $__internal_dfa23d52e0f19b842db0eb593368b441c84d9ee65d2a7bfae3260201996f8a48->leave($__internal_dfa23d52e0f19b842db0eb593368b441c84d9ee65d2a7bfae3260201996f8a48_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:searchReporter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 24,  34 => 8,  28 => 5,  22 => 1,);
    }
}
