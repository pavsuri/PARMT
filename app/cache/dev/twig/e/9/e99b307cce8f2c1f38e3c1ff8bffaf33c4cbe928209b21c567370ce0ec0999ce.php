<?php

/* VlreleasesUserBundle:User:uploads.html.twig */
class __TwigTemplate_e99b307cce8f2c1f38e3c1ff8bffaf33c4cbe928209b21c567370ce0ec0999ce extends Twig_Template
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
        $__internal_00fbacf153971214b1e215f6f6f2c7d4f9c2222a9d7953167f5e3e7ddd961fd8 = $this->env->getExtension("native_profiler");
        $__internal_00fbacf153971214b1e215f6f6f2c7d4f9c2222a9d7953167f5e3e7ddd961fd8->enter($__internal_00fbacf153971214b1e215f6f6f2c7d4f9c2222a9d7953167f5e3e7ddd961fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlreleasesUserBundle:User:uploads.html.twig"));

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
        $this->loadTemplate("VlreleasesUserBundle:User:layout.html.twig", "VlreleasesUserBundle:User:uploads.html.twig", 22)->display($context);
        // line 23
        echo "            <div class=\"\" id=\"page-wrapper\">
                <div class=\"page-content page-content-ease-in\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"page-title\">
                                <h1>Upload File</h1>                            
                            </div>
                        </div>                   
                    </div>
                    <br>
                    <form name=\"uploadFile\" enctype=\"multipart/form-data\" action='";
        // line 33
        echo $this->env->getExtension('routing')->getPath("vlreleases_uploadFile_fileUpload");
        echo "' method=\"POST\">
                        ";
        // line 35
        echo "                        <select id=\"filetype\" name=\"filetypetouploadfile\">
                            <option value=\"\" selected=\"selected\">Select type of file</option>
                            <option value=\"ios\">ios</option>
                            <option value=\"android\">android</option>
                            <option value=\"blackberry\">blackberry</option>
                        </select>
                        <br>
                        <br>
                        <div class=\"col-lg-3\">
                                <input id=\"fileUpload5\" type=\"file\" name=\"fileName\">
                        </div>
                        <br><br>
                        <div class=\"col-lg-3\">
                             <input id=\"fileSubmit\" type=\"submit\" class=\"btn btn-success fileinput-button\" value=\"Upload\">
                             <span style='display:block;' id='selectedfile'></span>
                        </div>
                    </form>
                            <div class=\"clearfix\"></div>
                            <br>
                             <div class=\"row\">
                        ";
        // line 55
        if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == "1")) {
            // line 56
            echo "                            <div id=\"alertResult\">
                                File uploaded successfully.
                            </div>
                            <script>
                               \$(\"#alertResult\").fadeOut(5000);
                            </script>
                                                        
                        ";
        } else {
            // line 64
            echo "                             
                        ";
        }
        // line 66
        echo "                    </div>
                    <br>
                        <div id=\"ajaxUploads\">
                             ";
        // line 69
        $this->loadTemplate("VlreleasesUserBundle:User:displayUploads.html.twig", "VlreleasesUserBundle:User:uploads.html.twig", 69)->display($context);
        // line 70
        echo "                        </div>
                    
                    
<!-- Logout Modal Popup -->
<!-- global scripts-->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "jquery_003.js\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap.js\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "defaults.js\"></script>


<!-- morris charts -->
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "raphael-2.js\"></script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "morris.js\"></script>

<!-- theme scripts -->
<!--<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "chart-demo.js\"></script> -->
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "bootstrap-datetimepicker.min.js\"></script>

<script src=\"http://malsup.github.com/jquery.form.js\"></script> 
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["jsPath"]) ? $context["jsPath"] : $this->getContext($context, "jsPath")), "html", null, true);
        echo "typeahead/js/bootstrap-typeahead.js\"></script>


<script>
        \$(document).ready(
             function (){
    
    //dropdown change function
    \$( \"#filetype\" ).change(function() {
        validateUploadedFile(\$(this).val(),\$('#fileUpload5').val());
    });
    
    //fileupload change event
    \$(\"#fileUpload5\").change(function(){
        validateUploadedFile(\$(\"#filetype\").val(),\$(this).val());      
    });
    
    //file submit validation
    \$('#fileSubmit').click(function(){
        if(\$(\"#filetype\").val() == '')
        {
            alert(\"please select file type\");
            return false;
        }
        else if(\$(\"#fileUpload5\").val() == '')
        {
            alert(\"please select the file to upload\");
            return false;
        }
        else
        {
            if(validateUploadedFile(\$(\"#filetype\").val(),\$(\"#fileUpload5\").val()))
                return true;
            else
                return false;
        }
            
    });
    
    //function to validate uploaded file and dropdown file type
    function validateUploadedFile(fileType,selectedFile)
    {
        if(selectedFile != '')
        {    
            if(fileType != '')
            {
                var extension = selectedFile.substr( (selectedFile.lastIndexOf('.') +1) ).toLowerCase();
                var allowedext = [];        
                allowedext['ios'] = 'ipa';
                allowedext['android'] = 'apk';
                allowedext['blackberry'] = 'zip';       
                if(allowedext[fileType] != extension)
                {
                    alert(\"selected file type and uploaded file type not matched,please upload the correct one\");
                    \$(\"#fileUpload5\").val('');
                    return false;
                }
                else
                    return true;
            }
            else
            {
                alert(\"Please choose type of file to upload\");
                return false;
            }
        }
        else{
            return false;
        }
            
    }
    
    //delete the uploaded file through ajax 
    \$(\"body\").on( \"click\", '.deleteFile' , function() {
         uploadfileid = \$(this).attr('fileId');
          \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 167
        echo $this->env->getExtension('routing')->getPath("vlreleases_uploadFile_deleteUploadedFile");
        echo "\",
                    cache: false,
                    data: {fileId: uploadfileid},
                    success: function (result) {
                        \$(\"#ajaxUploads\").html(result);
                    }
                });
    });

        
    });
</script>
</body>
</html>

";
        
        $__internal_00fbacf153971214b1e215f6f6f2c7d4f9c2222a9d7953167f5e3e7ddd961fd8->leave($__internal_00fbacf153971214b1e215f6f6f2c7d4f9c2222a9d7953167f5e3e7ddd961fd8_prof);

    }

    public function getTemplateName()
    {
        return "VlreleasesUserBundle:User:uploads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 167,  172 => 90,  166 => 87,  162 => 86,  156 => 83,  152 => 82,  145 => 78,  141 => 77,  137 => 76,  129 => 70,  127 => 69,  122 => 66,  118 => 64,  108 => 56,  106 => 55,  84 => 35,  80 => 33,  68 => 23,  66 => 22,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
