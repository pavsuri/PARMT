<?php

/* VlreleasesUserBundle:User:ajaxReporterPagination.html.twig */
class __TwigTemplate_cf954502e6c41d7edd4f70a6c8a82d8ee33ee87725440e92960d39f02b08cc59 extends Twig_Template
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
        $__internal_fd25bc8eca6bb6795c8636a06415f37426bfe6947bc74bdf1d8e260d87e9a1e2 = $this->env->getExtension("native_profiler");
        $__internal_fd25bc8eca6bb6795c8636a06415f37426bfe6947bc74bdf1d8e260d87e9a1e2->enter($__internal_fd25bc8eca6bb6795c8636a06415f37426bfe6947bc74bdf1d8e260d87e9a1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:ajaxReporterPagination.html.twig"));

        // line 1
        echo "<div class=\"profileTable\">
    <div class=\"table-responsive\">
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
        // line 17
        $context["counter"] = ((($this->getAttribute($this->getAttribute((isset($context["usersProfile"]) ? $context["usersProfile"] : $this->getContext($context, "usersProfile")), "paginator", array()), "getCurrentPage", array(), "method") - 1) * 30) + 1);
        // line 18
        echo "
                ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["usersProfile"]) ? $context["usersProfile"] : $this->getContext($context, "usersProfile")), "profiles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["details"]) {
            // line 20
            echo "                    ";
            $context["uId"] = $this->getAttribute($context["details"], "id", array());
            // line 21
            echo "                    <tr>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("vlreleases_user_displayProfile");
            echo "?userId=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "name", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "employeeId", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "email", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reporters"]) ? $context["reporters"] : $this->getContext($context, "reporters")), $this->getAttribute($context["details"], "id", array()), array(), "array"), "html", null, true);
            echo "</td>
                    </tr>

                    ";
            // line 29
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 30
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </tbody>
        </table>
    </div>
</div>";
        
        $__internal_fd25bc8eca6bb6795c8636a06415f37426bfe6947bc74bdf1d8e260d87e9a1e2->leave($__internal_fd25bc8eca6bb6795c8636a06415f37426bfe6947bc74bdf1d8e260d87e9a1e2_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:ajaxReporterPagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 31,  83 => 30,  81 => 29,  75 => 26,  71 => 25,  67 => 24,  59 => 23,  55 => 22,  52 => 21,  49 => 20,  45 => 19,  42 => 18,  40 => 17,  22 => 1,);
    }
}
