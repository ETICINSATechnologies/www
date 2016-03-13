<?php

require_once 'securimage/securimage.php';

// Captcha validation
$image = new Securimage();
if ($image->check($_POST['captcha_code']) == true) {


	
} else {
  	die("Le code captcha saisi est invalide !");
}