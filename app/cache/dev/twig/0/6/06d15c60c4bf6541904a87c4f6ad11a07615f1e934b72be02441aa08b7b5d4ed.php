<?php

/* VlreleasesUserBundle:User:resumeBuilder.html.twig */
class __TwigTemplate_06d15c60c4bf6541904a87c4f6ad11a07615f1e934b72be02441aa08b7b5d4ed extends Twig_Template
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
        $__internal_4b173816736228518dfab34e36d876db084b4af7511ba75c92f79bc3af1f6b7c = $this->env->getExtension("native_profiler");
        $__internal_4b173816736228518dfab34e36d876db084b4af7511ba75c92f79bc3af1f6b7c->enter($__internal_4b173816736228518dfab34e36d876db084b4af7511ba75c92f79bc3af1f6b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:resumeBuilder.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\"><head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>Niti</title>    
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "bootstrap.css\" rel=\"stylesheet\"> 
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["fontsPath"]) ? $context["fontsPath"] : $this->getContext($context, "fontsPath")), "html", null, true);
        echo "font-awesome.css\" rel=\"stylesheet\">\t
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "morris.css\" rel=\"stylesheet\">    
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "style.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "plugins.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "demo.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "bootstrap-datetimepicker.css\" rel=\"stylesheet\">

        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>

    </head>
    <body class=\"pace-done\">\t
        <div id=\"wrapper\">        
            ";
        // line 22
        $this->loadTemplate("VlreleasesUserBundle:User:layout.html.twig", "VlreleasesUserBundle:User:resumeBuilder.html.twig", 22)->display($context);
        // line 23
        echo "            <div class=\"\" id=\"page-wrapper\">
                <div class=\"page-content page-content-ease-in\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"page-title\">
                                <h1>Build Resume Here</h1>                            
                            </div>
                        </div>                   
                    </div>
    <div class=\"build_resume_form\">                       
            <select name=\"teamDropdown\" id=\"teamDrpDwn\" class=\"form-control\">
                <option selected=\"selected\">Select Team</option>
                ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teamsData"]) ? $context["teamsData"] : $this->getContext($context, "teamsData")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 36
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "getId", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "getTname", array(), "method"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "  
            </select>
             <div> 
                <select id=\"dropdownList\" class=\"form-control\" style=\"display:none;\">                  
                </select>
             </div>
            <div id =\"resumeBuilderDivButton\" style=\"display:none;\">
                <input type=\"hidden\" id=\"idForResume\"  value=''>
                <button id='getUserResume' class='btn btn-green col-md-5' style=' margin: 10px 0 0 82px;'>Build Resume</button>
            </div>            
                        
    </div> 
     <div class=\"clearfix\"></div>
    <div id=\"displayResume\" style=\"display:none;\">
        ";
        // line 51
        $this->loadTemplate("VlreleasesUserBundle:User:userResume.html.twig", "VlreleasesUserBundle:User:resumeBuilder.html.twig", 51)->display($context);
        // line 52
        echo "    </div>

<!-- global scripts-->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>


<!-- morris charts -->
<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "raphael-2.js\"></script>
<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "morris.js\"></script>

<!-- theme scripts -->
<!--<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "chart-demo.js\"></script> -->
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>

<script src=\"http://malsup.github.com/jquery.form.js\"></script> 
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "typeahead/js/bootstrap-typeahead.js\"></script>


<script>
        \$(document).ready(function (){            
            //get the selected team id send it through ajax to get the corresponding users list to display
            \$(\"body\").on('change','#teamDrpDwn',function(){   
                \$(\"#dropdownList\").show();
                var teamId = \$(\"#teamDrpDwn option:selected\").val();
                \$(\"#dropdownList\").html(\"<option selected='selected'>Select User</option>\");
                \$.ajax({
                    type:\"GET\",
                    url:\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("vlreleases_resume_getUsersOfTeam");
        echo "\",
                    cache: false,
                    data: {'team': teamId},
                    success: function(result){
                        var data = JSON.parse(result);                      
                         for(var key in data)                        
                        {                              
                            var html = \"<option value='\"+data[key].id+\"'>\"+data[key].email+\"</option>\";              
                            \$(\"#dropdownList\").append(html);                           
                        }
                    }
                })
                return false;
            });
            
            //get the selected user id value
            \$(\"body\").on('change','#dropdownList',function(){                
                var userId = \$(\"#dropdownList option:selected\").val();  
                \$(\"#idForResume\").val(userId);
                \$(\"#resumeBuilderDivButton\").show();
            });
            
            //send userid to controller through ajax to build resume
             \$(\"body\").on('click','#getUserResume',function(){ 
                 \$(\"#displayResume\").show();
                var id = \$(\"#idForResume\").val();
                \$.ajax({
                    type:\"POST\",
                    url:\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("vlreleases_resume_buildResume");
        echo "\",
                    cache: false,
                    data: {'uId': id},
                    success: function(result){ 
                        //alert(result);return false;
                        \$(\"#displayResume\").html(result); 
                    }
                });
               return false;                
            });
    });
</script>
</body>
</html>

";
        
        $__internal_4b173816736228518dfab34e36d876db084b4af7511ba75c92f79bc3af1f6b7c->leave($__internal_4b173816736228518dfab34e36d876db084b4af7511ba75c92f79bc3af1f6b7c_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:resumeBuilder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 110,  171 => 82,  156 => 70,  150 => 67,  146 => 66,  140 => 63,  136 => 62,  129 => 58,  125 => 57,  121 => 56,  115 => 52,  113 => 51,  97 => 37,  86 => 36,  82 => 35,  68 => 23,  66 => 22,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
