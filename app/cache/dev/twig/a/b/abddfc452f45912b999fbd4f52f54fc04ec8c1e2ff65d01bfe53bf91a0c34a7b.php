<?php

/* VlreleasesUserBundle:Layout:profileLayout.html.twig */
class __TwigTemplate_abddfc452f45912b999fbd4f52f54fc04ec8c1e2ff65d01bfe53bf91a0c34a7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "VlreleasesUserBundle:Layout:profileLayout.html.twig", 1);
        $this->blocks = array(
            'extrajavascripts' => array($this, 'block_extrajavascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6a9869e4bfd8040ed8f34b04c176c7fcb23568ab0c49820e62fd256b466180a = $this->env->getExtension("native_profiler");
        $__internal_f6a9869e4bfd8040ed8f34b04c176c7fcb23568ab0c49820e62fd256b466180a->enter($__internal_f6a9869e4bfd8040ed8f34b04c176c7fcb23568ab0c49820e62fd256b466180a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:Layout:profileLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6a9869e4bfd8040ed8f34b04c176c7fcb23568ab0c49820e62fd256b466180a->leave($__internal_f6a9869e4bfd8040ed8f34b04c176c7fcb23568ab0c49820e62fd256b466180a_prof);

    }

    // line 2
    public function block_extrajavascripts($context, array $blocks = array())
    {
        $__internal_6ff976988c35c93e649734839a676c460bb405dae2dc2d66a495e3d5802ddaac = $this->env->getExtension("native_profiler");
        $__internal_6ff976988c35c93e649734839a676c460bb405dae2dc2d66a495e3d5802ddaac->enter($__internal_6ff976988c35c93e649734839a676c460bb405dae2dc2d66a495e3d5802ddaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrajavascripts"));

        // line 3
        echo "
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "fileupload/js/vendor/jquery.ui.widget.js\"></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "fileupload/js/jquery.iframe-transport.js\"></script>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "fileupload/js/jquery.fileupload.js\"></script>
    <script src=\"http://malsup.github.com/jquery.form.js\"></script> 

    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "typeahead/js/bootstrap-typeahead.js\"></script>
    <script>
        var currentlySelected = '';
        var currentlySelectedSkill = '';
        //upload profile photo
        \$(document).ready(function () {
            \$(function () {
                \$(\"body\").on(\"click\", '#userpersonaldetails_photoUploader', function () {
                    \$('#userpersonaldetails_photoUploader').fileupload({
                        dataType: 'json',
                        url: '";
        // line 19
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_upload_photo");
        echo "',
                        done: function (e, data) {

                            \$('#userpersonaldetails_photo').val(data.result.name);
                            \$('#spinnerPersonalProfile').hide();
                            image = \"<img src=/Vl-releases2/web/userPhotos/\" 
                                    + data.result.name + \" class=img-circle />\";
                            \$('#userImageSpan').html(image);

                            \$('#imageDisplay').attr('src', '/Vl-releases2/web/userPhotos/'
                                    + data.result.name);
                            \$.each(data.result.files, function (index, file) {
                                \$('<p/>').text(file.name).appendTo(document.body);
                            });
                        },
                        add: function (e, data) {
                            \$(\"#upload\").one('click', function (e) {

                                \$('#spinnerPersonalProfile').show();
                                e.preventDefault();
                                data.submit();
                            });
                        },
                        change: function (e, data) {
                            \$.each(data.files, function (index, file) {
                                \$('#imageDisplay').attr('src',
                                '/Vl-releases2/web/userPhotos/' + file.name);
                                \$('#selectedfile').html(file.name);
                                \$('#selectedfile').show();

                            });
                        },
                    })
                });
            });
            
            //display selected photo name
            \$(\"body\").on(\"click\", '#selectFile', function () {
                \$('#selectFile').fileupload({
                    dataType: 'json',
                    url: '";
        // line 59
        echo $this->env->getExtension('routing')->getPath("vlreleases_uploadFile_fileUpload");
        echo "',
                    change: function (e, data) {
                        \$.each(data.files, function (index, file) {
                                                \$('#selectedfile').html(file.name);
                                                \$('#selectedfile').show();

                                            });
                                        },
                                    })
                                });

                            });
                            \$(document).ready(
                                    function () {
                                        function optionSelected(item) {
                                            \$('#projectiddata').append(\"<span id='span\" + item.value + \"'><input type = 'text' name='projectIds[]' id='projectIds\" + item.value + \"' value='\" + item.value + \"'></span>\");
                                            currentlySelected = item.value;
                                        }

                                        function skillSelected(item) {
                                            \$('#skillsiddata').append(\"<span id='span\" + item.value + \"'><input type = 'text' name='skillIds[]' id='skillIds\" + item.value + \"' value='\" + item.value + \"'></span>\");
                                            currentlySelectedSkill = item.value;
                                        }



                                        \$(\"body\").on(\"click\", '#btnpersonalAdd', function () {
                                            var result = validateForm('personaldetailsform');
                                            if (result) {
                                                \$(this).attr('disabled', 'disabled');
                                                \$('#spinnerPersonalProfile').show();
                                                \$('#personaldetailsform').ajaxSubmit(function (data) {
                                                    \$('#personalProfile').html(data);
                                                    \$('#spinnerPersonalProfile').hide();
                                                    \$(this).removeAttr('disabled');
                                                    createSuccessDiv('personaldetailsform');
                                                    appendNewLi('personaldetailsform', 'Successfully personal information has been saved.');
                                                });
                                            }
                                        });

                                        //  Add Projects 
                                        \$(\"body\").on(\"click\", '#btnProAdd', function () {
                                            var expertVal = \$('#ProjectText').val();
                                            if (expertVal == '' || currentlySelected == '')
                                            {
                                                var message = 'Please add any project.';
                                                createErrorDiv('#projectdetailsform > .userHolder');
                                                \$('#projectdetailsform ul').append('<li>' + message + '</li>');
                                            }
                                            else {
                                                \$('#spinnerProjectProfile').show();
                                                \$(this).attr('disabled', 'disabled');

                                                \$.post('";
        // line 113
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_profile_handleProjectProfileData");
        echo "', {projectId: currentlySelected, 'action': 'add'}, function () {
                                                    \$('#projectView').append(\"<div class='badge badgeProject' id='expertDelete_\" + currentlySelected + \"'><span class='pull-left text'>\" + expertVal + \"</span><span class='pull-left'><i id=\" + currentlySelected + \" class='deleteProject fa fa-times'></i></span></div>\");
                                                    \$('#ProjectText').val('');
                                                    \$('#ProjectText').css('border', '1px solid #CCCCCC');
                                                    \$('#spinnerProjectProfile').hide();
                                                    \$('#btnProAdd').removeAttr('disabled');
                                                    createSuccessDiv('projectdetailsform');
                                                    appendNewLi('projectdetailsform', 'Successfully project information has been saved.');
                                                });
                                            }

                                        })
                                        
                                        //delete project
                                        \$(\"body\").on(\"click\", '.deleteProject', function () {
                                            var id = \$(this).attr('id');
                                            var divId = '#expertDelete_' + id;
                                            var children = \$(divId).children('span:first');
                                            var result = window.confirm('Are you sure to remove ' + children.text() + '?');
                                            if (result == true) {
                                                \$(\"#spinnerDeleteProject\").show();
                                                \$(this).attr('disabled', 'disabled');
                                                \$.post('";
        // line 135
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_profile_handleProjectProfileData");
        echo "', {projectId: id, 'action': 'delete'}, function () {
                                                    //\$(this).closest('div').remove();
                                                    \$('#expertDelete_' + id).remove();
                                                    \$(\"#spinnerDeleteProject\").hide();
                                                    \$(this).removeAttr('disabled');
                                                    createSuccessDiv('projectdetailsform');
                                                    appendNewLi('projectdetailsform', 'Successfully ' + children.text() + ' project has been deleted.');
                                                });
                                            }
                                        });

                                        //add skill
                                        \$(\"body\").on(\"click\", '.addskill', function () {
                                            skill = \$('#Expertise').val();
                                            experience = \$('#YearsofExperience').val();
                                            var value;
                                            if (validateInteger(experience))
                                            {
                                                value = 1;

                                            }
                                            var message = '';
                                            if (skill == \"\" || experience == \"\" || value != 1) {
                                                createErrorDiv('#skilldetailsform > .userHolder');
                                                if (skill == \"\") {
                                                    message = 'Please enter your skill.';
                                                    \$('#skilldetailsform ul').append('<li>' + message + '</li>');
                                                }

                                                if (experience == \"\") {
                                                    message = 'Experience should not be blank.';
                                                    \$('#skilldetailsform ul').append('<li>' + message + '</li>');
                                                }
                                                if (experience != \"\" && value != 1) {
                                                    message = 'Experience should  be an integer.';
                                                    \$('#skilldetailsform ul').append('<li>' + message + '</li>');
                                                }


                                            } else {
                                                if (currentlySelectedSkill != '') {
                                                    action = 'add';
                                                    customSkill = '';
                                                } else {
                                                    action = 'addcustomskill';
                                                    customSkill = skill;
                                                }
                                                \$('#spinnerSkillProfile').show();
                                                //\$(this).attr('disabled','disabled');

                                                \$.post('";
        // line 185
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_profile_handleSkillsData");
        echo "', {'customSkill': customSkill, 'skillId': currentlySelectedSkill, 'action': action, 'experience': experience}, function (data) {

                                                    if (currentlySelectedSkill) {
                                                        \$('#expertiseView').append(\"<div class='badge badgeExpert' id='skillDelete_\" + data.savedSkillId + \"'><span class='expertExp'>\" + data.experience + \"</span><span class='pull-left text'>\" + skill + \"</span><span class='pull-left expertClose'><i id=\" + data.savedSkillId + \"  class='deleteSkill fa fa-times'></i></span></div>\");
                                                    } else {
                                                        \$('#expertiseView').append(\"<div class='badge badgeExpert' id='skillDelete_\" + data.savedSkillId + \"'><span class='expertExp'>\" + data.experience + \"</span><span class='pull-left text'>\" + skill + \"</span><span class='pull-left expertClose'><i id=\" + data.savedSkillId + \"  class='deleteSkill fa fa-times'></i></span></div>\");
                                                    }
                                                    \$('#Expertise').val('')
                                                    \$('#YearsofExperience').val('');
                                                    \$(\"#spinnerSkillProfile\").hide();
                                                    \$(this).removeAttr('disabled');
                                                    createSuccessDiv('skilldetailsform');
                                                    appendNewLi('skilldetailsform', 'Successfully new skill has been added.');
                                                }
                                                );
                                                currentlySelectedSkill = '';
                                            }
                                        });
                                        
                                        //delete skill
                                        \$(\"body\").on(\"click\", '.deleteSkill', function () {

                                            id = \$(this).attr('id');
                                            \$(\"#spinnerDeleteSkill\").show();
                                            \$.post('";
        // line 209
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_profile_handleSkillsData");
        echo "', {skillId: id, 'action': 'delete'}, function () {
                                                //\$(this).closest('div').remove();
                                                \$('#skillDelete_' + id).remove();
                                                \$(\"#spinnerDeleteSkill\").hide();
                                                createSuccessDiv('skilldetailsform');
                                                appendNewLi('skilldetailsform', 'Successfully your skill has been deleted.');
                                            });
                                        });
                                        \$('input.typeahead').typeahead({
                                            ajax: {'url': '";
        // line 218
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_profile_getProjects");
        echo "',
                                                triggerLength: 3,
                                                preDispatch: function (query) {

                                                    \$('#spinnerProjectLoad').show();
                                                },
                                                preProcess: function (data) {
                                                    \$('#spinnerProjectLoad').hide();
                                                    return data;
                                                },
                                            },
                                            onSelect: optionSelected,
                                        });

                                        //get skill
                                        \$('input.expertisetypeahead').typeahead({
                                            ajax: {url: '";
        // line 234
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_profile_getSkills");
        echo "',
                                                triggerLength: 3,
                                                preDispatch: function (query) {

                                                    \$('#spinnerSkillLoad').show();
                                                },
                                                preProcess: function (data) {
                                                    \$('#spinnerSkillLoad').hide();
                                                    return data;
                                                },
                                            },
                                            onSelect: skillSelected,
                                        });

                                        //add work details
                                        \$(\"body\").on(\"click\", '#btnworkAdd', function () {
                                            var result = validateForm('workdetailsform');

                                            if (result) {
                                                \$('#spinnerWorkProfile').show();
                                                \$('#workdetailsform').ajaxSubmit(function (data) {
                                                    \$('#spinnerWorkProfile').hide();
                                                    \$('#workProfile').html(data);
                                                    createSuccessDiv('workdetailsform');
                                                    appendNewLi('workdetailsform', 'Successfully your work information has been saved.');
                                                    \$('#workdetailsform').find('.iconChange').removeClass('fa-sort-down').addClass('fa-sort-up');
                                                });
                                            }
                                        });


\t\t//opens reset password toggle
                \$(\"body\").on(\"click\", '.clickReset', function () {
                    \$('.reset-password label').show();
                    \$(\".reset-password\").slideToggle(\"fast\");
                    
                });
                
                //submit reset password form through ajax call
                \$(\"#resetSubmit\").click(function(){
                    var uId = \$(\"#userId\").val();
                    var pswd = \$(\"#reset_password\").val();
                    var cpswd = \$(\"#resetpassword_confirmation\").val();
                    if(pswd != cpswd){               
                        \$(\"#pswdError\").html(\"confirm password not matched with password\");
                      return false;
                    }
                    \$(\"#spinner\").show();
                    \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 284
        echo $this->env->getExtension('routing')->getPath("vlreleases_user_resetPassword");
        echo "\",
                    cache: false,
                    data: {uId: uId, pwd: pswd, cpwd: cpswd},
                    success: function(result){
                        \$(\"#resetResult\").html(result);
                        \$(\"#spinner\").hide();
                        setTimeout(function () {
                        \$(\"#resetResult\").fadeOut(1000);
                    }, 3000)
                    }
                        
                    });
                    return false;
                }); 


\t 
                                    }
                            );

    </script>
";
        
        $__internal_6ff976988c35c93e649734839a676c460bb405dae2dc2d66a495e3d5802ddaac->leave($__internal_6ff976988c35c93e649734839a676c460bb405dae2dc2d66a495e3d5802ddaac_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:Layout:profileLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 284,  306 => 234,  287 => 218,  275 => 209,  248 => 185,  195 => 135,  170 => 113,  113 => 59,  70 => 19,  57 => 9,  51 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
