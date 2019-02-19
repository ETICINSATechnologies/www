<?php

require_once "back/dicts.php"; //définition de $_TRANSLATOR dans ce fichier

function notfound($indic) {
	echo file_get_contents("front/pages/404.html");
	die("<!--" . $indic . "-->");
}

function sanitize_path() {
	$rel_dir = "front/pages/";
	$pages_dir = realpath($rel_dir);
	if($pages_dir === FALSE) {
		notfound("failed 1");
	}
	$page = realpath($rel_dir . $_GET['page'] . ".html");
	if($page === FALSE) {
		notfound("failed 2");
	}
	if(dirname($page) === $pages_dir) {
		return $page;
	}
	notfound("failed 3 - hack attempt detected.");
}

if(isset($_GET['page']) && isset($_GET['lang'])) {
    // récupération de la page si elle existe
    $page = sanitize_path();
    $header = "front/static/header.html";
    $footer = "front/static/footer.html";
    if(file_exists($page)) {
        // on récupère le contenu
        $content = file_get_contents($header) . file_get_contents($page) . file_get_contents($footer);
        // on réalise le changement de langue
        echo $_TRANSLATOR->translate($_GET['lang'], $content);
    } else {
        notfound("failed 4 - file not found.");
    }
} else {
    notfound("failed 5 - missing parameters.");
}