<?php

/* VlreleasesUserBundle:User:displaygroupmailDetails.html.twig */
class __TwigTemplate_6ca912c080ea228fb2977419a6956415ae1b6e8da8cea13b06ad9f8bcf5f49df extends Twig_Template
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
        $__internal_903fd5a3b0e90cc2166168e27c5b0843e412bb4961a2735907671e2123f2d459 = $this->env->getExtension("native_profiler");
        $__internal_903fd5a3b0e90cc2166168e27c5b0843e412bb4961a2735907671e2123f2d459->enter($__internal_903fd5a3b0e90cc2166168e27c5b0843e412bb4961a2735907671e2123f2d459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:displaygroupmailDetails.html.twig"));

        // line 1
        echo "

<!DOCTYPE html>
<html lang=\"en\"><head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>Niti</title>    
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "bootstrap.css\" rel=\"stylesheet\"> 
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["fontsPath"]) ? $context["fontsPath"] : $this->getContext($context, "fontsPath")), "html", null, true);
        echo "font-awesome.css\" rel=\"stylesheet\">\t
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "morris.css\" rel=\"stylesheet\">    
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "style.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "plugins.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "demo.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "bootstrap-datetimepicker.css\" rel=\"stylesheet\">

        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>

    </head>
    <body class=\"pace-done\">\t
        <div id=\"wrapper\">        
            ";
        // line 24
        $this->loadTemplate("VlreleasesUserBundle:User:layout.html.twig", "VlreleasesUserBundle:User:displaygroupmailDetails.html.twig", 24)->display($context);
        // line 25
        echo "            <div class=\"\" id=\"page-wrapper\">
                <div class=\"page-content page-content-ease-in\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"page-title\">
                                <h1>Group Mail Users List</h1>                            
                            </div>
                        </div>                   
                    </div>
                    <div class=\"profileTable\">
<div class=\"table-responsive\">
 <table class=\"table table-bordered table-striped\">
    <thead class=\"table-head\">
         <tr>
             <th>S.No</th>
             <th>User Name</th>
             <th>User Email</th>
         </tr>
     </thead>
     <tbody>
         ";
        // line 45
        $context["counter"] = 1;
        // line 46
        echo "        
         ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groupmailMembersData"]) ? $context["groupmailMembersData"] : $this->getContext($context, "groupmailMembersData")));
        foreach ($context['_seq'] as $context["_key"] => $context["resNames"]) {
            // line 48
            echo "             <tr>
                 <td>";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "</td>
                 <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "userName", array(), "array"), "html", null, true);
            echo "</td>
                 <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "email", array(), "array"), "html", null, true);
            echo "</td>
             </tr>
             ";
            // line 53
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 54
            echo "             
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resNames'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo " 

    </tbody>
 </table>
</div>
</div>

<!-- global scripts-->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>
<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>


<!-- morris charts -->
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "raphael-2.js\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "morris.js\"></script>

<!-- theme scripts -->
<!--<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "chart-demo.js\"></script> -->
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>

<script src=\"http://malsup.github.com/jquery.form.js\"></script> 
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "typeahead/js/bootstrap-typeahead.js\"></script>


<script>
        \$(document).ready(function (){
            \$(\"body\").on( \"click\", '#viewMembers' , function() {                
               id = \$(this).attr('gId');
               \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("vlreleases_groupMails_getMailMembers");
        echo "\",
                    cache: false,
                    data: {gid: id},
                    success: function (result) {
                           //alert(result);return false;
                            \$(\"#ajaxGroupMails\").html(result);
                        }   
                    });
            });
    });
</script>
</body>
</html>

";
        
        $__internal_903fd5a3b0e90cc2166168e27c5b0843e412bb4961a2735907671e2123f2d459->leave($__internal_903fd5a3b0e90cc2166168e27c5b0843e412bb4961a2735907671e2123f2d459_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:displaygroupmailDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 87,  172 => 78,  166 => 75,  162 => 74,  156 => 71,  152 => 70,  145 => 66,  141 => 65,  137 => 64,  126 => 55,  119 => 54,  117 => 53,  112 => 51,  108 => 50,  104 => 49,  101 => 48,  97 => 47,  94 => 46,  92 => 45,  70 => 25,  68 => 24,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  34 => 11,  22 => 1,);
    }
}
