<?php

/* VlreleasesUserBundle:MobileDevice:productsList.html.twig */
class __TwigTemplate_47b9b149478d823f5489d48cd6316df3afa584f70f96325cd25a6ad84815e18a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VlreleasesUserBundle:Layout:deviceLayout.html.twig", "VlreleasesUserBundle:MobileDevice:productsList.html.twig", 1);
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
        $__internal_58683b22f34078188e2774dfc6a2112966f8d9dae8c028e4385332474bf98ce2 = $this->env->getExtension("native_profiler");
        $__internal_58683b22f34078188e2774dfc6a2112966f8d9dae8c028e4385332474bf98ce2->enter($__internal_58683b22f34078188e2774dfc6a2112966f8d9dae8c028e4385332474bf98ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:MobileDevice:productsList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58683b22f34078188e2774dfc6a2112966f8d9dae8c028e4385332474bf98ce2->leave($__internal_58683b22f34078188e2774dfc6a2112966f8d9dae8c028e4385332474bf98ce2_prof);

    }

    // line 2
    public function block_firstName($context, array $blocks = array())
    {
        $__internal_6f342342d85cc6e7aff633a45d4726e04dab66d795c8908ab752066278c82c17 = $this->env->getExtension("native_profiler");
        $__internal_6f342342d85cc6e7aff633a45d4726e04dab66d795c8908ab752066278c82c17->enter($__internal_6f342342d85cc6e7aff633a45d4726e04dab66d795c8908ab752066278c82c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "firstName"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["userName"]) ? $context["userName"] : $this->getContext($context, "userName")), "html", null, true);
        echo "
";
        
        $__internal_6f342342d85cc6e7aff633a45d4726e04dab66d795c8908ab752066278c82c17->leave($__internal_6f342342d85cc6e7aff633a45d4726e04dab66d795c8908ab752066278c82c17_prof);

    }

    // line 5
    public function block_userImage($context, array $blocks = array())
    {
        $__internal_bc3dc06944c68d1a09047dacfb394fdd013b1f859ae6035f27aaf785349b4876 = $this->env->getExtension("native_profiler");
        $__internal_bc3dc06944c68d1a09047dacfb394fdd013b1f859ae6035f27aaf785349b4876->enter($__internal_bc3dc06944c68d1a09047dacfb394fdd013b1f859ae6035f27aaf785349b4876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userImage"));

        // line 6
        echo "    <span id='userImageSpan'>
        <img class=\"img-circle\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["userImagePath"]) ? $context["userImagePath"] : $this->getContext($context, "userImagePath")), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["userImage"]) ? $context["userImage"] : $this->getContext($context, "userImage")), "html", null, true);
        echo "\" alt=\"\">
    </span>
";
        
        $__internal_bc3dc06944c68d1a09047dacfb394fdd013b1f859ae6035f27aaf785349b4876->leave($__internal_bc3dc06944c68d1a09047dacfb394fdd013b1f859ae6035f27aaf785349b4876_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b797d6c429f6fa5052258cc754c77881e47ec92bd13c3961ba0236a290313b73 = $this->env->getExtension("native_profiler");
        $__internal_b797d6c429f6fa5052258cc754c77881e47ec92bd13c3961ba0236a290313b73->enter($__internal_b797d6c429f6fa5052258cc754c77881e47ec92bd13c3961ba0236a290313b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <div class=\"device-list\" id=\"page-wrapper\">
        <div class=\"page-content page-content-ease-in dsp\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"page-title\">
                        <h1>Products List</h1>
                        <input type=\"hidden\" id=\"currentpage\" value=\"asset\">
                            ";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getAdd", array()) == "true")) {
            // line 19
            echo "                                    <div class=\"right btn\" id=\"addDevDet\"><i class=\"fa fa-plus\"></i><span class='clickRegister1'>Register Products</span></div>
                            ";
        }
        // line 21
        echo "                    </div>
                </div>             
            </div>
            <div class=\"row device-register\">
                <div class=\"col-lg-12\">
                    <div class=\"widget\">
                        <!-- Widget Header -->

                        <div class=\"widget-head\">
                            <div class=\"pull-left\">Register Products</div>\t\t\t\t\t
                        </div>
                        <!-- Widget Header End-->
                        <div class=\"clearfix\"></div>\t\t\t\t
                        <!-- Widget content -->
                        <li id='addProducts' style=\"list-style: none;\">
                            ";
        // line 36
        $this->loadTemplate("VlreleasesUserBundle:MobileDevice:addProducts.html.twig", "VlreleasesUserBundle:MobileDevice:productsList.html.twig", 36)->display($context);
        // line 37
        echo "                        </li>
                    </div>
                    <!-- Widget ends -->
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"widget device-search\">
                        <!-- Widget Header -->
                        <div class=\"widget-head\">
                            <div class=\"pull-left\">Search</div>\t\t\t\t\t
                        </div>
                        <!-- Widget Header End-->
                        <div class=\"clearfix\"></div>\t\t\t\t
                        <!-- Widget content -->
                        <!---- include searchOptions.html.twig----->
                        ";
        // line 54
        $this->loadTemplate("VlreleasesUserBundle:MobileDevice:searchProducts.html.twig", "VlreleasesUserBundle:MobileDevice:productsList.html.twig", 54)->display($context);
        // line 55
        echo "                    </div>
                    <!-- Widget ends -->
                </div>
            </div>
            <div id='alertContainer' style='display:none;color:red;background:#c2c2c2;width:100%;height:25px;text-align: center;clear: both;margin:8px;'>Show Alerts</div>
            ";
        // line 60
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getView", array()) == "true")) {
            // line 61
            echo "\t\t\t\t<div class=\"table-responsive\" id=\"searchDeviceList1\">
\t\t\t\t\t";
            // line 62
            $this->loadTemplate("VlreleasesUserBundle:MobileDevice:displayProductList.html.twig", "VlreleasesUserBundle:MobileDevice:productsList.html.twig", 62)->display($context);
            // line 63
            echo "\t\t\t\t</div>\t
\t\t\t";
        }
        // line 65
        echo "            <span style='display:none;' id='clickRegisterUrl1'>";
        echo $this->env->getExtension('routing')->getPath("vlreleases_products_clickregister");
        echo "</span>

        </div>
    </div>
</div>\t
";
        
        $__internal_b797d6c429f6fa5052258cc754c77881e47ec92bd13c3961ba0236a290313b73->leave($__internal_b797d6c429f6fa5052258cc754c77881e47ec92bd13c3961ba0236a290313b73_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:MobileDevice:productsList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 65,  147 => 63,  145 => 62,  142 => 61,  140 => 60,  133 => 55,  131 => 54,  112 => 37,  110 => 36,  93 => 21,  89 => 19,  87 => 18,  78 => 11,  72 => 10,  61 => 7,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
