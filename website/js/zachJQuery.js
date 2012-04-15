function showContactCaptcha()
{
    $("#contactCaptcha").dialog({ modal: true, draggable: false, resizable: false });
//	$(document).ready(function() {
//    	$("#contactCaptcha").dialog({ modal: true, draggable: false, resizable: false });
//  	});
}

function postCaptchaAnswer()
{
	$.post("contactCaptcha.php", $("#contactCaptchaForm").serialize(), 
	function(data){
		if(data != "Wrong")
		{
			$("#contactInfo").html(data);
			$("#contactCaptcha").dialog('close');
		}
	});
}