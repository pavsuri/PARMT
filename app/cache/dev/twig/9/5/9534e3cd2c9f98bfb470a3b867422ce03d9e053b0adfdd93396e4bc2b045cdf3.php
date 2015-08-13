<?php

/* VlreleasesUserBundle:User:teamsList1.html.twig */
class __TwigTemplate_9534e3cd2c9f98bfb470a3b867422ce03d9e053b0adfdd93396e4bc2b045cdf3 extends Twig_Template
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
        $__internal_b92acfc459c804e282718114b7cdbe35a66c3400274369a8d83649cc635f31b1 = $this->env->getExtension("native_profiler");
        $__internal_b92acfc459c804e282718114b7cdbe35a66c3400274369a8d83649cc635f31b1->enter($__internal_b92acfc459c804e282718114b7cdbe35a66c3400274369a8d83649cc635f31b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:teamsList1.html.twig"));

        // line 1
        echo "<div class=\"table-responsive\">
<table class=\"table table-bordered table-striped\">
    <thead class=\"table-head\">
        <tr>
            <th>S.No</th>
            <th>Team</th>
            <th>Status</th>
            ";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getEdit", array()) == "true")) {
            // line 9
            echo "                <th>Edit</th>
            ";
        }
        // line 11
        echo "        </tr>
    </thead>
    <tbody>
";
        // line 14
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getView", array()) == "true")) {
            echo " 
        ";
            // line 15
            $context["counter"] = 1;
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams")));
            foreach ($context['_seq'] as $context["_key"] => $context["resNames"]) {
                // line 17
                echo "            <tr>
                <td>";
                // line 18
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "</td>
                <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "tname", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "status", array()), "html", null, true);
                echo "</td>
                ";
                // line 22
                echo "                ";
                if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getEdit", array()) == "true")) {
                    // line 23
                    echo "                    <td class=\"dlEdit\" ><span class='editTeam' id='";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "id", array()), "html", null, true);
                    echo "' data-path=\"";
                    echo $this->env->getExtension('routing')->getPath("vlreleases_team_getTeam");
                    echo "\">Edit</span></td>
                ";
                } else {
                    // line 25
                    echo "                    
                ";
                }
                // line 27
                echo "
            </tr>
            ";
                // line 29
                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                // line 30
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resNames'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "  
";
        }
        // line 32
        echo "    </tbody>
</table>
</div>";
        
        $__internal_b92acfc459c804e282718114b7cdbe35a66c3400274369a8d83649cc635f31b1->leave($__internal_b92acfc459c804e282718114b7cdbe35a66c3400274369a8d83649cc635f31b1_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:teamsList1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 32,  89 => 30,  87 => 29,  83 => 27,  79 => 25,  71 => 23,  68 => 22,  64 => 20,  60 => 19,  56 => 18,  53 => 17,  48 => 16,  46 => 15,  42 => 14,  37 => 11,  33 => 9,  31 => 8,  22 => 1,);
    }
}
