<?php

require_once "back/lang.php";

//
// ------------------------------------ DICTIONNAIRE FRANCAIS ------------------------------------
//
$DICT_FR = new Dictionary('fr');

$DICT_FR->translate(StringIdentifier::SID_LANGUAGE, "fr");

$DICT_FR->translate(StringIdentifier::SID_TITLE, "ETIC INSA Technologies : Meilleure Junior-Entreprise de France en 2016");
$DICT_FR->translate(StringIdentifier::SID_TITLE_MENU, "ETIC INSA Technologies");
$DICT_FR->translate(StringIdentifier::SID_HOME, "Accueil");
$DICT_FR->translate(StringIdentifier::SID_PRESTA, "Nos prestations");
$DICT_FR->translate(StringIdentifier::SID_ETUDE, "Déroulement d'une étude");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES, "Nos domaines de compétences");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENTS, "Nos engagements");
$DICT_FR->translate(StringIdentifier::SID_NOUS, "Nous découvrir");
$DICT_FR->translate(StringIdentifier::SID_EQUIPE, "Notre équipe");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES, "Nos partenaires");
$DICT_FR->translate(StringIdentifier::SID_EVENEMENTS, "Nos évènements");
$DICT_FR->translate(StringIdentifier::SID_CONFIANCE, "Références");
$DICT_FR->translate(StringIdentifier::SID_BLOG, "Blog");
$DICT_FR->translate(StringIdentifier::SID_PLAQUETTE, "Plaquette commerciale");
$DICT_FR->translate(StringIdentifier::SID_DEVIS, "Demander un devis");
$DICT_FR->translate(StringIdentifier::SID_CONTACT, "Nous contacter");
$DICT_FR->translate(StringIdentifier::SID_LANG, "<i class=\"fr flag\"></i> Français");
$DICT_FR->translate(StringIdentifier::SID_MOUVEMENT, "Découvrir le mouvement");
$DICT_FR->translate(StringIdentifier::SID_PLAN, "Plan du site");
$DICT_FR->translate(StringIdentifier::SID_INGENIERIE, "Ingénierie");
$DICT_FR->translate(StringIdentifier::SID_NUMERIQUE, "Transformation numérique");
$DICT_FR->translate(StringIdentifier::SID_ENTREPRISE, "Sciences de l'entreprise");
$DICT_FR->translate(StringIdentifier::SID_ARTICLES, "Articles");

/*FR_HOME*/
$DICT_FR->translate(StringIdentifier::SID_HOME_STAT_EXPERIENCE, "Années d'expérience");
$DICT_FR->translate(StringIdentifier::SID_HOME_STAT_ENG, "en France en 2016");
$DICT_FR->translate(StringIdentifier::SID_HOME_STAT_TOP, "Des meilleures Junior-Entreprises");
$DICT_FR->translate(StringIdentifier::SID_HOME_STAT_DOMAINES, "Domaines de compétences");
$DICT_FR->translate(StringIdentifier::SID_HOME_STAT_SATISFACTION, "De satisfaction client");
$DICT_FR->translate(StringIdentifier::SID_HOME_PALMARES_1, "<img src=\"front/assets/home/PrizeFR.png\" style=\"max-width: 100%;\">");
$DICT_FR->translate(StringIdentifier::SID_HOME_PALMARES_2, "Demi Finaliste du Prix d’Excellence en 2007 <br>
Finaliste du Label Ingénieur en 2007 <br> 
Top 30 des J.E. de France depuis 2001 (sur 170) <br>
Finaliste du Label Communication 2004<br>
Top 12 des meilleures J.E. en 2004<br>
Finaliste du Label Ingénieur en 2001 et 2003<br>
Finaliste du Label Informatique en 1999<br>
Lauréat du Label Technique 1998");
$DICT_FR->translate(StringIdentifier::SID_HOME_PALMARES_3, "Classement dans les 12 meilleures Junior-Entreprises de France en 2004 (sur 120 Junior-Entreprises)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
Finaliste du Label Ingénieur en 2001 et 2003
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
Finaliste du Label Informatique en 1999
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
Lauréat du Label Technique 1998");

$DICT_FR->translate(StringIdentifier::SID_HOME_SKILLS, "Nos services");
$DICT_FR->translate(StringIdentifier::SID_HOME_SKILLS_SUB, "De nombreux domaines d'ingénierie");
$DICT_FR->translate(StringIdentifier::SID_HOME_SKILLS_P, "ETIC INSA Technologies, Junior-Entreprise de l’INSA Lyon bénéficie du haut niveau de formation de cette école afin de vous proposer un large panel de prestations. Transformation numérique, Ingénierie mécanique, électronique, urbaine et bien d’autres et Développement business et marketing, découvrez nos offres et leur Business Units.");
$DICT_FR->translate(StringIdentifier::SID_HOME_SKILLS_DET, "PLUS DE DETAILS");

$DICT_FR->translate(StringIdentifier::SID_HOME_TRUST, "ILS NOUS ONT FAIT CONFIANCE");
$DICT_FR->translate(StringIdentifier::SID_HOME_TEMOIGNAGE, "Témoignages");
$DICT_FR->translate(StringIdentifier::SID_HOME_REFERENCES, "Références");
$DICT_FR->translate(StringIdentifier::SID_HOME_TEMOIGNAGE_SUB, "La satisfaction de nos clients est la
raison de notre activité.<br/> Voici quelques-uns de leurs témoignages");
$DICT_FR->translate(StringIdentifier::SID_HOME_PALMARES_H1, "Palmarès");
$DICT_FR->translate(StringIdentifier::SID_HOME_PALMARES_SUB, "Une Junior-Entrepreprise performante sur la durée");

$DICT_FR->translate(StringIdentifier::SID_ETUDE_H2_1, "Votre demande");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H2_2, "Proposition commerciale");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H2_3, "Facture d'acompte");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H2_4, "Réalisation de l'étude");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H2_5, "Avenant en cas de modification de l'étude");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H2_6, "Remise du livrable");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H2_7, "Garantie");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H2_8, "Questionnaire de satisfaction");

$DICT_FR->translate(StringIdentifier::SID_ETUDE_H3_1, "Un Projet ⇆ Un chargé d’affaire");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H3_2, "Cahier des charges, budget et échéancier");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H3_3, "60 % du prix de l'étude");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H3_4, "Des retours réguliers");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H3_5, "Adaptabilité");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H3_6, "Phase de recette + 3 mois de garantie");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H3_7, "3 mois de garantie");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H3_8, "Vos retours sont importants");

$DICT_FR->translate(StringIdentifier::SID_ETUDE_STEP_1, "Rendez-vous");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_STEP_2, "Constitution de l'équipe technique");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_STEP_3, "Proposition d'étude");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_STEP_4, "Suivi client");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_STEP_5, "Livraison & Recette");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_STEP_6, "Garantie");

$DICT_FR->translate(StringIdentifier::SID_ETUDE_DESCRIPTION_1, "Analyse de votre demande </br> Réponse sous 24h </br> Affectation d'un chargé d'affaires");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_DESCRIPTION_2, "Recrutement des consultants de l'étude parmi les meilleurs étudiants de l'INSA");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_DESCRIPTION_3, "Réunion de qualification de votre besoin </br> Définition du cahier des charges </br>Rédaction de la proposition d'étude");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_DESCRIPTION_4, "Suivi continu de l'étude </br> Rendu des différents livrables </br> Validations client </br> Phases de recette");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_DESCRIPTION_5, "Rendu du livrable final </br> Test client </br> Correction par nos consultants </br> Validation finale");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_DESCRIPTION_6, "Votre livrable est garanti jusqu'à 3 mois en fonction de sa nature");

$DICT_FR->translate(StringIdentifier::SID_ETUDE_P_1, "Demandez nous un devis via notre site, nous vous répondrons sous 24h. Une fois le premier contact effectué nous vous affecterons un chargé d’affaires, membre d’ETIC qui sera votre interlocuteur privilégié. Celui-ci sera également chargé de sélectionner, parmi les étudiants de l’INSA Lyon,  les intervenants les plus compétents qui réaliseront la partie technique de votre projet. ");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_P_2, "Une fois les intervenants sélectionnés, une réunion sera organisée par le chargé d’affaires pour définir clairement votre besoin et vos spécifications. A la suite de cette réunion, le chargé d’affaires vous fera parvenir une proposition commerciale, document réunissant un cahier des charges détaillé, une méthodologie de réalisation, un budget approfondi ainsi qu’un échéancier. ");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_P_3, "Avant de commencer à réaliser le projet que vous nous confiez, nous vous demanderons de nous faire parvenir un paiement, par virement bancaire ou par chèque. Ceci nous permet de nous assurer de votre sérieux et d'avancer certains frais liés à la réalisation du projet. Si pour une raison quelconque vous souhaitiez arrêter la réalisation de l'étude avant son terme, une partie du paiement reçu pourra vous être restitué si nous n'avons pas commencé une des phases qu'il permettait de financer.");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_P_4, "Dès le commencement de l’étude jusqu’à son terme, le chargé d’affaires vous fera des comptes-rendus hebdomadaires sur l’avancée du projet. Il veillera également au bon déroulement de l’étude en assurant un contact permanent avec les intervenants. ");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_P_5, "S'il est nécessaire de modifier les termes de la mission, que ce soit en terme de délais, tarification ou de prestation à réaliser, nous conviendrons ensemble des modifications à apporter à la proposition commerciale.");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_P_6, "Dès le moment où l’étude est terminée, nous vous fournissons le livrable commandé ainsi que la documentation associée. Vous disposerez alors d’une période de tests du livrable. Si les tests ne s’avéraient pas concluant et que le livrable ne coïncidait pas parfaitement à vos attentes, ETIC s’engage à y apporter les corrections nécessaires afin que le livrable corresponde au mieux à vos attentes.");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_P_7, "Lorsque l’étude est terminée, nous vous assurons jusqu’à 3 mois de garantie pour chaque livrable. Cette durée vous permet de nous faire tous les retours que vous souhaitez, dans l'éventuel cas où le rendu ne coïnciderait pas parfaitement avec le cahier des charges défini.");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_P_8, "Une fois la mission réalisée, nous vous demandons de répondre à un Questionnaire de satisfaction. Celui-ci a pour but d'améliorer en permanence la qualité de nos services.");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_IF, "Informatique");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_GM, "Mécanique");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_GCU, "Génie civil et urbanisme");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_GEN, "Energie et environnement");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_GE, "Génie électrique");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_SGM, "Matériaux");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_TC, "Télécom");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_GI, "Production");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_BS, "Biosciences");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_TR, "Traduction technique");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_SC, "Sciences de l'entreprise");

