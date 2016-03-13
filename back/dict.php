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
$dict_fr->translate(StringIdentifier::SID_CONFIANCE, "Ils nous font confiance");
$dict_fr->translate(StringIdentifier::SID_PLAQUETTE, "Plaquette");
$dict_fr->translate(StringIdentifier::SID_DEVIS, "Demander un devis");

$dict_fr->translate(StringIdentifier::SID_ETUDE_H2_1, "Votre demande");
$dict_fr->translate(StringIdentifier::SID_ETUDE_H2_2, "Proposition commerciale");
$dict_fr->translate(StringIdentifier::SID_ETUDE_H2_3, "Facture d'acompte");
$dict_fr->translate(StringIdentifier::SID_ETUDE_H2_4, "Réalisation de l'étude");
$dict_fr->translate(StringIdentifier::SID_ETUDE_H2_5, "Avenant en cas de modification de l'étude");
$dict_fr->translate(StringIdentifier::SID_ETUDE_H2_6, "Remise du livrable");
$dict_fr->translate(StringIdentifier::SID_ETUDE_H2_7, "Garantie");
$dict_fr->translate(StringIdentifier::SID_ETUDE_H2_8, "Questionnaire de satisfaction");

$dict_fr->translate(StringIdentifier::SID_ETUDE_H3_1, "Un Projet ⇆ Un chargé d’affaire ⇆ Un Réalisateur");
$dict_fr->translate(StringIdentifier::SID_ETUDE_H3_2, "Cahier des Charges & Budget & Échéancier");
$dict_fr->translate(StringIdentifier::SID_ETUDE_H3_3, "60 % du prix de l'étude");
$dict_fr->translate(StringIdentifier::SID_ETUDE_H3_4, "Des retours réguliers");
$dict_fr->translate(StringIdentifier::SID_ETUDE_H3_5, "Adaptabilité");
$dict_fr->translate(StringIdentifier::SID_ETUDE_H3_6, "Phase de recette + 3 mois de garantie");
$dict_fr->translate(StringIdentifier::SID_ETUDE_H3_7, "3 mois de garantie");
$dict_fr->translate(StringIdentifier::SID_ETUDE_H3_8, "Vos retours sont importants");

$dict_fr->translate(StringIdentifier::SID_ETUDE_STEP_1, "Avant l'étude");
$dict_fr->translate(StringIdentifier::SID_ETUDE_STEP_2, "Pendant l'étude");
$dict_fr->translate(StringIdentifier::SID_ETUDE_STEP_3, "Après l'étude");

