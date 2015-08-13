<?php

/* VlreleasesUserBundle:Paginator:paginator_navigator.html.twig */
class __TwigTemplate_c4f12bd13f2a628a63a77abb663a2b94c5ce090ec25d365ad5f391f7857e403c extends Twig_Template
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
        $__internal_32e32bffe8a2dc725aa9e2467b1646f073c5d7cfa985340f4367654687ba6b50 = $this->env->getExtension("native_profiler");
        $__internal_32e32bffe8a2dc725aa9e2467b1646f073c5d7cfa985340f4367654687ba6b50->enter($__internal_32e32bffe8a2dc725aa9e2467b1646f073c5d7cfa985340f4367654687ba6b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:Paginator:paginator_navigator.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context["currentPath"] = $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"));
        // line 4
        $context["currentPage"] = $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getCurrentPage", array(), "method");
        // line 5
        $context["totalPages"] = $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getTotalPages", array(), "method");
        // line 6
        $context["count"] = $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getCount", array(), "method");
        // line 7
        echo "<input type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")), "html", null, true);
        echo "\" id=\"currentDisplayPage\">
<input type=\"hidden\" id=\"ajaxUrl\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")), "html", null, true);
        echo "\">
<input type=\"hidden\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["totalPages"]) ? $context["totalPages"] : $this->getContext($context, "totalPages")), "html", null, true);
        echo "\" id=\"totalDisplayPages\" >
";
        // line 30
        $context["prevLink"] = "gq-pagination-prev-icon";
        // line 31
        $context["nextLink"] = "gq-pagination-next-icon";
        // line 32
        echo "    ";
        if (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) == 1)) {
            // line 33
            echo "        ";
            $context["prevLink"] = "gq-pagination-prev-icon disable-icon";
            // line 34
            echo "    ";
        }
        echo "    
    ";
        // line 35
        if (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) == (isset($context["totalPages"]) ? $context["totalPages"] : $this->getContext($context, "totalPages")))) {
            // line 36
            echo "        ";
            $context["nextLink"] = "gq-pagination-next-icon disable-icon";
            // line 37
            echo "    ";
        }
        echo "    
        <div class=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["prevLink"]) ? $context["prevLink"] : $this->getContext($context, "prevLink")), "html", null, true);
        echo "\" id=\"prevlink\"></div>
         <div class=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["nextLink"]) ? $context["nextLink"] : $this->getContext($context, "nextLink")), "html", null, true);
        echo "\" id=\"nextlink\"></div>
     
<div class=\"clearfix\"></div>
<script>
    var curPage = parseInt(\$(\"#currentDisplayPage\").val());
    var disPages = parseInt(\$(\"#totalDisplayPages\").val());
    var ajaxurl = \$(\"#ajaxUrl\").val();
 \$(document).ready(
    function (){ 
        \$('#prevlink').click(function(){
           if(!\$(this).hasClass('disable-icon')) 
           {
               curPage = curPage - 1;
               \$(\"#currentDisplayPage\").val(curPage);
               getajaxPagination(curPage);
           }
        });
        \$('#nextlink').click(function(){
           if(!\$(this).hasClass('disable-icon')) 
           {
               curPage = curPage + 1;
               \$(\"#currentDisplayPage\").val(curPage);
               getajaxPagination(curPage);
           }
        });
        
        
        function getajaxPagination(curPage)
        {
            var reqUrl = ajaxurl+'?page='+curPage+'&mode=ajax';
            \$.ajax({
                type: \"GET\",
                url: reqUrl,
                cache: false,
                success: function(msg){
                     \$(\"#ajaxUserDetails\").html(msg);
                     if(curPage == 1)
                     {
                         \$(\"#prevlink\").addClass('disable-icon');
                     }
                     else
                     {
                         \$(\"#prevlink\").removeClass('disable-icon');
                     }
                     if(curPage == disPages)
                     {
                         \$(\"#nextlink\").addClass('disable-icon');
                     }
                     else
                     {
                         \$(\"#nextlink\").removeClass('disable-icon');
                     }
                }                   
            });
        }
    }); 
</script>";
        
        $__internal_32e32bffe8a2dc725aa9e2467b1646f073c5d7cfa985340f4367654687ba6b50->leave($__internal_32e32bffe8a2dc725aa9e2467b1646f073c5d7cfa985340f4367654687ba6b50_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:Paginator:paginator_navigator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 39,  71 => 38,  66 => 37,  63 => 36,  61 => 35,  56 => 34,  53 => 33,  50 => 32,  48 => 31,  46 => 30,  42 => 9,  38 => 8,  33 => 7,  31 => 6,  29 => 5,  27 => 4,  25 => 3,  22 => 2,);
    }
}
