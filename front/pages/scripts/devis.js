$(document).ready(function(){
	// retrieve captcha
	$.post(
		"back/captcha.php", 
		{
			action: 	'make'
		},
		function(data, textString, jqXHR){
			obj = JSON.parse(data);
			if(obj.good) {
				$('#captcha_container').html(obj.data);
				$('#captcha_container label').remove();
				$('#captcha_code').remove();
			} else {
				$('#captcha_container').html(
					'<div class="ui negative message"> \
					  <div class="header"> \
					    {DEVIS_ERROR_CAPTCHA_HEADER} \
					  </div> \
					  <p>{DEVIS_ERROR_CAPTCHA_MESSAGE} \
					</p></div>');
			}
		}
	);
});

function reset() {
	$("#in_lastname").val('');
	$("#in_firstname").val('');
	$("#in_firm").val('');
	$("#in_mail").val('');
	$("#in_phone").val('');
	$("#in_subject").val('');
	$("#in_message").val('');
	$("#in_budget").val('');
	$("#in_duration").val('');
	$("#in_captcha").val('');
}

function submit() {
	$.post(
		"back/captcha.php", 
		{
			action: 		'check',
			in_lastname: 	$("#in_lastname").val(),
			in_firstname: 	$("#in_firstname").val(),
			in_firm: 		$("#in_firm").val(),
			in_mail: 		$("#in_mail").val(),
			in_phone: 		$("#in_phone").val(),
			in_subject: 	$("#in_subject").val(),
			in_message: 	$("#in_message").val(),
			in_budget: 		$("#in_budget").val(),
			in_duration: 	$("#in_duration").val(),
			captcha_code: 	$("#in_captcha").val()
		},
		function(data, textString, jqXHR){
			obj = JSON.parse(data);
			if(obj.good) {
				alert(obj.data);
			} else {
				alert(obj.data);
			}
		}
	);
	reset();
}