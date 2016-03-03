<?php

require_once "back/dict.php"; //définition de $_TRANSLATOR dans ce fichier

function notfound() {
	echo file_get_contents("front/404.html");
}

if(isset($_GET['page']) && isset($_GET['lang'])) {
	// récupération de la page si elle existe
	$page = "front/".$_GET['page'].".html";
	if(file_exists($page)) {
		// on récupère le contenu
		$content = file_get_contents($page);
		// on réalise le changement de langue
		echo $_TRANSLATOR->translate($_GET['lang'], $content);
	} else {
		notfound();
	}
} else {	
	notfound();
}