$DICT_FR->translate(StringIdentifier::SID_MARKETING, "Sciences de l'entreprise");
$DICT_FR->translate(StringIdentifier::SID_MARKETING_P1, "Nous nous attachons à comprendre le contexte dans lequel votre entreprise fonctionne, sa cible, ses objectifs afin de produire une communication en adéquation avec les buts de votre entreprise. ");
$DICT_FR->translate(StringIdentifier::SID_MARKETING_SATISFACTION, "Etude de satisfaction");
$DICT_FR->translate(StringIdentifier::SID_MARKETING_SATISFACTION_TEXT, "Mesurer la satisfaction de vos clients et déterminer les origines de leur (in)satisfaction");
$DICT_FR->translate(StringIdentifier::SID_MARKETING_CONCURRENCE, "Analyse concurrentielle ");
$DICT_FR->translate(StringIdentifier::SID_MARKETING_CONCURRENCE_TEXT, "Elle vous permet de connaître l’image de votre marque ou produit par rapport aux concurrents dans l’esprit du consommateur cible");
$DICT_FR->translate(StringIdentifier::SID_MARKETING_TRADUCTION, "Traduction");
$DICT_FR->translate(StringIdentifier::SID_MARKETING_TRADUCTION_TEXT, "Nous vous proposons de traduire vos présentations de produits, argumentaires commerciaux et autres outils marketing");
$DICT_FR->translate(StringIdentifier::SID_MARKETING_STRATEGIE, "Stratégie de digitalisation");
$DICT_FR->translate(StringIdentifier::SID_MARKETING_STRATEGIE_TEXT, "");
$DICT_FR->translate(StringIdentifier::SID_MARKETING_FAISABILITE, "Etude de faisabilité ");
$DICT_FR->translate(StringIdentifier::SID_MARKETING_FAISABILITE_TEXT, "Mesurer la faisabilité et la viabilité de vos projets sur un plan technique");
$DICT_FR->translate(StringIdentifier::SID_MARKETING_MARCHE, "Étude de marché");
$DICT_FR->translate(StringIdentifier::SID_MARKETING_MARCHE_TEXT, "L’étude de marché vous permettra de déterminer si votre projet vaut le coup d’être lancé.");


$DICT_FR->translate(StringIdentifier::SID_DIGITAL, "Transformation numérique");
$DICT_FR->translate(StringIdentifier::SID_DIGITAL_P1, "ETIC vous accompagne dans la digitalisation de vos activités ! Aussi bien pour votre visibilité et votre communication extérieure,
            que pour votre gestion interne, nous pouvons réaliser des prestations en informatique
            et réseaux pour créer ou améliorer les outils dont vous avez besoin. ");
$DICT_FR->translate(StringIdentifier::SID_DIGITAL_APPWEB, "Applications web");
$DICT_FR->translate(StringIdentifier::SID_DIGITAL_APPWEB_TEXT, "Réalisation d'applications web");
$DICT_FR->translate(StringIdentifier::SID_DIGITAL_APPMOBILE, "Applications mobiles");
$DICT_FR->translate(StringIdentifier::SID_DIGITAL_APPMOBILE_TEXT, "Réalisation d'applications mobiles");
$DICT_FR->translate(StringIdentifier::SID_DIGITAL_LOGICIEL, "Logiciel");
$DICT_FR->translate(StringIdentifier::SID_DIGITAL_LOGICIEL_TEXT, "Création et mise à jour logiciel");
$DICT_FR->translate(StringIdentifier::SID_DIGITAL_DOCUMENTS, "Documents informatiques");
$DICT_FR->translate(StringIdentifier::SID_DIGITAL_DOCUMENTS_TEXT, "Uniformisation de vos documents informatiques");
$DICT_FR->translate(StringIdentifier::SID_DIGITAL_BASEDEDONNEE, "Bases de données");
$DICT_FR->translate(StringIdentifier::SID_DIGITAL_BASEDEDONNE_TEXT, "Création et aide à la gestion de bases de données");
$DICT_FR->translate(StringIdentifier::SID_DIGITAL_REFERENCEMENT, "Référencement");
$DICT_FR->translate(StringIdentifier::SID_DIGITAL_REFERENCEMENT_TEXT, "Amélioration et aide au référencement de votre site web");

$DICT_FR->translate(StringIdentifier::SID_DIGITAL_AUDIT_SI, "Audit de Système d'information");
$DICT_FR->translate(StringIdentifier::SID_DIGITAL_AUDIT_SI_TEXT, "Un système d’information performant est une garantie de qualité pour vos activités. Nous pouvons l’évaluer dans sa globalité en prenant en compte l’ensemble de vos besoins, et vous conseiller pour qu’il y réponde au mieux.");

$DICT_FR->translate(StringIdentifier::SID_DIGITAL_SECURITE, "Sécurité informatique");

$DICT_FR->translate(StringIdentifier::SID_DIGITAL_SECURITE_TEXT, "Partenaires avec Insecurity, association reconnue de sécurité informatique de l’INSA Lyon, nous vous proposons un panel d’études liées à la sécurité informatique allant de l’audit de code, au pentest en passant par le développement de code sécurisé.");


$DICT_FR->translate(StringIdentifier::SID_ENGINEERING, "Ingénierie");
$DICT_FR->translate(StringIdentifier::SID_ENGINEERING_P1, "Nous vous accompagnons dans vos projets innovants.");
$DICT_FR->translate(StringIdentifier::SID_ENGINEERING_URBANISME, "Construction et Urbanisme");
$DICT_FR->translate(StringIdentifier::SID_ENGINEERING_URBANISME_TEXT, "Nous vous accompagnons dans vos projets, du diagnostic urbain à la géotechnique");
$DICT_FR->translate(StringIdentifier::SID_ENGINEERING_MECANIQUE, "Mécanique");
$DICT_FR->translate(StringIdentifier::SID_ENGINEERING_MECANIQUE_TEXT, "De la R&D à la conception, nous vous apportons les connaissances technique dont vous avez besoin");
$DICT_FR->translate(StringIdentifier::SID_ENGINEERING_ENVIRONNEMENT, "Environnement");
$DICT_FR->translate(StringIdentifier::SID_ENGINEERING_ENVIRONNEMENT_TEXT, "Nous vous accompagnons dans vos projets environnementaux");
$DICT_FR->translate(StringIdentifier::SID_ENGINEERING_ENERGIE, "Énergie");
$DICT_FR->translate(StringIdentifier::SID_ENGINEERING_ENERGIE_TEXT, "De la production de l'énergie à sa gestion, nous vous accompagnons dans vos projets" );
$DICT_FR->translate(StringIdentifier::SID_ENGINEERING_SGM, "Sciences des matériaux");
$DICT_FR->translate(StringIdentifier::SID_ENGINEERING_SGM_TEXT, "Les consultants d'ETIC sont particulièrement performants dans le domaine des semi-conducteurs, des polymères et des matériaux inorganiques");

$DICT_FR->translate(StringIdentifier::SID_ENGINEERING_GE, "Génie Électrique");
$DICT_FR->translate(StringIdentifier::SID_ENGINEERING_GE_TEXT, "L’électricité est présente partout dans notre société et est l’élément central des projets innovants");









$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_IF, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Une des meilleures formations dans ce domaine
    </div>
  </div>
</div>
<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Une très grande expérience dans la Junior : 40% de notre chiffre d'affaire
    </div>
  </div>
</div><div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Un département recouvrant une multitude de technologies informatiques
    </div>
  </div>
</div>");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_GM, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Trois départements spécialisés en mécanique
    </div>
  </div>
</div>
<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Des intervenants spécialisés dans les procédés de plasturgie
    </div>
  </div>
</div>");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_GEN, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Accès aux laboratoires de l'INSA pour faire des expériences
    </div>
  </div>
</div>
<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Grande expérience dans les tests d'émission
    </div>
  </div>
</div>");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_TC, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Un département spécialisé dans les télécommunications
    </div>
  </div>
</div>");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_GCU, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Un département spécialisé dans le Génie Civil et l'urbanisme
    </div>
  </div>
</div>
<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Une des meilleures formations dans ce domaine
    </div>
  </div>
</div>
<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Des intervenants suivant un double cursus Architecture en plus de la formation INSA
    </div>
  </div>
</div>");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_SGM, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Un département spécialisé dans les matériaux
    </div>
  </div>
</div>
<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Recherche très importante dans ce domaine à l'INSA Lyon
    </div>
  </div>
</div>");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_GE, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Plus grosse étude réalisée en 2012
    </div>
  </div>
</div>
<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Un département spécialisé dans ce domaine
    </div>
  </div>
</div>");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_GI, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Des intervenants spécialisés dans le Lean Management
    </div>
  </div>
</div>");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_BS, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Des intervenants spécialisés dans la modélisation des phénomènes biologiques
    </div>
  </div>
</div>");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_TR, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Une école ouverte sur l'international
    </div>
  </div>
</div>
<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Des intervenants de nationalités variées
    </div>
  </div>
</div>");


$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_SC, "");




