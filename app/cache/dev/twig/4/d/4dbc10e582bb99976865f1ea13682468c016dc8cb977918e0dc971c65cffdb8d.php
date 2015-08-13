<?php

/* VlreleasesUserBundle:User:ajaxActions.html.twig */
class __TwigTemplate_4dbc10e582bb99976865f1ea13682468c016dc8cb977918e0dc971c65cffdb8d extends Twig_Template
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
        $__internal_a1f09418121c70bab2cf88815329f2d751ec5a7de1b925462384bf357a32efdb = $this->env->getExtension("native_profiler");
        $__internal_a1f09418121c70bab2cf88815329f2d751ec5a7de1b925462384bf357a32efdb->enter($__internal_a1f09418121c70bab2cf88815329f2d751ec5a7de1b925462384bf357a32efdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:ajaxActions.html.twig"));

        // line 1
        echo "<table cellspacing=\"0\" cellpadding=\"5\" border=\"0\" class=\"table table-bordered table-striped\" id=\"userprofile-table\">
    <thead class=\"table-head\">
        <tr>
            <th>S.No</th>
            <th>Screen Name</th>
            <th>Add</th>
            <th>Edit</th>
            <th>View</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 12
        $context["counter"] = 1;
        // line 13
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "screenName", array()), "html", null, true);
            echo "</td>
                ";
            // line 17
            if ($this->getAttribute((isset($context["userRoles"]) ? $context["userRoles"] : null), $this->getAttribute($context["data"], "id", array()), array(), "array", true, true)) {
                // line 18
                echo "                    <td><input type=\"checkbox\" name=myarray[";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "][] value=\"add\" ";
                echo (($this->getAttribute($this->getAttribute((isset($context["userRoles"]) ? $context["userRoles"] : $this->getContext($context, "userRoles")), $this->getAttribute($context["data"], "id", array()), array(), "array"), "add", array(), "array")) ? ("checked") : ("false"));
                echo " /></td>
                    <td><input type=\"checkbox\" name=myarray[";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "][] value=\"edit\" ";
                echo (($this->getAttribute($this->getAttribute((isset($context["userRoles"]) ? $context["userRoles"] : $this->getContext($context, "userRoles")), $this->getAttribute($context["data"], "id", array()), array(), "array"), "edit", array(), "array")) ? ("checked") : ("false"));
                echo " /></td>
                    <td><input type=\"checkbox\" name=myarray[";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "][] value=\"view\" ";
                echo (($this->getAttribute($this->getAttribute((isset($context["userRoles"]) ? $context["userRoles"] : $this->getContext($context, "userRoles")), $this->getAttribute($context["data"], "id", array()), array(), "array"), "view", array(), "array")) ? ("checked") : ("false"));
                echo " /></td>
                    ";
            } else {
                // line 22
                echo "                    <td><input type=\"checkbox\" name=myarray[";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "][] value=\"add\" /></td>
                    <td><input type=\"checkbox\" name=myarray[";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "][] value=\"edit\" /></td>
                    <td><input type=\"checkbox\" name=myarray[";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "][] value=\"view\" /></td>
                    ";
            }
            // line 26
            echo "                    ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 27
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
    </tbody>
</table>";
        
        $__internal_a1f09418121c70bab2cf88815329f2d751ec5a7de1b925462384bf357a32efdb->leave($__internal_a1f09418121c70bab2cf88815329f2d751ec5a7de1b925462384bf357a32efdb_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:ajaxActions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  89 => 26,  84 => 24,  80 => 23,  75 => 22,  68 => 20,  62 => 19,  55 => 18,  53 => 17,  49 => 16,  45 => 15,  42 => 14,  37 => 13,  35 => 12,  22 => 1,);
    }
}
