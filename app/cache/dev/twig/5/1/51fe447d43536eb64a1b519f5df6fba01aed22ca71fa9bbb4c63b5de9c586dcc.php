<?php

/* VlreleasesUserBundle:User:userFilterData.html.twig */
class __TwigTemplate_51fe447d43536eb64a1b519f5df6fba01aed22ca71fa9bbb4c63b5de9c586dcc extends Twig_Template
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
        $__internal_e5e208d87211bd54c9fc8250821e07a01b2345958fd51c591664c3ec0be1fe36 = $this->env->getExtension("native_profiler");
        $__internal_e5e208d87211bd54c9fc8250821e07a01b2345958fd51c591664c3ec0be1fe36->enter($__internal_e5e208d87211bd54c9fc8250821e07a01b2345958fd51c591664c3ec0be1fe36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:userFilterData.html.twig"));

        // line 1
        echo "
<div class=\"profileTable\">
        <div class=\"table-responsive\">
<table class=\"table table-bordered table-striped\">

<thead class=\"table-head\">
    <tr>
        <th>S.No</th>
        <th>Name</th>
        <th>Photo</th>
        <th>Employee Id</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Extension Number</th>
        <th>Work Station</th>
        <th>System Id</th>
        <th>System Ip</th>
        <th>Team</th>

    </tr>
</thead>
<tbody>

    ";
        // line 24
        if ((isset($context["filterData"]) ? $context["filterData"] : $this->getContext($context, "filterData"))) {
            // line 25
            echo "        ";
            $context["counter"] = 1;
            // line 26
            echo "
        ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filterData"]) ? $context["filterData"] : $this->getContext($context, "filterData")));
            foreach ($context['_seq'] as $context["_key"] => $context["userDetailsn"]) {
                // line 28
                echo "            <tr>
                <td>";
                // line 29
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "</td>
                <td><a href=\"";
                // line 30
                echo $this->env->getExtension('routing')->getPath("vlreleases_user_displayProfile");
                echo "?userId=";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userDetailsn"], 0, array(), "array"), "id", array(), "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userDetailsn"], 0, array(), "array"), "name", array(), "array"), "html", null, true);
                echo "</a></td>
                <td><div data-toggle=\"modal\" data-target=\"#ImageModal\"><img onClick=\"testi('";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userDetailsn"], 0, array(), "array"), "photo", array(), "array"), "html", null, true);
                echo "+";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userDetailsn"], 0, array(), "array"), "name", array(), "array"), "html", null, true);
                echo "+";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userDetailsn"], 0, array(), "array"), "employeeId", array(), "array"), "html", null, true);
                echo "');\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["userThumbImagePath"]) ? $context["userThumbImagePath"] : $this->getContext($context, "userThumbImagePath")), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userDetailsn"], 0, array(), "array"), "photo", array(), "array"), "html", null, true);
                echo "\" alt=\"\"/></div></td>
                <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userDetailsn"], 0, array(), "array"), "employeeId", array(), "array"), "html", null, true);
                echo "</td>
                <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userDetailsn"], 0, array(), "array"), "email", array(), "array"), "html", null, true);
                echo "</td>
                <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userDetailsn"], 0, array(), "array"), "mobile", array(), "array"), "html", null, true);
                echo "</td>
                <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userDetailsn"], 0, array(), "array"), "extensionNumber", array(), "array"), "html", null, true);
                echo "</td>
                <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userDetailsn"], 0, array(), "array"), "workStation", array(), "array"), "html", null, true);
                echo "</td>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userDetailsn"], 0, array(), "array"), "systemId", array(), "array"), "html", null, true);
                echo "</td>
                <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userDetailsn"], 0, array(), "array"), "systemIp", array(), "array"), "html", null, true);
                echo "</td>
                <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userDetailsn"], 0, array(), "array"), "tname", array(), "array"), "html", null, true);
                echo "</td>

            </tr>
            ";
                // line 42
                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                // line 43
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userDetailsn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
    ";
        }
        // line 47
        echo "



    ";
        // line 51
        if ((isset($context["filterData1"]) ? $context["filterData1"] : $this->getContext($context, "filterData1"))) {
            // line 52
            echo "        ";
            $context["counter"] = 1;
            // line 53
            echo "
        ";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filterData1"]) ? $context["filterData1"] : $this->getContext($context, "filterData1")));
            foreach ($context['_seq'] as $context["_key"] => $context["userDetailsn"]) {
                // line 55
                echo "            <tr>
                <td>";
                // line 56
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "</td>
                <td><a href=\"";
                // line 57
                echo $this->env->getExtension('routing')->getPath("vlreleases_user_displayProfile");
                echo "?userId=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "id", array(), "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "name", array(), "array"), "html", null, true);
                echo "</a></td>
                <td><div data-toggle=\"modal\" data-target=\"#ImageModal\"><img  onClick=\"testi('";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "photo", array(), "array"), "html", null, true);
                echo "+";
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "name", array(), "array"), "html", null, true);
                echo "+";
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "employeeId", array(), "array"), "html", null, true);
                echo "');\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["userThumbImagePath"]) ? $context["userThumbImagePath"] : $this->getContext($context, "userThumbImagePath")), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "photo", array(), "array"), "html", null, true);
                echo "\" alt=\"\"/></div></td>
                <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "employeeId", array(), "array"), "html", null, true);
                echo "</td>
                <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "email", array(), "array"), "html", null, true);
                echo "</td>
                <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "mobile", array(), "array"), "html", null, true);
                echo "</td>
                <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "extensionNumber", array(), "array"), "html", null, true);
                echo "</td>
                <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "workStation", array(), "array"), "html", null, true);
                echo "</td>
                <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "systemId", array(), "array"), "html", null, true);
                echo "</td>
                <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "systemIp", array(), "array"), "html", null, true);
                echo "</td>
                <td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "tname", array(), "array"), "html", null, true);
                echo "</td>

            </tr>
            ";
                // line 69
                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                // line 70
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userDetailsn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "
    ";
        }
        // line 74
        echo "
</tbody>
</table>\t
        </div>
</div>

                   ";
        
        $__internal_e5e208d87211bd54c9fc8250821e07a01b2345958fd51c591664c3ec0be1fe36->leave($__internal_e5e208d87211bd54c9fc8250821e07a01b2345958fd51c591664c3ec0be1fe36_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:userFilterData.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 74,  219 => 72,  212 => 70,  210 => 69,  204 => 66,  200 => 65,  196 => 64,  192 => 63,  188 => 62,  184 => 61,  180 => 60,  176 => 59,  165 => 58,  157 => 57,  153 => 56,  150 => 55,  146 => 54,  143 => 53,  140 => 52,  138 => 51,  132 => 47,  128 => 45,  121 => 43,  119 => 42,  113 => 39,  109 => 38,  105 => 37,  101 => 36,  97 => 35,  93 => 34,  89 => 33,  85 => 32,  74 => 31,  66 => 30,  62 => 29,  59 => 28,  55 => 27,  52 => 26,  49 => 25,  47 => 24,  22 => 1,);
    }
}