$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_IF, "<i class=\"small checkmark icon\"></i>
Réalisation de site de e-commerce, un forum ou des applications Android ou iOS (iPhone / iPad) .<br/>
<i class=\"small checkmark icon\"></i>
Création de logiciels et obtention de macros.<br/>
<i class=\"small checkmark icon\"></i>
Uniformisation de documents informatiques.<br/>
<i class=\"small checkmark icon\"></i>
Aide pour une meilleure gestion de vos bases de données.<br/>
<i class=\"small checkmark icon\"></i>
Mise en place d’un système de référencement sur votre site.<br/>
<i class=\"small checkmark icon\"></i>
Réalisation d’audit de vos systèmes d’information.");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_GM, "<i class=\"small checkmark icon\"></i>
Conception de nouveaux produits ou développement d’un nouveau moteur.<br/>
<i class=\"small checkmark icon\"></i>
Modélisation de transmissions ou réalisation d’une modélisation CAO de votre produit.<br/>
<i class=\"small checkmark icon\"></i>
Réalisation du dessin de votre piste d’essai.<br/>
<i class=\"small checkmark icon\"></i>
Etude des contraintes mécaniques de votre système.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_GCU, "<i class=\"small checkmark icon\"></i>
Conseils et avis pour la rehausse d’un pont.<br/>
<i class=\"small checkmark icon\"></i>
Conception d’aménagements pour votre entreprise.<br/>
<i class=\"small checkmark icon\"></i>
Examination de la faisabilité de votre future construction.<br/>
<i class=\"small checkmark icon\"></i>
Réalisation de tests sur des matériaux de construction.<br/>
<i class=\"small checkmark icon\"></i>
Aide pour remise aux normes.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_GEN, "<i class=\"small checkmark icon\"></i>
Réalisation d’appareils de mesures ou prototype de votre dernière invention.<br/>
<i class=\"small checkmark icon\"></i>
Réalisation de bilan carbone.<br/>
<i class=\"small checkmark icon\"></i>
Estimation de votre émission de gaz à effets de serre.<br/>
<i class=\"small checkmark icon\"></i>
Amélioration de l’efficacité énergétique de vos bâtiments.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_GE, "<i class=\"small checkmark icon\"></i>
Réalisation d’un réseau intelligent.<br/>
<i class=\"small checkmark icon\"></i>
Réalisation de tests sur des composants électroniques.<br/>
<i class=\"small checkmark icon\"></i>
Réalisation d’une simulation électronique ou multiphysique.<br/>
<i class=\"small checkmark icon\"></i>
Réalisation d’un poste de commande centralisé.<br/>
<i class=\"small checkmark icon\"></i>
Conception et programmation d’un système embarqué.<br/>
<i class=\"small checkmark icon\"></i>
Test d’un composant électronique en environnement contraignant.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_SGM, "<i class=\"small checkmark icon\"></i>
Test d’un matériau dans des conditions spécifiques.<br/>
<i class=\"small checkmark icon\"></i>
Etude du recyclage de vos matériaux ou optimisation des matériaux que vous utilisez.<br/>
<i class=\"small checkmark icon\"></i>
Aide pour le choix de votre nouvelle machine.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_TC, "<i class=\"small checkmark icon\"></i>
Expertise technique concernant les protocoles de communication.<br/>
<i class=\"small checkmark icon\"></i>
Réalisation d’un audit de votre réseau informatique.<br/>
<i class=\"small checkmark icon\"></i>
Réalisation de traitement du signal ou de l’image.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_GI, "<i class=\"small checkmark icon\"></i>
Automatisation de votre production.<br/>
<i class=\"small checkmark icon\"></i>
Création de nouveaux programmes sur vos machines.<br/>
<i class=\"small checkmark icon\"></i>
Optimisation de votre entreprise et notamment de parties peu performantes.<br/>
<i class=\"small checkmark icon\"></i>
Etude pour comprendre la source de vos pertes ou pour améliorer la qualité de vos produits en examinant vos processus.<br/>
<i class=\"small checkmark icon\"></i>
Mise en place d’un ERP (Enterprise Resource Planning) ou d’un MES (Manufacturing Execution System) dans votre entreprise.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_BS, "<i class=\"small checkmark icon\"></i>
Modélisation du développement d’une nouvelle bactérie.<br/>
<i class=\"small checkmark icon\"></i>
Réalisation de tests chimiques sur vos propres molécules.<br/>
<i class=\"small checkmark icon\"></i>
Etude de l’impact de vos produits dans un environnement particulier.<br/>
<i class=\"small checkmark icon\"></i>
Réalisation d’une modélisation statistique du développement de cellules.<br/>");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_TR, "<i class=\"small checkmark icon\"></i>
Traduction de documents techniques.<br/>
<i class=\"small checkmark icon\"></i>
Traduction d’un site web.<br/>
<i class=\"small checkmark icon\"></i>
Traduction d’une application.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_SC, "<i class=\"small checkmark icon\"></i>
Analyse financière de votre entreprise.<br/>
<i class=\"small checkmark icon\"></i>
Etude et amélioration de votre stratégie d’entreprise.<br/>
<i class=\"small checkmark icon\"></i>
Aide à l’organisation de votre entreprise.<br/>
<i class=\"small checkmark icon\"></i>
Aide à la création ou à la reprise de votre entreprise.<br/>
<i class=\"small checkmark icon\"></i>
Etude de la qualité de vos services/produits.<br/>
<i class=\"small checkmark icon\"></i>
Etude de marché.");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_IF, "+ L’INSA Lyon, une des meilleures formations dans ce domaine.<br/>
+ Une très grande expérience au niveau de la Junior: plus de 40% de notre chiffre d’affaire.<br/>
+ Un département recouvrant une multitude de technologies informatiques.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_GM, "+ 2 départements spécialisés en mécanique.<br/>
+ Des intervenants spécialisés dans les procédés de plasturgie.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_GCU, "+ Intervenants suivant un cursus Architecture en parallèle du cursus Génie Civil et Urbanisme en vue d’obtenir un double diplôme.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_GEN, "+ Accès aux laboratoires de l’INSA Lyon.<br/>
+ Grande expérience dans les tests d’émission.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_GE, "+ Un département spécialisé dans l’électronique, l’électrotechnique, l’automatisation, l’informatique industrielle et les télécommunications.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_SGM, "+ Un département spécialisé dans le domaine des matériaux.<br/>
+ Accès aux laboratoires de l’INSA Lyon.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_TC, "+ Un département spécialisé en télécommunications.
+ Un département à la pointe de la nouvelle technologie.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_GI, "+ Des intervenants spécialisés dans le Lean Management.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_BS, "+ Des intervenants spécialisés dans la modélisation des phénomènes biologiques.<br/>
+ Accès aux laboratoires de l’INSA Lyon.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_TR, "+Une école ouverte sur l’international.<br/>
+ Un panel de plus de 10 langues.");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_MORE, "En savoir plus...");


$DICT_FR->translate(StringIdentifier::SID_MOUVEMENT_P, "Une Junior-Entreprise est une association loi 1901, gérée par des étudiants d’Ecole ou d’Université française.
A vocation pédagogique, elle réalise des prestations de service dans ses domaines de compétences auprès de ses clients. Plus de 170 structures sont regroupées au sein de la Confédération Nationale des Juniors-Entreprises (CNJE).
<br><br>
ETIC INSA Technologies est la Junior-Entreprise de l’INSA Lyon.
Créée en 1981, elle se positionne comme la meilleure Junior-Entreprise de France. La mission d’ETIC INSA Technologies consiste à réaliser des études répondant aux attentes du client (caractéristiques techniques), délais, coûts à travers une méthodologie contrôlée et un dialogue continu avec le client. ");

$DICT_FR->translate(StringIdentifier::SID_CONFIANCE_1, "Ils nous ont fait confiance");
$DICT_FR->translate(StringIdentifier::SID_CONFIANCE_2, "Des institutions");
$DICT_FR->translate(StringIdentifier::SID_CONFIANCE_3, "Des petites structures");
$DICT_FR->translate(StringIdentifier::SID_CONFIANCE_4, "Témoignages");
$DICT_FR->translate(StringIdentifier::SID_CONFIANCE_QUOTE_1_HEAD, "J’ai particulièrement apprécié leur réactivité et leur motivation");
$DICT_FR->translate(StringIdentifier::SID_CONFIANCE_QUOTE_2_HEAD, "Les équipes d’étudiants sont surprenantes de professionnalisme, de créativité et de rigueur");
$DICT_FR->translate(StringIdentifier::SID_CONFIANCE_QUOTE_3_HEAD, "Nous sommes fiers de soutenir chaque année ces jeunes talents");
$DICT_FR->translate(StringIdentifier::SID_CONFIANCE_QUOTE_1, "« Notre travail avec ETIC INSA Technologies a été très fructueux. Les compétences techniques et humaines des intervenants nous ont permis d’avancer rapidement sur le projet électronique que nous leur avions soumis. J’ai particulièrement apprécié leur réactivité et leur motivation.Les résultats obtenus nous permettent d’affirmer que nous ferons de nouveau appel à ETIC INSA si le besoin apparaît sur un futur projet. » <b>Faustine Vanhulle – Innovation Group – ElcoBrandt</b>");
$DICT_FR->translate(StringIdentifier::SID_CONFIANCE_QUOTE_2, "« ETIC apporte une véritable valeur ajoutée au projet. Les équipes d’étudiants sont surprenantes de professionnalisme, de créativité et de rigueur. Nous avons avancé ensemble, dans un contexte complexe et des délais limités. Le courage et la solidarité ont été des valeurs communicatives et déterminantes pour la réussite de ce programme ambitieux. En effet, en plus des compétences techniques et de gestion de projet qui caractérisent l’INSA, ETIC dispose d’excellents commerciaux ! Depuis cette expérience, je les recommande régulièrement. » <b>Barbara Coudène</b>");
$DICT_FR->translate(StringIdentifier::SID_CONFIANCE_QUOTE_3, "« Non seulement porteur du progrès technique, l’ingénieur doit de plus en plus être créateur de valeur. Il doit pouvoir imaginer la société de demain. Pour accompagner cette évolution, il devient important de le sensibiliser très tôt à une culture d’innovation et un esprit d’entreprendre. ETIC INSA Technologies, la Junior-Entreprise de l’INSA de Lyon, est une des vitrines de cette volonté. Nous sommes fiers de soutenir chaque année ces jeunes talents qui délivrent toutes leurs compétences aux professionnels qui parient sur l’innovation et le dynamisme. Depuis sa création en 1981, ETIC INSA Technologies ne cesse de se développer et de se distinguer. C’est aujourd’hui l’une des 4 meilleures Junior-Entreprises de France. » <b>Eric Maurincomme, Directeur de l’INSA de Lyon</b>");

$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_1, "Nos partenaires premium");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_2, "Les partenaires premium CNJE");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_3, "Nos partenariats Junior-Entreprises en France");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_4, "Nos partenariats Junior-Entreprises à l'étranger");

$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_AMARIS, "Amaris");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_EY, "EY");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_BNP, "BNP Paribas");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_INSA, "INSA de Lyon");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_CNJE, "Confédération Nationale des Junior-Entreprises");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_EMLYON, "EM Lyon Junior Conseil");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_JUNIORINSA, "Juniors INSA");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_JEUNESLYON, "Junior-Entreprises Lyonnaises");

$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_AMARIS_TEXT, "Amaris est un groupe international de conseil en technologies et en management avec un développement rapide et des solutions innovantes pour des projets exigeants. L'activité de la société consiste à soutenir ses clients dans la réalisation de leurs projets en agissant au sein de leur organisation afin d'améliorer leur efficacité et améliorer leurs performances. L'activité d'Amaris repose sur les 5 domaines d'expertise suivants : conseil en affaires et management, systèmes et technologies de l'information, ingénierie et hautes technologies, télécommunications, biotechnologies et pharmacie. Amaris intervient auprès de grands comptes internationaux et de groupes familiaux dans de nombreux secteurs tels l’énergie, l’automobile, la banque.

                </br></br>La valeur ajoutée d'Amaris réside dans la qualité de ses équipes et leur attention aux détails, ainsi que dans la manière dont la société capitalise sur leur savoir-faire.
");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_EY_TEXT, " Big four ayant la plus grande croissance mondiale en 2016, EY est un cabinet d’audit de plus de 230 800 collaborateurs répartis sur le globe.
                </br></br>Les collaborateurs EY œuvrent à développer des missions d’audit, d’expertise comptable et de conseil créatrices de valeur pour ses clients, en privilégiant des approches sectorielles. Dans un monde traversé de changements rapides et incessants et qui, au-delà des difficultés, présente de nombreuses perspectives, EY a choisi un objectif ambitieux : Building a better working world.
                </br></br>Partenaire des Junior-Entreprise depuis plus de 3 ans, EY nous accompagne de manière personnalisée sur nos différentes problématiques et afin de tirer le meilleur de notre Junior-Entreprise et de nous permettre de nous améliorer au quotidien. 
");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_BNP_TEXT, " Premier de la zone Euro et 5ème mondiale, BNP Paribas est un groupe bancaire international, présent dans 74 pays, avec plus de 189 000 employés.
                </br></br>La banque compte plus de 30 millions de clients entre ses activités de banque de détail dans ses quatre marchés domestiques, la France, la Belgique, l'Italie et le Luxembourg et ses autres marques. La banque de détail est également développée dans le bassin méditerranéen, en Turquie, en Pologne et dans l'Ouest des États-Unis.
                </br></br>BNP Paribas est la marque française dont la valeur est la plus élevée.
