<?php

/* VlreleasesUserBundle:MobileDevice:displayProductList.html.twig */
class __TwigTemplate_8293da0d158fd07688d152750adafeb95c42b942d16f42b26759dbed36e7249f extends Twig_Template
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
        $__internal_271aa5a558d37718f66d00b1fc541828bd9e80cba5c364ffb1743ea8102cb2d3 = $this->env->getExtension("native_profiler");
        $__internal_271aa5a558d37718f66d00b1fc541828bd9e80cba5c364ffb1743ea8102cb2d3->enter($__internal_271aa5a558d37718f66d00b1fc541828bd9e80cba5c364ffb1743ea8102cb2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:MobileDevice:displayProductList.html.twig"));

        // line 1
        echo "<form id='displayProductListform' action='";
        echo $this->env->getExtension('routing')->getPath("vlreleases_products_register");
        echo "' method='POST'>
    
    <div class=\"profileTable\">
        <div class=\"table-responsive\">
    <table class=\"table table-bordered table-striped\">
        <thead class=\"table-head\">
            <tr>
                <th>S.No</th>
\t\t<th>Category Name</th>
                <th>Product Name</th>
                <th>Owner Name</th>
                <th>Os</th>
\t\t<th>Version</th>
                <th>Status</th>
                ";
        // line 15
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getEdit", array()) == "true")) {
            // line 16
            echo "                    <th>Edit</th>
                ";
        }
        // line 18
        echo "            </tr>
        </thead>
        <tbody>
            ";
        // line 21
        $context["counter"] = 1;
        // line 22
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productListData"]) ? $context["productListData"] : $this->getContext($context, "productListData")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 23
            echo "                <tr>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "</td>
\t\t    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "getCategory", array()), "getName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getProductName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getOwnername", array()), "html", null, true);
            echo "</td>
\t\t    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getOs", array()), "html", null, true);
            echo "</td>
\t\t    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getVersion", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 31
            if ($this->getAttribute($context["product"], "getActive", array())) {
                // line 32
                echo "                            Active
                        ";
            } else {
                // line 34
                echo "                            Inactive
                        ";
            }
            // line 36
            echo "                    </td>
                    ";
            // line 37
            if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getEdit", array()) == "true")) {
                // line 38
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "getAvailable", array())) {
                    // line 39
                    echo "\t\t\t\t\t\t\t<td class=\"dlEdit\"><span class='editDevice1' id='";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getId", array()), "html", null, true);
                    echo "'>Edit</span></td> 
\t\t\t\t\t\t";
                } else {
                    // line 41
                    echo "\t\t\t\t\t\t\t<td>In use</td>
\t\t\t\t\t\t";
                }
                // line 43
                echo "                    ";
            } else {
                // line 44
                echo "                       
                    ";
            }
            // line 46
            echo "                </tr>
                ";
            // line 47
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 48
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
            ";
        // line 49
        if (((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) == 1)) {
            // line 50
            echo "                <tr>
                    <td colspan=\"13\" align = \"center\">No search results found</td>
                </tr>
            ";
        }
        // line 54
        echo "        </tbody>
    </table>
        </div>
    </div>
    <span style='display:none;' id='submitUrl1'>";
        // line 58
        echo $this->env->getExtension('routing')->getPath("vlreleases_products_register");
        echo "</span>
    <span style='display:none;' id='submitDeleteUrl1'>";
        // line 59
        echo $this->env->getExtension('routing')->getPath("vlreleases_products");
        echo "</span>
    <span style='display:none;' id='listDeviceUrl1'>";
        // line 60
        echo $this->env->getExtension('routing')->getPath("vlreleases_products_listDevice");
        echo "</span> 
</form>";
        
        $__internal_271aa5a558d37718f66d00b1fc541828bd9e80cba5c364ffb1743ea8102cb2d3->leave($__internal_271aa5a558d37718f66d00b1fc541828bd9e80cba5c364ffb1743ea8102cb2d3_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:MobileDevice:displayProductList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 60,  152 => 59,  148 => 58,  142 => 54,  136 => 50,  134 => 49,  126 => 48,  124 => 47,  121 => 46,  117 => 44,  114 => 43,  110 => 41,  104 => 39,  101 => 38,  99 => 37,  96 => 36,  92 => 34,  88 => 32,  86 => 31,  81 => 29,  77 => 28,  73 => 27,  69 => 26,  65 => 25,  61 => 24,  58 => 23,  53 => 22,  51 => 21,  46 => 18,  42 => 16,  40 => 15,  22 => 1,);
    }
}
