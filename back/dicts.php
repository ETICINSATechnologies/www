<?php

require_once "back/dicts/dict_fr.php";
require_once "back/dicts/dict_en.php";
require_once "back/dicts/dict_es.php";



// création de l'instance de traducteur
$_TRANSLATOR = new Translator();
// ajout des dictionnaires
$_TRANSLATOR->addDictionary($DICT_FR);
$_TRANSLATOR->addDictionary($DICT_EN);
$_TRANSLATOR->addDictionary($DICT_ES);

//
// ------------------------------------ DICTIONNAIRE LIENS ------------------------------------
//
$links = new Dictionary('');
$links->translate(StringIdentifier::LINK_HOME, "page.php?page=home");
$links->translate(StringIdentifier::LINK_DEVIS, "page.php?page=devis");
$links->translate(StringIdentifier::LINK_SKILLS, "page.php?page=skills");
$links->translate(StringIdentifier::LINK_ENGAGEMENT, "page.php?page=engagement");
$links->translate(StringIdentifier::LINK_EVENTS, "page.php?page=events");
$links->translate(StringIdentifier::LINK_PARTNERS, "page.php?page=partners");
$links->translate(StringIdentifier::LINK_STUDY, "page.php?page=study");
$links->translate(StringIdentifier::LINK_TEAM, "page.php?page=team");
$links->translate(StringIdentifier::LINK_TRUST, "page.php?page=trust");
$links->translate(StringIdentifier::LINK_BLOG, "page.php?page=blog");
$links->translate(StringIdentifier::LINK_NETWORK, "page.php?page=network");
$links->translate(StringIdentifier::LINK_MOUVEMENT, "page.php?page=mouvement");
$links->translate(StringIdentifier::LINK_PLAN, "page.php?page=plan");

$links->translate(StringIdentifier::LINK_REA_WEB, "page.php?page=subcategory_websites");
$links->translate(StringIdentifier::LINK_REA_MOBILE,"page.php?page=subcategory_mobile");
$links->translate(StringIdentifier::LINK_CREA_LOGICIEL,"page.php?page=subcategory_software");
$links->translate(StringIdentifier::LINK_DOC_INFORMATIQUE,"page.php?page=subcategory_document");
$links->translate(StringIdentifier::LINK_CREA_BASES,"page.php?page=subcategory_database");
$links->translate(StringIdentifier::LINK_REF_WEB,"page.php?page=subcategory_SEO");
$links->translate(StringIdentifier::LINK_AUDIT_SI,"page.php?page=subcategory_computeraudit");
$links->translate(StringIdentifier::LINK_SECU_INFO,"page.php?page=subcategory_ITsecurity");
$links->translate(StringIdentifier::LINK_ETUDE_MARCHE,"page.php?page=subcategory_market");
$links->translate(StringIdentifier::LINK_ETUDE_SATISFACTION,"page.php?page=subcategory_satisfaction");
$links->translate(StringIdentifier::LINK_ANALYSE_CONCU,"page.php?page=subcategory_competitive");
$links->translate(StringIdentifier::LINK_TRAD,"page.php?page=subcategory_translation");
$links->translate(StringIdentifier::LINK_STRATEGIE_DIGI,"page.php?page=subcategory_ITsecurity");
$links->translate(StringIdentifier::LINK_ETUDE_FAISABILITE,"page.php?page=subcategory_feasibility");
$links->translate(StringIdentifier::LINK_MECANIQUE,"page.php?page=subcategory_mechanical");
$links->translate(StringIdentifier::LINK_CONSTRUCTION,"page.php?page=subcategory_construction");
$links->translate(StringIdentifier::LINK_SCIENCE_MATERIAUX,"page.php?page=subcategory_materials");
$links->translate(StringIdentifier::LINK_ENVIRONNEMENT,"page.php?page=subcategory_environment");
$links->translate(StringIdentifier::LINK_ENERGIE,"page.php?page=subcategory_energy");
$links->translate(StringIdentifier::LINK_ELECTRIQUE,"page.php?page=subcategory_electrical");




$_TRANSLATOR->setLinks($links);
