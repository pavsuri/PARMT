<?php

/* VlreleasesUserBundle:User:displayHolidaysList.html.twig */
class __TwigTemplate_7791bcbda6a893b721d85bc3611f990a6f4ce935585668af57d16917252dfc7b extends Twig_Template
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
        $__internal_daab7a969f5c919a581c43b886fc6e1b884e45eafabc0da6550bc0de4a46e1cf = $this->env->getExtension("native_profiler");
        $__internal_daab7a969f5c919a581c43b886fc6e1b884e45eafabc0da6550bc0de4a46e1cf->enter($__internal_daab7a969f5c919a581c43b886fc6e1b884e45eafabc0da6550bc0de4a46e1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:displayHolidaysList.html.twig"));

        // line 1
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getView", array()) == "true")) {
            // line 2
            echo "<div class=\"profileTable\">
        <div class=\"table-responsive\">
         <table class=\"table table-bordered table-striped\">
            <thead class=\"table-head\">
                 <tr>
                     <th>S.No</th>
                     <th>Holiday Name</th>
                     <th>Holiday Date</th> 
                     ";
            // line 10
            if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getEdit", array()) == "true")) {
                // line 11
                echo "                         <th>Delete</th>                     
                         <th>Edit</th>
                     ";
            }
            // line 14
            echo "                 </tr>
             </thead>
             <tbody>
             ";
            // line 18
            echo "                 ";
            $context["counter"] = 1;
            // line 19
            echo "                 ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["holidaysData"]) ? $context["holidaysData"] : $this->getContext($context, "holidaysData")));
            foreach ($context['_seq'] as $context["_key"] => $context["resNames"]) {
                // line 20
                echo "                     <tr>
                         <td>";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "</td>
                         <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "getHolidayName", array()), "html", null, true);
                echo "</td>
                         <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "getHolidayDate", array()), "html", null, true);
                echo "</td> 
                         ";
                // line 24
                if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getEdit", array()) == "true")) {
                    // line 25
                    echo "                             <td class=\"dlEdit holidayDelete\" holidayId=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "id", array()), "html", null, true);
                    echo "\">delete</td>
                             <td class=\"dlEdit holidayEdit\" value=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "id", array()), "html", null, true);
                    echo "+";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "getHolidayName", array()), "html", null, true);
                    echo "+";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "getHolidayDate", array()), "html", null, true);
                    echo "\">edit</td>                         
                         ";
                }
                // line 28
                echo "                     </tr>
                     ";
                // line 29
                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                // line 30
                echo "                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resNames'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                 ";
            // line 32
            echo "            </tbody>
         </table>
     </div>
</div>
";
        }
        
        $__internal_daab7a969f5c919a581c43b886fc6e1b884e45eafabc0da6550bc0de4a46e1cf->leave($__internal_daab7a969f5c919a581c43b886fc6e1b884e45eafabc0da6550bc0de4a46e1cf_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:displayHolidaysList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 32,  90 => 30,  88 => 29,  85 => 28,  76 => 26,  71 => 25,  69 => 24,  65 => 23,  61 => 22,  57 => 21,  54 => 20,  49 => 19,  46 => 18,  41 => 14,  36 => 11,  34 => 10,  24 => 2,  22 => 1,);
    }
}
