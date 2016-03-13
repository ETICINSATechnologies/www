$(document).ready(function(){
		// retrieve captcha
		$.post("back/captcha.php", 
		{
			action:'make'
		},
		function(data, textString, jqXHR){
			obj = JSON.parse(data);
			if(obj.good) {
				$('#captcha_container').html(obj.data);
			} else {
				$('#captcha_container').html(
					'<div class="ui negative message"> \
					  <div class="header"> \
					    {DEVIS_ERROR_CAPTCHA_HEADER} \
					  </div> \
					  <p>{DEVIS_ERROR_CAPTCHA_MESSAGE} \
					</p></div>');
			}
		});
	});