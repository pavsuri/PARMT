<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_14a4e1d1c5b486825617179479927896aae04a13ce921c6b16c6588b78a1c503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "AcmeDemoBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71a45c1818ccc12f9632acffcb0d81bc9bc86852c5282e414c3be4b88045c3c5 = $this->env->getExtension("native_profiler");
        $__internal_71a45c1818ccc12f9632acffcb0d81bc9bc86852c5282e414c3be4b88045c3c5->enter($__internal_71a45c1818ccc12f9632acffcb0d81bc9bc86852c5282e414c3be4b88045c3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71a45c1818ccc12f9632acffcb0d81bc9bc86852c5282e414c3be4b88045c3c5->leave($__internal_71a45c1818ccc12f9632acffcb0d81bc9bc86852c5282e414c3be4b88045c3c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_897027ba4ede46f7abb733ff0935cdd455ab13fec753a1b6ae3e79d957b9732c = $this->env->getExtension("native_profiler");
        $__internal_897027ba4ede46f7abb733ff0935cdd455ab13fec753a1b6ae3e79d957b9732c->enter($__internal_897027ba4ede46f7abb733ff0935cdd455ab13fec753a1b6ae3e79d957b9732c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_897027ba4ede46f7abb733ff0935cdd455ab13fec753a1b6ae3e79d957b9732c->leave($__internal_897027ba4ede46f7abb733ff0935cdd455ab13fec753a1b6ae3e79d957b9732c_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_df7837faafc30648e2fadda28710dca5c5f5d41e22fc4d508de11dbacb0e044c = $this->env->getExtension("native_profiler");
        $__internal_df7837faafc30648e2fadda28710dca5c5f5d41e22fc4d508de11dbacb0e044c->enter($__internal_df7837faafc30648e2fadda28710dca5c5f5d41e22fc4d508de11dbacb0e044c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_df7837faafc30648e2fadda28710dca5c5f5d41e22fc4d508de11dbacb0e044c->leave($__internal_df7837faafc30648e2fadda28710dca5c5f5d41e22fc4d508de11dbacb0e044c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d48054d905dd3ee487157b47ceae0285c59f83ff7ba2f0e8e99ec7381e6efcde = $this->env->getExtension("native_profiler");
        $__internal_d48054d905dd3ee487157b47ceae0285c59f83ff7ba2f0e8e99ec7381e6efcde->enter($__internal_d48054d905dd3ee487157b47ceae0285c59f83ff7ba2f0e8e99ec7381e6efcde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_d48054d905dd3ee487157b47ceae0285c59f83ff7ba2f0e8e99ec7381e6efcde->leave($__internal_d48054d905dd3ee487157b47ceae0285c59f83ff7ba2f0e8e99ec7381e6efcde_prof);

    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_bffeebf682980d9e19e7ee12aa29592b1aec06c1031b9b65058eba0478297175 = $this->env->getExtension("native_profiler");
        $__internal_bffeebf682980d9e19e7ee12aa29592b1aec06c1031b9b65058eba0478297175->enter($__internal_bffeebf682980d9e19e7ee12aa29592b1aec06c1031b9b65058eba0478297175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_bffeebf682980d9e19e7ee12aa29592b1aec06c1031b9b65058eba0478297175->leave($__internal_bffeebf682980d9e19e7ee12aa29592b1aec06c1031b9b65058eba0478297175_prof);

    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_9df56fdb1871c22d335d62a8d22e2f49837562f53f3a536af1d07f1c60afc638 = $this->env->getExtension("native_profiler");
        $__internal_9df56fdb1871c22d335d62a8d22e2f49837562f53f3a536af1d07f1c60afc638->enter($__internal_9df56fdb1871c22d335d62a8d22e2f49837562f53f3a536af1d07f1c60afc638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_9df56fdb1871c22d335d62a8d22e2f49837562f53f3a536af1d07f1c60afc638->leave($__internal_9df56fdb1871c22d335d62a8d22e2f49837562f53f3a536af1d07f1c60afc638_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_e0a27cec6afefea85681ee74accd54e31a201ae29972747cfc396a7daa238403 = $this->env->getExtension("native_profiler");
        $__internal_e0a27cec6afefea85681ee74accd54e31a201ae29972747cfc396a7daa238403->enter($__internal_e0a27cec6afefea85681ee74accd54e31a201ae29972747cfc396a7daa238403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e0a27cec6afefea85681ee74accd54e31a201ae29972747cfc396a7daa238403->leave($__internal_e0a27cec6afefea85681ee74accd54e31a201ae29972747cfc396a7daa238403_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 28,  153 => 20,  147 => 19,  137 => 22,  135 => 19,  132 => 18,  126 => 17,  115 => 34,  111 => 32,  109 => 31,  105 => 29,  103 => 28,  99 => 26,  97 => 17,  94 => 16,  85 => 13,  82 => 12,  77 => 11,  71 => 10,  59 => 8,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