");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_INSA_TEXT, "Première école d’ingénieurs post-bac, l’INSA Lyon offre une haute formation d’ingénieurs. Avec près de 5 000 ingénieurs hautement qualifiés sur le campus, l’INSA Lyon nous offre un large panels d’étudiants experts. Diversité, excellence, ouverture d'esprit et innovation sont les moteurs de l'INSA Lyon qui, au cours de quasi soixante année d'existence, a défendu une vision de l'ingénieur avant-gardiste, toujours moderne aujourd'hui. L'ingénieur INSA n'est pas un ingénieur comme les autres. Il est doté d'excellentes compétences scientifiques et techniques mais il est aussi capable de comprendre les enjeux de sa société et de s'inscrire dans l'évolution de son monde. École à dimension internationale, l’INSA Lyon possède plus de 250 universités partenaires au travers du monde et se classe parmi les 10 meilleures formation d’ingénieurs en Europe. Soutenue par ses 22 laboratoires de recherche, elle a également l’ambition de devenir un centre de recherche et d'innovation reconnu dans le monde, exerçant une forte attractivité sur le monde industriel et économique.
");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_CNJE_TEXT, " Regroupant plus de 170 structures en France, la Confédération Nationale des Junior-Entreprises œuvre depuis 50 ans pour accompagner et développer le mouvement des Junior-Entreprises.
                </br></br>Elle a pour missions :
                </br> - Le développement du mouvement des Junior-Entreprises, notamment par l’intégration de nouvelles structures
                </br>- La formation et l’accompagnement des Junior-Entrepreneurs dans leur montée en compétences
                </br>- La promotion et la protection de la marque Junior-Entreprise et la pormotion de l’entreprenariat
");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_EMLYON_TEXT, "Troisième Junior-Entreprise de France, em lyon junior conseil est la Junior-Entreprise d’emlyon business school.
                </br></br>Elle accompagne depuis 1972 des entreprises de France et d’Europe en réalisant des études de conseil en audit, communication, entrepreneuriat, finance, marketing et stratégie.

                </br></br>Nous répondons ainsi aux problématiques rencontrées par nos clients, qu’ils soient de grands groupes, des PME ou des entrepreneurs en ajoutant les compétences d’une école de commerce à nos domaines d’expertise.
");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_JUNIORINSA_TEXT, " Regroupement des Junior-Entreprises du réseau INSA, Junior INSA nous offre une structure nationale efficace capable de réaliser des missions rapidement dans toute la France.

                </br></br>Fort de plus de 40 spécialités, conçues autour d’un enseignement d’excellence adossé à une recherche scientifique de pointe. Nous proposons des prestations autour de différents domaines, notamment l’informatique et la sécurité, la mécanique, le génie des matériaux, les mathématiques et bien d’autres.
");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_JEUNESLYON_TEXT, "Réseau de l’agglomération lyonnaise, les Junior-Entreprises Lyonnaises sont l’association de 8 Junior-Entreprises lyonnaises. Les J.E. de Centrale Rhône-Alpes, de l'emlyon business school, de l’ESDES, de l’IAE Lyon, de l’INSA Lyon, de l’ISARA, de Lyon 2, ainsi que de Sciences Po Lyon se sont associées afin de proposer un plus large panel de compétences à nos clients. Le regroupement promeut la marque et le mouvement des Junior-Entreprises au sein de l’agglomération lyonnaise.
");

$DICT_FR->translate(StringIdentifier::SID_VALEURS_H1, "Nos valeurs");
$DICT_FR->translate(StringIdentifier::SID_VALEURS_1, "Humanisme");
$DICT_FR->translate(StringIdentifier::SID_VALEURS_2, "Excellence");
$DICT_FR->translate(StringIdentifier::SID_VALEURS_3, "Engagement");
$DICT_FR->translate(StringIdentifier::SID_VALEURS_4, "Ouverture");
$DICT_FR->translate(StringIdentifier::SID_VALEURS_5, "Dépassement");
$DICT_FR->translate(StringIdentifier::SID_VALEURS_P_1, "Qui maintient l'humain au centre du système");
$DICT_FR->translate(StringIdentifier::SID_VALEURS_P_2, "Dans un processus d'amélioration continue afin de rendre ETIC toujours plus performante");
$DICT_FR->translate(StringIdentifier::SID_VALEURS_P_3, "Auprès de nos partenaires, du mouvement, de notre école et de nos clients, mais aussi vis à vis des enjeux de notre époque");
$DICT_FR->translate(StringIdentifier::SID_VALEURS_P_4, "Vers toutes les opportunités qui se présentent à ETIC, une J.E. qui garantit l'égalité des chances");
$DICT_FR->translate(StringIdentifier::SID_VALEURS_P_5, "Afin de ne rien considérer comme acquis et de viser toujours plus loin");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_H1, "Notre politique qualité");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_P_1, "ETIC INSA Technologies tient à fournir des <strong>services de qualité</strong> à ses clients afin de leur assurer la réalisation des missions confiées dans les <strong>délais impartis</strong> et le <strong>respect du cahier des charges</strong>. Et ce, en offrant à ses membres, élèves ingénieurs INSA, une <strong>structure performante</strong> qui leur permet d’<strong>apprendre</strong> et de se confronter aux réelles exigences du monde professionnel, le tout dans un climat de <strong>confiance</strong> mutuelle.");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_P_2, "Pour cela, et depuis maintenant <strong>plus de 30 ans</strong>, ETIC INSA Technologies est <strong>soutenue</strong> et contrôlée par la CNJE (Confédération Nationale des Juniors Entreprises). Une fois par an, la Junior-Entreprise est <strong>auditée sur ses processus</strong>, le suivi des études et la gestion de la trésorerie. La réussite de cet audit est la condition sine qua non au maintien de la marque Junior-Entreprise. De plus, ETIC s’engage aujourd’hui dans une démarche de certification ISO 9001 : 2008, dans le but d'offrir la meilleure réponse aux exigences de nos clients.");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_H2_1,"Cette démarche s'articule autour de trois grands axes...");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_H2_2,"...et s'appuie sur une organisation efficace");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_P_3,"Ecoute continue et personnalisée du client");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_P_4,"Garantie des compétences de nos intervenants");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_P_5,"Maîtrise du livrable au coeur de nos préoccupations");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_P_6,"Traitement de la sollicitation sous 24h");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_P_7,"Une phase d’analyse validée par le client");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_P_8,"Un binôme chargé d’affaires/correspondant qualité sur chaque étude");

$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_H2, "Notre politique RSE");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_H2_P_1, "Aujourd’hui ETIC INSA Technologies s’engage dans une démarche de responsabilité sociale et environnementale  en plaçant ces nouveaux enjeux de notre société au cœur de sa stratégie. Nous mettons en place des actions au quotidien afin de faire partager notre engagement avec le plus de personnes possibles, nos clients,  nos membres, notre école, nos partenaires et tout le mouvement des Junior-Entreprises.");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_TEXTE, "Nos engagements :");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_H2_P_2, "Accompagner l'innovation en RSE en aidant les entreprises à mener à bien leurs projets.");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_H2_P_3, "Conseiller les professionnels afin de faire évoluer leurs projets et leur entreprise vers un plus grand respect des Hommes et de l'environnement.");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_H2_P_4, "Collaborer avec la fondation du groupe INSA, qui a pour but de mettre en relation les chercheurs de l'INSA et les entreprises pour les accompagner dans leur démarche RSE.");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_H2_P_5, "Mettre en place des actions en interne : management inclusif, tri sélectif, économies d'énergie, diversité, égalité des chances...");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_H2_P_6, "Sensibiliser nos membres aux enjeux RSE et leur faire vivre une expérience qui leur donnera envie d'impacter en positif l'entreprise où ils travailleront demain, car la Junior-Entreprise est l'école de l'entreprise et nous voulons qu'ils apprennent ce qu'est une entreprise humaniste.");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_H2_P_7, "Faire prendre conscience à tous les étudiants de l'INSA Lyon et d'ailleurs des enjeux de l'entreprise de demain.");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_H2_P_8, "Etre précurseurs dans le mouvement des Junior-Entreprises et inspirer les autres à nous rejoindre dans cette dynamique, à la portée de chaque Junior-Entrepreneur.");

$DICT_FR->translate(StringIdentifier::SID_PRESIDENT_H1,"Le mot de la présidente");
$DICT_FR->translate(StringIdentifier::SID_PRESIDENT_P,"Créée en 1981, ETIC INSA Technologies est la Junior-Entreprise de l’INSA Lyon. Depuis plus de 35 ans, engagement, réactivité et qualité sont les maîtres mots d’ETIC et l’ensemble de notre équipe s’engage quotidiennement pour vous, selon ces valeurs. 
 <br>Le soutien de nos partenaires ainsi que la formation d’excellence de l’INSA Lyon dans plus de 10 domaines de l’ingénierie nous permettent de vous proposer des services pluridisciplinaires de haute qualité. Meilleure Junior-Entreprise de France en 2016, nous nous distinguons de nouveau cette année grâce à notre qualité de gestion de projet ainsi que nos compétences techniques de pointe. Interlocuteur de choix pour vous accompagner dans vos projets, nous sommes fiers de mettre à votre disposition plus de 40 collaborateurs ainsi que 3 000 consultants experts potentiels.");
$DICT_FR->translate(StringIdentifier::SID_PRESIDENT_SIGN,"Maïlys Pascail, présidente 2018-2019");
$DICT_FR->translate(StringIdentifier::SID_BUREAU,"Le bureau");
$DICT_FR->translate(StringIdentifier::SID_CA,"Le conseil d'administration");
$DICT_FR->translate(StringIdentifier::SID_EQUIPES,"Nos équipes");

$DICT_FR->translate(StringIdentifier::SID_DSI,"SI");
$DICT_FR->translate(StringIdentifier::SID_QUALITE,"Performance");
$DICT_FR->translate(StringIdentifier::SID_UA,"Unité d'Affaires");
$DICT_FR->translate(StringIdentifier::SID_GRC,"Relation Client");
$DICT_FR->translate(StringIdentifier::SID_COM,"Communication");
$DICT_FR->translate(StringIdentifier::SID_TRESOR,"Trésorerie");

$DICT_FR->translate(StringIdentifier::SID_DESC_DSI,"Système d'information");
$DICT_FR->translate(StringIdentifier::SID_DESC_QUALITE,"Suivi et amélioration continue");
$DICT_FR->translate(StringIdentifier::SID_DESC_UA,"Vente et réalisation de missions");
$DICT_FR->translate(StringIdentifier::SID_DESC_GRC,"Prise de contact et fidélisation");
$DICT_FR->translate(StringIdentifier::SID_DESC_COM,"Evénements et cohésion d'équipe");
$DICT_FR->translate(StringIdentifier::SID_DESC_TRESO,"Gestion des finances");

$DICT_FR->translate(StringIdentifier::SID_CRP,"Congrès Régionaux");
//$DICT_FR->translate(StringIdentifier::SID_CRA,"Congrès Régional d'Automne");
$DICT_FR->translate(StringIdentifier::SID_CNE,"Congrès Nationaux");
//$DICT_FR->translate(StringIdentifier::SID_CNH,"Congrès National d'Hiver");
$DICT_FR->translate(StringIdentifier::SID_JDP,"Journée du Développement Personnel");
$DICT_FR->translate(StringIdentifier::SID_TEDX,"TEDxINSA");

$DICT_FR->translate(StringIdentifier::SID_CRP_SUB,"Organisé par la région Centre-Est de la CNJE");
//$DICT_FR->translate(StringIdentifier::SID_CRA_SUB,"Organisé par la région Centre-Est de la CNJE");
$DICT_FR->translate(StringIdentifier::SID_CNE_SUB,"Organisés par la CNJE");
//$DICT_FR->translate(StringIdentifier::SID_CNH_SUB,"Organisé par la CNJE");
$DICT_FR->translate(StringIdentifier::SID_JDP_SUB,"Organisé par Etic depuis 2011");
$DICT_FR->translate(StringIdentifier::SID_TEDX_SUB,"Organisé par Etic depuis 2013");

$DICT_FR->translate(StringIdentifier::SID_CRP_P,"Deux fois par an, au printemps et en automne, les Junior-Entrepreneurs se réunissent pour assister à des formations, des conférences, et bien sûr faire des rencontres. Ces événements permettent aux participants de se créer un réseau tout en assimilant de nouvelles connaissances et bonnes pratiques. Ils sont organisé par une Junior-Entreprise de la région. Etic a organisé le Congrès Régional de Printemps 2015 pour la région Centre-Est.");
//$DICT_FR->translate(StringIdentifier::SID_CRA_P,"Chaque année, les Junior-Entrepreneurs se réunissent en automne pour assister à des formations, des conférences, et bien sûr faire des rencontres. Cet événement permet aux participants de se créer un réseau tout en assimilant de nouvelles connaissances et bonnes pratiques. Il est organisé par une Junior-Entreprises de la région.");
$DICT_FR->translate(StringIdentifier::SID_CNE_P,"Deux fois par an, en été et en hiver, les Junior-Entrepreneurs de toute la France se retrouvent pour un évènement de grande envergure. Des intervenants prestigieux assurent des formations, et les labels et challenges récompensent les meilleures Junior-Entreprises de France dans plusieurs domaines. En 2016, Etic a remporté le Prix d'Excellence, attribué à la meilleure Junior-Entreprise de France, et le Label Ingénieur, pour avoir réalisé le meilleur projet ingénieur.");
//$DICT_FR->translate(StringIdentifier::SID_CNH_P,"Tous les hivers, les Junior-Entrepreneurs de toute la France se retrouvent pour un évènement de grande envergure. Des intervenants prestigieux assurent des formations, et les challenges récompensent les meilleures Junior-Entreprises de France dans plusieurs domaines.");
$DICT_FR->translate(StringIdentifier::SID_JDP_P,"Destinée aux étudiants de l'INSA Lyon, la Journée du Développement Personnel leur permet d'assister à des formations réalisées par des intervenants invités pour l'occasion. Ces formations, complémentaires à celles de l'école, mettent l'accent sur la personnalité plutôt que sur les compétences techniques de l'ingénieur.");
$DICT_FR->translate(StringIdentifier::SID_TEDX_P,'TED est une organisation à but non lucratif dédiée aux « Ideas Worth Spreading », des idées qui méritent d’être diffusées. Depuis 1984, cette conférence organisée autour des thèmes « Technology, Entertainment, Design » se développe pour soutenir les idées qui changent le monde. TEDx a été créé dans l’esprit de la mission de TED, pour permettre à des communautés, des organisations et des individus d\'organiser des événements TED locaux. Etic organise le TEDxINSA, qui se déroule chaque année à la rotonde de l\'INSA Lyon. Plus d\'informations sur
<a href="http://www.tedxinsa.com/" target="_blank">le site de TEDxINSA.</a>');

$DICT_FR->translate(StringIdentifier::SID_DEVIS_LASTNAME, "Nom");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_FIRSTNAME, "Prénom");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_FIRM, "Société");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_MAIL, "Email");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_PHONE, "Téléphone");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_SUBJECT, "Sujet");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_MESSAGE, "Message");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_PLANNED_BUDGET, "Budget (en euros, à titre indicatif)");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_PLANNED_DURATION, "Durée (en semaines, à titre indicatif)");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_CAPTCHA_CODE, "Saisir le texte de l'image ci-dessus (en minuscules)");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_RESET, "Réinitialiser");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_SUBMIT, "Envoyer");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_HEADER, "Demande de devis");

