<?php

/* VlreleasesUserBundle:User:searchUser.html.twig */
class __TwigTemplate_3f2218dcbdba212688dbdf051d1216cc6d268d1daad671fea4875887b3a15e3a extends Twig_Template
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
        $__internal_c4ef5f00a188ae61c8b3f345516ea229760f8befd58aa63dd80c635b91ceb47c = $this->env->getExtension("native_profiler");
        $__internal_c4ef5f00a188ae61c8b3f345516ea229760f8befd58aa63dd80c635b91ceb47c->enter($__internal_c4ef5f00a188ae61c8b3f345516ea229760f8befd58aa63dd80c635b91ceb47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:searchUser.html.twig"));

        // line 1
        echo "<form id='searchUserform'>
    <div class=\"widget-content\">\t\t\t\t\t
        <div class=\"row\">
            <div class=\"searchUser\">
                ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchUserForm"]) ? $context["searchUserForm"] : $this->getContext($context, "searchUserForm")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Employee name")));
        echo "
            </div>
            <div class=\"searchUser\">
                ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchUserForm"]) ? $context["searchUserForm"] : $this->getContext($context, "searchUserForm")), "emailId", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email Id", "id" => "searchEmail")));
        echo "
            </div>
            <div class=\"searchUser\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchUserForm"]) ? $context["searchUserForm"] : $this->getContext($context, "searchUserForm")), "systemId", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "System Id", "id" => "systemId")));
        echo "
            </div>
            <div class=\"searchUser\">
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchUserForm"]) ? $context["searchUserForm"] : $this->getContext($context, "searchUserForm")), "team", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Team", "id" => "team")));
        echo "
            </div>
            <div class=\"searchUser\">
                <span  id='spinnerSearchDevice' style='display:none;'><img src=";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span>   
                <input type=\"button\" class=\"btn btn-green\" name=\"btnSubmit\" id=\"searchUserSubmit\" value=\"Search\">
            </div>
        </div>\t
    </div>
</form>
<script>
    \$(document).ready(
    function() {        
        \$('#searchUserSubmit').click(function() {
        uName = \$('#searchUserform_name').val();
        uEmail = \$('#searchUserform_emailId').val();
        uSysId = \$('#searchUserform_systemId').val();
        uTeam = \$('#searchUserform_team').val();
                \$.ajax({
                   type: \"POST\",
                   url: \"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_searchByName");
        echo "\",
                   cache: false,
                   data: {uname:uName, uemail:uEmail, usysid:uSysId, uteam:uTeam},
                   success: function(msg){
                       \$(\"#ajaxUserDetails\").html(msg);
                       \$('#searchUserform_name').val('');
                        \$('#searchUserform_emailId').val('');
                        \$('#searchUserform_systemId').val('');
                        \$('#searchUserform_team').val('');
                   }                    
               });
              
        });
 });

 </script>
";
        
        $__internal_c4ef5f00a188ae61c8b3f345516ea229760f8befd58aa63dd80c635b91ceb47c->leave($__internal_c4ef5f00a188ae61c8b3f345516ea229760f8befd58aa63dd80c635b91ceb47c_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:searchUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 33,  52 => 17,  46 => 14,  40 => 11,  34 => 8,  28 => 5,  22 => 1,);
    }
}
