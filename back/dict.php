<?php

require_once "back/lang.php";

// ---------------------------------------------------------------------
// Dictionnaires et instance de traducteur
// ---------------------------------------------------------------------

//
// ------------------------------------ DICTIONNAIRE FRANCAIS ------------------------------------
//
$dict_fr = new Dictionary('fr');
$dict_fr->translate(StringIdentifier::SID_TITLE, "ETIC INSA Technologies");
$dict_fr->translate(StringIdentifier::SID_HOME, "Accueil");
//
// ------------------------------------ DICTIONNAIRE  ANGLAIS ------------------------------------
//
$dict_en = new Dictionary('en');
$dict_en->translate(StringIdentifier::SID_TITLE, "ETIC INSA Technologies");
$dict_fr->translate(StringIdentifier::SID_HOME, "Home");
//
// ------------------------------------ DICTIONNAIRE ESPAGNOL ------------------------------------
//
$dict_es = new Dictionary('es');
$dict_es->translate(StringIdentifier::SID_TITLE, "ETIC INSA Technologies");

// création de l'instance de traducteur
$_TRANSLATOR = new Translator();
// ajout des dictionnaires
$_TRANSLATOR->addDictionary($dict_fr);
$_TRANSLATOR->addDictionary($dict_en);
$_TRANSLATOR->addDictionary($dict_es);