<?php

/* VlreleasesUserBundle:User:ajaxUserPagination.html.twig */
class __TwigTemplate_07d341fe48e5de80c39650cc5ad29f1106a74411618617504f43827cabe56c70 extends Twig_Template
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
        $__internal_f463124ee40157f4f06f35db16c2f14b509865dc93297efb1da39f0b0f1a8227 = $this->env->getExtension("native_profiler");
        $__internal_f463124ee40157f4f06f35db16c2f14b509865dc93297efb1da39f0b0f1a8227->enter($__internal_f463124ee40157f4f06f35db16c2f14b509865dc93297efb1da39f0b0f1a8227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:ajaxUserPagination.html.twig"));

        // line 1
        echo "<div class=\"profileTable\">
    <div class=\"table-responsive\">
        <table cellspacing=\"0\" cellpadding=\"5\" border=\"0\" class=\"table table-bordered table-striped\" id=\"userprofile-table\">

            <thead class=\"table-head\">
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Employee Id</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
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
        $context["counter"] = ((($this->getAttribute($this->getAttribute((isset($context["usersProfile"]) ? $context["usersProfile"] : $this->getContext($context, "usersProfile")), "paginator", array()), "getCurrentPage", array(), "method") - 1) * 30) + 1);
        // line 25
        echo "
                ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["usersProfile"]) ? $context["usersProfile"] : $this->getContext($context, "usersProfile")), "profiles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["details"]) {
            // line 27
            echo "
                    <tr>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("vlreleases_user_displayProfile");
            echo "?userId=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "name", array()), "html", null, true);
            echo "</a></td>
                        <td><div style=\"display:block;width:64px;\" data-toggle=\"modal\" data-target=\"#ImageModal\"  style=\"padding:0px;\"><img  onClick=\"testi('";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "photo", array()), "html", null, true);
            echo "+";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "name", array()), "html", null, true);
            echo "+";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "employeeId", array()), "html", null, true);
            echo "');\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["userThumbImagePath"]) ? $context["userThumbImagePath"] : $this->getContext($context, "userThumbImagePath")), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "photo", array()), "html", null, true);
            echo "\" alt=\"\"/></div></td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "employeeId", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "email", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "mobile", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "extensionNumber", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "workStation", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "systemId", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "systemIp", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "tname", array()), "html", null, true);
            echo "</td>

                    </tr>

                    ";
            // line 43
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 44
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </tbody>
        </table>
    </div>
</div>";
        
        $__internal_f463124ee40157f4f06f35db16c2f14b509865dc93297efb1da39f0b0f1a8227->leave($__internal_f463124ee40157f4f06f35db16c2f14b509865dc93297efb1da39f0b0f1a8227_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:ajaxUserPagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 45,  120 => 44,  118 => 43,  111 => 39,  107 => 38,  103 => 37,  99 => 36,  95 => 35,  91 => 34,  87 => 33,  83 => 32,  72 => 31,  64 => 30,  60 => 29,  56 => 27,  52 => 26,  49 => 25,  47 => 24,  22 => 1,);
    }
}
