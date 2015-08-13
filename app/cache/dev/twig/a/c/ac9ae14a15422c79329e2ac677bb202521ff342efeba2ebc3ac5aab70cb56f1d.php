<?php

/* VlreleasesUserBundle:User:groupMails.html.twig */
class __TwigTemplate_ac9ae14a15422c79329e2ac677bb202521ff342efeba2ebc3ac5aab70cb56f1d extends Twig_Template
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
        $__internal_d1a918e20572710c399701b846db07658e23e919074788031fc372f765aea633 = $this->env->getExtension("native_profiler");
        $__internal_d1a918e20572710c399701b846db07658e23e919074788031fc372f765aea633->enter($__internal_d1a918e20572710c399701b846db07658e23e919074788031fc372f765aea633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:groupMails.html.twig"));

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
        $this->loadTemplate("VlreleasesUserBundle:User:layout.html.twig", "VlreleasesUserBundle:User:groupMails.html.twig", 22)->display($context);
        // line 23
        echo "            <div class=\"\" id=\"page-wrapper\">
                <div class=\"page-content page-content-ease-in\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"page-title\">
                                <h1>Group Mails List</h1>                            
                            </div>
                        </div>                   
                    </div>
                    <div id=\"grpResult\">
                        ";
        // line 33
        if (($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "testmail", array()) == 1)) {
            // line 34
            echo "                            Test mail has been sent to its members successfully..
                            ";
        }
        // line 36
        echo "                            <script>
                                setTimeout(function () {
                                    \$(\"#grpResult\").fadeOut(1000);
                                     \$(\"#grpResult\").html('');
                                \$(\"#grpResult\").fadeIn();
                                }, 3000)
                            </script>
                    </div>
                    ";
        // line 44
        if (($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "rolePermission", array()), "getAdd", array()) == "true")) {
            // line 45
            echo "                        <div class=\"right btn clickGroupMailBut\" id=\"addGroupMail\">
                            <i class=\"fa fa-plus\"></i>
                            <span class='clickHoliday'>Add Group Email</span>
                        </div>    
                    ";
        }
        // line 50
        echo "                     <div id='resultMailFlag' class=\"clearfix\"></div>     
                    <div class=\"row app-register\">
                        <div class=\"col-lg-12\">
                            <div class=\"widget\" id=\"groupMailList\">
                                <!-- Widget Header -->

                                <div class=\"widget-head\">
                                    <div class=\"pull-left\">Add Group Mail Details</div>\t\t\t\t\t
                                </div>

                                <!-- Widget Header End-->
                                <div class=\"clearfix\"></div>\t\t\t\t
                                <!-- Widget content -->
                                <li id='addholidays' style=\"list-style: none;\">
                                    ";
        // line 64
        $this->loadTemplate("VlreleasesUserBundle:User:addGroupMailDetails.html.twig", "VlreleasesUserBundle:User:groupMails.html.twig", 64)->display($context);
        // line 65
        echo "                                </li>
                            </div>
                        </div>
                                                                                              
                    </div>
                    <div id=\"ajaxGroupMails\">
                             ";
        // line 71
        $this->loadTemplate("VlreleasesUserBundle:User:displaygroupmailsList.html.twig", "VlreleasesUserBundle:User:groupMails.html.twig", 71)->display($context);
        // line 72
        echo "                        </div>
                    <br>
                    

<!-- global scripts-->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>


<!-- morris charts -->
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "raphael-2.js\"></script>
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "morris.js\"></script>

<!-- theme scripts -->
<!--<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "chart-demo.js\"></script> -->
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>

<script src=\"http://malsup.github.com/jquery.form.js\"></script> 
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "typeahead/js/bootstrap-typeahead.js\"></script>


<script>
        \$(document).ready(function (){
            var listUsers = [];
             \$(\"#groupMailList\").css('display','none');                
           \$(\".clickGroupMailBut\").click(function(){
                \$(\"#groupMailList\").toggle();
           });
           
           //get user Email
        \$('input.groupusertypeahead').typeahead({
            ajax: {url: '";
        // line 105
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_profile_getReportingLead");
        echo "',
                triggerLength: 3,
                preDispatch: function (query) {

                     \$('#spinnerUserLoad').show();
                },
            preProcess: function (data) {\$('#spinnerUserLoad').hide(); return data;},
            },

        }); 

        //storing the users when click on add button to a temporary arry
        \$(\"body\").on('click','#addUser',function(e) {            
            e.preventDefault();
            var curValue = \$(\"#groupuseremailid\").val();
            if(\$.inArray(curValue,listUsers) != -1)
            {
                alert(\"User already added in group\");
                return false;                
            }
            else
            {
                listUsers.push(\$(\"#groupuseremailid\").val());
                \$(\"#groupuseremailid\").val('');            
                showUsers(listUsers);
            }
           
        });
        
        //save the group members email ids
        \$(\"body\").on('click','#registerGroup',function() {           
            grpEmail = \$(\"#grpmailid\").val();
             \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("vlreleases_groupMails_registerGroupMail");
        echo "\",
                    cache: false,
                    data: {gEmail: grpEmail, mailsArray:listUsers },
                    success: function (result) {
                        var arr = result.split('+');                        
                            \$(\"#showUsers\").html('');
                            \$(\"#grpmailid\").val('');
                        if(arr[0] == 0)                        
                             \$(\"#grpResult\").html(\"<div>Group email already existed</div>\"); 
                         
                        else                                                    
                            \$(\"#grpResult\").html(\"<div>Group created successfully</div>\");                        
                       
                       setTimeout(function () {
                                     \$(\"#grpResult\").fadeOut(1000);
                                     \$(\"#grpResult\").html('');
                                 \$(\"#grpResult\").fadeIn(); 
                                 }, 3000)
                                  
                                listUsers =[];
                                \$(\"#ajaxGroupMails\").html(result); 
                    }
                });
           return false; 
        });
        
        function showUsers(userList){
        
        //emptying html
        \$(\"#showUsers\").html('');
        for(var index in userList){
                var html = \"<P> <i class='fa fa-trash-o btn btn-green deleteGroupMember' value='\"+index+\"'></i>&nbsp;<span>\"+userList[index]+\"</span></p>\"
                \$(\"#showUsers\").append(html);
            }
                               
        }
         
        //delete the group members email ids
        \$(\"body\").on('click','.deleteGroupMember',function(e) {
            
             var index = \$(this).attr('value');
             listUsers.splice(index,1);
             showUsers(listUsers);
        });
        
        //edit emailGroup
        \$(\"body\").on('click','#EditGrp',function(){
             
            gId = \$(this).attr('grpId');
            \$(\"#registerGroup\").remove();
            var update = \"<input id='editGroup' class='btn btn-green' type='submit' value='Update' name='updatesubmit'>\";
            \$('.addGroupView').prepend(update);
            \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 193
        echo $this->env->getExtension('routing')->getPath("vlreleases_groupMails_editGroupEmail");
        echo "\",
                    cache: false,
                    data: {grpId: gId},
                    success: function (result) {
                            if(result == '') {                        
                                \$(\"#grpResult\").html(\"Group is empty\");
                                setTimeout(function () {
                                    \$(\"#grpResult\").fadeOut(1000);
                                    \$(\"#grpResult\").html('');
                                     \$(\"#grpResult\").fadeIn(); 
                                     }, 3000)
                            } else {
                                 \$(\"#groupMailList\").show();
                            var response = JSON.parse(result);

                            \$(\"#showUsers\").html('');
                            \$(\"#grpmailid\").val(response[0].groupEmail);

                            for(var key in response)                        
                            {  
                                listUsers.push(response[key].email);                             
                            }
                            showUsers(listUsers);                                            
                        }
                    }
                       
                });
        });
        
        //update the edited group
         \$(\"body\").on('click','#editGroup',function(){        
             grpEmail = \$(\"#grpmailid\").val();
              \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 227
        echo $this->env->getExtension('routing')->getPath("vlreleases_groupMails_updateGroupMail");
        echo "\",
                    cache: false,
                    data: {gEmail: grpEmail, mailsArray:listUsers },
                    success: function (result) {
                        \$(\"#showUsers\").html('');
                        \$(\"#grpmailid\").val('');
                         \$(\"#grpResult\").html(\"<div>Group updated successfully</div>\");                                                                         
                       setTimeout(function () {
                                \$(\"#grpResult\").fadeOut(1000);
                                \$(\"#grpResult\").html('');
                                 \$(\"#grpResult\").fadeIn(); 
                                 }, 3000)
                                  
                                listUsers =[];
                                \$(\"#ajaxGroupMails\").html(result);
                                 \$(\"#editGroup\").remove();
                                var add = \"<input id='registerGroup' class='btn btn-green' type='submit' value='Save' name='submit'>\";
                                \$('.addGroupView').prepend(add); 
                                \$(\"#groupMailList\").hide();                                
                            }
                });
           return false; 
         });
        
        //delete the groupEmail
        \$(\"body\").on('click','#deleteGrp',function(){
            gId = \$(this).attr('grpId');
             \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 256
        echo $this->env->getExtension('routing')->getPath("vlreleases_groupMails_deleteGroup");
        echo "\",
                    cache: false,
                    data: {grpId: gId},
                    success: function (result) {                                                     
                               \$(\"#grpResult\").html(\"<div>GroupEmail deleted successfully</div>\");
                               \$(\"#ajaxGroupMails\").html(result);                                                    
                           setTimeout(function () {
                                         \$(\"#grpResult\").fadeOut(1000);
                                          \$(\"#grpResult\").html('');
                                     \$(\"#grpResult\").fadeIn();
                                     }, 3000)
                                
                        }
                });
        });
        
    });
</script>
</body>
</html>

";
        
        $__internal_d1a918e20572710c399701b846db07658e23e919074788031fc372f765aea633->leave($__internal_d1a918e20572710c399701b846db07658e23e919074788031fc372f765aea633_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:groupMails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 256,  323 => 227,  286 => 193,  229 => 139,  192 => 105,  176 => 92,  170 => 89,  166 => 88,  160 => 85,  156 => 84,  149 => 80,  145 => 79,  141 => 78,  133 => 72,  131 => 71,  123 => 65,  121 => 64,  105 => 50,  98 => 45,  96 => 44,  86 => 36,  82 => 34,  80 => 33,  68 => 23,  66 => 22,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
