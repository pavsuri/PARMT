 $("body").on( "click", '#btndeviceAddProduct' , function() {
 	    $('#spinnerAddDevice').show();
            $('#AddProductsForm').ajaxSubmit(function (data) {
                $('#spinnerAddDevice').hide();
                $('#addProducts').html(data);
               // $(".device-register").slideUp();
                showFlashAlert('Device Added/Updated');
                //Trigger page update on the list
                 updateDeviceList();
            });
        }); 
    
        
        //edit Device
        $("body").on( "click", '.editDevice1' , function() {           
	deviceId = $(this).attr('id');      
        ajaxUrl = $('#submitUrl1').html();
		$.get(ajaxUrl, {'deviceId':deviceId}, function (data) {
		$("#addProductsHTML").html(data);
                $("#btndeviceAddProduct").attr('value', 'Update');
		$('.device-register label').show();
		$(".device-register").slideDown();
               
            });	
	});
        
//register		
        
    //Queue Device
	
	$("body").on( "click", '.queueDevice1' , function() {
	deviceId = $(this).attr('id');
	device = deviceId.split('_');
	deviceId = device[1];
       
        ajaxUrl = $('#queueUrl1').html();
		$.get(ajaxUrl, {'deviceId':deviceId}, function (data) {
				$('#test').html(data);
				$('#queueModelPopup').show();
			}
		);
	
	});
	
	//return Device
	
	$("body").on( "click", '.returnDevice1' , function() {
      var selectedEle = $(this);
            deviceId = $(this).attr('id');
             // alert(deviceId);
         $currentdate = new Date(); 
        $currentDate = $currentdate.getDate() + "-"
            + ($currentdate.getMonth()+1)  + "-" 
            + $currentdate.getFullYear() ;  
        device = deviceId.split('_');
        ajaxUrl = $('#returnDeviceUrl1').html();
        $.get(ajaxUrl, {'deviceId':device[1]}, function (data) {
          			selectedEle.removeClass('returnDevice1');
				selectedEle.html('Take');
				$('#'+deviceId).attr('class', 'takeDevice1');
				$('#returnDeviceUrl1').html('return');
                                $('#takenName-'+device[1]).html(' ');
                               $('#takenDate-'+device[1]).html(' ');
                                $('#submittedDate-'+device[1]).html($currentDate);
                                


			}
		);
	
	});
	
	//take Device
	
	$("body").on( "click", '.takeDevice1' , function() {
	var selectedEle = $(this);
	deviceId = $(this).attr('id');
        // alert(deviceId);
        $currentdate = new Date(); 
        $currentDate = $currentdate.getDate() + "-"
            + ($currentdate.getMonth()+1)  + "-" 
            + $currentdate.getFullYear() ;  
       // alert($currentDate);return false;
        device = deviceId.split('_'); 
        ajaxUrl = $('#takeDeviceUrl1').html();
        $.get(ajaxUrl, {'deviceId':device[1]}, function (data) {   
     				selectedEle.removeClass('takeDevice1');
				selectedEle.html('Return');
				$('#'+deviceId).attr('class', 'returnDevice1');
				$('#takeDeviceUrl1').html('take');
                                $('#submittedDate-'+device[1]).html(' ');
                              $('#takenName-'+device[1]).html(device[2]);
                               $('#takenDate-'+device[1]).html($currentDate);
                           
				
			}
		);
	
	});
		
	
	//cancel request
	
	
	
	$("body").on( "click", '.cancelRequest1' , function() {
    deviceId = $(this).attr('id');
	device = deviceId.split('_');
       ajaxUrl = $('#cancelRequestUrl1').html();
		$.get(ajaxUrl, {'deviceId':device[1]}, function (data) {
		var value = $("#queue1_"+device[1]).html();
		var queuenumber = parseInt(value*1)-1;
        if (queuenumber == 0) {
            queuenumber = null;
        }
		$("#queue1_"+device[1]).html(queuenumber);
		$('#'+deviceId).attr('id', 'raiseHand1_'+device[1]);
		$('#raiseHand1_'+device[1]).attr('class', 'raiseHand1');
		$("#raiseHand1_"+device[1]).html('<i class="fa fa-hand-o-up"></i>');
		$('#cancelRequestUrl1').html('cancelrequest');	
		}
	);
	
	});
	
	//Raise a Hand
	
	$("body").on( "click", '.raiseHand1' , function() {
	deviceId = $(this).attr('id');
	deviceId = deviceId.split("_");
	deviceId = deviceId[1];
        ajaxUrl = $('#raiseHandUrl1').html();
		$.get(ajaxUrl, {'deviceId':deviceId}, function (data) {
				var value = $("#queue1_"+deviceId).html();
				var queuenumber = parseInt(value*1)+1;
				$("#queue1_"+deviceId).html(queuenumber);
				$('#raiseHand1_'+deviceId).attr('id', 'cancelRequest1_'+deviceId);	
				$('#cancelRequest1_'+deviceId).attr('class', 'cancelRequest1');
				$("#cancelRequest1_"+deviceId).html('Cancel Request');
				$('#raiseHandUrl1').html('request');
			}
		);
	
	});	
         //delete device
        $("body").on( "click", '.deleteDevice1' , function() {
		deviceId = $(this).attr('id');
        var child = $('#'+deviceId).parent().parent().find("td:eq(1)");
        var result = window.confirm('Are you sure to remove '+ child.text()+'?');
        if(result == true){
           ajaxUrl = $('#submitDeleteUrl1').html();
		   $.get(ajaxUrl, {'deviceId':deviceId}, function (data) {
		       showFlashAlert('Device Deleted');
				//Trigger page update on the list
		       updateDeviceList();
		       $('.device-register label').show();
           });
	    }
    });
    
	//search products
        
        $("body").on( "click", '#searchDeviceSubmit1' , function() {
          
	    //$('#spinnerAddDevice').show();
            $('#searchProductform').ajaxSubmit(function (data) {
                $('#searchDeviceList1').slideUp();
                $('#searchDeviceList1').html(data);
                $('#searchDeviceList1').slideDown();
                //$('#spinnerAddDevice').hide();
                //$('#addDevice').html(data);
               // $(".device-register").slideUp();
               // showFlashAlert('Device Added/Updated');
                //Trigger page update on the list
                // updateDeviceList();
            });
        });  
        

        //search asset
        
        $("body").on( "click", '#searchDeviceSubmit2' , function() {
	    //$('#spinnerAddDevice').show();
            $('#searchProductform').ajaxSubmit(function (data) {
                $('#searchDeviceList2').slideUp();
                $('#searchDeviceList2').html(data);
                $('#searchDeviceList2').slideDown();
                //$('#spinnerAddDevice').hide();
                //$('#addDevice').html(data);
               // $(".device-register").slideUp();
               // showFlashAlert('Device Added/Updated');
                //Trigger page update on the list
                // updateDeviceList();
            });
        });  
        

        
     
 function updateDeviceList() {
            url = $('#listDeviceUrl1').html();
            $.post(url, {}, function (data) {
               
                $('#searchDeviceList1').html(data);
                
            }                    
            );    
        }
        
        function showFlashAlert(message) {
            $('#alertContainer').html(message);
            $('#alertContainer').show();
            setTimeout(function() { $("#alertContainer").fadeOut(1000); }, 3000)
        }
$(document).ready(
    function (){

    function preDispatch() {
        showLoader(true);
    }
    
    function preProcess(data) {
      showLoader(false); 
      return data;
    }
        url = $('#deviceNameListURL').html();
        $('input#searchDevice_name').typeahead({
            ajax: { url:url,
                triggerLength: 2,
                preDispatch: preDispatch,
                preProcess: preProcess
            }
                    
        });
        
        
     function showLoader(status) {
         if (status) {
            $('#spinnerSearchDevice').show();
         } else {
             $('#spinnerSearchDevice').hide();
         }
     }   
    });
    
  