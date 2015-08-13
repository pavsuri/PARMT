<?php

/* VlreleasesUserBundle:MobileDevice:categoriesList.html.twig */
class __TwigTemplate_46b2a527cae224a91dd127905e71170f422c5a814b8e4bef2a3bfffadc712a57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VlreleasesUserBundle:Layout:deviceLayout.html.twig", "VlreleasesUserBundle:MobileDevice:categoriesList.html.twig", 1);
        $this->blocks = array(
            'firstName' => array($this, 'block_firstName'),
            'userImage' => array($this, 'block_userImage'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VlreleasesUserBundle:Layout:deviceLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f3f7b49d60a726077926eaa7160881df37021d87561d0da8f523e10fc632fbb = $this->env->getExtension("native_profiler");
        $__internal_0f3f7b49d60a726077926eaa7160881df37021d87561d0da8f523e10fc632fbb->enter($__internal_0f3f7b49d60a726077926eaa7160881df37021d87561d0da8f523e10fc632fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:MobileDevice:categoriesList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f3f7b49d60a726077926eaa7160881df37021d87561d0da8f523e10fc632fbb->leave($__internal_0f3f7b49d60a726077926eaa7160881df37021d87561d0da8f523e10fc632fbb_prof);

    }

    // line 3
    public function block_firstName($context, array $blocks = array())
    {
        $__internal_31fa3fa94f57297b6b39299b1360918033abd65a45216cb9d4a013d130a12b67 = $this->env->getExtension("native_profiler");
        $__internal_31fa3fa94f57297b6b39299b1360918033abd65a45216cb9d4a013d130a12b67->enter($__internal_31fa3fa94f57297b6b39299b1360918033abd65a45216cb9d4a013d130a12b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "firstName"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["userName"]) ? $context["userName"] : $this->getContext($context, "userName")), "html", null, true);
        echo "
";
        
        $__internal_31fa3fa94f57297b6b39299b1360918033abd65a45216cb9d4a013d130a12b67->leave($__internal_31fa3fa94f57297b6b39299b1360918033abd65a45216cb9d4a013d130a12b67_prof);

    }

    // line 6
    public function block_userImage($context, array $blocks = array())
    {
        $__internal_6d9e60f8366784cbcb1d19be3819d04fea8e0bc701775510e5e10df4e5d465e7 = $this->env->getExtension("native_profiler");
        $__internal_6d9e60f8366784cbcb1d19be3819d04fea8e0bc701775510e5e10df4e5d465e7->enter($__internal_6d9e60f8366784cbcb1d19be3819d04fea8e0bc701775510e5e10df4e5d465e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userImage"));

        // line 7
        echo "    <span id='userImageSpan'>
        <img alt=\"\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["userImagePath"]) ? $context["userImagePath"] : $this->getContext($context, "userImagePath")), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "photo", array()), "html", null, true);
        echo "\" class=\"img-circle\">
    </span>
";
        
        $__internal_6d9e60f8366784cbcb1d19be3819d04fea8e0bc701775510e5e10df4e5d465e7->leave($__internal_6d9e60f8366784cbcb1d19be3819d04fea8e0bc701775510e5e10df4e5d465e7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9122b7e03fb5dfdf1f34b1111766e4877157bc1c58849910bf3affe72a60555d = $this->env->getExtension("native_profiler");
        $__internal_9122b7e03fb5dfdf1f34b1111766e4877157bc1c58849910bf3affe72a60555d->enter($__internal_9122b7e03fb5dfdf1f34b1111766e4877157bc1c58849910bf3affe72a60555d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"device-list\" id=\"page-wrapper\">
        <div class=\"page-content page-content-ease-in dsp\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"page-title\">
                        <h1>Categories List</h1>
                        <input type=\"hidden\" id=\"currentpage\" value=\"asset\">
                            ";
        // line 19
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getAdd", array()) == "true")) {
            // line 20
            echo "                                    <div class=\"right btn\" id=\"addDevDet\"><i class=\"fa fa-plus\"></i><span class='clickRegister1'>Register Category</span></div>
                            ";
        }
        // line 22
        echo "                    </div>
                </div>             
            </div>
            <div class=\"row device-register\">
                <div class=\"col-lg-12\">
                    <div class=\"widget\">
                        <!-- Widget Header -->

                        <div class=\"widget-head\">
                            <div class=\"pull-left\">Register Category</div>\t\t\t\t\t
                        </div>
                        <!-- Widget Header End-->
                        <div class=\"clearfix\"></div>\t\t\t\t
                        <!-- Widget content -->
                        <li id='addCategories' style=\"list-style: none;\">
                            ";
        // line 37
        $this->loadTemplate("VlreleasesUserBundle:MobileDevice:addCategories.html.twig", "VlreleasesUserBundle:MobileDevice:categoriesList.html.twig", 37)->display($context);
        // line 38
        echo "                        </li>
                    </div>
                    <!-- Widget ends -->
                </div>
            </div>
            <div id='alertContainer' style='display:none;color:red;background:#c2c2c2;width:100%;height:25px;text-align: center;clear: both;margin:8px;'>Show Alerts</div>
            ";
        // line 44
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getView", array()) == "true")) {
            // line 45
            echo "\t\t\t\t<div class=\"table-responsive\" id=\"searchDeviceList2\">
\t\t\t\t\t";
            // line 46
            $this->loadTemplate("VlreleasesUserBundle:MobileDevice:displayCategoryList.html.twig", "VlreleasesUserBundle:MobileDevice:categoriesList.html.twig", 46)->display($context);
            // line 47
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 49
        echo "            <span style='display:none;' id='clickRegisterUrl1'>";
        echo $this->env->getExtension('routing')->getPath("vlreleases_categories_clickregister");
        echo "</span>

        </div>
    </div>
</div>\t
";
        
        $__internal_9122b7e03fb5dfdf1f34b1111766e4877157bc1c58849910bf3affe72a60555d->leave($__internal_9122b7e03fb5dfdf1f34b1111766e4877157bc1c58849910bf3affe72a60555d_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:MobileDevice:categoriesList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 49,  127 => 47,  125 => 46,  122 => 45,  120 => 44,  112 => 38,  110 => 37,  93 => 22,  89 => 20,  87 => 19,  78 => 12,  72 => 11,  61 => 8,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }
}
