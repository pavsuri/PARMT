<?php

/* VlreleasesUserBundle:User:displayProjectList.html.twig */
class __TwigTemplate_bfbdffd10b75107d7f641e3991dc4b8a264b5df3a554f7570961bae562960fba extends Twig_Template
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
        $__internal_e7616b220474c398e3e338cbe067d314348c14337ddab1979b074f17524dfa41 = $this->env->getExtension("native_profiler");
        $__internal_e7616b220474c398e3e338cbe067d314348c14337ddab1979b074f17524dfa41->enter($__internal_e7616b220474c398e3e338cbe067d314348c14337ddab1979b074f17524dfa41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:displayProjectList.html.twig"));

        // line 1
        echo "<div id=\"ajaxproject\">
<form id='displayProjectListform' action='";
        // line 2
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_getProjectData");
        echo "' method='POST'>
    <div class=\"profileTable\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered table-striped\">

                <thead class=\"table-head\">
                    <tr>
                        <th>S.No</th>
                        <th>Project</th>
                        <th>Client</th>
                        <th>Phase</th>
                        <th>Life Cycle Status</th>
                        <th>Project Billing Status</th>\t
                        <th>Created By</th>
                        <th>Created On</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        ";
        // line 20
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getEdit", array()) == "true")) {
            // line 21
            echo "                            <th>Edit</th>
                        ";
        }
        // line 23
        echo "                    </tr>
                </thead>
                <tbody>
            ";
        // line 26
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getView", array()) == "true")) {
            // line 27
            echo "                ";
            $context["counter"] = 1;
            // line 28
            echo "                ";
            $context["status"] = "active";
            // line 29
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 30
                echo "                    <tr>
                        <td>";
                // line 31
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "</td>
                        <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "clientName", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "phaseName", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "lifeCycleStatus", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "billingStatus", array(), "array"), "html", null, true);
                echo "</td>
                        <td><a href=\"";
                // line 37
                echo $this->env->getExtension('routing')->getPath("vlreleases_user_displayProfile");
                echo "?userId=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", array(), "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "userName", array(), "array"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "createDate", array(), "array"), "d-m-Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "startDate", array(), "array"), "d-m-Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "endDate", array(), "array"), "d-m-Y"), "html", null, true);
                echo "</td>
                        ";
                // line 41
                if (($this->getAttribute($context["project"], "projectStatus", array(), "array") == 1)) {
                    // line 42
                    echo "                            ";
                    // line 43
                    echo "\t\t\t    ";
                    if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getEdit", array()) == "true")) {
                        // line 44
                        echo "                                <td class=\"sEdit\" ><span class='editStatus' path=\"\" id1='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "projectStatus", array(), "array"), "html", null, true);
                        echo "' pro='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "pid", array(), "array"), "html", null, true);
                        echo "' >Active</span></td>
                            ";
                    } else {
                        // line 46
                        echo "                                <td>Active</td>
                            ";
                    }
                    // line 48
                    echo "                        ";
                } else {
                    // line 49
                    echo "                            ";
                    // line 50
                    echo "\t\t\t";
                    if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getEdit", array()) == "true")) {
                        // line 51
                        echo "                            <td class=\"sEdit\" ><span class='editStatus' path=\"\" id2='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "projectStatus", array(), "array"), "html", null, true);
                        echo "' pro='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "pid", array(), "array"), "html", null, true);
                        echo "'>Inactive</span></td>
                        ";
                    } else {
                        // line 53
                        echo "                            <td>Inactive</td>
                        ";
                    }
                    // line 55
                    echo "                        ";
                }
                // line 56
                echo "                        ";
                // line 57
                echo "\t\t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getEdit", array()) == "true")) {
                    // line 58
                    echo "                            <td class=\"dlEdit\" ><span class='editProject' path=\"\"  idToEdit='";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "pid", array(), "array"), "html", null, true);
                    echo "' >Edit</span></td>
                        ";
                } else {
                    // line 60
                    echo "                            
                        ";
                }
                // line 62
                echo "                    </tr>
                    ";
                // line 63
                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                // line 64
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t</tbody>
            </table>
        </div>
    </div>

</form>
    </div>
<span style='display:none;' id='listProjectUrl'>";
        // line 73
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_listProjects");
        echo "</span> 
<span style='display:none;' id='deatilsEdit'>";
        // line 74
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_getAddProjectFormData");
        echo "</span>";
        
        $__internal_e7616b220474c398e3e338cbe067d314348c14337ddab1979b074f17524dfa41->leave($__internal_e7616b220474c398e3e338cbe067d314348c14337ddab1979b074f17524dfa41_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:displayProjectList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 74,  197 => 73,  188 => 66,  185 => 65,  179 => 64,  177 => 63,  174 => 62,  170 => 60,  164 => 58,  161 => 57,  159 => 56,  156 => 55,  152 => 53,  144 => 51,  141 => 50,  139 => 49,  136 => 48,  132 => 46,  124 => 44,  121 => 43,  119 => 42,  117 => 41,  113 => 40,  109 => 39,  105 => 38,  97 => 37,  93 => 36,  89 => 35,  85 => 34,  81 => 33,  77 => 32,  73 => 31,  70 => 30,  65 => 29,  62 => 28,  59 => 27,  57 => 26,  52 => 23,  48 => 21,  46 => 20,  25 => 2,  22 => 1,);
    }
}
