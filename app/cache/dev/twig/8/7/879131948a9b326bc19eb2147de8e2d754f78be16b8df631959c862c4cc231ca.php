<?php

/* VlreleasesUserBundle:User:userResume.html.twig */
class __TwigTemplate_879131948a9b326bc19eb2147de8e2d754f78be16b8df631959c862c4cc231ca extends Twig_Template
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
        $__internal_6782b2288d16f10603eb0c3e314bb927fa29a25530a87b7691b03c554870a1ee = $this->env->getExtension("native_profiler");
        $__internal_6782b2288d16f10603eb0c3e314bb927fa29a25530a87b7691b03c554870a1ee->enter($__internal_6782b2288d16f10603eb0c3e314bb927fa29a25530a87b7691b03c554870a1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:userResume.html.twig"));

        // line 1
        echo "<div class=\"resume\" style=\"margin:10px;\">   
";
        // line 2
        if ((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData"))) {
            // line 3
            echo "        <div class=\"col-md-12 panel panel-default\">
        <h3 class=\"text-center\">Resume </h3>
        <div class=\"panel-body\">
            <div class=\"col-md-8\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Personal Detials</div>
                <div class=\"panel-body\">
                  <p class=\"col-md-12\">
                      <span class=\"col-md-4\"><b>Name :</b></span>
                        ";
            // line 12
            if ($this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "userName", array(), "array")) {
                // line 13
                echo "                            <span class=\"col-md-6\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "userName", array(), "array"), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 14
                echo "   
                            <span class=\"col-md-6\"></span>
                        ";
            }
            // line 16
            echo "                      
                  </p>
                  <p class=\"col-md-12\">
                      <span class=\"col-md-4\"><b>EmployeeId :</b></span>
                        ";
            // line 20
            if ($this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "employeeId", array(), "array")) {
                // line 21
                echo "                            <span class=\"col-md-6\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "employeeId", array(), "array"), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 22
                echo "   
                            <span class=\"col-md-6\"></span>
                        ";
            }
            // line 24
            echo "                      
                  </p>  
                  <p class=\"col-md-12\">
                      <span class=\"col-md-4\"><b>Email :</b></span>
                        ";
            // line 28
            if ($this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "email", array(), "array")) {
                // line 29
                echo "                            <span class=\"col-md-6\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "email", array(), "array"), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 30
                echo "   
                            <span class=\"col-md-6\"></span>
                        ";
            }
            // line 32
            echo "                      
                  </p>  
                  <p class=\"col-md-12\">
                      <span class=\"col-md-4\"><b>DOB :</b></span>
                        ";
            // line 36
            if (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "dob", array(), "array"), "d-m-Y")) {
                // line 37
                echo "                            <span class=\"col-md-6\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "dob", array(), "array"), "d-m-Y"), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 38
                echo "   
                            <span class=\"col-md-6\"></span>
                        ";
            }
            // line 40
            echo "                      
                  </p>  
                   <p class=\"col-md-12\">
                      <span class=\"col-md-4\"><b>Mobile No :</b></span>
                        ";
            // line 44
            if ($this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "mobile", array(), "array")) {
                // line 45
                echo "                            <span class=\"col-md-6\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "mobile", array(), "array"), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 46
                echo "   
                            <span class=\"col-md-6\"></span>
                        ";
            }
            // line 48
            echo "                      
                  </p>  
                  <p class=\"col-md-12\">
                      <span class=\"col-md-4\"><b>Highest Education :</b></span>
                        ";
            // line 52
            if ($this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "highestEducation", array(), "array")) {
                // line 53
                echo "                            <span class=\"col-md-6\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "highestEducation", array(), "array"), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 54
                echo "   
                            <span class=\"col-md-6\"></span>
                        ";
            }
            // line 56
            echo "                      
                  </p> 
                  <p class=\"col-md-12\">
                      <span class=\"col-md-4\"><b>Passed Out Year :</b></span>
                        ";
            // line 60
            if ($this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "passedoutYear", array(), "array")) {
                // line 61
                echo "                            <span class=\"col-md-6\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "passedoutYear", array(), "array"), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 62
                echo "   
                            <span class=\"col-md-6\"></span>
                        ";
            }
            // line 64
            echo "                      
                  </p> 
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Work Detials</div>
                <div class=\"panel-body\">                   
                  <p class=\"col-md-12\">
                      <span class=\"col-md-4\"><b>Date Of Joining :</b></span>
                        ";
            // line 73
            if (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "doj", array(), "array"), "d-m-Y")) {
                // line 74
                echo "                            <span class=\"col-md-6\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "doj", array(), "array"), "d-m-Y"), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 75
                echo "   
                            <span class=\"col-md-6\"></span>
                        ";
            }
            // line 77
            echo "                      
                  </p> 
                    <div class=\"col-md-12\">
                      <span class=\"col-md-4\"><b>Work Experience :</b></span>
                        ";
            // line 81
            if ($this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "workExperience", array(), "array")) {
                // line 82
                echo "                            <span class=\"col-md-6\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "workExperience", array(), "array"), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 83
                echo "   
                            <span class=\"col-md-6\"></span>
                        ";
            }
            // line 85
            echo "                      
                  </p> 
                  <p class=\"col-md-12\">
                      <p class=\"col-md-4\"><b>Projects :</b></p>  
                      ";
            // line 89
            if ($this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "name", array(), "array")) {
                // line 90
                echo "                          <div class=\"col-md-6\">
                        ";
                // line 91
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 92
                    echo "                            <p >";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array(), "array"), "html", null, true);
                    echo "</p>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "  
                          </div>
                      ";
            }
            // line 96
            echo "                  </p> 
                </div>
            </div>
            </div>
                  
            </div>
            <div class=\" col-md-3 col-md-offset-1\">
                <img class=\"img-thumbnail\" src=\"";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["userImagePath"]) ? $context["userImagePath"] : $this->getContext($context, "userImagePath")), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resumeData"]) ? $context["resumeData"] : $this->getContext($context, "resumeData")), 0, array(), "array"), "photo", array(), "array"), "html", null, true);
            echo "\" alt=\"...\" style=\"height:200px; width:180px;\" >
            </div>
            
        </div>
    </div>
                  ";
        }
        // line 109
        echo "</div>";
        
        $__internal_6782b2288d16f10603eb0c3e314bb927fa29a25530a87b7691b03c554870a1ee->leave($__internal_6782b2288d16f10603eb0c3e314bb927fa29a25530a87b7691b03c554870a1ee_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:userResume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 109,  246 => 103,  237 => 96,  232 => 93,  223 => 92,  219 => 91,  216 => 90,  214 => 89,  208 => 85,  203 => 83,  197 => 82,  195 => 81,  189 => 77,  184 => 75,  178 => 74,  176 => 73,  165 => 64,  160 => 62,  154 => 61,  152 => 60,  146 => 56,  141 => 54,  135 => 53,  133 => 52,  127 => 48,  122 => 46,  116 => 45,  114 => 44,  108 => 40,  103 => 38,  97 => 37,  95 => 36,  89 => 32,  84 => 30,  78 => 29,  76 => 28,  70 => 24,  65 => 22,  59 => 21,  57 => 20,  51 => 16,  46 => 14,  40 => 13,  38 => 12,  27 => 3,  25 => 2,  22 => 1,);
    }
}
