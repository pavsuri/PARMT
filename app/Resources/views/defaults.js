$(document).ready(function () {
	
	//$.fn.popup.defaults.pagecontainer = '#wrapper'
  
	//sidebar toggle
	$("#sidebar-toggle").click(function(e) {
		e.preventDefault();
		$(".navbar-side").toggleClass("collapsed");
		$("#page-wrapper").toggleClass("collapsed");
                 if (parseInt($("#page-wrapper").attr("class").search("collapsed"))  >= 0) {
                    $('#page-wrapper').css('width', '100%');
                } else {
                    $('#page-wrapper').css('width', '82%');
                }
        
        });
	
	// window height
	$('#page-wrapper').css('min-height', $(document).height()-50);
	$(window).resize(function() {
	$('#page-wrapper').css('min-height', $(document).height()-50);
	});
	
	// Time Picker
	
    $('#timepicker').datetimepicker({
		pickDate: false,
		pickSeconds: false 
	});	
	
	
	$('.dailyTaskHolder #timepicker input').click(function(){
		var winHeight = $(window).height() + 200;
		$('#page-wrapper').css({'min-height': winHeight});		
		$("html, body").animate({scrollTop:winHeight}, '500', 'swing');
		
	});
	
	// Date Picker	
	$('#datepicker, #dateofjoin, #dateofbirth').datetimepicker({	
		pickTime: false	
	});
        
	$(document).on('focus',"#datepicker", function(){
           	// Date Picker	
            $('#datepicker, #dateofjoin, #dateofbirth').datetimepicker({	
                    pickTime: false	
            });
        });

	// Add Task Text Box
	var domCount = 1;
	$('.addTask .fa-plus-circle').click(function(){	
	var getAddTask = $(".addTask").html();	
	$(".remove").append("<div class='removeTask'>" + getAddTask + "</div>");
	$(".remove").find('.changeIcon').removeClass("fa-plus-circle").addClass("fa-times-circle");
	$(".remove .date").last().removeAttr("id").attr("id", "timepicker"+domCount);
	$(".remove #selProject").last().removeAttr("id").attr("id", "selProject"+domCount);
	$(".remove #selActivity").last().removeAttr("id").attr("id", "selActivity"+domCount);
	$(".remove #task").last().removeAttr("id").attr("id", "task"+domCount);
	domCount++;
	findTimepickerDomID();
	});
	
	// Dynamically change time picker ID
	function findTimepickerDomID(){
		$('.addTask  .date, .remove .date').each(function(){
			var domId = $(this).attr('id');			
			$('#'+ domId).datetimepicker({
			  pickDate: false,
			  pickSeconds: false	  
			});		
		});		
	}
	
	
	// Remove Task Text Box	
	$("body").on("click", ".removeTask .fa-times-circle", function(event){
		var result = window.confirm('Are you sure?');
		if (result == true) {
			$(this).closest('.removeTask').remove();
		};
	});
	
	// Add Expertise 	
	$('#btnAdd').click(function(){
		var expertVal = $('#Expertise').val();
		var experienceVal = $('#YearsofExperience').val();
		if(expertVal == '')
		{
		//alert('Please enter Expertise');
		}
		else if(experienceVal == '' ){
		
		//alert('Please enter Experience');
		}
		else{
		//alert(expertVal);
		$('#expertiseView').append("<div class='badge badgeExpert' id='expertDelete"+ domCount +"'><span class='expertExp'>"+ experienceVal +"</span><span class='pull-left text'>" + expertVal + "</span><span class='pull-left expertClose'><i class='fa fa-times'></i></span></div>");
		$('#Expertise, #YearsofExperience').val('');
		domCount++;
		}
	
	});
	
	// Remove Expertise
	$("body").on("click", "#expertiseView .fa-times", function(event){
		var result = window.confirm('Are you sure?');
		if (result == true) {
			$(this).closest('div').remove();
		};
	});
	
	//  Add Projects 	
	/*$('#btnProAdd').click(function(){
		var expertVal = $('#ProjectText').val();
		if(expertVal == '')
		{
		//alert('Please enter Project');
		}
		else{
		//alert(expertVal);
		$('#projectView').append("<div class='badge badgeProject' id='expertDelete"+ domCount +"'><span class='pull-left text'>" + expertVal + "</span><span class='pull-left'><i class='fa fa-times'></i></span></div>");
		$('#ProjectText').val('');
		domCount++;
		}
	
	})*/
	
	// Remove Projects
	/*$("body").on("click", "#projectView .fa-times", function(event){
		var result = window.confirm('Are you sure?');
		if (result == true) {
			$(this).closest('div').remove();
		};
	});*/
	
	// User profile Accordion menu
	$('.userHolder').hide();
	$('.showDiv').show();
	$("body").on('click','.userTitle',function(){
            classes = $(this).find('.iconChange').attr('class').split(' ');
            var result = $.inArray('fa-sort-down',classes);
            if(result > 0){
                $(this).find('.iconChange').removeClass('fa-sort-down').addClass('fa-sort-up');
	        $(this).next().slideDown('slow');
            }else{                
                $(this).find('.iconChange').removeClass('fa-sort-up').addClass('fa-sort-down');
	        $(this).next().slideUp('slow');
            }         
	});
	
	// Register Device Details
	$("#addDevDet").click(function(){
		$(".device-register" ).slideToggle( "slow", function() {	
		});
		$('.device-register label').hide();
	});
        
     // To cancel device-register div
     $("body").on('click','#btnCancel',function() {            
		  $(".device-register" ).slideUp();               
	 });
        
        
	// Save Device Details
	$("#btnSave").click(function(){	
		$(".device-register").slideUp();		
	});
	// Edit Device Details
	$(".dlEdit").click(function(){	
		$('.device-register label').show();
		$(".device-register").slideDown();		
	});	
});

