<?php

/* VlreleasesUserBundle:User:layout.html.twig */
class __TwigTemplate_10842a9366a04bba3c2287e786408c99577551941b02421ebd89276f50092367 extends Twig_Template
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
        $__internal_eeee97dabc85be3d8c7dd3a7602eeaff0caa37a493c68741b2b8286150d4e87a = $this->env->getExtension("native_profiler");
        $__internal_eeee97dabc85be3d8c7dd3a7602eeaff0caa37a493c68741b2b8286150d4e87a->enter($__internal_eeee97dabc85be3d8c7dd3a7602eeaff0caa37a493c68741b2b8286150d4e87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:layout.html.twig"));

        // line 1
        echo "       
<nav role=\"navigation\" class=\"navbar-top\">          
                <div class=\"navbar-header\">
                    <button data-target=\".sidebar-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle pull-right\" type=\"button\">
                        <i class=\"fa fa-bars\"></i> Menu
                    </button>
                    <div class=\"navbar-brand\">

                        <a href=";
        // line 9
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_lead");
        echo " class=\"active\">

                            <h1>NITI</h1>
                        </a>

                    </div>
                </div>
                <div class=\"nav-top\" >
                    <ul class=\"nav navbar-left\">
                        <li class=\"tooltip-sidebar-toggle\">
                            <a title=\"\" data-placement=\"right\" data-toggle=\"tooltip\" id=\"sidebar-toggle\" href=\"#\" data-original-title=\"Sidebar Toggle\">
                                <i class=\"fa fa-bars\"></i>
                            </a>
                        </li>                   
                    </ul>                
                </div>
            </nav>       
<nav class=\"navbar-side\" role=\"navigation\">
                <div class=\"navbar-collapse sidebar-collapse collapse\">               
                    <ul id=\"side\" class=\"nav navbar-nav side-nav\">
                        <li class=\"side-user hidden-xs\">
                            <img id=\"imageDisplay\" class=\"img-circle\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["userImagePath"]) ? $context["userImagePath"] : $this->getContext($context, "userImagePath")), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "photo", array()), "html", null, true);
        echo "\" alt=\"\">
                            <p class=\"welcome\">
                                <i class=\"fa fa-key\"></i> Logged in as
                            </p>
                            <p class=\"name tooltip-sidebar-logout\">
                                ";
        // line 35
        $context["username"] = twig_split_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userName", array()), ".", 2);
        // line 36
        echo "                                <span class=\"last-name\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), 0, array(), "array"), "html", null, true);
        echo "</span> <a id=\"open_29188745\" data-popup-ordinal=\"1\" style=\"color: inherit\" class=\"logout_open\" href=\"#logout\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\"><i class=\"fa fa-sign-out\" data-toggle=\"modal\" data-target=\"#myModal\"></i></a>
                            </p>
                            <div class=\"clearfix\"></div>
                        </li>
                        <li class=\"nav-search\">
                            <form role=\"form\">
                                <input type=\"text\" placeholder=\"Search...\" id=\"Search\" name=\"Search\" class=\"searchtypeahead form-control\">
                                <span  id='searchLoad' style='display:none;'><img src=";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["imagesPath"]) ? $context["imagesPath"] : $this->getContext($context, "imagesPath")), "html", null, true);
        echo "spinner.gif /></span>
                                <button class=\"btn\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </form>
                        </li>
                         <li>
                            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_lead");
        echo "\">
                                <i class=\"fa fa-dashboard\"></i> Dashboard
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_dailystatus");
        echo "\">
                                <i class=\"fa fa-tasks\"></i> Daily Status Report
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_profile_home");
        echo "\">
                                <i class=\"fa fa-calendar-o\"></i> Profile
                            </a>
                        </li>
                        <!--<li>
                                <a href=";
        // line 65
        echo $this->env->getExtension('routing')->getPath("vlreleases_mobiledevice");
        echo ">
                                        <i class=\"fa fa-files-o\"></i> Device Management
                                </a>
                        </li>
                        <li>
                                <a href=";
        // line 70
        echo $this->env->getExtension('routing')->getPath("vlreleases_mobiledevice_takedeviceList");
        echo ">
                                        <i class=\"fa fa-files-o\"></i> Take Device
                                </a>
                        </li> -->
                    
                        <li  id=\"sideabr-manageAsset\">
                            <a href=\"#\" class=\"hoverId\">
                                <i class=\"fa fa-cogs\"></i> Manage Asset
                                <span class=\"pull-right\"><i class=\"iconChange fa fa-sort-down\"></i></span>
                            </a>
                             <ul class = \"subMenu\">
                                <li>
                                    <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("vlreleases_categories");
        echo "\">
                                        <i class=\"fa fa-files-o\"></i> Categories
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("vlreleases_products");
        echo "\">
                                        <i class=\"fa fa-files-o\"></i> Products
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("vlreleases_products_takeassetList");
        echo "\">
                                        <i class=\"fa fa-files-o\"></i> Take Asset
                                    </a>
                                </li>
                            </ul>
                        </li> 
                    
                         <li id=\"sidebar-user\">
                            <a href=\"#\"  class=\"hoverId\">
                                <i class=\"fa fa-user\"></i> Users
                                <span class=\"pull-right\"><i class=\"iconChange fa fa-sort-down\"></i></span>
                            </a>
                            
                             <ul class = \"subMenu\">
                                <li>
                                    <a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_usersProfile");
        echo "\">
                                        <i class=\"fa fa-files-o\"></i>Users
                                    </a>
                                </li>
                                <li>
                                    <a href=";
        // line 112
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_reportersProfile");
        echo ">
                                        <i class=\"fa fa-files-o\"></i>Users-Reporters
                                    </a>
                                </li>

                            </ul>
                        </li> 
                        <li>
                            <a href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_projectsList");
        echo "\">
                                <i class=\"fa fa-certificate\"></i> Projects
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("vlreleases_team");
        echo "\">
                                <i class=\"fa fa-users\"></i> Teams
                            </a>
                        </li>
                        ";
        // line 129
        if ((($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userRole", array()) == "1") || ($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userRole", array()) == "2"))) {
            // line 130
            echo "                        <li>
                            <a href=\"";
            // line 131
            echo $this->env->getExtension('routing')->getPath("vlreleases_actions");
            echo "\">
                                <i class=\"fa fa-asterisk\"></i> Roles-Permissions
                            </a>
                        </li>
                      ";
        }
        // line 136
        echo "                        <li>
                            <a href=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("vlreleases_liveApps");
        echo "\">
                                <i class=\"fa fa-qrcode\"></i> Live Apps
                            </a>
                        </li>
