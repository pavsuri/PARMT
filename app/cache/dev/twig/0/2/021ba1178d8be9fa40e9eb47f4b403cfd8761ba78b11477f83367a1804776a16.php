<?php

/* VlreleasesUserBundle:User:displaygroupmailsList.html.twig */
class __TwigTemplate_021ba1178d8be9fa40e9eb47f4b403cfd8761ba78b11477f83367a1804776a16 extends Twig_Template
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
        $__internal_918b4efa3e1ce8b5e91ba5a3f2e74fb8bdeb5e4e3c1bdad54b2fa42d8372a63f = $this->env->getExtension("native_profiler");
        $__internal_918b4efa3e1ce8b5e91ba5a3f2e74fb8bdeb5e4e3c1bdad54b2fa42d8372a63f->enter($__internal_918b4efa3e1ce8b5e91ba5a3f2e74fb8bdeb5e4e3c1bdad54b2fa42d8372a63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:displaygroupmailsList.html.twig"));

        // line 1
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getView", array()) == "true")) {
            // line 2
            echo "    <div class=\"profileTable\">
    <div class=\"table-responsive\">
     <table class=\"table table-bordered table-striped\">
        <thead class=\"table-head\">
             <tr>
                 <th>S.No</th>
                 <th>Group Mail</th>
                 <th>Created By</th>
                 <th>Created Date</th>
                 <th>View Memebers</th>
                 ";
            // line 12
            if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getEdit", array()) == "true")) {
                // line 13
                echo "                    <th>Edit</th>
                    <th>Delete</th>                 
                    <th>Test Mail</th>                                      
                 ";
            }
            // line 17
            echo "             </tr>
         </thead>
         <tbody>      
             ";
            // line 20
            $context["counter"] = 1;
            // line 21
            echo "             ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groupMailsList"]) ? $context["groupMailsList"] : $this->getContext($context, "groupMailsList")));
            foreach ($context['_seq'] as $context["_key"] => $context["resNames"]) {
                // line 22
                echo "                 <tr>
                     <td>";
                // line 23
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "</td>
                     <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "groupEmail", array()), "html", null, true);
                echo "</td>
                     <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "userName", array()), "html", null, true);
                echo "</td>
                     <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["resNames"], "createdDate", array()), "d-m-Y"), "html", null, true);
                echo "</td>
                     <td class=\"sEdit\"><a href=\"";
                // line 27
                echo $this->env->getExtension('routing')->getPath("vlreleases_groupMails_getMailMembers");
                echo "?userId=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "id", array()), "html", null, true);
                echo "\">View Members</a></td>
                     ";
                // line 28
                if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getEdit", array()) == "true")) {
                    // line 29
                    echo "                        <td class=\"sEdit\" id=\"EditGrp\" grpId=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "id", array()), "html", null, true);
                    echo ">edit</td>
                        <td class=\"sEdit\" id=\"deleteGrp\" grpId=";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "id", array()), "html", null, true);
                    echo ">delete</td>                     
                        <td class=\"sEdit\"><a href=\"";
                    // line 31
                    echo $this->env->getExtension('routing')->getPath("vlreleases_groupMails_testMail");
                    echo "?userId=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "id", array()), "html", null, true);
                    echo "\">Test Mail</a></td>
                     ";
                }
                // line 33
                echo "                 </tr>
                 ";
                // line 34
                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                // line 35
                echo "             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resNames'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "              
        </tbody>
     </table>
    </div>
    </div>
";
        }
        
        $__internal_918b4efa3e1ce8b5e91ba5a3f2e74fb8bdeb5e4e3c1bdad54b2fa42d8372a63f->leave($__internal_918b4efa3e1ce8b5e91ba5a3f2e74fb8bdeb5e4e3c1bdad54b2fa42d8372a63f_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:displaygroupmailsList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  102 => 34,  99 => 33,  92 => 31,  88 => 30,  83 => 29,  81 => 28,  75 => 27,  71 => 26,  67 => 25,  63 => 24,  59 => 23,  56 => 22,  51 => 21,  49 => 20,  44 => 17,  38 => 13,  36 => 12,  24 => 2,  22 => 1,);
    }
}
