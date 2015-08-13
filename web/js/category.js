 $("body").on( "click", '#btndeviceAddCategory' , function() {
 	    $('#spinnerShow').show();
            $('#AddCategoriesForm').ajaxSubmit(function (data) {
                $('#spinnerShow').hide();
                $('#addCategories').html(data);
                //$(".device-register").slideUp();
                showFlashAlert('Device Added/Updated');
                //Trigger page update on the list
                 updateDeviceList1();
            });
        }); 
    
           
 //edit Device
        $("body").on( "click", '.editDevice2' , function() {
            
	deviceId = $(this).attr('id');
       
        ajaxUrl = $('#submitUrl2').html();
		$.get(ajaxUrl, {'deviceId':deviceId}, function (data) {
		$("#addCategoriesHTML").html(data);
                $("#btndeviceAddCategory").attr('value', 'Update');
		$('.device-register label').show();
		$(".device-register").slideDown();
               
            });	
	});
		
                //click register
$("body").on( "click", '.clickRegister1' , function() {
	deviceId = $(this).attr('id');
       
        ajaxUrl = $('#clickRegisterUrl1').html();
		$.get(ajaxUrl,  function (data) {
		$("#addCategoriesHTML").html(data);
                $("#btndeviceAddCategory").attr('value', 'Add');
		$('.device-register label').show();
		$(".device-register").slideDown();
               
	}
	);
	
	});
        
        //delete device
        $("body").on( "click", '.deleteDevice2' , function() {
            
         
		deviceId = $(this).attr('id');
        var child = $('#'+deviceId).parent().parent().find("td:eq(1)");
        var result = window.confirm('Are you sure to remove '+ child.text()+'?');
        if(result == true){
            //alert("hi");
           ajaxUrl = $('#submitDeleteUrl2').html();
		   $.get(ajaxUrl, {'deviceId':deviceId}, function (data) {
		       showFlashAlert('Device Deleted');
				//Trigger page update on the list
		       updateDeviceList1();
		       $('.device-register label').show();
           });
	    }
    });
	
 function updateDeviceList1() {
            url = $('#listDeviceUrl2').html();
            $.post(url, {}, function (data) {
               
                $('#searchDeviceList2').html(data);
                
            }                    
            );    
        }
        
        function showFlashAlert(message) {
            $('#alertContainer').html(message);
            $('#alertContainer').show();
            setTimeout(function() { $("#alertContainer").fadeOut(1000); }, 3000)
        }