$dict_fr->translate(StringIdentifier::SID_ETUDE_P_1, "Contactez-nous sur notre site en nous demandant un devis. Nous vous répondrons sous 24h.
Une fois le premier contact effectué nous vous affectons un chargé d’affaire, membre de notre structure. Celui-ci joue le rôle d'interface entre vous, la Junior-entreprise et les intervenants qui réalisent votre projet. Ces intervenants sont recrutés par notre secteur RH parmi les étudiants de l’INSA Lyon. Nous nous engageons à choisir les étudiants les plus compétents afin de vous assurer un service irréprochable.
");
$dict_fr->translate(StringIdentifier::SID_ETUDE_P_2, "Tout d’abord, le chargé d’affaire se charge de vous fournir une première proposition constituée d’une méthodologie et d’un budget. Parce que nous tenons à réaliser des projets de la meilleure qualité possible, vous êtes invités à nous faire des retours sur cette proposition, pour qu’elle puisse correspondre parfaitement à votre besoin. Si vous êtes satisfaits, nous vous envoyons une Proposition Commerciale définitive, qui sera rattaché à la Convention Client. Ces deux derniers documents définissent les termes de la mission.");
$dict_fr->translate(StringIdentifier::SID_ETUDE_P_3, "Avant de commencer à réaliser le projet que vous nous confiez, nous vous demanderons de nous faire parvenir un paiement, par virement bancaire ou par chèque. Ceci nous permet de nous assurer de votre sérieux et d'avancer certains frais liés à la réalisation du projet. Si pour une raison quelconque vous souhaitiez arrêter la réalisation de l'étude avant son terme, une partie du paiement reçu pourra vous être restitué si nous n'avons pas commencé une des phases qu'il permettait de financer.");
$dict_fr->translate(StringIdentifier::SID_ETUDE_P_4, "Dès le début de l’étude, le chargé d’affaire vous fait des retours hebdomadaires sur l’avancée du projet. Cette communication est facilitée par un échange rapide entre  vous, le chargé d’affaire ainsi que les intervenants travaillant sur votre projet.");
$dict_fr->translate(StringIdentifier::SID_ETUDE_P_5, "Vous pouvez à tout moment décider de modifier les termes de la mission, que ce soit en terme de délais, tarification ou de prestation à réaliser. Pour ce faire, nous conviendrons ensemble des modifications à apporter à la proposition commerciale, et nous vous transmettrons un Avenant.");
$dict_fr->translate(StringIdentifier::SID_ETUDE_P_6, "Lorsque l’étude est terminée, nous vous fournissons un procès-verbal de livraison ainsi que le résultat de votre étude. Nous vous assurons une phase de recette pendant laquelle vous pourrais nous faire tous les retours que vous souhaitez sur le livrable, dans l'éventuel cas où celui-ci ne coïnciderait pas parfaitement avec vos attentes. Vous nous transmettez ensuite un Procès-verbal de fin de recette, attestant que vous acceptez le livrable qui vous est remis. Une phase de recette est prévue pour chaque livrable de la mission.");
$dict_fr->translate(StringIdentifier::SID_ETUDE_P_7, "Lorsque l’étude est terminée, nous vous fournissons un procès-verbal de fin étude. Nous vous assurons une garantie de 15 jours à 3 mois suivant les prestations effectuées. Cette durée vous permet de nous faire tous les retours que vous souhaitez sur le livrable, dans l'éventuel cas où celui-ci ne coïnciderait pas parfaitement avec le cahier de charges concordé.");
$dict_fr->translate(StringIdentifier::SID_ETUDE_P_8, "Une fois la mission réalisée, nous vous demandons de répondre à un Questionnaire de satisfaction. Celui-ci a pour but d'améliorer en permanence la qualité de nos services.");

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
$dict_en->translate(StringIdentifier::SID_NOUS, "About us");
$dict_en->translate(StringIdentifier::SID_EQUIPE, "Our team");
$dict_en->translate(StringIdentifier::SID_PARTENAIRES, "Our partners");
$dict_en->translate(StringIdentifier::SID_EVENEMENTS, "Our events");
$dict_en->translate(StringIdentifier::SID_CONFIANCE, "We work with them");
$dict_en->translate(StringIdentifier::SID_PLAQUETTE, "Brochure");
$dict_en->translate(StringIdentifier::SID_DEVIS, "Request an estimate");

$dict_en->translate(StringIdentifier::SID_ETUDE_H2_1, "Votre demande");
$dict_en->translate(StringIdentifier::SID_ETUDE_H2_2, "Proposition commerciale");
$dict_en->translate(StringIdentifier::SID_ETUDE_H2_3, "Facture d'acompte");
$dict_en->translate(StringIdentifier::SID_ETUDE_H2_4, "Réalisation de l'étude");
$dict_en->translate(StringIdentifier::SID_ETUDE_H2_5, "Avenant en cas de modification de l'étude");
$dict_en->translate(StringIdentifier::SID_ETUDE_H2_6, "Remise du livrable");
$dict_en->translate(StringIdentifier::SID_ETUDE_H2_7, "Garantie");
$dict_en->translate(StringIdentifier::SID_ETUDE_H2_8, "Questionnaire de satisfaction");

$dict_en->translate(StringIdentifier::SID_ETUDE_H3_1, "Votre demande");
$dict_en->translate(StringIdentifier::SID_ETUDE_H3_2, "Proposition commerciale");
$dict_en->translate(StringIdentifier::SID_ETUDE_H3_3, "Facture d'acompte");
$dict_en->translate(StringIdentifier::SID_ETUDE_H3_4, "Réalisation de l'étude");
$dict_en->translate(StringIdentifier::SID_ETUDE_H3_5, "Avenant en cas de modification de l'étude");
$dict_en->translate(StringIdentifier::SID_ETUDE_H3_6, "Remise du livrable");
$dict_en->translate(StringIdentifier::SID_ETUDE_H3_7, "Garantie");
$dict_en->translate(StringIdentifier::SID_ETUDE_H3_8, "Questionnaire de satisfaction");

$dict_en->translate(StringIdentifier::SID_ETUDE_P_1, "Votre demande");
$dict_en->translate(StringIdentifier::SID_ETUDE_P_2, "Proposition commerciale");
$dict_en->translate(StringIdentifier::SID_ETUDE_P_3, "Facture d'acompte");
$dict_en->translate(StringIdentifier::SID_ETUDE_P_4, "Réalisation de l'étude");
$dict_en->translate(StringIdentifier::SID_ETUDE_P_5, "Avenant en cas de modification de l'étude");
$dict_en->translate(StringIdentifier::SID_ETUDE_P_6, "Remise du livrable");
$dict_en->translate(StringIdentifier::SID_ETUDE_P_7, "Garantie");
$dict_en->translate(StringIdentifier::SID_ETUDE_P_8, "Questionnaire de satisfaction");

//
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

$_TRANSLATOR->addLinks($links_fr);
$_TRANSLATOR->addLinks($links_en);
$_TRANSLATOR->addLinks($links_es);
