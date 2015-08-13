<?php

/* VlreleasesUserBundle:MobileDevice:displayCategoryList.html.twig */
class __TwigTemplate_83ea8fe7055a17266ce147cbaf4d462d83317b82fcd1215d1f6c694a9a321f4a extends Twig_Template
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
        $__internal_8b7d005f733789fff6a119d69850b2b34c937a1e9b51430e2d18eb8ace978abc = $this->env->getExtension("native_profiler");
        $__internal_8b7d005f733789fff6a119d69850b2b34c937a1e9b51430e2d18eb8ace978abc->enter($__internal_8b7d005f733789fff6a119d69850b2b34c937a1e9b51430e2d18eb8ace978abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:MobileDevice:displayCategoryList.html.twig"));

        // line 1
        echo "<form id='displayCategoryListform' action='";
        echo $this->env->getExtension('routing')->getPath("vlreleases_categories_register");
        echo "' method='POST'>
    <table class=\"table table-bordered table-striped\">

        <thead class=\"table-head\">
            <tr>
                <th>S.No</th>
                <th>Category Name</th>
                <th>Status</th>
                ";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getEdit", array()) == "true")) {
            // line 10
            echo "                    <th>Edit</th>
                ";
        }
        // line 12
        echo "            </tr>
        </thead>
        <tbody>
            ";
        // line 15
        $context["counter"] = 1;
        // line 16
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryListData"]) ? $context["categoryListData"] : $this->getContext($context, "categoryListData")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 17
            echo "                <tr>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "getName", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 21
            if ($this->getAttribute($context["category"], "getActive", array())) {
                // line 22
                echo "                            Active
                        ";
            } else {
                // line 24
                echo "                            Inactive
                        ";
            }
            // line 26
            echo "                    </td>
                    ";
            // line 27
            if ($this->getAttribute($context["category"], "getAvailable", array())) {
                // line 28
                echo "                        ";
                if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getEdit", array()) == "true")) {
                    // line 29
                    echo "                                <td class=\"dlEdit\"><span class='editDevice2' id='";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "getId", array()), "html", null, true);
                    echo "'>Edit</span></td>
                        ";
                } else {
                    // line 31
                    echo "                               
                        ";
                }
                // line 33
                echo "                    ";
            } else {
                echo "    
                        <td>In use</td>
                        <td>In use</td>

                    ";
            }
            // line 38
            echo "                </tr>
                ";
            // line 39
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 40
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            ";
        if (((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) == 1)) {
            // line 42
            echo "                <tr>
                    <td colspan=\"11\" align = \"center\">No search results found</td>
                </tr>
            ";
        }
        // line 46
        echo "        </tbody>
    </table>\t
    <span style='display:none;' id='submitUrl2'>";
        // line 48
        echo $this->env->getExtension('routing')->getPath("vlreleases_categories_register");
        echo "</span>
    <span style='display:none;' id='submitDeleteUrl2'>";
        // line 49
        echo $this->env->getExtension('routing')->getPath("vlreleases_categories");
        echo "</span>
    <span style='display:none;' id='listDeviceUrl2'>";
        // line 50
        echo $this->env->getExtension('routing')->getPath("vlreleases_categories_listDevice");
        echo "</span> 
</form>";
        
        $__internal_8b7d005f733789fff6a119d69850b2b34c937a1e9b51430e2d18eb8ace978abc->leave($__internal_8b7d005f733789fff6a119d69850b2b34c937a1e9b51430e2d18eb8ace978abc_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:MobileDevice:displayCategoryList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 50,  129 => 49,  125 => 48,  121 => 46,  115 => 42,  112 => 41,  106 => 40,  104 => 39,  101 => 38,  92 => 33,  88 => 31,  82 => 29,  79 => 28,  77 => 27,  74 => 26,  70 => 24,  66 => 22,  64 => 21,  59 => 19,  55 => 18,  52 => 17,  47 => 16,  45 => 15,  40 => 12,  36 => 10,  34 => 9,  22 => 1,);
    }
}
