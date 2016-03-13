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

//
// ------------------------------------ DICTIONNAIRE LIENS FRANÇAIS ------------------------------------
//
$links_fr = new Dictionary('fr');
$links_fr->translate(StringIdentifier::LINK_HOME, "page.php?page=home&lang=fr");
$links_fr->translate(StringIdentifier::LINK_DEVIS, "page.php?page=devis&lang=fr");
$links_fr->translate(StringIdentifier::LINK_SKILLS, "page.php?page=skills&lang=fr");
$links_fr->translate(StringIdentifier::LINK_ENGAGEMENT, "page.php?page=engagement&lang=fr");
$links_fr->translate(StringIdentifier::LINK_EVENTS, "page.php?page=events&lang=fr");
$links_fr->translate(StringIdentifier::LINK_PARTNERS, "page.php?page=partners&lang=fr");
$links_fr->translate(StringIdentifier::LINK_STUDY, "page.php?page=study&lang=fr");
$links_fr->translate(StringIdentifier::LINK_TEAM, "page.php?page=team&lang=fr");
$links_fr->translate(StringIdentifier::LINK_TRUST, "page.php?page=trust&lang=fr");

//
// ------------------------------------ DICTIONNAIRE LIENS ANGLAIS ------------------------------------
//
$links_en = new Dictionary('en');
$links_en->translate(StringIdentifier::LINK_HOME, "page.php?page=home&lang=en");
$links_en->translate(StringIdentifier::LINK_DEVIS, "page.php?page=devis&lang=en");
$links_en->translate(StringIdentifier::LINK_SKILLS, "page.php?page=skills&lang=en");
$links_en->translate(StringIdentifier::LINK_ENGAGEMENT, "page.php?page=engagement&lang=en");
$links_en->translate(StringIdentifier::LINK_EVENTS, "page.php?page=events&lang=en");
$links_en->translate(StringIdentifier::LINK_PARTNERS, "page.php?page=partners&lang=en");
$links_en->translate(StringIdentifier::LINK_STUDY, "page.php?page=study&lang=en");
$links_en->translate(StringIdentifier::LINK_TEAM, "page.php?page=team&lang=en");
$links_en->translate(StringIdentifier::LINK_TRUST, "page.php?page=trust&lang=en");

//
// ------------------------------------ DICTIONNAIRE LIENS ESPAGNOL ------------------------------------
//
$links_es = new Dictionary('es');
$links_es->translate(StringIdentifier::LINK_HOME, "page.php?page=home&lang=es");
$links_es->translate(StringIdentifier::LINK_DEVIS, "page.php?page=devis&lang=es");
$links_es->translate(StringIdentifier::LINK_SKILLS, "page.php?page=skills&lang=es");
$links_es->translate(StringIdentifier::LINK_ENGAGEMENT, "page.php?page=engagement&lang=es");
$links_es->translate(StringIdentifier::LINK_EVENTS, "page.php?page=events&lang=es");
$links_es->translate(StringIdentifier::LINK_PARTNERS, "page.php?page=partners&lang=es");
$links_es->translate(StringIdentifier::LINK_STUDY, "page.php?page=study&lang=es");
$links_es->translate(StringIdentifier::LINK_TEAM, "page.php?page=team&lang=es");
$links_es->translate(StringIdentifier::LINK_TRUST, "page.php?page=trust&lang=es");

$_LINKER = new Translator();
$_LINKER->addDictionary($links_fr);
$_LINKER->addDictionary($links_en);
$_LINKER->addDictionary($links_es);