$DICT_FR->translate(StringIdentifier::SID_FOOTER_DESCRIPTION, "Junior-Entreprise de l'INSA Lyon");
$DICT_FR->translate(StringIdentifier::SID_FOOTER_RESEAUX, "Réseaux sociaux");
$DICT_FR->translate(StringIdentifier::SID_FOOTER_CONTACT, "Nous contacter");


$DICT_FR->translate(StringIdentifier::SID_PRES, "Présidente");
$DICT_FR->translate(StringIdentifier::SID_VP,"Vice-Président");
$DICT_FR->translate(StringIdentifier::SID_SG,"Secrétaire Générale");
$DICT_FR->translate(StringIdentifier::SID_TRESO,"Trésorière");
$DICT_FR->translate(StringIdentifier::SID_VTRESO,"Vice-Trésorier");
$DICT_FR->translate(StringIdentifier::SID_RESP_DSI,"Responsable des SI");
$DICT_FR->translate(StringIdentifier::SID_RESP_QUALITE,"Responsable Performance");
$DICT_FR->translate(StringIdentifier::SID_RESP_UA_V, "Responsable Ventes");
$DICT_FR->translate(StringIdentifier::SID_RESP_UA_RM, "Responsable Réalisation");
$DICT_FR->translate(StringIdentifier::SID_RESP_GRC, "Responsable Relations Clients");
$DICT_FR->translate(StringIdentifier::SID_RESP_COM,"Responsable Communication");
$DICT_FR->translate(StringIdentifier::SID_RESP_DC,"Responsable Développement Commercial");

$DICT_FR->translate(StringIdentifier::SID_PROJECT_IDEA,"Un projet ? Une idée ?");

$DICT_FR->translate(StringIdentifier::SID_TELECHARGER_PLAQUETTE,"Télécharger notre plaquette commerciale");
$DICT_FR->translate(StringIdentifier::SID_TELECHARGER_PORTFOLIO,"Télécharger notre portfolio");



$DICT_FR->translate(StringIdentifier::SID_REA_WEB, "Réalisation d'applications web");
$DICT_FR->translate(StringIdentifier::SID_REA_MOBILE, "Réalisation d’applications mobiles (Android/iOS/crossplateform)");
$DICT_FR->translate(StringIdentifier::SID_CREA_LOGICIEL, "Création/Mise à jour de logiciels");
$DICT_FR->translate(StringIdentifier::SID_DOC_INFORMATIQUE, "Uniformisation de documents informatiques");
$DICT_FR->translate(StringIdentifier::SID_CREA_BASES, "Création et aide à la gestion de bases de données");
$DICT_FR->translate(StringIdentifier::SID_REF_WEB, "Référencement de votre site web");
$DICT_FR->translate(StringIdentifier::SID_AUDIT_SI, "Réalisation d’audit de votre Système d’Information");
$DICT_FR->translate(StringIdentifier::SID_SECU_INFO, "Sécurité informatique");

$DICT_FR->translate(StringIdentifier::SID_ETUDE_MARCHE, "Etude de marché");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_SATISFACTION, "Etude de satisfaction");
$DICT_FR->translate(StringIdentifier::SID_ANALYSE_CONCU, "Analyse concurrentielle");
$DICT_FR->translate(StringIdentifier::SID_TRAD, "Traduction");
$DICT_FR->translate(StringIdentifier::SID_STRATEGIE_DIGI, "Stratégie de digitalisation");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_FAISABILITE, "Etude de faisabilité ");

$DICT_FR->translate(StringIdentifier::SID_MECANIQUE, "Mécanique");
$DICT_FR->translate(StringIdentifier::SID_CONSTRUCTION, "Construction et urbanisme");
$DICT_FR->translate(StringIdentifier::SID_SCIENCE_MATERIAUX, "Science des matériaux");
$DICT_FR->translate(StringIdentifier::SID_ENVIRONNEMENT, "Environnement");
$DICT_FR->translate(StringIdentifier::SID_ENERGIE, "Energie");
$DICT_FR->translate(StringIdentifier::SID_ELECTRIQUE, "Génie électrique");


$DICT_FR->translate(StringIdentifier::SID_DESC_TITLE, "Description");
$DICT_FR->translate(StringIdentifier::SID_WHY_TITLE, "Pourquoi nous choisir ?");
$DICT_FR->translate(StringIdentifier::SID_EXEMPLE_TITLE, "EXEMPLES D'ETUDES");
$DICT_FR->translate(StringIdentifier::SID_OTHER_TITLE, "AUTRES PRESTATIONS POUVANT VOUS INTERESSER");



$DICT_FR->translate(StringIdentifier::SID_REA_WEB_DESC, "Les applications web sont un incontournable de la digitalisation. Leur adaptabilité et leur ergonomie en font un outil de choix pour dynamiser et améliorer votre activité comme votre visibilité");
$DICT_FR->translate(StringIdentifier::SID_REA_MOBILE_DESC, "Les applications mobiles ont transformé notre manière de faire du business. Que ce soit pour faciliter les opérations du quotidien en interne, développer un nouveau secteur au sein de votre entreprise, faire de la publicité ou vendre un nouveau service à vos clients, ces nouveaux indispensables du quotidien sur smartphones ou tablettes sont un excellent moyen d’y parvenir ! ");
$DICT_FR->translate(StringIdentifier::SID_CREA_LOGICIEL_DESC, "Les besoins de chaque entreprise est différent, et vous ne parvenez pas à trouver le logiciel qui répond à toutes vos exigences sur le marché. Aucun problème, nous le développerons spécifiquement pour vous ! De même pour un logiciel qui n’est plus au maximum de ses performances, il est important pour votre activité de toujours bénéficier des outils les plus performants, et nous pouvons vous les fournir. ");
$DICT_FR->translate(StringIdentifier::SID_DOC_INFORMATIQUE_DESC, "Avoir une documentation claire et complète est la base d’une utilisation optimisée de votre matériel informatique. C’est aussi le premier pas pour la formation de nouveaux utilisateurs, et également la maintenance.");
$DICT_FR->translate(StringIdentifier::SID_CREA_BASES_DESC, "Le management de vos bases de données est indispensable. Nous pouvons en créer une adaptée à vos besoins et usages, mais aussi entretenir celles que vous utilisez déjà.");
$DICT_FR->translate(StringIdentifier::SID_REF_WEB_DESC, "Le référencement permet de donner une meilleure visibilité à votre site web lorsque vos clients le chercheront sur un navigateur web.");
$DICT_FR->translate(StringIdentifier::SID_AUDIT_SI_DESC, "L'audit de votre Système d'Information a pour objectif d'identifier et d'évaluer les risques divers associés à vos activités informatiques.");
$DICT_FR->translate(StringIdentifier::SID_SECU_INFO_DESC, "Partenaires avec Insecurity, association reconnue de sécurité informatique de l’INSA Lyon, nous vous proposons un panel d’études liées à la sécurité informatique allant de l’audit de code, au pentest en passant par le développement de code sécurisé.");

