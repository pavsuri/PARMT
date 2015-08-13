<?php

/* VlreleasesUserBundle:User:reporterSearchDetails.html.twig */
class __TwigTemplate_988b12f0f479c662852b413d95c75114a8c665375b778706c6bac652f796ebef extends Twig_Template
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
        $__internal_48ba0dce13109f8d05bbb038ccf787b0f6199db93676f15130a56a024f7eabad = $this->env->getExtension("native_profiler");
        $__internal_48ba0dce13109f8d05bbb038ccf787b0f6199db93676f15130a56a024f7eabad->enter($__internal_48ba0dce13109f8d05bbb038ccf787b0f6199db93676f15130a56a024f7eabad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:reporterSearchDetails.html.twig"));

        // line 1
        echo "
<table class=\"table table-bordered table-striped\">

    <thead class=\"table-head\">
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Employee Id</th>
            <th>Email</th>
            <th>Reporting Persons</th>

        </tr>
    </thead>
    <tbody>

        ";
        // line 16
        if ((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails"))) {
            // line 17
            echo "            ";
            $context["counter"] = 1;
            // line 18
            echo "            ";
            $context["id"] = 0;
            // line 19
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")));
            foreach ($context['_seq'] as $context["_key"] => $context["details"]) {
                // line 20
                echo "                <tr>
                    <td>";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 22
                echo $this->env->getExtension('routing')->getPath("vlreleases_user_displayProfile");
                echo "?userId=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "name", array(), "array"), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "employeeId", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "email", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails1"]) ? $context["userDetails1"] : $this->getContext($context, "userDetails1")), (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), array(), "array"), "html", null, true);
                echo "</td>
                </tr>
                ";
                // line 27
                $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) + 1);
                // line 28
                echo "                ";
                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                // line 29
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
        } else {
            // line 31
            echo "            <tr>
                <td colspan=\"5\" align=\"center\"><h4>No Results found</h4></td>
            </tr>

        ";
        }
        // line 36
        echo "    </tbody>
</table>\t

               ";
        
        $__internal_48ba0dce13109f8d05bbb038ccf787b0f6199db93676f15130a56a024f7eabad->leave($__internal_48ba0dce13109f8d05bbb038ccf787b0f6199db93676f15130a56a024f7eabad_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:reporterSearchDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  94 => 31,  91 => 30,  85 => 29,  82 => 28,  80 => 27,  75 => 25,  71 => 24,  67 => 23,  59 => 22,  55 => 21,  52 => 20,  47 => 19,  44 => 18,  41 => 17,  39 => 16,  22 => 1,);
    }
}
