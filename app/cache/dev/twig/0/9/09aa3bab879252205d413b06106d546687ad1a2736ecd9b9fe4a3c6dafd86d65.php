<?php

/* VlreleasesUserBundle:UserProfile:profile.html.twig */
class __TwigTemplate_09aa3bab879252205d413b06106d546687ad1a2736ecd9b9fe4a3c6dafd86d65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VlreleasesUserBundle:Layout:profileLayout.html.twig", "VlreleasesUserBundle:UserProfile:profile.html.twig", 1);
        $this->blocks = array(
            'firstName' => array($this, 'block_firstName'),
            'userImage' => array($this, 'block_userImage'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VlreleasesUserBundle:Layout:profileLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11c47cdfcf0928a6fbfdd67affa59216b91f5c094a2102b826e395e87abddffa = $this->env->getExtension("native_profiler");
        $__internal_11c47cdfcf0928a6fbfdd67affa59216b91f5c094a2102b826e395e87abddffa->enter($__internal_11c47cdfcf0928a6fbfdd67affa59216b91f5c094a2102b826e395e87abddffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:UserProfile:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11c47cdfcf0928a6fbfdd67affa59216b91f5c094a2102b826e395e87abddffa->leave($__internal_11c47cdfcf0928a6fbfdd67affa59216b91f5c094a2102b826e395e87abddffa_prof);

    }

    // line 3
    public function block_firstName($context, array $blocks = array())
    {
        $__internal_6b56d220ea6b9488e5bffd70cfc429357965202b63e18903b7c0bd448230752b = $this->env->getExtension("native_profiler");
        $__internal_6b56d220ea6b9488e5bffd70cfc429357965202b63e18903b7c0bd448230752b->enter($__internal_6b56d220ea6b9488e5bffd70cfc429357965202b63e18903b7c0bd448230752b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "firstName"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["userName"]) ? $context["userName"] : $this->getContext($context, "userName")), "html", null, true);
        echo "
";
        
        $__internal_6b56d220ea6b9488e5bffd70cfc429357965202b63e18903b7c0bd448230752b->leave($__internal_6b56d220ea6b9488e5bffd70cfc429357965202b63e18903b7c0bd448230752b_prof);

    }

    // line 7
    public function block_userImage($context, array $blocks = array())
    {
        $__internal_21156981b04626eb4e3aa5bdbf23438087175f0988de97698d3f205b9619ebeb = $this->env->getExtension("native_profiler");
        $__internal_21156981b04626eb4e3aa5bdbf23438087175f0988de97698d3f205b9619ebeb->enter($__internal_21156981b04626eb4e3aa5bdbf23438087175f0988de97698d3f205b9619ebeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userImage"));

        // line 8
        echo "    <span id='userImageSpan'>
        <img alt=\"\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["userImagePath"]) ? $context["userImagePath"] : $this->getContext($context, "userImagePath")), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "photo", array()), "html", null, true);
        echo "\" class=\"img-circle img-logout\">
    </span>
";
        
        $__internal_21156981b04626eb4e3aa5bdbf23438087175f0988de97698d3f205b9619ebeb->leave($__internal_21156981b04626eb4e3aa5bdbf23438087175f0988de97698d3f205b9619ebeb_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_219876d48b60c3f97a64d59ec415997dae3fbccca2ae22483791f90709be635a = $this->env->getExtension("native_profiler");
        $__internal_219876d48b60c3f97a64d59ec415997dae3fbccca2ae22483791f90709be635a->enter($__internal_219876d48b60c3f97a64d59ec415997dae3fbccca2ae22483791f90709be635a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <div class=\"\" id=\"page-wrapper\" style=\"min-height: 863px;\">
        <div class=\"page-content page-content-ease-in dsp\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"page-title\">
                        <h1>User Profile</h1>  
                        <input type=\"hidden\" id=\"currentpage\" value=\"profile\">
                    </div>
                    <div class=\"right btn\" id=\"resetPassword\"><span class='clickReset'>Reset Password</span></div>
                </div>                   
            </div>\t\t\t\t

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"widget\">
                        <div class=\"clearfix\"></div>\t\t\t\t
                        <!-- Widget content -->

                        <div class=\"row reset-password\" style=\"display:none;\">
                        <div class=\"col-lg-12\">
                            
                                <!-- Widget Header -->

                                <div class=\"widget-head\">
                                    <div class=\"pull-left\">Reset Password</div>\t\t\t\t\t
                                </div>

                                <!-- Widget Header End-->
                               \t\t\t\t
                                <!-- Widget content -->
                                <li id='passwordReset' style=\"list-style: none;\">
                                    ";
        // line 45
        $this->loadTemplate("VlreleasesUserBundle:User:resetPassword.html.twig", "VlreleasesUserBundle:UserProfile:profile.html.twig", 45)->display($context);
        // line 46
        echo "                                </li>
                            
                        </div>
                    </div>
                        
                        <div class=\"userProfile\">
                            <ul>
                                <input type=\"hidden\" id=\"userId\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "emailId", array()), "html", null, true);
        echo "\"/>
                                <li id='personalProfile'>
                                    ";
        // line 55
        $this->loadTemplate("VlreleasesUserBundle:UserProfile:personalProfile.html.twig", "VlreleasesUserBundle:UserProfile:profile.html.twig", 55)->display($context);
        // line 56
        echo "                                </li>
                                <li id='projectProfile'>
                                    ";
        // line 58
        $this->loadTemplate("VlreleasesUserBundle:UserProfile:projectProfile.html.twig", "VlreleasesUserBundle:UserProfile:profile.html.twig", 58)->display($context);
        // line 59
        echo "                                </li>
                                <li id='workProfile'>
                                    ";
        // line 61
        $this->loadTemplate("VlreleasesUserBundle:UserProfile:workProfile.html.twig", "VlreleasesUserBundle:UserProfile:profile.html.twig", 61)->display($context);
        // line 62
        echo "                                </li>

                                <li id='skillProfile'>
                                    ";
        // line 65
        $this->loadTemplate("VlreleasesUserBundle:UserProfile:skillProfile.html.twig", "VlreleasesUserBundle:UserProfile:profile.html.twig", 65)->display($context);
        echo "                                            
                                </li>

                            </ul>
                        </div>
                        </form>
                    </div>
                    <!-- Widget ends -->
                </div>
            </div>\t\t\t\t
        </div>
    </div>
                                    
                                    
                                    
";
        
        $__internal_219876d48b60c3f97a64d59ec415997dae3fbccca2ae22483791f90709be635a->leave($__internal_219876d48b60c3f97a64d59ec415997dae3fbccca2ae22483791f90709be635a_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:UserProfile:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 65,  141 => 62,  139 => 61,  135 => 59,  133 => 58,  129 => 56,  127 => 55,  122 => 53,  113 => 46,  111 => 45,  78 => 14,  72 => 13,  61 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
