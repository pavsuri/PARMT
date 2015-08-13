<?php

/* ::base.html.twig */
class __TwigTemplate_6f8d9f4d61506730a9f6e7acf52f1e177b7a8bc8f1e8d9d24e41695f73364036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'extrajavascripts' => array($this, 'block_extrajavascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7a603272ed295cd52c10a60ac90f1bc653576110d014da5ce7d1dbf75633794 = $this->env->getExtension("native_profiler");
        $__internal_f7a603272ed295cd52c10a60ac90f1bc653576110d014da5ce7d1dbf75633794->enter($__internal_f7a603272ed295cd52c10a60ac90f1bc653576110d014da5ce7d1dbf75633794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
       
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "    </head>
    <body class=\"pace-done\">
        <div id=\"wrapper\">
            ";
        // line 26
        $this->loadTemplate("VlreleasesUserBundle:User:layout.html.twig", "::base.html.twig", 26)->display($context);
        // line 27
        echo "                     
        <!-- Logout Modal Popup -->
<div class=\"modal fade\" id=\"myModal\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-customize\">    
\t  <div id=\"logout\" >
        <div class=\"logout-message\">
            <img alt=\"\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["userImagePath"]) ? $context["userImagePath"] : $this->getContext($context, "userImagePath")), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "photo", array()), "html", null, true);
        echo "\" class=\"img-circle img-logout\">
            <h3>
                <i class=\"fa fa-sign-out text-green\"></i> Ready to go?
            </h3>
            <p>Select \"Logout\" below if you are ready<br> to end your current session.</p>
            <ul class=\"list-inline\">
                <li>
                    <a class=\"btn btn-green\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_logout");
        echo "\">
                        <strong>Logout</strong>
                    </a>
                </li>
                <li>
                    <button class=\"logout_close btn btn-green\" data-dismiss=\"modal\">Cancel</button>
                </li>
            </ul>
        </div>
    
    </div>
  </div>
</div>
<!-- Logout Modal Popup -->

        ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "            
        ";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "                        ";
        $this->displayBlock('extrajavascripts', $context, $blocks);
        // line 76
        echo "                </div>
                 <script>
             //Enabling    
            if(\$(\"#currentpage\").val() == 'asset')
                \$(\"#sideabr-manageAsset .subMenu\").css(\"display\",\"block\");
            else
                \$(\"#sideabr-manageAsset .subMenu\").css(\"display\",\"none\");
            </script>
                 <script>
\t\$(document).ready(function(){
           
\t//submenu dropdown 
             \$(\"body\").on('click','.hoverId',function(){
            classes = \$(this).parent().find('.iconChange').attr('class').split(' ');
            var result = \$.inArray('fa-sort-down',classes);
            if(result > 0){
                \$(this).parent().find('.iconChange').removeClass('fa-sort-down').addClass('fa-sort-up');
                \$(this).parent().find('.subMenu').toggle();
            }else{                
                \$(this).parent().find('.iconChange').removeClass('fa-sort-up').addClass('fa-sort-down');
                \$(this).parent().find('.subMenu').toggle();
            }         
\t});

\t//search bar autocomplete
             \$('input.searchtypeahead').typeahead({
               
            ajax: {url: '";
        // line 103
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_lead_getMenus");
        echo "',
                    triggerLength: 3,
                    preDispatch: function (query) {
                       
                        \$('#searchLoad').show();
                    },
                    preProcess: function (data) {\$('#searchLoad').hide(); return data;},
                    },
                   
            });  

\t\$(\".dropdown-menu\").click(function(){
                    var fmenu=\$(\".searchtypeahead\").val();
                 //alert(fmenu);
                 switch(fmenu)
                 {
                     case \"dashboard\":
                          location.href='";
        // line 120
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_lead");
        echo "';
                          break;
                     case \"daily status report\":
                          location.href='";
        // line 123
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_dailystatus");
        echo "';
                          break;
                     case \"profile\":
                          location.href='";
        // line 126
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_profile_home");
        echo "';
                          break;
                     case \"categories\":
                          location.href='";
        // line 129
        echo $this->env->getExtension('routing')->getPath("vlreleases_categories");
        echo "';
                          break;
                     case \"products\":
                          location.href='";
        // line 132
        echo $this->env->getExtension('routing')->getPath("vlreleases_products");
        echo "';
                          break;
                     case \"take asset\":
                          location.href='";
        // line 135
        echo $this->env->getExtension('routing')->getPath("vlreleases_products_takeassetList");
        echo "';
                          break;
                    case \"users\":
                          location.href='";
        // line 138
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_usersProfile");
        echo "';
                          break;
                   case \"users-reporters\":
                          location.href='";
        // line 141
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_reportersProfile");
        echo "';
                          break;
                    case \"projects\":
                            location.href = '";
        // line 144
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_projectsList");
        echo "';
                            break;
                    case \"teams\":
                            location.href = '";
        // line 147
        echo $this->env->getExtension('routing')->getPath("vlreleases_team");
        echo "';
                            break;
                     case \"rolespermissions\":
                        location.href = '";
        // line 150
        echo $this->env->getExtension('routing')->getPath("vlreleases_actions");
        echo "';
                        break;
                    case \"liveapps\":
                        location.href = '";
        // line 153
        echo $this->env->getExtension('routing')->getPath("vlreleases_liveApps");
        echo "';
                        break;    
\t\t      case \"uploadfiles\":
\t\t\tlocation.href = '";
        // line 156
        echo $this->env->getExtension('routing')->getPath("vlreleases_uploadFile");
        echo "';
\t\t\tbreak;

                 }
                    
                });
\t\t//get ownername
\t\$(\"body\").on( \"click\", '.clickRegister1' , function() {
\tdeviceId = \$(this).attr('id');       
        ajaxUrl = \$('#clickRegisterUrl1').html();
\t\t\$.get(ajaxUrl,  function (data) {
\t\t\$(\"#addProductsHTML\").html(data);
                \$(\"#btndeviceAddProduct\").attr('value', 'Add');
\t\t\$('.ownernametypeahead').typeahead({
\t\t\t
                          ajax: {url: '";
        // line 171
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_profile_getReportingLead");
        echo "',
                           triggerLength: 3,
                            preDispatch: function (query) {

                             \$('#searchownerspinner').show();
                              },
                             preProcess: function (data) {
                             \$('#searchownerspinner').hide();
                             return data;
                             },
                          },                      
                       });
\t\t\$('.device-register label').show();
\t\t\$(\".device-register\").slideDown();

               
\t\t}
\t);
\t
\t});

                    

\t\t

\t//leadname dropdown
\t    \$('input.leadName_typeahead').typeahead({               
            ajax: {url: '";
        // line 198
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_profile_getReportingLead");
        echo "',
                    triggerLength: 3,
                    preDispatch: function (query) {                       
                        \$('#searchLead').show();
                    },
                    preProcess: function (data) {\$('#searchLead').hide(); return data;},
                    },                   
            });
});
\t\t</script>
    </body>
</html>
";
        
        $__internal_f7a603272ed295cd52c10a60ac90f1bc653576110d014da5ce7d1dbf75633794->leave($__internal_f7a603272ed295cd52c10a60ac90f1bc653576110d014da5ce7d1dbf75633794_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b8e7c89974827a06627688a323573de5c7906326f7b1bfa78ecdd9a8cec4d3f = $this->env->getExtension("native_profiler");
        $__internal_3b8e7c89974827a06627688a323573de5c7906326f7b1bfa78ecdd9a8cec4d3f->enter($__internal_3b8e7c89974827a06627688a323573de5c7906326f7b1bfa78ecdd9a8cec4d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NITI";
        
        $__internal_3b8e7c89974827a06627688a323573de5c7906326f7b1bfa78ecdd9a8cec4d3f->leave($__internal_3b8e7c89974827a06627688a323573de5c7906326f7b1bfa78ecdd9a8cec4d3f_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_64ad62612f91926e4e0d8f9aafbcd056c056b12dce9328f98cf878be345b2813 = $this->env->getExtension("native_profiler");
        $__internal_64ad62612f91926e4e0d8f9aafbcd056c056b12dce9328f98cf878be345b2813->enter($__internal_64ad62612f91926e4e0d8f9aafbcd056c056b12dce9328f98cf878be345b2813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "bootstrap.css\" rel=\"stylesheet\"> 
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "font-awesome.css\" rel=\"stylesheet\">\t
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "morris.css\" rel=\"stylesheet\">    
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "style.css\" rel=\"stylesheet\">
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "plugins.css\" rel=\"stylesheet\">
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "demo.css\" rel=\"stylesheet\">
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["cssPath"]) ? $context["cssPath"] : $this->getContext($context, "cssPath")), "html", null, true);
        echo "bootstrap-datetimepicker.css\" rel=\"stylesheet\">
\t<!--[if (lt IE 9) & (!IEMobile)]>\t
\t<script src=\"js/respond.src.js\"></script>\t
\t<![endif]-->
        ";
        
        $__internal_64ad62612f91926e4e0d8f9aafbcd056c056b12dce9328f98cf878be345b2813->leave($__internal_64ad62612f91926e4e0d8f9aafbcd056c056b12dce9328f98cf878be345b2813_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_983b8b41a96ac291d149a02b8f1af27d8764acafa49fb01475cc611f35fbcf38 = $this->env->getExtension("native_profiler");
        $__internal_983b8b41a96ac291d149a02b8f1af27d8764acafa49fb01475cc611f35fbcf38->enter($__internal_983b8b41a96ac291d149a02b8f1af27d8764acafa49fb01475cc611f35fbcf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "        ";
        
        $__internal_983b8b41a96ac291d149a02b8f1af27d8764acafa49fb01475cc611f35fbcf38->leave($__internal_983b8b41a96ac291d149a02b8f1af27d8764acafa49fb01475cc611f35fbcf38_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_07b5ce4dc02a8df7d6e2da1d76a3fc8d9271ed380c47dbf873697387a92ad3f0 = $this->env->getExtension("native_profiler");
        $__internal_07b5ce4dc02a8df7d6e2da1d76a3fc8d9271ed380c47dbf873697387a92ad3f0->enter($__internal_07b5ce4dc02a8df7d6e2da1d76a3fc8d9271ed380c47dbf873697387a92ad3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "           
            <!-- global scripts -->
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
            <script src=\"/VL-releases2/web/js/jquery_003.js\"></script>
            <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
            <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>
\t    

            <!-- morris charts -->
            <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "raphael-2.js\"></script>
            <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "morris.js\"></script>

            <!-- theme scripts -->
            <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>                
        ";
        
        $__internal_07b5ce4dc02a8df7d6e2da1d76a3fc8d9271ed380c47dbf873697387a92ad3f0->leave($__internal_07b5ce4dc02a8df7d6e2da1d76a3fc8d9271ed380c47dbf873697387a92ad3f0_prof);

    }

    // line 74
    public function block_extrajavascripts($context, array $blocks = array())
    {
        $__internal_4352dc28948d2653a8fe2b30c1419810d0722dd4bac8fe15335e4fc4cd93fd1e = $this->env->getExtension("native_profiler");
        $__internal_4352dc28948d2653a8fe2b30c1419810d0722dd4bac8fe15335e4fc4cd93fd1e->enter($__internal_4352dc28948d2653a8fe2b30c1419810d0722dd4bac8fe15335e4fc4cd93fd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrajavascripts"));

        // line 75
        echo "            ";
        
        $__internal_4352dc28948d2653a8fe2b30c1419810d0722dd4bac8fe15335e4fc4cd93fd1e->leave($__internal_4352dc28948d2653a8fe2b30c1419810d0722dd4bac8fe15335e4fc4cd93fd1e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 75,  397 => 74,  388 => 72,  382 => 69,  378 => 68,  371 => 64,  367 => 63,  361 => 59,  355 => 58,  348 => 56,  342 => 55,  330 => 18,  326 => 17,  322 => 16,  318 => 15,  314 => 14,  310 => 13,  305 => 12,  299 => 11,  287 => 10,  267 => 198,  237 => 171,  219 => 156,  213 => 153,  207 => 150,  201 => 147,  195 => 144,  189 => 141,  183 => 138,  177 => 135,  171 => 132,  165 => 129,  159 => 126,  153 => 123,  147 => 120,  127 => 103,  98 => 76,  95 => 74,  93 => 58,  90 => 57,  88 => 55,  70 => 40,  59 => 33,  51 => 27,  49 => 26,  44 => 23,  42 => 11,  38 => 10,  27 => 1,);
    }
}