\t\t\t<li>
                            <a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("vlreleases_uploadFile");
        echo "\">
                                <i class=\"fa fa-upload\"></i> Upload Files
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 147
        echo $this->env->getExtension('routing')->getPath("vlreleases_holidaysList");
        echo "\">
                                <i class=\"fa fa-calendar\"></i> Holidays List
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("vlreleases_groupMails");
        echo "\">
                                <i class=\"fa fa-envelope\"></i> Group Mails
                            </a>
                        </li>
                        ";
        // line 156
        if ((($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userRole", array()) == "1") || ($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userRole", array()) == "2"))) {
            // line 157
            echo "                        <li>
                            <a href=\"";
            // line 158
            echo $this->env->getExtension('routing')->getPath("vlreleases_resume");
            echo "\">
                                <i class=\"fa fa-pencil-square-o\"></i> Resume Builder
                            </a>
                        </li>
                        ";
        }
        // line 163
        echo "                        <li>
                            <a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_logout");
        echo "\">
                                <i class=\"fa fa-sign-out\"></i> Logout
                            </a>
                        </li>                        
                    </ul>
                </div>
            </nav>
                                <!-- Logout Modal Popup -->
        <div class=\"modal fade\" id=\"myModal\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-customize\">    
                <div id=\"logout\" >
                    <div class=\"logout-message\">
                        <img id=\"imageDisplay\" alt=\"\" src=\"";
        // line 176
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
        // line 183
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
<script>
    //to display submenus as dropdown
    \$(document).ready(function(){
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
      
        //makes the search bar to get the menu name
    \$('input.searchtypeahead').typeahead({
        ajax: {url: '";
        // line 213
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_lead_getMenus");
        echo "',
            triggerLength: 3,
            preDispatch: function (query) {

                \$('#searchLoad').show();
            },
            preProcess: function (data) {\$('#searchLoad').hide(); return data;},
            },

    });   
    
    //search bar navigation 
     \$(\".dropdown-menu\").click(function(){
            var fmenu=\$(\".searchtypeahead\").val();

         switch(fmenu)
         {
             case \"dashboard\":
                  location.href='";
        // line 231
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_lead");
        echo "';
                  break;
             case \"daily status report\":
                  location.href='";
        // line 234
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_dailystatus");
        echo "';
                  break;
             case \"profile\":
                  location.href='";
        // line 237
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_profile_home");
        echo "';
                  break;
             case \"categories\":
                  location.href='";
        // line 240
        echo $this->env->getExtension('routing')->getPath("vlreleases_categories");
        echo "';
                  break;
             case \"products\":
                  location.href='";
        // line 243
        echo $this->env->getExtension('routing')->getPath("vlreleases_products");
        echo "';
                  break;
             case \"take asset\":
                  location.href='";
        // line 246
        echo $this->env->getExtension('routing')->getPath("vlreleases_products_takeassetList");
        echo "';
                  break;
             case \"users\":
                  location.href='";
        // line 249
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_usersProfile");
        echo "';
                  break;
             case \"users-reporters\":
                  location.href='";
        // line 252
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_reportersProfile");
        echo "';
                  break;
             case \"projects\":
                  location.href = '";
        // line 255
        echo $this->env->getExtension('routing')->getPath("vlreleases_projects_projectsList");
        echo "';
                  break;
             case \"teams\":
                  location.href = '";
        // line 258
        echo $this->env->getExtension('routing')->getPath("vlreleases_team");
        echo "';
                  break;
              case \"rolespermissions\":
                   location.href = '";
        // line 261
        echo $this->env->getExtension('routing')->getPath("vlreleases_actions");
        echo "';
                   break;
              case \"liveapps\":
                  location.href = '";
        // line 264
        echo $this->env->getExtension('routing')->getPath("vlreleases_liveApps");
        echo "';
                   break;
              case \"uploadfiles\":
                  location.href = '";
        // line 267
        echo $this->env->getExtension('routing')->getPath("vlreleases_uploadFile");
        echo "';
                  break;
              case \"holiday list\":
                  location.href = '";
        // line 270
        echo $this->env->getExtension('routing')->getPath("vlreleases_holidaysList");
        echo "';
                  break;
              case \"group mails\":
                  location.href = '";
        // line 273
        echo $this->env->getExtension('routing')->getPath("vlreleases_groupMails");
        echo "';
                  break;
            }
        });
    });
</script>
                                    ";
        
        $__internal_eeee97dabc85be3d8c7dd3a7602eeaff0caa37a493c68741b2b8286150d4e87a->leave($__internal_eeee97dabc85be3d8c7dd3a7602eeaff0caa37a493c68741b2b8286150d4e87a_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 273,  424 => 270,  418 => 267,  412 => 264,  406 => 261,  400 => 258,  394 => 255,  388 => 252,  382 => 249,  376 => 246,  370 => 243,  364 => 240,  358 => 237,  352 => 234,  346 => 231,  325 => 213,  292 => 183,  281 => 176,  266 => 164,  263 => 163,  255 => 158,  252 => 157,  250 => 156,  243 => 152,  235 => 147,  227 => 142,  219 => 137,  216 => 136,  208 => 131,  205 => 130,  203 => 129,  196 => 125,  188 => 120,  177 => 112,  169 => 107,  151 => 92,  143 => 87,  135 => 82,  120 => 70,  112 => 65,  104 => 60,  96 => 55,  88 => 50,  78 => 43,  67 => 36,  65 => 35,  56 => 30,  32 => 9,  22 => 1,);
    }
}