function createSuccessDiv(element){
   $('#'+element+' > .userHolder').append('<div class="row success-div"><div class="col-lg-12"><div class="alert alert-success"><ul></ul></div></div></div>');
    setTimeout(function() {
     $('#'+element).find(".row.success-div" ).remove();
    },2000); 
}

function removeSuccessDiv(formId){
    $( "#"+formId).find(".row.success-div" ).remove(); 
}


function createErrorDiv(element){
    $(element).append('<div class="row error-div"><div class="col-lg-12"><div class="alert alert-error"><ul></ul></div></div></div>');
    setTimeout(function() {
     $(element).find(".row.error-div" ).remove();
    },2000);
}

function appendNewLi(formId,message){
    $('#'+formId+' ul').append('<li>'+message+'</li>');
}

function removeErrorDiv(formId){
    $( "#"+formId).find(".row.error-div" ).remove();
}

function validateForm(formId){    
    var i =0;
    var errorValue=0;
    $('#'+formId+' input[type=text]').each(function(){
        var elementId = $(this).attr('id');
        var elementValue = $(this).val();        
        var result = true,message;
        switch(elementId){
           
             case 'userpersonaldetails_name':
                result = checkIsNotempty(elementValue);
                message = 'Name should not be blank.';
                break;
             case 'userpersonaldetails_employeeId':
                result = checkId(elementValue);
                message = 'employeeId should not be blank and allows size upto 7';
                break;
             case 'userpersonaldetails_mobile':
                result = checkMobile(elementValue);
                message = 'mobile number should not be blank and should be 10 digit numeric';
                break;
            case 'userpersonaldetails_email':
                result = checkEmail(elementValue);
                message = 'Email should not be blank snd should be a valid email';
                break;
          case 'userworkdetails_extensionNumber':
                result = checkIsNotempty(elementValue);
                message = 'ExtensionNumber should not be blank.';
                break;
            case 'userworkdetails_extensionNumber':
                result = validateInteger(elementValue);
                message = 'Extension should be a number.';
                break;
            case 'userworkdetails_totalExperience':
                result = validateInteger(elementValue);
                message = 'Total years of experience should be a number.';
                break;
            case 'userworkdetails_systemIp':
                result = validateIPaddress(elementValue);
                message = 'Please enter valid IP.';
                break;
             case 'userworkdetails_systemId':
                result = checkIsNotempty(elementValue);
                message = 'SystemId should not be blank.';
                break;
             case 'userskilldetails_experience':
                result = validateInteger(elementValue);
                message = 'Experience should be a number';
                break;
	     case 'userworkdetails_assetTag':
                result = checkIsNotempty(elementValue);
                message = 'asset tag should not be blank.';
                break;
                    
                
        }
        if(!result){
            i++;
            if(i === 1){
                createErrorDiv('#'+formId+' > .userHolder');
                errorValue=1;
              
            }
            $('#'+formId+' ul').append('<li>'+message+'</li>');
        }
    });
    if(i>0)
        return false;
    else 
        return true;
    
     
}

function validateInteger(value){
    var result = $.isNumeric(value);
    return result;
}

function checkId(elementValue){
    count=0;
    if(elementValue == '')
        return false;
    else if(elementValue.length > '7')
        return false;
    else
        return true;
    
}
function checkMobile(elementValue){
    
    if(elementValue == '' || isNaN(elementValue) || elementValue.length != '10') 
        return false;
    else
        return true;
}

function  checkEmail(elementValue){
    
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
     if(elementValue == '')
        count=1;
    if(!emailPattern.test(elementValue))
        count=2;
    if(count==1 || count==2)
        return false;
    else
        return true;
}

function validateEmail(elementValue) {
    
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(elementValue);
}

function checkIsNotempty(elementValue){
    if(elementValue == ''){
        return false;
    }
    else
        return true;
}

function validateIPaddress(elementValue)  
{  
   var ipformat = /^(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})$/; 
   ipformat = /^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/; 
   if(elementValue.match(ipformat))  
   {  
    return true;
   }  
   else  
   {
    return false;  
   }  
}  
  
        $("body").on( "click", '#searchUserSubmit' , function() {
          
	    //$('#spinnerAddDevice').show();
            $('#searchUserform').ajaxSubmit(function (data) {
               
                $('#searchUserList').html(data);
               
                //$('#spinnerAddDevice').hide();
                //$('#addDevice').html(data);
               // $(".device-register").slideUp();
               // showFlashAlert('Device Added/Updated');
                //Trigger page update on the list
                // updateDeviceList();
            });
        });  
         function showLoader(status) {
         if (status) {
            $('#spinnerSearchDevice').show();
         } else {
             $('#spinnerSearchDevice').hide();
         }
     }