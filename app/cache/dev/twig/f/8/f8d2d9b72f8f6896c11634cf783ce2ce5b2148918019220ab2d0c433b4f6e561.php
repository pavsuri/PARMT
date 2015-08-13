<?php

/* VlreleasesUserBundle:User:displayProfile.html.twig */
class __TwigTemplate_f8d2d9b72f8f6896c11634cf783ce2ce5b2148918019220ab2d0c433b4f6e561 extends Twig_Template
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
        $__internal_091a63c67a0dadea5c84062f418baf4a270fabe96b6c7ea2df1a2896484f15ea = $this->env->getExtension("native_profiler");
        $__internal_091a63c67a0dadea5c84062f418baf4a270fabe96b6c7ea2df1a2896484f15ea->enter($__internal_091a63c67a0dadea5c84062f418baf4a270fabe96b6c7ea2df1a2896484f15ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:displayProfile.html.twig"));

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
        $this->loadTemplate("VlreleasesUserBundle:User:layout.html.twig", "VlreleasesUserBundle:User:displayProfile.html.twig", 22)->display($context);
        // line 23
        echo "            
            <div class=\"\" id=\"page-wrapper\" style=\"min-height: 863px;\">
        <div class=\"page-content page-content-ease-in dsp\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"page-title\">
                        <h1>Profile</h1>                            
                    </div>
                    
                </div>                   
            </div>\t\t\t\t

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"widget\">
                        <div class=\"clearfix\"></div>\t\t\t\t
                        <!-- Widget content -->

                        <div class=\"profile\">
                            
                              <div class=\"userTitle\" style=\"color:#0B614B;\">Personal Profile<span class=\"pull-right\"></span></div>
                              <div class=\"userHold\" style=display:block;\">
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>Name:</span></li>
                                        <li>
                                            ";
        // line 48
        if ($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userPersonalProfile", array()), "name", array())) {
            // line 49
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userPersonalProfile", array()), "name", array()), "html", null, true);
            echo "
                                            ";
        } else {
            // line 50
            echo "   
                                             --
                                            ";
        }
        // line 53
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>Employee Id:</span></li>
                                        <li>
                                            ";
        // line 59
        if ($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userPersonalProfile", array()), "employeeId", array())) {
            // line 60
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userPersonalProfile", array()), "employeeId", array()), "html", null, true);
            echo "
                                            ";
        } else {
            // line 61
            echo "   
                                             --
                                            ";
        }
        // line 64
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>DateOfBirth:</span></li>
                                        <li>
                                            ";
        // line 70
        if (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userPersonalProfile", array()), "dob", array()), "d-m-Y")) {
            // line 71
            echo "                                             ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userPersonalProfile", array()), "dob", array()), "d-m-Y"), "html", null, true);
            echo "
                                            ";
        } else {
            // line 73
            echo "                                             --
                                            ";
        }
        // line 75
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>DateOfJoining:</span></li>
                                        <li>
                                            ";
        // line 81
        if (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userPersonalProfile", array()), "doj", array()), "d-m-Y")) {
            // line 82
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userPersonalProfile", array()), "doj", array()), "d-m-Y"), "html", null, true);
            echo "
                                             ";
        } else {
            // line 84
            echo "                                                 --
                                            ";
        }
        // line 86
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>DOJ To Jyo:</span></li>
                                        <li>
                                            ";
        // line 92
        if (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userPersonalProfile", array()), "dojj", array()), "d-m-Y")) {
            // line 93
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userPersonalProfile", array()), "dojj", array()), "d-m-Y"), "html", null, true);
            echo "
                                            ";
        } else {
            // line 95
            echo "                                                 --
                                            ";
        }
        // line 97
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>Mobile:</span></li>
                                        <li>
                                            ";
        // line 103
        if ($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userPersonalProfile", array()), "mobile", array())) {
            // line 104
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userPersonalProfile", array()), "mobile", array()), "html", null, true);
            echo "
                                            ";
        } else {
            // line 106
            echo "                                                --
                                             ";
        }
        // line 108
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>Email:</span></li>
                                        <li>
                                            ";
        // line 114
        if ($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userPersonalProfile", array()), "email", array())) {
            // line 115
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userPersonalProfile", array()), "email", array()), "html", null, true);
            echo "
                                            ";
        } else {
            // line 117
            echo "                                               --
                                            ";
        }
        // line 119
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                </div>
                              <div class=\"userTitle\" style=\"color:#0B614B;\">Work Profile<span class=\"pull-right\"></span></div>
                                <div class=\"userHold\" style=\"display:block;\">
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>Department:</span></li>
                                        <li>
                                            ";
        // line 128
        if ($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "Department", array())) {
            // line 129
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "Department", array()), "html", null, true);
            echo "
                                            ";
        } else {
            // line 131
            echo "                                               --
                                            ";
        }
        // line 133
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>Band:</span></li>
                                        <li>
                                            ";
        // line 139
        if ($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "Band", array())) {
            // line 140
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "Band", array()), "html", null, true);
            echo "
                                            ";
        } else {
            // line 142
            echo "                                                  --
                                            ";
        }
        // line 144
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>Team:</span></li>
                                        <li>
                                            ";
        // line 150
        if ($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "Team", array())) {
            // line 151
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "Team", array()), "html", null, true);
            echo "
                                            ";
        } else {
            // line 153
            echo "                                                 --
                                            ";
        }
        // line 155
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>ExtensionNumber:</span></li>
                                        <li>
                                            ";
        // line 161
        if ($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "extensionNumber", array())) {
            // line 162
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "extensionNumber", array()), "html", null, true);
            echo "
                                            ";
        } else {
            // line 164
            echo "                                                   --
                                           ";
        }
        // line 166
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>Highest Education:</span></li>
                                        <li>
                                            ";
        // line 172
        if ($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "highestEducation", array())) {
            // line 173
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "highestEducation", array()), "html", null, true);
            echo "
                                            ";
        } else {
            // line 175
            echo "                                                   --
                                            ";
        }
        // line 177
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>Passed Out Year:</span></li>
                                        <li>
                                            ";
        // line 183
        if ($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "passedoutYear", array())) {
            // line 184
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "passedoutYear", array()), "html", null, true);
            echo "
                                            ";
        } else {
            // line 186
            echo "                                               --
                                            ";
        }
        // line 188
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>TotalExperience:</span></li>
                                        <li>
                                            ";
        // line 194
        if ($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "totalExperience", array())) {
            // line 195
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "totalExperience", array()), "html", null, true);
            echo "
                                            ";
        } else {
            // line 197
            echo "                                                   --
                                           ";
        }
        // line 199
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>WorkStation:</span></li>
                                        <li>
                                            ";
        // line 205
        if ($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "workStation", array())) {
            // line 206
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "workStation", array()), "html", null, true);
            echo "
                                           ";
        } else {
            // line 208
            echo "                                                   --
                                           ";
        }
        // line 210
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>SystemIp:</span></li>
                                        <li>
                                            ";
        // line 216
        if ($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "systemIp", array())) {
            // line 217
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "systemIp", array()), "html", null, true);
            echo "
                                           ";
        } else {
            // line 219
            echo "                                                   --
                                           ";
        }
        // line 221
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>SystemId:</span></li>
                                        <li>
                                            ";
        // line 227
        if ($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "systemId", array())) {
            // line 228
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "systemId", array()), "html", null, true);
            echo "
                                            ";
        } else {
            // line 230
            echo "                                               --
                                            ";
        }
        // line 232
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>AssertTag:</span></li>
                                        <li>
                                            ";
        // line 238
        if ($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "assetTag", array())) {
            // line 239
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "assetTag", array()), "html", null, true);
            echo "
                                            ";
        } else {
            // line 241
            echo "                                               --
                                            ";
        }
        // line 243
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>gtalkId:</span></li>
                                        <li>
                                            ";
        // line 249
        if ($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "gtalkId", array())) {
            // line 250
            echo "                                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "gtalkId", array()), "html", null, true);
            echo "
                                               ";
        } else {
            // line 252
            echo "                                                   --
                                           ";
        }
        // line 254
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>SkypeId:</span></li>
                                        <li>
                                            ";
        // line 260
        if ($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "skypeId", array())) {
            // line 261
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "skypeId", array()), "html", null, true);
            echo "
                                           ";
        } else {
            // line 263
            echo "                                                   --
                                           ";
        }
        // line 265
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>LeadName:</span></li>
                                        <li>
                                            ";
        // line 271
        if ($this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "leadName", array())) {
            // line 272
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userWorkProfile", array()), "leadName", array()), "html", null, true);
            echo "
                                           ";
        } else {
            // line 274
            echo "                                                   --
                                           ";
        }
        // line 276
        echo "                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                </div>
                                <div class=\"userTitle\" style=\"color:#0B614B;\">Project Profile<span class=\"pull-right\"></span></div>
                                <div class=\"userHold\" style=\"display: block;\"> 
                                    <ul class=\"listItems\">
                                        <li class=\"listTitle\"><span>Projects:</span></li>
                                        <li>
                                            <ul>
                                                ";
        // line 286
        if ($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userProjects", array())) {
            // line 287
            echo "                                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userProjects", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 288
                echo "                                                        <li>                                                    
                                                                ";
                // line 289
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], 0, array(), "array"), "name", array(), "array"), "html", null, true);
                echo "                                                                                                             
                                                        </li>     
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 292
            echo "                                                ";
        } else {
            // line 293
            echo "                                                            --
                                                ";
        }
        // line 295
        echo "                                            </ul>
                                        </li>
                                    </ul> 
                                    <div class=\"clearfix\"></div>
                                 </div>
                                <div class=\"userTitle\" style=\"color:#0B614B;\">Skill Profile<span class=\"pull-right\"></span></div>
                                <div class=\"userHold\" style=\"display:block;\">              
                                    <ul class=\"listTitle\">
                                        <li><span>Skills</span></li>
                                        <li><span>Experience</span></li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    ";
        // line 307
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userSkills"]) ? $context["userSkills"] : $this->getContext($context, "userSkills")));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 308
            echo "                                    <ul class=\"listItems\">
                                        <li><span>";
            // line 309
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["skill"], "getSkill", array()), "getName", array()), "html", null, true);
            echo "</span></li>
                                        <li><span>";
            // line 310
            echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "getExperience", array()), "html", null, true);
            echo "</span></li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        echo "                                    
                                </div>
                        </div>
                        
                    </div>
                    <!-- Widget ends -->
                </div>
            </div>\t\t\t\t
        </div>
    </div>

