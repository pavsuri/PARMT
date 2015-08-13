<?php

/* VlreleasesUserBundle:User:reporterFilterData.html.twig */
class __TwigTemplate_b2a9a5c8443fd5f56c88956c6469b76dd68753a844161c220c5e0845ae6a2bd5 extends Twig_Template
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
        $__internal_4aadbdb77a629ba582dcf27c4619c9aa3e5e2172548ee833c4e6cf77cc9839e2 = $this->env->getExtension("native_profiler");
        $__internal_4aadbdb77a629ba582dcf27c4619c9aa3e5e2172548ee833c4e6cf77cc9839e2->enter($__internal_4aadbdb77a629ba582dcf27c4619c9aa3e5e2172548ee833c4e6cf77cc9839e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:reporterFilterData.html.twig"));

        // line 1
        echo "
<div class=\"profileTable\">
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
        if ((isset($context["filterData"]) ? $context["filterData"] : $this->getContext($context, "filterData"))) {
            echo "  
       ";
            // line 18
            if ((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details"))) {
                // line 19
                echo "           ";
                $context["counter"] = 1;
                // line 20
                echo "           ";
                $context["id"] = 0;
                // line 21
                echo "           ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["filterData"]) ? $context["filterData"] : $this->getContext($context, "filterData")));
                foreach ($context['_seq'] as $context["_key"] => $context["details2"]) {
                    // line 22
                    echo "               <tr>
                   <td>";
                    // line 23
                    echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                    echo "</td>
                   <td><a href=\"";
                    // line 24
                    echo $this->env->getExtension('routing')->getPath("vlreleases_user_displayProfile");
                    echo "?userId=";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["details2"], 0, array(), "array"), "id", array(), "array"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["details2"], 0, array(), "array"), "name", array(), "array"), "html", null, true);
                    echo "</a></td>
                   <td>";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["details2"], 0, array(), "array"), "employeeId", array(), "array"), "html", null, true);
                    echo "</td>
                   <td>";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["details2"], 0, array(), "array"), "email", array(), "array"), "html", null, true);
                    echo "</td>
                   <td>";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), array(), "array"), "html", null, true);
                    echo "</td>
               </tr>
               ";
                    // line 29
                    $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                    // line 30
                    echo "               ";
                    $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) + 1);
                    // line 31
                    echo "           ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['details2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "       ";
            }
            // line 33
            echo "   ";
        }
        // line 34
        echo "   ";
        if ((isset($context["filterData1"]) ? $context["filterData1"] : $this->getContext($context, "filterData1"))) {
            echo "  
       ";
            // line 35
            if ((isset($context["details1"]) ? $context["details1"] : $this->getContext($context, "details1"))) {
                // line 36
                echo "           ";
                $context["counter"] = 1;
                // line 37
                echo "           ";
                $context["id"] = 0;
                // line 38
                echo "           ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["filterData1"]) ? $context["filterData1"] : $this->getContext($context, "filterData1")));
                foreach ($context['_seq'] as $context["_key"] => $context["details2"]) {
                    // line 39
                    echo "               <tr>
                   <td>";
                    // line 40
                    echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                    echo "</td>
                   <td><a href=\"";
                    // line 41
                    echo $this->env->getExtension('routing')->getPath("vlreleases_user_displayProfile");
                    echo "?userId=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details2"], "id", array(), "array"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details2"], "name", array(), "array"), "html", null, true);
                    echo "</a></td>
                   <td>";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details2"], "employeeId", array(), "array"), "html", null, true);
                    echo "</td>
                   <td>";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details2"], "email", array(), "array"), "html", null, true);
                    echo "</td>
                   <td>";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details1"]) ? $context["details1"] : $this->getContext($context, "details1")), (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), array(), "array"), "html", null, true);
                    echo "</td>
               </tr>
               ";
                    // line 46
                    $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                    // line 47
                    echo "               ";
                    $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) + 1);
                    // line 48
                    echo "           ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['details2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "       ";
            }
            // line 50
            echo "   ";
        }
        // line 51
        echo "</tbody>    
</table>\t
</div>
</div>
";
        
        $__internal_4aadbdb77a629ba582dcf27c4619c9aa3e5e2172548ee833c4e6cf77cc9839e2->leave($__internal_4aadbdb77a629ba582dcf27c4619c9aa3e5e2172548ee833c4e6cf77cc9839e2_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:reporterFilterData.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 51,  162 => 50,  159 => 49,  153 => 48,  150 => 47,  148 => 46,  143 => 44,  139 => 43,  135 => 42,  127 => 41,  123 => 40,  120 => 39,  115 => 38,  112 => 37,  109 => 36,  107 => 35,  102 => 34,  99 => 33,  96 => 32,  90 => 31,  87 => 30,  85 => 29,  80 => 27,  76 => 26,  72 => 25,  64 => 24,  60 => 23,  57 => 22,  52 => 21,  49 => 20,  46 => 19,  44 => 18,  40 => 17,  22 => 1,);
    }
}
