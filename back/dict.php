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
$dict_fr->translate(StringIdentifier::SID_PRESTA, "Nos prestations");
$dict_fr->translate(StringIdentifier::SID_ETUDE, "Déroulement d'une étude");
$dict_fr->translate(StringIdentifier::SID_COMPETENCES, "Nos domaines de compétences");
$dict_fr->translate(StringIdentifier::SID_ENGAGEMENTS, "Nos engagements");
$dict_fr->translate(StringIdentifier::SID_NOUS, "Nous découvrir");
$dict_fr->translate(StringIdentifier::SID_EQUIPE, "Notre équipe");
$dict_fr->translate(StringIdentifier::SID_PARTENAIRES, "Nos partenaires");
$dict_fr->translate(StringIdentifier::SID_EVENEMENTS, "Nos évènements");

//
// ------------------------------------ DICTIONNAIRE  ANGLAIS ------------------------------------
//
$dict_en = new Dictionary('en');
$dict_en->translate(StringIdentifier::SID_TITLE, "ETIC INSA Technologies");
$dict_en->translate(StringIdentifier::SID_HOME, "Home");
$dict_en->translate(StringIdentifier::SID_PRESTA, "Our services");
$dict_en->translate(StringIdentifier::SID_ETUDE, "Study's on-going");
$dict_en->translate(StringIdentifier::SID_COMPETENCES, "Our fields of proficiency");
$dict_en->translate(StringIdentifier::SID_ENGAGEMENTS, "Our promises");
$dict_en->translate(StringIdentifier::SID_NOUS, "Discover us");
$dict_en->translate(StringIdentifier::SID_EQUIPE, "Our team");
$dict_en->translate(StringIdentifier::SID_PARTENAIRES, "Our partners");
$dict_en->translate(StringIdentifier::SID_EVENEMENTS, "Our events");
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