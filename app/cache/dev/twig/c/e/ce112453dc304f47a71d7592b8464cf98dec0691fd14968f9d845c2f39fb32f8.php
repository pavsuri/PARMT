<?php

/* VlreleasesUserBundle:User:userSearchDetails.html.twig */
class __TwigTemplate_ce112453dc304f47a71d7592b8464cf98dec0691fd14968f9d845c2f39fb32f8 extends Twig_Template
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
        $__internal_e6fd139b9e9c43463aef88f73582bfc13d569669df114c22c2f95117776b540e = $this->env->getExtension("native_profiler");
        $__internal_e6fd139b9e9c43463aef88f73582bfc13d569669df114c22c2f95117776b540e->enter($__internal_e6fd139b9e9c43463aef88f73582bfc13d569669df114c22c2f95117776b540e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:userSearchDetails.html.twig"));

        // line 1
        echo "
<div class=\"profileTable\">
<div class=\"table-responsive\">
    <table class=\"table table-bordered table-striped\">

        <thead class=\"table-head\">
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Image</th>
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
        if ((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails"))) {
            // line 25
            echo "                ";
            $context["counter"] = 1;
            // line 26
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")));
            foreach ($context['_seq'] as $context["_key"] => $context["userDetailsn"]) {
                // line 27
                echo "                    <tr>
                        <td>";
                // line 28
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "</td>
                        <td><a href=\"";
                // line 29
                echo $this->env->getExtension('routing')->getPath("vlreleases_user_displayProfile");
                echo "?userId=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "id", array(), "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "name", array(), "array"), "html", null, true);
                echo "</a></td>
                        <td><div data-toggle=\"modal\" data-target=\"#ImageModal\"><img  onClick=\"testi('";
                // line 30
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
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "employeeId", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "email", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "mobile", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "extensionNumber", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "workStation", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "systemId", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "systemIp", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["userDetailsn"], "tname", array(), "array"), "html", null, true);
                echo "</td>

                    </tr>
                    ";
                // line 41
                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                // line 42
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userDetailsn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            ";
        } else {
            // line 44
            echo "                <tr>
                    <td colspan=\"11\" align=\"center\"><h4>No Results found</h4></td>
                </tr>
            ";
        }
        // line 48
        echo "        </tbody>
    </table>\t
</div>
</div>
                    ";
        
        $__internal_e6fd139b9e9c43463aef88f73582bfc13d569669df114c22c2f95117776b540e->leave($__internal_e6fd139b9e9c43463aef88f73582bfc13d569669df114c22c2f95117776b540e_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:userSearchDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 48,  128 => 44,  125 => 43,  119 => 42,  117 => 41,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  91 => 33,  87 => 32,  83 => 31,  72 => 30,  64 => 29,  60 => 28,  57 => 27,  52 => 26,  49 => 25,  47 => 24,  22 => 1,);
    }
}