<!-- global scripts-->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
<script src=\"";
        // line 327
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>
<script src=\"";
        // line 328
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
<script src=\"";
        // line 329
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>


<!-- morris charts -->
<script src=\"";
        // line 333
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "raphael-2.js\"></script>
<script src=\"";
        // line 334
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "morris.js\"></script>

<!-- theme scripts -->
<!--<script src=\"";
        // line 337
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "chart-demo.js\"></script> -->
<script src=\"";
        // line 338
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>

<script src=\"http://malsup.github.com/jquery.form.js\"></script> 
<script src=\"";
        // line 341
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "typeahead/js/bootstrap-typeahead.js\"></script>

</body>
</html>
";
        
        $__internal_091a63c67a0dadea5c84062f418baf4a270fabe96b6c7ea2df1a2896484f15ea->leave($__internal_091a63c67a0dadea5c84062f418baf4a270fabe96b6c7ea2df1a2896484f15ea_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:displayProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  635 => 341,  629 => 338,  625 => 337,  619 => 334,  615 => 333,  608 => 329,  604 => 328,  600 => 327,  585 => 314,  575 => 310,  571 => 309,  568 => 308,  564 => 307,  550 => 295,  546 => 293,  543 => 292,  534 => 289,  531 => 288,  526 => 287,  524 => 286,  512 => 276,  508 => 274,  502 => 272,  500 => 271,  492 => 265,  488 => 263,  482 => 261,  480 => 260,  472 => 254,  468 => 252,  462 => 250,  460 => 249,  452 => 243,  448 => 241,  442 => 239,  440 => 238,  432 => 232,  428 => 230,  422 => 228,  420 => 227,  412 => 221,  408 => 219,  402 => 217,  400 => 216,  392 => 210,  388 => 208,  382 => 206,  380 => 205,  372 => 199,  368 => 197,  362 => 195,  360 => 194,  352 => 188,  348 => 186,  342 => 184,  340 => 183,  332 => 177,  328 => 175,  322 => 173,  320 => 172,  312 => 166,  308 => 164,  302 => 162,  300 => 161,  292 => 155,  288 => 153,  282 => 151,  280 => 150,  272 => 144,  268 => 142,  262 => 140,  260 => 139,  252 => 133,  248 => 131,  242 => 129,  240 => 128,  229 => 119,  225 => 117,  219 => 115,  217 => 114,  209 => 108,  205 => 106,  199 => 104,  197 => 103,  189 => 97,  185 => 95,  179 => 93,  177 => 92,  169 => 86,  165 => 84,  159 => 82,  157 => 81,  149 => 75,  145 => 73,  139 => 71,  137 => 70,  129 => 64,  124 => 61,  118 => 60,  116 => 59,  108 => 53,  103 => 50,  97 => 49,  95 => 48,  68 => 23,  66 => 22,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