$DICT_FR->translate(StringIdentifier::SID_ETUDE_MARCHE_DESC, "L’étude de marché vous permettra de déterminer si votre projet vaut le coup d’être lancé.
Il s’agit pour cela de rechercher les potentiels clients et leurs tendances de consommation. Nous vous proposons une méthodologie en trois étapes : étude du marché, analyse de l’environnement de votre activité et identification de vos concurrents potentiels. Ces étapes sont clés pour le développement de votre produit. L’étude de marché permet également de recueillir des informations sur le positionnement à adopter sur ce marché. ");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_SATISFACTION_DESC, "Cette étude permet de mesurer la satisfaction de vos clients et de déterminer les origines de leur (in)satisfaction. Nous analysons les besoins de vos clients et vous aidons dans la redéfinition de votre offre afin de l’adapter aux attentes du marché.");
$DICT_FR->translate(StringIdentifier::SID_ANALYSE_CONCU_DESC, "Elle vous permet de connaître l’image de votre marque ou produit par rapport aux concurrents dans l’esprit du consommateur cible. 
Veille des best-practices des entreprises concurrentes. Nous vous proposons un regard neuf et dans l’air du temps.");
$DICT_FR->translate(StringIdentifier::SID_TRAD_DESC, "Avec plus de 8 langues enseignées à l’INSA Lyon, nous vous proposons de traduire vos présentations de produit, argumentaires commerciaux et autres outils marketing. Nos élèves, étrangers ou français maîtrisant parfaitement ces langues vous proposent des traductions en anglais, chinois, allemand, espagnol, italien, japonais, portugais, ou arabe.");
$DICT_FR->translate(StringIdentifier::SID_STRATEGIE_DIGI_DESC, "?");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_FAISABILITE_DESC, "Cette étude vous permet de mesurer la faisabilité et la viabilité de vos projets sur un plan technique. Nous vous proposons de la compléter par une étude commerciale et économique faite par nos partenaires de l’EM Lyon Junior Conseil");

$DICT_FR->translate(StringIdentifier::SID_MECANIQUE_DESC, "Nous vous accompagnons dans vos projets innovants. De la R&D à la conception, nos 325 étudiants en génie mécanique sauront vous conseiller dans vos projets et vous apporter les connaissances techniques dont vous avez besoin.
Ils sont également formés à la mécatronique, à l’automatique et aux procédés de fabrication, ce qui vous permettra de réaliser des projets spécifiques ou transversaux.");
$DICT_FR->translate(StringIdentifier::SID_CONSTRUCTION_DESC, "L’INSA de Lyon propose une formation complète et de qualité aux futurs ingénieurs en Génie Civile et Urbanisme, nous offrant ainsi la possibilité de vous accompagner dans tous vos projets. Les différentes options, que ce soit dans les domaines de l’urbanisme (diagnostic urbain, gestion des réseaux urbains, sociologie urbaine), de la construction (structure des bâtiments, procédés généraux de construction, renforcement des sols), de la physique du bâtiment (thermique du bâtiment, acoustique, parasismique) et de la géotechnique (géologie, mécanisme des sols, simulation d’ouvrages), permettent aux étudiants de disposer d’un large panel de compétences.");
$DICT_FR->translate(StringIdentifier::SID_SCIENCE_MATERIAUX_DESC, "Les consultants d’ETIC sont toujours à même des dernières technologies et techniques. Ils sont particulièrement performants dans le domaine des semi-conducteurs mais aussi des polymères et des matériaux inorganiques. Ils peuvent vous aider dans le choix des matériaux de votre projet et aussi dans l’élaboration des matériaux choisis. Nos consultants connaissent également des logiciels tels qu’ANSYS ce qui leur est très utile pour le choix de matériaux. Ils maitrisent aussi les micro-technologies et réalisent par exemple des biocapteurs ou des cellules photovoltaïques. Un autre grand axe de leurs compétences est celui des contrôles. ETIC peut réaliser des contrôles non destructifs pour un panel très large de matériaux en mesurant par exemple l’endommagement d’un matériau par émission acoustique. Les consultants ETIC peuvent aussi réaliser des expertises sur des pièces déjà corrodées. ");
$DICT_FR->translate(StringIdentifier::SID_ENVIRONNEMENT_DESC, "La préservation de l’environnement est aujourd’hui une préoccupation majeure. C’est pourquoi nous vous proposons de vous accompagner dans vos projets environnementaux.
De la gestion des déchets au traitement de l’eau, de l’air et des fumées, en passant par les énergies renouvelables, ETIC saura vous accompagnez en proposant des techniques et des procédés propres.");
$DICT_FR->translate(StringIdentifier::SID_ENERGIE_DESC, "Le domaine de l’énergie est aujourd’hui un enjeu majeur à prendre en compte dans vos projets. De la production d’énergie à sa gestion, en passant par l’optimisation, ETIC saura vous accompagnez dans vos projets. Cela passe par l’étude des transferts de chaleur dans un bâtiment, l’étude des énergies renouvelables, l’étude des machines thermiques et frigorifiques ou par la régulation des procédés pour améliorer la gestion");
$DICT_FR->translate(StringIdentifier::SID_ELECTRIQUE_DESC, "L’électricité est présente partout dans notre société et est l’élément central des projets innovants.  Nous vous accompagnons dans vos projets nécessitant des systèmes électriques. Nous pouvons intervenir dans vos projets de conversion d’énergie, de systèmes embarqués, de télécommunications, d’automatisme industriel, de traitement du signal et des images, des véhicules électriques, ou encore sur les réseaux de distribution de l'énergie.");

$DICT_FR->translate(StringIdentifier::SID_REA_WEB_WHY, "Avec plus de 600 étudiants en Informatique et Télécommunication, 35 ans d’expérience, et plus de 40% de notre chiffre d’affaires réalisé dans ce domaine de compétences, ETIC assure qualité et excellence dans l’ensemble de nos prestations web.");
$DICT_FR->translate(StringIdentifier::SID_REA_MOBILE_WHY, "Forts de nos 600 étudiants en Informatique et Télécommunications ainsi que de notre grande expérience en réalisation d’applications mobiles, acquise via nos nombreux projets développés sur tous types de plateformes mobiles, nous nous engageons à vous délivrer des prestations de qualité.");
$DICT_FR->translate(StringIdentifier::SID_CREA_LOGICIEL_WHY, "Grâce à son large panel de compétences informatiques, ETIC saura s’adapter à vos besoins afin d’assurer une prestation d’excellence. Nous disposons d’un panel de plus de 600 étudiants en Informatique et Télécommunications formés à haut niveau et capable de répondre précisément à vos besoins. ");
$DICT_FR->translate(StringIdentifier::SID_DOC_INFORMATIQUE_WHY, "Avec une formation d’ingénieur méthodique et rigoureuse, les quelques 600 étudiants en Informatique et Télécommunications, maîtrisant les divers langages de programmation, pourront vous aider à rédiger et structurer de manière claire et efficace vos documents informatiques.");
$DICT_FR->translate(StringIdentifier::SID_CREA_BASES_WHY, "Nous disposons d’un panel de plus de 600 étudiants en Informatique et Télécommunications maîtrisant parfaitement la création et la gestion de bases de données. ETIC saura vous fournir des services fiables, sécurisés, et adaptés à vos besoins.");
$DICT_FR->translate(StringIdentifier::SID_REF_WEB_WHY, "Grâce à son partenariat avec Google via la mention Google Adwords, ETIC dispose d’une connaissance approfondie et reconnue sur le référencement de site web.");
$DICT_FR->translate(StringIdentifier::SID_AUDIT_SI_WHY, "Grâce à ses domaines de compétence variés, ETIC saura allier ses compétences en audit et en informatique pour vous proposer un audit de vos SI dans l’optique de développer les performances de votre entreprise.");
$DICT_FR->translate(StringIdentifier::SID_SECU_INFO_WHY, "Notre partenariat avec Insecurity, association reconnue de sécurité informatique de l’INSA Lyon.");

$DICT_FR->translate(StringIdentifier::SID_ETUDE_MARCHE_WHY, "Nos connaissances techniques sur de nombreuses problématiques apportent une compréhension plus profonde des différents marchés et de leur évolution. ");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_SATISFACTION_WHY, "- Adapter votre démarche marketing et de communication en fonction des attentes de vos clients.
- Le suivi de la satisfaction de vos clients est un élément stratégique pour garantir la croissance de votre entreprise. 
");
$DICT_FR->translate(StringIdentifier::SID_ANALYSE_CONCU_WHY, "Nous apportons un éclairage ingénieur  sur nos données récoltées afin de compléter notre analyse");
$DICT_FR->translate(StringIdentifier::SID_TRAD_WHY, "Nos élèves étudiants d’échange qui viennent de tous les pays d’Europe mais aussi d’Amérique du Sud et d’Asie.");
$DICT_FR->translate(StringIdentifier::SID_STRATEGIE_DIGI_WHY, "?");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_FAISABILITE_WHY, "Notre haute formation d’ingénieurs nationalement reconnue
Notre partenariat avec EM Lyon Junior-Conseil qui nous permet une étude complète de vos produits.");

$DICT_FR->translate(StringIdentifier::SID_MECANIQUE_WHY, "L’INSA Lyon dispose de la plus grande formation d’ingénieurs en Génie Mécanique d’Europe, offrant ainsi une grande opportunité technique à vos projets. 
Plus de 325 étudiants sont diplômés chaque année et prêts à mettre leur savoir-faire et leurs idées au service des entreprises. Huit laboratoires impliqués nous permettent d’être à la pointe des dernières technologies et d’innover sans cesse. Nous disposons également de deux campus dont un situé à Oyonnax au plus proche des entreprises de plasturgie pour conjuguer innovation et application concrète en entreprise.");
$DICT_FR->translate(StringIdentifier::SID_CONSTRUCTION_WHY, "Les étudiants sont formés à l’utilisation du logiciel AutoCad et les doubles diplômes proposés dans cette filière (architecture…) vous offre l’opportunité de réaliser avec nous des projets transverses et techniques.");
$DICT_FR->translate(StringIdentifier::SID_SCIENCE_MATERIAUX_WHY,"Nos consultants sont particulièrement bien formés et ETIC peut s’appuyer sur les laboratoires de l’INSA : Laboratoire Matériaux : Sciences et ingénierie (MATEIS), Ingénierie des matériaux polymères (IMP), Institut des nanotechnologies de Lyon (INL). ");
$DICT_FR->translate(StringIdentifier::SID_ENVIRONNEMENT_WHY, "L’INSA Lyon, c’est 360 étudiants au département Génie Energie et Environnement prêt à vous aider dans vos projets. Ils pourront de plus s’appuyer sur 5 laboratoires spécialisés présents sur le campus de la Doua");
$DICT_FR->translate(StringIdentifier::SID_ENERGIE_WHY, "Avec ces départements Génie Electrique et Génie Energie et Environnement, l’INSA Lyon a à sa disposition plus de 750 étudiants spécialisé dans le domaine de l’énergie. Ajouté à cela, 6 laboratoires spécialisés offre un cadre idéal pour assurer un suivi d’étude pertinent. ");
$DICT_FR->translate(StringIdentifier::SID_ELECTRIQUE_WHY, "Disposant de 450 étudiants spécialisés en Génie électrique travaillant aussi bien sur les technologies classiques que innovantes, ETIC INSA Technologies sera répondre à vos projets techniques mais également vous conseiller et vous accompagner. La pluridisciplinarité de haute qualité enseignée combinée aux 22 laboratoires présents à l’INSA Lyon permettent à ETIC INSA Technologies de répondre à vos projets complexes.");

$DICT_FR->translate(StringIdentifier::SID_REA_WEB_EXEMPLE, "<div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Réalisation de sites de e-commerce</div>                        
                        <div class=\"description\">Intuitifs et attractifs, ces sites sont des outils permettant de faire de la vente en ligne, un excellent moyen de toucher une clientèle plus large.</div>
                        </br>
                        <div class=\"description\"><i>Nous avons été sollicités pour des sites d’e-commerce dans des secteurs très diversifiés comme la vente de vin, de luminaires, de parfums, et de matériel agricole. </i></div>

                    </div>
                </div>
                <div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Réalisation de sites vitrine</div>
                        <div class=\"description\">Simples et efficace, il s’agit d’un excellent moyen  pour votre entreprise ou votre startup de gagner rapidement  en visibilité.</div>
                        </br>
                        <div class=\"description\"><i>Voici par exemple le lien d’un site que nous avons développé en interne pour un congrès que nous avons organisé dans la région lyonnaise : <a href =\"http://cra2016.etic-insa.com/\">cra2016.etic-insa.com</a> </i></div>
                    </div>
                </div>
                <div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Réalisation de plateformes de gestion  </div>
                        <div class=\"description\">Solution adaptée pour suivre au plus près vos activités,  votre budget, et l’avancement de vos objectifs.</div>
                        </br>
                        <div class=\"description\"><i>Nous avons notamment réalisé un logiciel de suivi en temps réel des KPI d’un des processus métier d’un grand compte de l’industrie. </i></div>
                    </div>
                </div>
                <div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Réalisation de plateformes de collaboration/forum</div>
                        <div class=\"description\">Que ce soit un outil de travail pour votre entreprise ou pour toute une communauté, c’est la solution de partage et de diffusion d’informations. </div>
                       </br>
                        <div class=\"description\"><i>Voici un site s’apparentant à une plateforme d’échange sur des appels d’offres, où sont aussi relayés des articles de presse, les commentaires des utilisateurs ainsi que leurs tweets: 
                            <a href =\"https://www.leschantiersdelentreprenalisme.fr/\">leschantiersdelentreprenalisme.fr</a>
                        </i></div>
                    </div>
                </div>");
$DICT_FR->translate(StringIdentifier::SID_REA_MOBILE_EXEMPLE, "<div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Applications mobiles natives (Android, iOS (Apple))</div>
                        <div class=\"description\">Les applications mobiles sont très diversifiées. Aussi bien pour étendre les fonctionnalités marchandes ou publicitaires, partager l’information ou créer une nouvelle forme de business, tout est possible, quel que soit l’appareil que vous utilisez !</div>
                        </br>
                        <div class=\"description\"><i>Nous avons réalisé une application sur tablette Android, capable de flasher des QR-codes internes à l’entreprise et d’afficher du contenu : documents textes, photos, vidéos en fonction des besoins de l’utilisateur. </i></div>

                    </div>
                </div>
                <div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Applications mobile cross-plateforme (tout support)</div>
                        </br>
                        <div class=\"description\"><i>Nous avons réalisé une application de tracking via un système GPS et de scoring, avec intégration de challenges pour des praticiens de VTT et BMX.  </i></div>
                    </div>
                </div>
               
                ");
$DICT_FR->translate(StringIdentifier::SID_CREA_LOGICIEL_EXEMPLE, "<div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Softwares</div>
                        <div class=\"description\">Des logiciels pour répondre à un besoin précis, adapté aux utilisateurs et au matériel disponible. Tout type de langage est utilisable. </div>
                        </br>
                        <div class=\"description\"><i>Nous avons notamment repris et implémenté un Serious Game, à destination d’élèves qui permet l’apprentissage pédagogique et intuitif de méthodes de résolution de problèmes en entreprise.  </i></div>

                    </div>
                </div>
                ");
$DICT_FR->translate(StringIdentifier::SID_DOC_INFORMATIQUE_EXEMPLE, "<div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Documentation utilisateur et concepteur standardisées et uniformisées de votre parc informatique.</div>
                        </br>
                        <div class=\"description\"><i>Nous avons réalisé la compilation d’un programme complexe et rédaction d’une documentation pour la compréhension de son architecture et sa modification. Il est important de souligner que toutes nos réalisations informatiques sont documentées, c’est un domaine que nous maîtrisons tout particulièrement </i></div>

                    </div>
                </div>");
$DICT_FR->translate(StringIdentifier::SID_CREA_BASES_EXEMPLE, "<div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Base de données sur mesure pour votre activité.</div>
                        </br>
                        <div class=\"description\"><i>Nous avons réalisé une base de données pour un organisme médical, pouvant stocker les informations de plus de 1000 patients, modifiable et modulable pour de futurs extensions ou mises à jour du système.</i></div>
                    </div>
                </div>");
$DICT_FR->translate(StringIdentifier::SID_REF_WEB_EXEMPLE, "<div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Une analyse approfondie de l’état et de l’architecture de votre site web, et la mise en place des actions pour augmenter son référencement (refonte, mise à jour, référencement Adwords, etc…)</div>
                        </br>
                        <div class=\"description\"><i>Nous avons par exemple été contactés pour refondre et améliorer le référencement d’un site de recrutement par candidature spontanée, ou encore pour la mise en place d’une politique de référencement pour un site de vente de softwares</i></div>
                    </div>
                </div>");
$DICT_FR->translate(StringIdentifier::SID_AUDIT_SI_EXEMPLE, "<div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Rapport sur l’état de votre système et nos conseils en stratégie digitale pour augmenter sa performance</div>
                        </br>
                        <div class=\"description\">Un système d’information performant est une garantie de qualité pour vos activités. Nous pouvons l’évaluer dans sa globalité en prenant en compte l’ensemble de vos besoins, et vous conseiller pour qu’il y réponde au mieux.</div>
                    </div>
                </div>");
$DICT_FR->translate(StringIdentifier::SID_SECU_INFO_EXEMPLE, "<div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Audits de code</div>
                        </br>
                        <div class=\"description\">Même avec des outils déjà en place, il n’est jamais trop tard pour en vérifier la sécurité. Grâce à un audit de code, nous serons en mesure de vous faire un bilan complet de la sécurité de vos outils informatiques. </div>

                    </div>
                </div>
                <div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Tests d’intrusions (pentest)</div>
                        </br>
                        <div class=\"description\">Vous souhaitez tester la sécurité de vos outils ? Nous sommes en mesure de faire des tests d’intrusion maîtrisés pour éprouver l’efficacité de vos protections. </div>
                    </div>
                </div>
                <div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Développement de code sécurisé</div>
                        </br>
                        <div class=\"description\">Si vos outils ne sont pas encore en place, faîte le choix de les installer dans un environnement complètement sécurisé que nous pouvons vous fournir.  </div>
                    </div>
                </div>");

$DICT_FR->translate(StringIdentifier::SID_ETUDE_MARCHE_EXEMPLE, "<div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Schneider electric </div>
                        </br>
                        <div class=\"description\">Le client cherche à savoir comment fonctionne les autres entreprises concernant le développement et le suivi de son application mobile sur les objets connectés. </div>
                    </div>
                </div>");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_SATISFACTION_EXEMPLE, "NEEDED");
$DICT_FR->translate(StringIdentifier::SID_ANALYSE_CONCU_EXEMPLE, "NEEDED");
$DICT_FR->translate(StringIdentifier::SID_TRAD_EXEMPLE, "<div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Traduction de sites </div>
                        </br>
                        <div class=\"description\">Nous avons entièrement traduit un site de l’anglais vers l’allemand pour une multinationale possédant plus de 45 laboratoires répartis dans 20 pays du globe.   </div>
                    </div>
                </div>");
$DICT_FR->translate(StringIdentifier::SID_STRATEGIE_DIGI_EXEMPLE, "?");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_FAISABILITE_EXEMPLE, "<div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"description\">Nous avons étudié la faisabilité de l’évolution vers des processus de préfabrication de systèmes thermiques et électriques. Cette préfabrication permettrait de produire des sous-systèmes en usines et de faciliter la mise en œuvre sur les chantiers</div>
                    </div>
                </div>
");

$DICT_FR->translate(StringIdentifier::SID_MECANIQUE_EXEMPLE, "<div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Modélisation thermique d'une boite de vitesse Eickhoff pour une éolienne</div>
                        </br>
                        <div class=\"description\">Analyse, conception du modèle numérique, implémentation des données</div>
                        
                    </div>
                </div>
                <div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Conception d’un porte-parapluie</div>
                        </br>
                        <div class=\"description\">Le client souhaitait développer une idée de porte-parapluie à destination des hôtels et des restaurants de luxe. Ce porte-parapluie devait pouvoir sécher les 10 parapluies qu’il contenait et posséder un bac récupérateur d’eau. Nous avons donc sélectionné x étudiants spécialisés en mécanique pour réaliser la conception en CAO puis le prototype réel de l’objet.</div>
                    </div>
                </div>
                ");

$DICT_FR->translate(StringIdentifier::SID_CONSTRUCTION_EXEMPLE, "NEEDED");

$DICT_FR->translate(StringIdentifier::SID_SCIENCE_MATERIAUX_EXEMPLE,"<div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Recherche de composant thermoliant </div>
                        </br>
                        <div class=\"description\">ETIC a réalisé une étude dont le but est de trouver des composés thermoliants aux caractéristiques très précises. Les résultats de l’étude ont permis à notre client de continuer son projet avec des matériaux adaptés à son besoin.</div>
                       
                    </div>
                </div>
                <div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Test orienté feu d'un panneau</div>
                        </br>
                        <div class=\"description\">Les consultants ETIC ont également réalisé des tests sur les caractéristiques ignifuges d’un panneau. ETIC peut réaliser des tests en prenant compte des exigences des différentes régions du monde et contrôle toujours en fonction du trio matériau/matériel/réaction.</div>    
                    </div>
                </div>
               ");
$DICT_FR->translate(StringIdentifier::SID_ENVIRONNEMENT_EXEMPLE, "<div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Amélioration d’une unité de traitement de déchets chimiques</div>                      
                        <div class=\"description\">Nous avons travaillé sur le prototype d’une unité de traitement des déchets chimiques liquides ayant un débit de 100 kg/heure. Le fluide traité était composé essentiellement d’eau (80% à 90%). Ce prototype est utilisé aujourd’hui pour réaliser des démonstrations aux clients potentiels</div>
                        </br>
                        <div class=\"description\"><i>ETIC devait faire face à une problématique de dissipation de chaleur et de pression. Nous devions trouver des solutions pour valoriser et/ou dissiper l’énergie produite par le procédé d’oxydation hydrothermal des déchets.</i></div>
                    </div>
                </div>
                <div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Estimation des gaz à effet de serre</div>
                        <div class=\"description\">La mairie de Saint-Priest s’engage dans une démarche de développement durable depuis 2009 et sa signature de l’agenda 21. </div>
                        </br>
                        <div class=\"description\"><i>ETIC a donc été mandaté afin de consolider le volet « énergie » du plan d’action de la ville. Nous avons réalisé une estimation des émissions carbone de la municipalité de Saint Priest, qui lui permettra de déterminer quels sont les bâtiments ou activités à améliorer pour rejeter moins de CO2 dans l’atmosphère, et de savoir quelle est l’ampleur de ses émissions.</i></div>
                    </div>
                </div>
                ");
$DICT_FR->translate(StringIdentifier::SID_ENERGIE_EXEMPLE, "<div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Diagnostic énergétique du réseau de Tramway de Lyon </div>
                        </br>
                        <div class=\"description\">Nous avons réalisé un diagnostic du réseau de Tramway de Lyon afin de proposer des améliorations techniques cohérentes. Ce projet de taille importante a été l'occasion pour ETIC INSA Technologies, et des élèves du département énergétique de l’INSA, de travailler en collaboration avec un grand groupe de l’énergie pour mener un bien un projet urbain novateur, au cœur des préoccupations actuelles.</div>
                    </div>
                </div>
                <div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Modèle thermodynamique paramétrable</div>
                        <div class=\"description\">Le but de cette étude était de créer un modèle thermodynamique paramétrable en fonction de diverses caractéristiques (géométrie, température, hygrométrie, émission et consommation de gaz, etc.) pour un stockage d'insectes. Nous avons créé un outil qui se devait fiable afin d’assurer un modèle extrêmement réaliste. </div>
                        </br>
                        <div class=\"description\"><i>En parallèle de ce modèle théorique, un dimensionnement des équipements de climatisation, de ventilation et de régulation de l’ambiance pour le stockage pourra être demandé</i></div>                        
                    </div>             
                </div>");
$DICT_FR->translate(StringIdentifier::SID_ELECTRIQUE_EXEMPLE, "<div class=\"item\">
                    <i class=\"large check circle middle aligned icon\"></i>
                    <div class=\"content\">
                        <div class=\"ui medium header\">Logiciel Web de bornes de rechargement pour véhicules électrique </div>
                        </br>
                        <div class=\"description\">Nous avons réalisé une étude pluridisciplinaire alliant électricité et informatique.L’étude faite pour un grand groupe consistait tout d’abord à l’étude prospective sur l’implémentationdes bornes de recharge pour véhicules électriques puis à concevoir un outil automatisant l’impact électriquedu raccordement des bornes ainsi que l’estimation du nombrede borne par commune. Le logiciel permettait de fournir sur une carte, les emplacements stratégiques des bornes par rapport au réseau électrique. </div>
                    </div>
                </div>
                ");

$DICT_FR->translate(StringIdentifier::SID_SLOGAN, "<img src=\"front/assets/home/sloganfr.png\" style=\"margin-top: 5px; max-width: 100%;\">");
$DICT_FR->translate(StringIdentifier::SID_NEXT_READ, "A lire ensuite");
$DICT_FR->translate(StringIdentifier::SID_READ_MORE, "Lire la suite");

$DICT_FR->translate(StringIdentifier::SID_FB_BUTTON, "Partager");

//ARTICLE CARACTERISATION THERMIQUE
$DICT_FR->translate(StringIdentifier::SID_CARACTERISATION_THERMIQUE_SECTION, "Caractérisation thermique de matériaux composites");
$DICT_FR->translate(StringIdentifier::SID_CARACTERISATION_THERMIQUE, "Caractérisation thermique de matériaux composites dédiés au stockage de chaleur par réaction chimique pour des applications dans le domaine du bâtiment.");
$DICT_FR->translate(StringIdentifier::SID_CARACTERISATION_THERMIQUE_AUTEUR, "Par le Julie DUSSOUILLEZ | 31 octobre 2018");
$DICT_FR->translate(StringIdentifier::SID_CARACTERISATION_THERMIQUE_P1, "Je m’appelle Julie Dussouillez, je suis en deuxième année de thèse au laboratoire CETHIL (Centre d’Énergétique et de Thermique de Lyon) et je travaille sur la caractérisation thermique de matériaux composites. Par des réactions chimiques, ces derniers permettent de stocker de la chaleur.  Dans le cadre de cette thèse, les applications visées seront celles liées au bâtiment.");
$DICT_FR->translate(StringIdentifier::SID_CARACTERISATION_THERMIQUE_P2, "Le stockage thermochimique repose sur le principe d’une réaction renversable : endothermique dans un sens et exothermique dans l’autre. Ce type de stockage de chaleur, basé sur des cycles d’hydratation et de déshydratation de cristaux de sels réactifs, s’inscrit dans un contexte de réduction de la consommation d’énergie des bâtiments et de valorisation des énergies renouvelables. Pour cela, je travaille avec des sels dits hygroscopiques, c’est-à-dire qu’ils ont la particularité de dégager de la chaleur lorsqu’ils sont mis en contact avec un air humide. À terme, l'idée serait d’utiliser cette énergie pour chauffer nos bâtiments par le vecteur air, à l’aide de conduits d’aération.");
$DICT_FR->translate(StringIdentifier::SID_CARACTERISATION_THERMIQUE_P3, "La réaction chimique d’hydratation et de déshydratation des cristaux de sel est explicitée en Figure 1. Si on considère un réacteur remplit de sel et que l'on fait passer un flux d'air froid et humide en entrée, une réaction chimique exothermique se déclenche lors de l'hydratation des sels. Cet air froid et humide ressort ainsi chaud et sec. Inversement pour régénérer et donc déshydrater les sels, il faut leur apporter de la chaleur, qui peut provenir de panneaux solaires thermiques par exemple, pour rester dans les  EnR.");
$DICT_FR->translate(StringIdentifier::SID_CARACTERISATION_THERMIQUE_FIGURE1, "Figure 1: Équation de la réaction chimique renversable");
$DICT_FR->translate(StringIdentifier::SID_CARACTERISATION_THERMIQUE_P4, "La grande force de ce type de stockage thermique, par rapport aux stockages plus ''classiques'' comme le sensible ou latent (on peut citer l’eau chaude par exemple), est qu'il n'y a aucune perte thermique entre la période de charge et de décharge. Ici la chaleur est stockée sous forme de ''potentiel chimique''. Finalement ce qui est stocké c'est, d'un côté de l'eau, et de l'autre des sels réactifs. Tant que les deux n'ont pas été mis en contact, aucune réaction chimique ne se produit et il n’y a donc aucun dégagement de chaleur. De plus, la densité énergétique des sels hygroscopiques (c’est-à-dire leur capacité à stocker/déstocker la chaleur) est bien supérieure aux autres types de stockage thermique. En effet, en termes d’ordre de grandeur, si on considère une maison relativement bien isolée de 100m², dont les besoins en chauffage seraient de 6.5 GJ, soit 1800 KWh, il faudrait 25m3 d’eau en stockage sensible contre seulement 3m3 en chimique (cf. Figure 2)");
$DICT_FR->translate(StringIdentifier::SID_CARACTERISATION_THERMIQUE_FIGURE2, "Figure 2: Caractéristiques du stockage thermochimique");
$DICT_FR->translate(StringIdentifier::SID_CARACTERISATION_THERMIQUE_P5, "Néanmoins, les études menées dans ce domaine montrent que les transferts de masse lors des expérimentations restent faibles et loin des valeurs théoriques attendues. Conformément à la réaction présentée en Figure 1, lors de l'hydratation des sels, une réaction chimique se déclenche entre les molécules d'eau et les cristaux de sel pour dégager de la chaleur. Mais il y a aussi des réactions parasites qui se créent entre les molécules d'eau et qui conduisent à la formation d'hydrates sur les couches superficielles des cristaux. Cela crée une agglomération de matière qui limite, voire empêche toute hydratation, et donc tout transfert de chaleur.");
$DICT_FR->translate(StringIdentifier::SID_CARACTERISATION_THERMIQUE_P6, "Pour faire le parallèle avec notre vie de tous les jours, c'est exactement le même phénomène qui se passe dans nos salières. Lorsque l’air ambiant est trop humide, on conseille souvent d’ajouter du riz pour adsorber l'humidité. Étant donné que dans le cadre de ma thèse je ne vais pas pouvoir utiliser du riz pour enlever l’humidité, l’utilisation de matrices poreuses a été envisagée, afin de remédier à ce problème. Ces matrices sont des matériaux hôtes dans lesquels les cristaux de sel seront incrustés. Ceci devrait permettre de séparer physiquement chacun des cristaux les uns des autres, d'éviter le phénomène d'agglomération et donc d'augmenter les transferts de masse et de chaleur.");
$DICT_FR->translate(StringIdentifier::SID_CARACTERISATION_THERMIQUE_P7, "L'idée de ma thèse c'est tout d'abord de caractériser thermiquement parlant 3 sels (dont un en particulier qui n'est quasiment pas connu dans la littérature), qui ont été considérés comme les plus prometteurs pour cette application bâtiment. Je vais ensuite pouvoir tester les matrices poreuses, préalablement imprégnées respectivement des trois types de sels,  à l’aide d’un banc d'essai que je suis en train de réaliser. Ce qui me permettra, je l'espère, d'identifier le meilleur sel pour le chauffage de demain !");
$DICT_FR->translate(StringIdentifier::SID_CARACTERISATION_THERMIQUE_DESCRIPTION_ARTICLE, "Je m’appelle Julie Dussouillez, je suis en deuxième année de thèse au laboratoire CETHIL (Centre d’Énergétique et de Thermique de Lyon) et je travaille sur la caractérisation thermique de matériaux composites...");

//TELECHARGER PLAQUETTE OU LECTURE EN LIGNE
$DICT_FR->translate(StringIdentifier::SID_PLAQUETTE_LIEN, "/back/download/PlaquetteETIC.pdf");
$DICT_FR->translate(StringIdentifier::SID_PLAQUETTE_ONLINE,"https://fr.calameo.com/read/005529697c0949fc89b4f");

//ARTICLE SUR LES ANCIENS
$DICT_FR->translate(StringIdentifier::SID_ANCIEN_SECTION, "Infographie des Anciens 2018");
$DICT_FR->translate(StringIdentifier::SID_ANCIEN, "Infographie des Anciens 2018");
$DICT_FR->translate(StringIdentifier::SID_ANCIEN_AUTEUR, "Par le Conseil d'Administration | 20 septembre 2018");
$DICT_FR->translate(StringIdentifier::SID_ANCIEN_P1, " Que sont-ils devenus ? Cette année encore, les anciens ETICiens ont réussi à valoriser leur expérience en Junior-Entreprise: voici leurs parcours résumés en quelques chiffres clés....");
$DICT_FR->translate(StringIdentifier::SID_ANCIEN_P2, "De manière générale, l'aventure au sein d'ETIC permet un premier contact avec le monde de l'entreprise et donc la création d'un premier réseau grâce aux partenaires et au mouvement notamment. Les anciens ETICiens ont plus de facilité à trouver un stage ou un emploi. Plus de la moitié d'entre eux ont bénéficié d’une expérience à l'étranger après l’obtention de leur diplôme !");
$DICT_FR->translate(StringIdentifier::SID_ANCIEN_P3, "Si le monde de entrepreneuriat t'intéresse, n'hésite plus à nous rejoindre: en sortant d'ETIC, 1 Junior-Entrepreneur sur 3 a créé sa propre entreprise ! En tant que membre d'ETIC tu pourras bénéficier de nombreuses formations qui t'aideront à appréhender le monde professionnel.");
$DICT_FR->translate(StringIdentifier::SID_ANCIEN_DESCRIPTION_ARTICLE, "Que sont-ils devenus ? Cette année encore, les anciens ETICiens ont réussi à valoriser leur expérience en Junior-Entreprise: voici leurs parcours résumés en quelques chiffres clés....");
$DICT_FR->translate(StringIdentifier::SID_ANCIEN_NEXT_ARTICLE, "Retours sur le JEWC, congrès ayant réuni à Lyon des Junior-Entrepreneurs du monde entier !");