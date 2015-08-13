<?php

/* VlreleasesUserBundle:User:displayUploads.html.twig */
class __TwigTemplate_59e238594ec9a2af07357c996009f5366937b92373ef9dfbdf92f5c245fd9e1b extends Twig_Template
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
        $__internal_e4401b2c42b36741c3f74102a107f0a1de62041c7231a9f350f05678f13af50b = $this->env->getExtension("native_profiler");
        $__internal_e4401b2c42b36741c3f74102a107f0a1de62041c7231a9f350f05678f13af50b->enter($__internal_e4401b2c42b36741c3f74102a107f0a1de62041c7231a9f350f05678f13af50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:displayUploads.html.twig"));

        // line 1
        echo "<div class=\"profileTable\">
<div class=\"table-responsive\">
 <table class=\"table table-bordered table-striped\">
    <thead class=\"table-head\">
         <tr>
             <th>S.No</th>
             <th>File Name</th>
             <th>Uploaded By</th>
             <th>Uploaded On</th>
             <th>Download Link</th>
             <th>Delete</th>
             ";
        // line 15
        echo "         </tr>
     </thead>
     <tbody>
     ";
        // line 19
        echo "         ";
        $context["counter"] = 1;
        // line 20
        echo "         ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["uploadFilesData"]) ? $context["uploadFilesData"] : $this->getContext($context, "uploadFilesData")));
        foreach ($context['_seq'] as $context["_key"] => $context["resNames"]) {
            // line 21
            echo "             <tr>
                 <td>";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "</td>
                 <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "fileName", array()), "html", null, true);
            echo "</td>
                 <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "userName", array()), "html", null, true);
            echo "</td>
                 <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["resNames"], "uploadedDate", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                 <td><a href=\"http://localhost/upload/";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "uniqueId", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "fileName", array()), "html", null, true);
            echo "</a></td>                                        
                 <td class=\"sEdit\" ><span class='deleteFile' fileId='";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["resNames"], "id", array()), "html", null, true);
            echo "'>Delete</span></td>
             </tr>
             ";
            // line 29
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 30
            echo "         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resNames'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
         ";
        // line 32
        echo "    </tbody>
 </table>
</div>
</div>";
        
        $__internal_e4401b2c42b36741c3f74102a107f0a1de62041c7231a9f350f05678f13af50b->leave($__internal_e4401b2c42b36741c3f74102a107f0a1de62041c7231a9f350f05678f13af50b_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:displayUploads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 32,  80 => 30,  78 => 29,  73 => 27,  67 => 26,  63 => 25,  59 => 24,  55 => 23,  51 => 22,  48 => 21,  43 => 20,  40 => 19,  35 => 15,  22 => 1,);
    }
}
