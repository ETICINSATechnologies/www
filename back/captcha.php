<?php

session_start();

require_once 'securimage/securimage.php';

function make_response($data = "", $good = false) {
	return array("good" => $good, "data" => $data);
}

$response = make_response();

if(isset($_POST['action'])) {
	if(!strcmp($_POST['action'], 'make')) {
		$response = make_response(Securimage::getCaptchaHtml(), true);		
	} else if(!strcmp($_POST['action'], 'check')) {	// Captcha validation
		$image = new Securimage();
		if ($image->check($_POST['captcha_code']) == true) {

		} else {
			$response = make_response("invalid_captcha");
		}
	}
} else {
	$response = make_response("missing_action");
}

die(json_encode($response));
