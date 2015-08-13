$("body").on( "click", '#btndeviceAdd' , function() {
	    $('#spinnerAddDevice').show();
            $('#AddDeviceForm').ajaxSubmit(function (data) {
                $('#spinnerAddDevice').hide();
                $('#addDevice').html(data);
                $(".device-register").slideUp();
                showFlashAlert('Device Added/Updated');
                //Trigger page update on the list
                 updateDeviceList();
            });
        }); 
		
	$("body").on( "click", '.editDevice' , function() {
	deviceId = $(this).attr('id');
       
        ajaxUrl = $('#submitUrl').html();
		$.get(ajaxUrl, {'deviceId':deviceId}, function (data) {
		$("#addDeviceHTML").html(data);
                $("#btndeviceAdd").attr('value', 'Update');
		$('.device-register label').show();
		$(".device-register").slideDown();
               
	}
	);
	
	});
	
	//Queue Device
	
	$("body").on( "click", '.queueDevice' , function() {
	deviceId = $(this).attr('id');
	device = deviceId.split('_');
	deviceId = device[1];
       
        ajaxUrl = $('#queueUrl').html();
		$.get(ajaxUrl, {'deviceId':deviceId}, function (data) {
				$('#test').html(data);
				$('#queueModelPopup').show();
			}
		);
	
	});
	
	//return Device
	
	$("body").on( "click", '.returnDevice' , function() {
	deviceId = $(this).attr('id');
    device = deviceId.split('_');
        ajaxUrl = $('#returnDeviceUrl').html();
        $.get(ajaxUrl, {'deviceId':device[1]}, function (data) {
				$('#'+deviceId).html('Take');
				$('#'+deviceId).attr('class', 'takeDevice');
				$('#returnDeviceUrl').html('return');
			}
		);
	
	});
	
	//take Device
	
	$("body").on( "click", '.takeDevice' , function() {
	deviceId = $(this).attr('id');
    device = deviceId.split('_');       
        ajaxUrl = $('#takeDeviceUrl').html();
        $.get(ajaxUrl, {'deviceId':device[1]}, function (data) {
				$('#'+deviceId).html('Return');
				$('#'+deviceId).attr('class', 'returnDevice');
				$('#takeDeviceUrl').html('take');
				
			}
		);
	
	});
	
	//canel request
	
	//take Device
	
	$("body").on( "click", '.cancelRequest' , function() {
    deviceId = $(this).attr('id');
	device = deviceId.split('_');
       ajaxUrl = $('#cancelRequestUrl').html();
		$.get(ajaxUrl, {'deviceId':device[1]}, function (data) {
		var value = $("#queue_"+device[1]).html();
		var queuenumber = parseInt(value*1)-1;
        if (queuenumber == 0) {
            queuenumber = null;
        }
		$("#queue_"+device[1]).html(queuenumber);
		$('#'+deviceId).attr('id', 'raiseHand_'+device[1]);
		$('#raiseHand_'+device[1]).attr('class', 'raiseHand');
		$("#raiseHand_"+device[1]).html('<i class="fa fa-hand-o-up"></i>');
		$('#cancelRequestUrl').html('cancelrequest');	
		}
	);
	
	});
	
	//Raise a Hand
	
	$("body").on( "click", '.raiseHand' , function() {
	deviceId = $(this).attr('id');
	deviceId = deviceId.split("_");
	deviceId = deviceId[1];
        ajaxUrl = $('#raiseHandUrl').html();
		$.get(ajaxUrl, {'deviceId':deviceId}, function (data) {
				var value = $("#queue_"+deviceId).html();
				var queuenumber = parseInt(value*1)+1;
				$("#queue_"+deviceId).html(queuenumber);
				$('#raiseHand_'+deviceId).attr('id', 'cancelRequest_'+deviceId);	
				$('#cancelRequest_'+deviceId).attr('class', 'cancelRequest');
				$("#cancelRequest_"+deviceId).html('Cancel Request');
				$('#raiseHandUrl').html('request');
			}
		);
	
	});	
	
	
	//click Register action
	$("body").on( "click", '.clickRegister' , function() {
	deviceId = $(this).attr('id');
       
        ajaxUrl = $('#clickRegisterUrl').html();
		$.get(ajaxUrl,  function (data) {
		$("#addDeviceHTML").html(data);
                $("#btndeviceAdd").attr('value', 'Add');
		$('.device-register label').show();
		$(".device-register").slideDown();
               
	}
	);
	
	});
	
	//Delete device
	$("body").on( "click", '.deleteDevice' , function() {
		deviceId = $(this).attr('id');
        var child = $('#'+deviceId).parent().parent().find("td:eq(1)");
        var result = window.confirm('Are you sure to remove '+ child.text()+'?');
        if(result == true){
           ajaxUrl = $('#submitDeleteUrl').html();
		   $.get(ajaxUrl, {'deviceId':deviceId}, function (data) {
		       showFlashAlert('Device Deleted');
				//Trigger page update on the list
		       updateDeviceList();
		       $('.device-register label').show();
           });
	    }
    });
        
        function updateDeviceList() {
            url = $('#listDeviceUrl').html();
            $.post(url, {}, function (data) {
                $('#searchDeviceList').slideUp();
                $('#searchDeviceList').html(data);
                $('#searchDeviceList').slideDown();
            }                    
            );    
        }
        
        function showFlashAlert(message) {
            $('#alertContainer').html(message);
            $('#alertContainer').show();
            setTimeout(function() { $("#alertContainer").fadeOut(1000); }, 3000)
        }
        
$("body").on( "click", '#searchDeviceSubmit' , function() {
	    //$('#spinnerAddDevice').show();
            $('#searchOptionform').ajaxSubmit(function (data) {
                $('#searchDeviceList').slideUp();
                $('#searchDeviceList').html(data);
                $('#searchDeviceList').slideDown();
                //$('#spinnerAddDevice').hide();
                //$('#addDevice').html(data);
               // $(".device-register").slideUp();
               // showFlashAlert('Device Added/Updated');
                //Trigger page update on the list
                // updateDeviceList();
            });
        });         
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
    
    