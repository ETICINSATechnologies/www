<?php

// ---------------------------------------------------------------------
// Enumeration des identifiants de chaines
// ---------------------------------------------------------------------
/*
 *	Ajoutez dans cette classe tous les identifiants de chaines et à côté de chaque ce que la chaine représente
 *		- soit, une ligne const SID_XXXX = "xxxx"; // xxxx du site
 *		- et une ligne StringIdentifier::SID_XXXX dans le tableau de la constante SIDS
 */
class StringIdentifier {

    const SID_LANGUAGE = "{LANG}";

	// identifiants
	const SID_TITLE = "{TITLE}"; // titre du site
    const SID_TITLE_MENU ="{TITLE_MENU}"; // titre du menu
	const SID_HOME = "{HOME}"; // titre du site
	const SID_PRESTA ="{PRESTA}"; // titre du menu nos prestations
	const SID_ETUDE ="{ETUDE}"; // lien de pres. du déroulement d'une étude
	const SID_COMPETENCES ="{COMPETENCES}"; // lien vers la pres. de nos domaines de compétences
	const SID_ENGAGEMENTS ="{ENGAGEMENTS}"; // lien vers la pres. de nos engagemnets
	const SID_NOUS ="{NOUS}"; // titre du menu nous découvrir
	const SID_EQUIPE ="{EQUIPE}"; // lien vers la pres. de l'équipe
	const SID_PARTENAIRES ="{PARTENAIRES}"; // lien vers la pres. de nos partenaires
	const SID_EVENEMENTS ="{EVENEMENTS}"; // lien vers la pres. de nos évenements
	const SID_CONFIANCE ="{CONFIANCE}"; // lien vers la page ils nous ont fait confiance
	const SID_BLOG ="{BLOG}"; // lien vers la page ils nous ont fait confiance
	const SID_PLAQUETTE ="{PLAQUETTE}"; // lien vers la plaquette
	const SID_DEVIS ="{DEVIS}"; // lien vers le formulaire
    const SID_CONTACT ="{CONTACT}"; // lien vers le formulaire
	const SID_MOUVEMENT ="{MOUVEMENT}"; // lien vers la pres du mouvement
	const SID_LANG = "{LANGUAGE}";
    const SID_PLAN = "{PLAN}";
    const SID_INGENIERIE = "{INGENIERIE}";
    const SID_NUMERIQUE = "{NUMERIQUE}";
    const SID_ENTREPRISE = "{ENTREPRISE}";
    const SID_ARTICLES = "{ARTICLES}";

    const SID_MARKETING = "{MARKETING}";
    const SID_MARKETING_P1 = "{MARKETING_P1}";
    const SID_MARKETING_SATISFACTION = "{MARKETING_SATISFACTION}";
    const SID_MARKETING_SATISFACTION_TEXT = "{MARKETING_SATISFACTION_TEXT}";
    const SID_MARKETING_CONCURRENCE = "{MARKETING_CONCURRENCE}";
    const SID_MARKETING_CONCURRENCE_TEXT = "{MARKETING_CONCURRENCE_TEXT}";
    const SID_MARKETING_TRADUCTION = "{MARKETING_TRADUCTION}";
    const SID_MARKETING_TRADUCTION_TEXT = "{MARKETING_TRADUCTION_TEXT}";
    const SID_MARKETING_STRATEGIE = "{MARKETING_STRATEGIE}";
    const SID_MARKETING_STRATEGIE_TEXT = "{MARKETING_STRATEGIE_TEXT}";
    const SID_MARKETING_FAISABILITE = "{MARKETING_FAISABILITE}";
    const SID_MARKETING_FAISABILITE_TEXT = "{MARKETING_FAISABILITE_TEXT}";
    const SID_MARKETING_MARCHE = "{MARKETING_MARCHE}";
    const SID_MARKETING_MARCHE_TEXT = "{MARKETING_MARCHE_TEXT}";


    const SID_DIGITAL = "{DIGITAL}";
    const SID_DIGITAL_P1 = "{DIGITAL_P1}";
    const SID_DIGITAL_APPWEB = "{DIGITAL_APPWEB}";
    const SID_DIGITAL_APPWEB_TEXT = "{DIGITAL_APPWEB_TEXT}";
    const SID_DIGITAL_APPMOBILE = "{DIGITAL_APPMOBILE}";
    const SID_DIGITAL_APPMOBILE_TEXT = "{DIGITAL_APPMOBILE_TEXT}";
    const SID_DIGITAL_LOGICIEL = "{DIGITAL_LOGICIEL}";
    const SID_DIGITAL_LOGICIEL_TEXT = "{DIGITAL_LOGICIEL_TEXT}";
    const SID_DIGITAL_DOCUMENTS = "{DIGITAL_DOCUMENTS}";
    const SID_DIGITAL_DOCUMENTS_TEXT = "{DIGITAL_DOCUMENTS_TEXT}";
    const SID_DIGITAL_BASEDEDONNEE = "{DIGITAL_BASEDEDONNEE}";
    const SID_DIGITAL_BASEDEDONNE_TEXT = "{DIGITAL_BASEDEDONNE_TEXT}";
    const SID_DIGITAL_REFERENCEMENT = "{DIGITAL_REFERENCEMENT}";
    const SID_DIGITAL_REFERENCEMENT_TEXT = "{DIGITAL_REFERENCEMENT_TEXT}";
    const SID_DIGITAL_AUDIT_SI = "{DIGITAL_AUDIT_SI}";
    const SID_DIGITAL_AUDIT_SI_TEXT = "{DIGITAL_AUDIT_SI_TEXT}";
    const SID_DIGITAL_SECURITE = "{DIGITAL_SECURITE}";
    const SID_DIGITAL_SECURITE_TEXT = "{DIGITAL_SECURITE_TEXT}";


    const SID_ENGINEERING = "{ENGINEERING}";
    const SID_ENGINEERING_P1 = "{ENGINEERING_P1}";
    const SID_ENGINEERING_URBANISME = "{ENGINEERING_URBANISME}";
    const SID_ENGINEERING_URBANISME_TEXT = "{ENGINEERING_URBANISME_TEXT}";
    const SID_ENGINEERING_MECANIQUE = "{ENGINEERING_MECANIQUE}";
    const SID_ENGINEERING_MECANIQUE_TEXT = "{ENGINEERING_MECANIQUE_TEXT}";
    const SID_ENGINEERING_ENVIRONNEMENT = "{ENGINEERING_ENVIRONNEMENT}";
    const SID_ENGINEERING_ENVIRONNEMENT_TEXT = "{ENGINEERING_ENVIRONNEMENT_TEXT}";
    const SID_ENGINEERING_ENERGIE = "{ENGINEERING_ENERGIE}";
    const SID_ENGINEERING_ENERGIE_TEXT = "{ENGINEERING_ENERGIE_TEXT}";
    const SID_ENGINEERING_SGM = "{ENGINEERING_SGM}";
    const SID_ENGINEERING_SGM_TEXT = "{ENGINEERING_SGM_TEXT}";
    const SID_ENGINEERING_GE = "{ENGINEERING_GE}";
    const SID_ENGINEERING_GE_TEXT = "{ENGINEERING_GE_TEXT}";








    /*HOME*/
	const SID_HOME_STAT_EXPERIENCE = "{HOME_STAT_EXPERIENCE}";
	const SID_HOME_STAT_ENG = "{HOME_STAT_ENG}";
	const SID_HOME_STAT_TOP = "{HOME_STAT_TOP}";
	const SID_HOME_STAT_DOMAINES = "{HOME_STAT_DOMAINES}";
	const SID_HOME_STAT_SATISFACTION = "{HOME_STAT_SATISFACTION}";
	const SID_HOME_PALMARES_1 = "{HOME_PALMARES_1}";
	const SID_HOME_PALMARES_2 = "{HOME_PALMARES_2}";
	const SID_HOME_PALMARES_3 = "{HOME_PALMARES_3}";
	const SID_HOME_SKILLS = "{HOME_SKILLS}";
	const SID_HOME_SKILLS_SUB = "{HOME_SKILLS_SUB}";
	const SID_HOME_SKILLS_P = "{HOME_SKILLS_P}";
	const SID_HOME_SKILLS_DET = "{HOME_SKILLS_DET}";
	const SID_HOME_TRUST = "{HOME_TRUST}";
	const SID_HOME_TEMOIGNAGE = "{HOME_TEMOIGNAGE}";
    const SID_HOME_REFERENCES = "{HOME_REFERENCES}";
    const SID_HOME_TEMOIGNAGE_SUB = "{HOME_TEMOIGNAGE_SUB}";
	const SID_HOME_PALMARES_H1 = "{HOME_PALMARES_H1}";
	const SID_HOME_PALMARES_SUB = "{HOME_PALMARES_SUB}";



	const SID_ETUDE_H2_1 = "{ETUDE_H2_1}"; // premier titre de niveau 2 de la page  déroulement d'une étude
	const SID_ETUDE_H2_2 = "{ETUDE_H2_2}";
	const SID_ETUDE_H2_3 = "{ETUDE_H2_3}";
	const SID_ETUDE_H2_4 = "{ETUDE_H2_4}";
	const SID_ETUDE_H2_5 = "{ETUDE_H2_5}";
	const SID_ETUDE_H2_6 = "{ETUDE_H2_6}";
	const SID_ETUDE_H2_7 = "{ETUDE_H2_7}";
	const SID_ETUDE_H2_8 = "{ETUDE_H2_8}";

	const SID_ETUDE_H3_1 = "{ETUDE_H3_1}"; // premier titre de niveau 3 de la page  déroulement d'une étude
	const SID_ETUDE_H3_2 = "{ETUDE_H3_2}";
	const SID_ETUDE_H3_3 = "{ETUDE_H3_3}";
	const SID_ETUDE_H3_4 = "{ETUDE_H3_4}";
	const SID_ETUDE_H3_5 = "{ETUDE_H3_5}";
	const SID_ETUDE_H3_6 = "{ETUDE_H3_6}";
	const SID_ETUDE_H3_7 = "{ETUDE_H3_7}";
	const SID_ETUDE_H3_8 = "{ETUDE_H3_8}";

	const SID_ETUDE_STEP_1 = "{ETUDE_STEP_1}";
	const SID_ETUDE_STEP_2 = "{ETUDE_STEP_2}";
	const SID_ETUDE_STEP_3 = "{ETUDE_STEP_3}";
    const SID_ETUDE_STEP_4 = "{ETUDE_STEP_4}";
    const SID_ETUDE_STEP_5 = "{ETUDE_STEP_5}";
    const SID_ETUDE_STEP_6 = "{ETUDE_STEP_6}";

	const SID_ETUDE_DESCRIPTION_1 = "{SID_ETUDE_DESCRIPTION_1}";
	const SID_ETUDE_DESCRIPTION_2 = "{SID_ETUDE_DESCRIPTION_2}";
	const SID_ETUDE_DESCRIPTION_3 = "{SID_ETUDE_DESCRIPTION_3}";
    const SID_ETUDE_DESCRIPTION_4 = "{SID_ETUDE_DESCRIPTION_4}";
    const SID_ETUDE_DESCRIPTION_5 = "{SID_ETUDE_DESCRIPTION_5}";
    const SID_ETUDE_DESCRIPTION_6 = "{SID_ETUDE_DESCRIPTION_6}";

	const SID_ETUDE_P_1 = "{ETUDE_P_1}"; // premier paragraphe de la page  déroulement d'une étude
	const SID_ETUDE_P_2 = "{ETUDE_P_2}";
	const SID_ETUDE_P_3 = "{ETUDE_P_3}";
	const SID_ETUDE_P_4 = "{ETUDE_P_4}";
	const SID_ETUDE_P_5 = "{ETUDE_P_5}";
	const SID_ETUDE_P_6 = "{ETUDE_P_6}";
	const SID_ETUDE_P_7 = "{ETUDE_P_7}";
	const SID_ETUDE_P_8 = "{ETUDE_P_8}";

	const SID_COMPETENCES_H2_IF = "{COMPETENCES_H2_IF}"; // titre pour la compétence informatique
	const SID_COMPETENCES_H2_GM = "{COMPETENCES_H2_GM}";
	const SID_COMPETENCES_H2_GEN = "{COMPETENCES_H2_GEN}";
	const SID_COMPETENCES_H2_TC = "{COMPETENCES_H2_TC}";
	const SID_COMPETENCES_H2_GCU = "{COMPETENCES_H2_GCU}";
	const SID_COMPETENCES_H2_SGM = "{COMPETENCES_H2_SGM}";
	const SID_COMPETENCES_H2_GE = "{COMPETENCES_H2_GE}";
	const SID_COMPETENCES_H2_GI = "{COMPETENCES_H2_GI}";
	const SID_COMPETENCES_H2_BS = "{COMPETENCES_H2_BS}";
	const SID_COMPETENCES_H2_TR = "{COMPETENCES_H2_TR}"; // titre pour la traduction
	const SID_COMPETENCES_H2_SC = "{COMPETENCES_H2_SC}"; // titre pour les sciences de l'entreprise


	const SID_COMPETENCES_P_IF = "{COMPETENCES_P_IF}"; // paragraphr pour la compétence informatique
	const SID_COMPETENCES_P_GM = "{COMPETENCES_P_GM}";
	const SID_COMPETENCES_P_GEN = "{COMPETENCES_P_GEN}";
	const SID_COMPETENCES_P_TC = "{COMPETENCES_P_TC}";
	const SID_COMPETENCES_P_GCU = "{COMPETENCES_P_GCU}";
	const SID_COMPETENCES_P_SGM = "{COMPETENCES_P_SGM}";
	const SID_COMPETENCES_P_GE = "{COMPETENCES_P_GE}";
	const SID_COMPETENCES_P_GI = "{COMPETENCES_P_GI}";
	const SID_COMPETENCES_P_BS = "{COMPETENCES_P_BS}";
	const SID_COMPETENCES_P_TR = "{COMPETENCES_P_TR}"; // paragraphe pour la traduction
	const SID_COMPETENCES_P_SC = "{COMPETENCES_P_SC}"; // paragraphe pour les SCiences de l'entreprise

	const SID_COMPETENCES_PLUS_IF = "{COMPETENCES_PLUS_IF}"; // paragraphr pour la compétence informatique
	const SID_COMPETENCES_PLUS_GM = "{COMPETENCES_PLUS_GM}";
	const SID_COMPETENCES_PLUS_GEN = "{COMPETENCES_PLUS_GEN}";
	const SID_COMPETENCES_PLUS_TC = "{COMPETENCES_PLUS_TC}";
	const SID_COMPETENCES_PLUS_GCU = "{COMPETENCES_PLUS_GCU}";
	const SID_COMPETENCES_PLUS_SGM = "{COMPETENCES_PLUS_SGM}";
	const SID_COMPETENCES_PLUS_GE = "{COMPETENCES_PLUS_GE}";
	const SID_COMPETENCES_PLUS_GI = "{COMPETENCES_PLUS_GI}";
	const SID_COMPETENCES_PLUS_BS = "{COMPETENCES_PLUS_BS}";
	const SID_COMPETENCES_PLUS_TR = "{COMPETENCES_PLUS_TR}"; // paragraphe pour la traduction
	const SID_COMPETENCES_PLUS_SC = "{COMPETENCES_PLUS_SC}"; // paragraphe pour les SCiences de l'entreprise

	const SID_COMPETENCES_P2_IF = "{COMPETENCES_P2_IF}"; // paragraphre des pts positifs pour la compétence informatique
	const SID_COMPETENCES_P2_GM = "{COMPETENCES_P2_GM}";
	const SID_COMPETENCES_P2_GEN = "{COMPETENCES_P2_GEN}";
	const SID_COMPETENCES_P2_TC = "{COMPETENCES_P2_TC}";
	const SID_COMPETENCES_P2_GCU = "{COMPETENCES_P2_GCU}";
	const SID_COMPETENCES_P2_SGM = "{COMPETENCES_P2_SGM}";
	const SID_COMPETENCES_P2_GE = "{COMPETENCES_P2_GE}";
	const SID_COMPETENCES_P2_GI = "{COMPETENCES_P2_GI}";
	const SID_COMPETENCES_P2_BS = "{COMPETENCES_P2_BS}";
	const SID_COMPETENCES_P2_TR = "{COMPETENCES_P2_TR}"; // paragraphe des pts positifs pour la traduction

	const SID_COMPETENCES_MORE = "{COMPETENCES_MORE}";

	const SID_MOUVEMENT_P = "{MOUVEMENT_P}"; //

	const SID_CONFIANCE_1 = "{CONFIANCE_1}"; // paragraphe de la première ciatation dans la page confiance
	const SID_CONFIANCE_2 = "{CONFIANCE_2}";
	const SID_CONFIANCE_3 = "{CONFIANCE_3}";
	const SID_CONFIANCE_4 = "{CONFIANCE_4}";
    const SID_CONFIANCE_QUOTE_1_HEAD = "{CONFIANCE_QUOTE_1_HEAD}";
    const SID_CONFIANCE_QUOTE_2_HEAD = "{CONFIANCE_QUOTE_2_HEAD}";
    const SID_CONFIANCE_QUOTE_3_HEAD = "{CONFIANCE_QUOTE_3_HEAD}";
	const SID_CONFIANCE_QUOTE_1 = "{CONFIANCE_QUOTE_1}"; // paragraphe de la première ciatation dans la page confiance
	const SID_CONFIANCE_QUOTE_2 = "{CONFIANCE_QUOTE_2}";
	const SID_CONFIANCE_QUOTE_3 = "{CONFIANCE_QUOTE_3}";

	const SID_PARTENAIRES_1 = "{PARTENAIRES_1}"; // paragraphe de la première ciatation dans la page confiance
	const SID_PARTENAIRES_2 = "{PARTENAIRES_2}";
	const SID_PARTENAIRES_3 = "{PARTENAIRES_3}";
	const SID_PARTENAIRES_4 = "{PARTENAIRES_4}";

    const SID_PARTENAIRES_AMARIS = "{PARTENAIRES_AMARIS}";
    const SID_PARTENAIRES_EY = "{PARTENAIRES_EY}";
    const SID_PARTENAIRES_BNP = "{PARTENAIRES_BNP}";
    const SID_PARTENAIRES_INSA = "{PARTENAIRES_INSA}";
    const SID_PARTENAIRES_CNJE = "{PARTENAIRES_CNJE}";
    const SID_PARTENAIRES_EMLYON = "{PARTENAIRES_EMLYON}";
    const SID_PARTENAIRES_JUNIORINSA = "{PARTENAIRES_JUNIORINSA}";
    const SID_PARTENAIRES_JEUNESLYON = "{PARTENAIRES_JEUNESLYON}";

    const SID_PARTENAIRES_AMARIS_TEXT = "{PARTENAIRES_AMARIS_TEXT}";
    const SID_PARTENAIRES_EY_TEXT = "{PARTENAIRES_EY_TEXT}";
    const SID_PARTENAIRES_BNP_TEXT = "{PARTENAIRES_BNP_TEXT}";
    const SID_PARTENAIRES_INSA_TEXT = "{PARTENAIRES_INSA_TEXT}";
    const SID_PARTENAIRES_CNJE_TEXT = "{PARTENAIRES_CNJE_TEXT}";
    const SID_PARTENAIRES_EMLYON_TEXT = "{PARTENAIRES_EMLYON_TEXT}";
    const SID_PARTENAIRES_JUNIORINSA_TEXT = "{PARTENAIRES_JUNIORINSA_TEXT}";
    const SID_PARTENAIRES_JEUNESLYON_TEXT = "{PARTENAIRES_JEUNESLYON_TEXT}";


	const SID_VALEURS_H1 = "{VALEURS_H1}";
	const SID_VALEURS_1 = "{VALEURS_1}";
	const SID_VALEURS_2 = "{VALEURS_2}";
	const SID_VALEURS_3 = "{VALEURS_3}";
	const SID_VALEURS_4 = "{VALEURS_4}";
	const SID_VALEURS_5 = "{VALEURS_5}";
    const SID_VALEURS_P_1 = "{VALEURS_P_1}";
    const SID_VALEURS_P_2 = "{VALEURS_P_2}";
    const SID_VALEURS_P_3 = "{VALEURS_P_3}";
    const SID_VALEURS_P_4 = "{VALEURS_P_4}";
    const SID_VALEURS_P_5 = "{VALEURS_P_5}";
	const SID_ENGAGEMENT_H1 = "{ENGAGEMENT_H1}";
	const SID_ENGAGEMENT_P_1 = "{ENGAGEMENT_P_1}";
	const SID_ENGAGEMENT_P_2 = "{ENGAGEMENT_P_2}";

	const SID_ENGAGEMENT_H2_1 = "{ENGAGEMENT_H2_1}";
	const SID_ENGAGEMENT_H2_2 = "{ENGAGEMENT_H2_2}";
	const SID_ENGAGEMENT_P_3 = "{ENGAGEMENT_P_3}";
	const SID_ENGAGEMENT_P_4 = "{ENGAGEMENT_P_4}";
	const SID_ENGAGEMENT_P_5 = "{ENGAGEMENT_P_5}";
	const SID_ENGAGEMENT_P_6 = "{ENGAGEMENT_P_6}";
	const SID_ENGAGEMENT_P_7 = "{ENGAGEMENT_P_7}";
	const SID_ENGAGEMENT_P_8 = "{ENGAGEMENT_P_8}";

	const SID_PRESIDENT_H1 = "{PRESIDENT_H1}";
	const SID_PRESIDENT_P = "{PRESIDENT_P}";
	const SID_PRESIDENT_SIGN = "{PRESIDENT_SIGN}";
	const SID_BUREAU = "{BUREAU}";
	const SID_CA = "{CA}";
	const SID_EQUIPES = "{EQUIPES}";

	const SID_DSI = "{DSI}";
	const SID_QUALITE = "{QUALITE}";
	const SID_UA = "{UA}";
	const SID_GRC = "{GRC}";
	const SID_COM = "{COM}";
	const SID_TRESOR = "{TRESOR}";

	const SID_DESC_DSI = "{DESC_DSI}";
	const SID_DESC_QUALITE = "{DESC_QUALITE}";
	const SID_DESC_UA = "{DESC_UA}";
	const SID_DESC_GRC = "{DESC_GRC}";
	const SID_DESC_COM = "{DESC_COM}";
	const SID_DESC_TRESO = "{DESC_TRESO}";

	const SID_PRES = "{PRES}";
	const SID_VP = "{VP}";
	const SID_SG = "{SG}";
	const SID_TRESO = "{TRESO}";
	const SID_VTRESO = "{VTRESO}";
	const SID_RESP_DSI = "{RESP_DSI}";
	const SID_RESP_QUALITE = "{RESP_QUALITE}";
	const SID_RESP_UA_V = "{RESP_UA_V}";
	const SID_RESP_UA_RM = "{RESP_UA_RM}";
	const SID_RESP_GRC = "{RESP_GRC}";
	const SID_RESP_COM = "{RESP_COM}";
    const SID_RESP_DC = "{RESP_DC}";

	const SID_CRP = "{CRP}";
	const SID_CRA = "{CRA}";
	const SID_CNE = "{CNE}";
	const SID_CNH = "{CNH}";
	const SID_JDP = "{JDP}";
	const SID_TEDX = "{TEDX}";

	const SID_CRP_SUB = "{CRP_SUB}";
	const SID_CRA_SUB = "{CRA_SUB}";
	const SID_CNE_SUB = "{CNE_SUB}";
	const SID_CNH_SUB = "{CNH_SUB}";
	const SID_JDP_SUB = "{JDP_SUB}";
	const SID_TEDX_SUB = "{TEDX_SUB}";

	const SID_CRP_P = "{CRP_P}";
	const SID_CRA_P = "{CRA_P}";
	const SID_CNE_P = "{CNE_P}";
	const SID_CNH_P = "{CNH_P}";
	const SID_JDP_P = "{JDP_P}";
	const SID_TEDX_P = "{TEDX_P}";

	const SID_DEVIS_LASTNAME 			= "{DEVIS_LASTNAME}";
	const SID_DEVIS_FIRSTNAME 			= "{DEVIS_FIRSTNAME}";
	const SID_DEVIS_FIRM 				= "{DEVIS_FIRM}";
	const SID_DEVIS_MAIL 				= "{DEVIS_MAIL}";
	const SID_DEVIS_PHONE 				= "{DEVIS_PHONE}";
	const SID_DEVIS_SUBJECT 			= "{DEVIS_SUBJECT}";
	const SID_DEVIS_MESSAGE 			= "{DEVIS_MESSAGE}";
	const SID_DEVIS_PLANNED_BUDGET 		= "{DEVIS_PLANNED_BUDGET}";
	const SID_DEVIS_PLANNED_DURATION 	= "{DEVIS_PLANNED_DURATION}";
	const SID_DEVIS_CAPTCHA_CODE 		= "{DEVIS_CAPTCHA_CODE}";
	const SID_DEVIS_RESET 				= "{DEVIS_RESET}";
	const SID_DEVIS_SUBMIT 				= "{DEVIS_SUBMIT}";
	const SID_DEVIS_HEADER 				= "{DEVIS_HEADER}";

	const SID_FOOTER_DESCRIPTION        = "{FOOTER_DESCRIPTION}";
	const SID_FOOTER_RESEAUX        	= "{FOOTER_RESEAUX}";
	const SID_FOOTER_CONTACT        	= "{FOOTER_CONTACT}";

	const SID_PROJECT_IDEA        	= "{PROJECT_IDEA}";

	const SID_TELECHARGER_PLAQUETTE        	= "{TELECHARGER_PLAQUETTE}";
	const SID_TELECHARGER_PORTFOLIO        	= "{TELECHARGER_PORTFOLIO}";


    const SID_REA_WEB = "{REA_WEB}";
    const SID_REA_MOBILE = "{REA_MOBILE}";
    const SID_CREA_LOGICIEL = "{CREA_LOGICIEL}";
    const SID_DOC_INFORMATIQUE = "{DOC_INFORMATIQUE}";
    const SID_CREA_BASES = "{CREA_BASES}";
    const SID_REF_WEB = "{REF_WEB}";
    const SID_AUDIT_SI = "{AUDIT_SI}";
    const SID_SECU_INFO = "{SECU_INFO}";

    const SID_ETUDE_MARCHE = "{ETUDE_MARCHE}";
    const SID_ETUDE_SATISFACTION = "{ETUDE_SATISFACTION}";
    const SID_ANALYSE_CONCU = "{ANALYSE_CONCU}";
    const SID_TRAD = "{TRAD}";
    const SID_STRATEGIE_DIGI = "{STRATEGIE_DIGI}";
    const SID_ETUDE_FAISABILITE = "{ETUDE_FAISABILITE}";

    const SID_MECANIQUE = "{MECANIQUE}";
    const SID_CONSTRUCTION = "{CONSTRUCTION}";
    const SID_SCIENCE_MATERIAUX = "{SCIENCE_MATERIAUX}";
    const SID_ENVIRONNEMENT = "{ENVIRONNEMENT}";
    const SID_ENERGIE = "{ENERGIE}";
    const SID_ELECTRIQUE = "{ELECTRIQUE}";


    const SID_DESC_TITLE = "{DESC_TITLE}";
    const SID_WHY_TITLE = "{WHY_TITLE}";
    const SID_EXEMPLE_TITLE = "{EXEMPLE_TITLE}";
    const SID_OTHER_TITLE = "{OTHER_TITLE}";


    const SID_REA_WEB_DESC = "{REA_WEB_DESC}";
    const SID_REA_MOBILE_DESC = "{REA_MOBILE_DESC}";
    const SID_CREA_LOGICIEL_DESC = "{CREA_LOGICIEL_DESC}";
    const SID_DOC_INFORMATIQUE_DESC = "{DOC_INFORMATIQUE_DESC}";
    const SID_CREA_BASES_DESC = "{CREA_BASES_DESC}";
    const SID_REF_WEB_DESC = "{REF_WEB_DESC}";
    const SID_AUDIT_SI_DESC = "{AUDIT_SI_DESC}";
    const SID_SECU_INFO_DESC = "{SECU_INFO_DESC}";

    const SID_ETUDE_MARCHE_DESC = "{ETUDE_MARCHE_DESC}";
    const SID_ETUDE_SATISFACTION_DESC = "{ETUDE_SATISFACTION_DESC}";
    const SID_ANALYSE_CONCU_DESC = "{ANALYSE_CONCU_DESC}";
    const SID_TRAD_DESC = "{TRAD_DESC}";
    const SID_STRATEGIE_DIGI_DESC = "{STRATEGIE_DIGI_DESC}";
    const SID_ETUDE_FAISABILITE_DESC = "{ETUDE_FAISABILITE_DESC}";

    const SID_MECANIQUE_DESC = "{MECANIQUE_DESC}";
    const SID_CONSTRUCTION_DESC = "{CONSTRUCTION_DESC}";
    const SID_SCIENCE_MATERIAUX_DESC = "{SCIENCE_MATERIAUX_DESC}";
    const SID_ENVIRONNEMENT_DESC = "{ENVIRONNEMENT_DESC}";
    const SID_ENERGIE_DESC = "{ENERGIE_DESC}";
    const SID_ELECTRIQUE_DESC = "{ELECTRIQUE_DESC}";


    const SID_REA_WEB_WHY = "{REA_WEB_WHY}";
    const SID_REA_MOBILE_WHY = "{REA_MOBILE_WHY}";
    const SID_CREA_LOGICIEL_WHY = "{CREA_LOGICIEL_WHY}";
    const SID_DOC_INFORMATIQUE_WHY = "{DOC_INFORMATIQUE_WHY}";
    const SID_CREA_BASES_WHY = "{CREA_BASES_WHY}";
    const SID_REF_WEB_WHY = "{REF_WEB_WHY}";
    const SID_AUDIT_SI_WHY = "{AUDIT_SI_WHY}";
    const SID_SECU_INFO_WHY = "{SECU_INFO_WHY}";

    const SID_ETUDE_MARCHE_WHY = "{ETUDE_MARCHE_WHY}";
    const SID_ETUDE_SATISFACTION_WHY = "{ETUDE_SATISFACTION_WHY}";
    const SID_ANALYSE_CONCU_WHY = "{ANALYSE_CONCU_WHY}";
    const SID_TRAD_WHY = "{TRAD_WHY}";
    const SID_STRATEGIE_DIGI_WHY = "{STRATEGIE_DIGI_WHY}";
    const SID_ETUDE_FAISABILITE_WHY = "{ETUDE_FAISABILITE_WHY}";

    const SID_MECANIQUE_WHY = "{MECANIQUE_WHY}";
    const SID_CONSTRUCTION_WHY = "{CONSTRUCTION_WHY}";
    const SID_SCIENCE_MATERIAUX_WHY = "{SCIENCE_MATERIAUX_WHY}";
    const SID_ENVIRONNEMENT_WHY = "{ENVIRONNEMENT_WHY}";
    const SID_ENERGIE_WHY = "{ENERGIE_WHY}";
    const SID_ELECTRIQUE_WHY = "{ELECTRIQUE_WHY}";



    const SID_REA_WEB_EXEMPLE = "{REA_WEB_EXEMPLE}";
    const SID_REA_MOBILE_EXEMPLE = "{REA_MOBILE_EXEMPLE}";
    const SID_CREA_LOGICIEL_EXEMPLE = "{CREA_LOGICIEL_EXEMPLE}";
    const SID_DOC_INFORMATIQUE_EXEMPLE = "{DOC_INFORMATIQUE_EXEMPLE}";
    const SID_CREA_BASES_EXEMPLE = "{CREA_BASES_EXEMPLE}";
    const SID_REF_WEB_EXEMPLE = "{REF_WEB_EXEMPLE}";
    const SID_AUDIT_SI_EXEMPLE = "{AUDIT_SI_EXEMPLE}";
    const SID_SECU_INFO_EXEMPLE = "{SECU_INFO_EXEMPLE}";

    const SID_ETUDE_MARCHE_EXEMPLE = "{ETUDE_MARCHE_EXEMPLE}";
    const SID_ETUDE_SATISFACTION_EXEMPLE = "{ETUDE_SATISFACTION_EXEMPLE}";
    const SID_ANALYSE_CONCU_EXEMPLE = "{ANALYSE_CONCU_EXEMPLE}";
    const SID_TRAD_EXEMPLE = "{TRAD_EXEMPLE}";
    const SID_STRATEGIE_DIGI_EXEMPLE = "{STRATEGIE_DIGI_EXEMPLE}";
    const SID_ETUDE_FAISABILITE_EXEMPLE = "{ETUDE_FAISABILITE_EXEMPLE}";

    const SID_MECANIQUE_EXEMPLE = "{MECANIQUE_EXEMPLE}";
    const SID_CONSTRUCTION_EXEMPLE = "{CONSTRUCTION_EXEMPLE}";
    const SID_SCIENCE_MATERIAUX_EXEMPLE = "{SCIENCE_MATERIAUX_EXEMPLE}";
    const SID_ENVIRONNEMENT_EXEMPLE = "{ENVIRONNEMENT_EXEMPLE}";
    const SID_ENERGIE_EXEMPLE = "{ENERGIE_EXEMPLE}";
    const SID_ELECTRIQUE_EXEMPLE = "{ELECTRIQUE_EXEMPLE}";

    const SID_SLOGAN = "{SLOGAN}";
    const SID_NEXT_READ = "{NEXT_READ}";
    const SID_READ_MORE = "{READ_MORE}";

    const SID_FB_BUTTON = "{FB_BUTTON}";

	// tableau des identifiants
	const SIDS = array(
	    StringIdentifier::SID_LANGUAGE,

		StringIdentifier::SID_TITLE,
        StringIdentifier::SID_TITLE_MENU,
		StringIdentifier::SID_HOME,
		StringIdentifier::SID_PRESTA,
		StringIdentifier::SID_ETUDE,
		StringIdentifier::SID_COMPETENCES,
		StringIdentifier::SID_ENGAGEMENTS,
		StringIdentifier::SID_NOUS,
		StringIdentifier::SID_EQUIPE,
		StringIdentifier::SID_PARTENAIRES,
		StringIdentifier::SID_EVENEMENTS,
		StringIdentifier::SID_CONFIANCE,
		StringIdentifier::SID_BLOG,
		StringIdentifier::SID_PLAQUETTE,
		StringIdentifier::SID_DEVIS,
        StringIdentifier::SID_CONTACT,
		StringIdentifier::SID_MOUVEMENT,
		StringIdentifier::SID_LANG,
        StringIdentifier::SID_PLAN,
        StringIdentifier::SID_NUMERIQUE,
        StringIdentifier::SID_ENTREPRISE,
        StringIdentifier::SID_INGENIERIE,
        StringIdentifier::SID_ARTICLES,


        StringIdentifier::SID_MARKETING,
        StringIdentifier::SID_MARKETING_P1,
        StringIdentifier::SID_MARKETING_SATISFACTION,
        StringIdentifier::SID_MARKETING_SATISFACTION_TEXT,
        StringIdentifier::SID_MARKETING_CONCURRENCE,
        StringIdentifier::SID_MARKETING_CONCURRENCE_TEXT,
        StringIdentifier::SID_MARKETING_TRADUCTION,
        StringIdentifier::SID_MARKETING_TRADUCTION_TEXT,
        StringIdentifier::SID_MARKETING_STRATEGIE,
        StringIdentifier::SID_MARKETING_STRATEGIE_TEXT,
        StringIdentifier::SID_MARKETING_FAISABILITE,
        StringIdentifier::SID_MARKETING_FAISABILITE_TEXT,
        StringIdentifier::SID_MARKETING_MARCHE,
        StringIdentifier::SID_MARKETING_MARCHE_TEXT,

        StringIdentifier::SID_DIGITAL,
        StringIdentifier::SID_DIGITAL_P1,
        StringIdentifier::SID_DIGITAL_APPWEB,
        StringIdentifier::SID_DIGITAL_APPWEB_TEXT,
        StringIdentifier::SID_DIGITAL_APPMOBILE,
        StringIdentifier::SID_DIGITAL_APPMOBILE_TEXT,
        StringIdentifier::SID_DIGITAL_LOGICIEL,
        StringIdentifier::SID_DIGITAL_LOGICIEL_TEXT,
        StringIdentifier::SID_DIGITAL_DOCUMENTS,
        StringIdentifier::SID_DIGITAL_DOCUMENTS_TEXT,
        StringIdentifier::SID_DIGITAL_BASEDEDONNEE,
        StringIdentifier::SID_DIGITAL_BASEDEDONNE_TEXT,
        StringIdentifier::SID_DIGITAL_REFERENCEMENT,
        StringIdentifier::SID_DIGITAL_REFERENCEMENT_TEXT,
        StringIdentifier::SID_DIGITAL_AUDIT_SI,
        StringIdentifier::SID_DIGITAL_AUDIT_SI_TEXT,
        StringIdentifier::SID_DIGITAL_SECURITE,
        StringIdentifier::SID_DIGITAL_SECURITE_TEXT,


        StringIdentifier::SID_ENGINEERING,
        StringIdentifier::SID_ENGINEERING_P1,
        StringIdentifier::SID_ENGINEERING_URBANISME,
        StringIdentifier::SID_ENGINEERING_URBANISME_TEXT,
        StringIdentifier::SID_ENGINEERING_MECANIQUE,
        StringIdentifier::SID_ENGINEERING_MECANIQUE_TEXT,
        StringIdentifier::SID_ENGINEERING_ENVIRONNEMENT,
        StringIdentifier::SID_ENGINEERING_ENVIRONNEMENT_TEXT,
        StringIdentifier::SID_ENGINEERING_ENERGIE,
        StringIdentifier::SID_ENGINEERING_ENERGIE_TEXT,
        StringIdentifier::SID_ENGINEERING_SGM,
        StringIdentifier::SID_ENGINEERING_SGM_TEXT,
        StringIdentifier::SID_ENGINEERING_GE,
        StringIdentifier::SID_ENGINEERING_GE_TEXT,


		/*HOME*/
		StringIdentifier::SID_HOME_STAT_EXPERIENCE,
		StringIdentifier::SID_HOME_STAT_ENG,
		StringIdentifier::SID_HOME_STAT_TOP,
		StringIdentifier::SID_HOME_STAT_DOMAINES,
		StringIdentifier::SID_HOME_STAT_SATISFACTION,
		StringIdentifier::SID_HOME_PALMARES_1,
		StringIdentifier::SID_HOME_PALMARES_2,
		StringIdentifier::SID_HOME_PALMARES_3,
		StringIdentifier::SID_HOME_SKILLS,
		StringIdentifier::SID_HOME_SKILLS_SUB,
		StringIdentifier::SID_HOME_SKILLS_P,
		StringIdentifier::SID_HOME_SKILLS_DET,
		StringIdentifier::SID_HOME_TRUST,
		StringIdentifier::SID_HOME_TEMOIGNAGE,
        StringIdentifier::SID_HOME_REFERENCES,
        StringIdentifier::SID_HOME_TEMOIGNAGE_SUB,
		StringIdentifier::SID_HOME_PALMARES_H1,
		StringIdentifier::SID_HOME_PALMARES_SUB,


		StringIdentifier::SID_ETUDE_H2_1,
		StringIdentifier::SID_ETUDE_H2_2,
		StringIdentifier::SID_ETUDE_H2_3,
		StringIdentifier::SID_ETUDE_H2_4,
		StringIdentifier::SID_ETUDE_H2_5,
		StringIdentifier::SID_ETUDE_H2_6,
		StringIdentifier::SID_ETUDE_H2_7,
		StringIdentifier::SID_ETUDE_H2_8,

		StringIdentifier::SID_ETUDE_H3_1,
		StringIdentifier::SID_ETUDE_H3_2,
		StringIdentifier::SID_ETUDE_H3_3,
		StringIdentifier::SID_ETUDE_H3_4,
		StringIdentifier::SID_ETUDE_H3_5,
		StringIdentifier::SID_ETUDE_H3_6,
		StringIdentifier::SID_ETUDE_H3_7,
		StringIdentifier::SID_ETUDE_H3_8,

		StringIdentifier::SID_ETUDE_STEP_1,
		StringIdentifier::SID_ETUDE_STEP_2,
		StringIdentifier::SID_ETUDE_STEP_3,
        StringIdentifier::SID_ETUDE_STEP_4,
        StringIdentifier::SID_ETUDE_STEP_5,
        StringIdentifier::SID_ETUDE_STEP_6,

		StringIdentifier::SID_ETUDE_DESCRIPTION_1,
		StringIdentifier::SID_ETUDE_DESCRIPTION_2,
		StringIdentifier::SID_ETUDE_DESCRIPTION_3,
        StringIdentifier::SID_ETUDE_DESCRIPTION_4,
        StringIdentifier::SID_ETUDE_DESCRIPTION_5,
        StringIdentifier::SID_ETUDE_DESCRIPTION_6,

		StringIdentifier::SID_ETUDE_P_1,
		StringIdentifier::SID_ETUDE_P_2,
		StringIdentifier::SID_ETUDE_P_3,
		StringIdentifier::SID_ETUDE_P_4,
		StringIdentifier::SID_ETUDE_P_5,
		StringIdentifier::SID_ETUDE_P_6,
		StringIdentifier::SID_ETUDE_P_7,
		StringIdentifier::SID_ETUDE_P_8,

		StringIdentifier::SID_COMPETENCES_H2_IF,
		StringIdentifier::SID_COMPETENCES_H2_GM,
		StringIdentifier::SID_COMPETENCES_H2_GEN,
		StringIdentifier::SID_COMPETENCES_H2_TC,
		StringIdentifier::SID_COMPETENCES_H2_GCU,
		StringIdentifier::SID_COMPETENCES_H2_SGM,
		StringIdentifier::SID_COMPETENCES_H2_GE,
		StringIdentifier::SID_COMPETENCES_H2_GI,
		StringIdentifier::SID_COMPETENCES_H2_BS,
		StringIdentifier::SID_COMPETENCES_H2_TR,
		StringIdentifier::SID_COMPETENCES_H2_SC,

		StringIdentifier::SID_COMPETENCES_PLUS_IF,
		StringIdentifier::SID_COMPETENCES_PLUS_GM,
		StringIdentifier::SID_COMPETENCES_PLUS_GEN,
		StringIdentifier::SID_COMPETENCES_PLUS_TC,
		StringIdentifier::SID_COMPETENCES_PLUS_GCU,
		StringIdentifier::SID_COMPETENCES_PLUS_SGM,
		StringIdentifier::SID_COMPETENCES_PLUS_GE,
		StringIdentifier::SID_COMPETENCES_PLUS_GI,
		StringIdentifier::SID_COMPETENCES_PLUS_BS,
		StringIdentifier::SID_COMPETENCES_PLUS_TR,
		StringIdentifier::SID_COMPETENCES_PLUS_SC,

		StringIdentifier::SID_MOUVEMENT_P,

		StringIdentifier::SID_COMPETENCES_P_IF,
		StringIdentifier::SID_COMPETENCES_P_GM,
		StringIdentifier::SID_COMPETENCES_P_GEN,
		StringIdentifier::SID_COMPETENCES_P_TC,
		StringIdentifier::SID_COMPETENCES_P_GCU,
		StringIdentifier::SID_COMPETENCES_P_SGM,
		StringIdentifier::SID_COMPETENCES_P_GE,
		StringIdentifier::SID_COMPETENCES_P_GI,
		StringIdentifier::SID_COMPETENCES_P_BS,
		StringIdentifier::SID_COMPETENCES_P_TR,
		StringIdentifier::SID_COMPETENCES_P_SC,

		StringIdentifier::SID_COMPETENCES_P2_IF,
		StringIdentifier::SID_COMPETENCES_P2_GM,
		StringIdentifier::SID_COMPETENCES_P2_GEN,
		StringIdentifier::SID_COMPETENCES_P2_TC,
		StringIdentifier::SID_COMPETENCES_P2_GCU,
		StringIdentifier::SID_COMPETENCES_P2_SGM,
		StringIdentifier::SID_COMPETENCES_P2_GE,
		StringIdentifier::SID_COMPETENCES_P2_GI,
		StringIdentifier::SID_COMPETENCES_P2_BS,
		StringIdentifier::SID_COMPETENCES_P2_TR,
		StringIdentifier::SID_COMPETENCES_MORE,

		StringIdentifier::SID_CONFIANCE_1,
		StringIdentifier::SID_CONFIANCE_2,
		StringIdentifier::SID_CONFIANCE_3,
		StringIdentifier::SID_CONFIANCE_4,
        StringIdentifier::SID_CONFIANCE_QUOTE_1_HEAD,
        StringIdentifier::SID_CONFIANCE_QUOTE_2_HEAD,
        StringIdentifier::SID_CONFIANCE_QUOTE_3_HEAD,
        StringIdentifier::SID_CONFIANCE_QUOTE_1,
		StringIdentifier::SID_CONFIANCE_QUOTE_2,
		StringIdentifier::SID_CONFIANCE_QUOTE_3,

		StringIdentifier::SID_VALEURS_H1,
		StringIdentifier::SID_VALEURS_1,
		StringIdentifier::SID_VALEURS_2,
		StringIdentifier::SID_VALEURS_3,
		StringIdentifier::SID_VALEURS_4,
		StringIdentifier::SID_VALEURS_5,
        StringIdentifier::SID_VALEURS_P_1,
        StringIdentifier::SID_VALEURS_P_2,
        StringIdentifier::SID_VALEURS_P_3,
        StringIdentifier::SID_VALEURS_P_4,
        StringIdentifier::SID_VALEURS_P_5,
		StringIdentifier::SID_ENGAGEMENT_H1,
		StringIdentifier::SID_ENGAGEMENT_P_1,
		StringIdentifier::SID_ENGAGEMENT_P_2,
		StringIdentifier::SID_ENGAGEMENT_H2_1,
		StringIdentifier::SID_ENGAGEMENT_P_3,
		StringIdentifier::SID_ENGAGEMENT_P_4,
		StringIdentifier::SID_ENGAGEMENT_P_5,
		StringIdentifier::SID_ENGAGEMENT_H2_2,
		StringIdentifier::SID_ENGAGEMENT_P_6,
		StringIdentifier::SID_ENGAGEMENT_P_7,
		StringIdentifier::SID_ENGAGEMENT_P_8,

		StringIdentifier::SID_PARTENAIRES_1,
		StringIdentifier::SID_PARTENAIRES_2,
		StringIdentifier::SID_PARTENAIRES_3,
		StringIdentifier::SID_PARTENAIRES_4,

		StringIdentifier::SID_PARTENAIRES_AMARIS,
		StringIdentifier::SID_PARTENAIRES_EY,
        StringIdentifier::SID_PARTENAIRES_BNP,
        StringIdentifier::SID_PARTENAIRES_INSA,
        StringIdentifier::SID_PARTENAIRES_CNJE,
        StringIdentifier::SID_PARTENAIRES_EMLYON,
        StringIdentifier::SID_PARTENAIRES_JUNIORINSA,
        StringIdentifier::SID_PARTENAIRES_JEUNESLYON,


        StringIdentifier::SID_PARTENAIRES_AMARIS_TEXT,
        StringIdentifier::SID_PARTENAIRES_EY_TEXT,
        StringIdentifier::SID_PARTENAIRES_BNP_TEXT,
        StringIdentifier::SID_PARTENAIRES_INSA_TEXT,
        StringIdentifier::SID_PARTENAIRES_CNJE_TEXT,
        StringIdentifier::SID_PARTENAIRES_EMLYON_TEXT,
        StringIdentifier::SID_PARTENAIRES_JUNIORINSA_TEXT,
        StringIdentifier::SID_PARTENAIRES_JEUNESLYON_TEXT,


		StringIdentifier::SID_PRESIDENT_H1,
		StringIdentifier::SID_PRESIDENT_P,
		StringIdentifier::SID_PRESIDENT_SIGN,
		StringIdentifier::SID_BUREAU,
		StringIdentifier::SID_CA,
		StringIdentifier::SID_EQUIPES,

		StringIdentifier::SID_DSI,
		StringIdentifier::SID_QUALITE,
		StringIdentifier::SID_UA,
		StringIdentifier::SID_GRC,
		StringIdentifier::SID_COM,
		StringIdentifier::SID_TRESOR,

		StringIdentifier::SID_DESC_DSI,
		StringIdentifier::SID_DESC_QUALITE,
		StringIdentifier::SID_DESC_UA,
		StringIdentifier::SID_DESC_GRC,
		StringIdentifier::SID_DESC_COM,
		StringIdentifier::SID_DESC_TRESO,

		StringIdentifier::SID_PRES,
		StringIdentifier::SID_VP,
		StringIdentifier::SID_SG,
        StringIdentifier::SID_RESP_DC,
		StringIdentifier::SID_TRESO,
		StringIdentifier::SID_VTRESO,
		StringIdentifier::SID_RESP_DSI,
		StringIdentifier::SID_RESP_QUALITE,
		StringIdentifier::SID_RESP_UA_V,
		StringIdentifier::SID_RESP_UA_RM,
		StringIdentifier::SID_RESP_GRC,
		StringIdentifier::SID_RESP_COM,

		StringIdentifier::SID_CRP,
		StringIdentifier::SID_CRA,
		StringIdentifier::SID_CNH,
		StringIdentifier::SID_CNE,
		StringIdentifier::SID_JDP,
		StringIdentifier::SID_TEDX,

		StringIdentifier::SID_CRP_SUB,
		StringIdentifier::SID_CRA_SUB,
		StringIdentifier::SID_CNH_SUB,
		StringIdentifier::SID_CNE_SUB,
		StringIdentifier::SID_JDP_SUB,
		StringIdentifier::SID_TEDX_SUB,

		StringIdentifier::SID_CRP_P,
		StringIdentifier::SID_CRA_P,
		StringIdentifier::SID_CNH_P,
		StringIdentifier::SID_CNE_P,
		StringIdentifier::SID_JDP_P,
		StringIdentifier::SID_TEDX_P,

		StringIdentifier::SID_DEVIS_LASTNAME 	,
		StringIdentifier::SID_DEVIS_FIRSTNAME 	,
		StringIdentifier::SID_DEVIS_FIRM 		,
		StringIdentifier::SID_DEVIS_MAIL 		,
		StringIdentifier::SID_DEVIS_PHONE 		,
		StringIdentifier::SID_DEVIS_SUBJECT 	,
		StringIdentifier::SID_DEVIS_MESSAGE 	,
		StringIdentifier::SID_DEVIS_PLANNED_BUDGET,
		StringIdentifier::SID_DEVIS_PLANNED_DURATION,
		StringIdentifier::SID_DEVIS_CAPTCHA_CODE,
		StringIdentifier::SID_DEVIS_RESET,
		StringIdentifier::SID_DEVIS_SUBMIT,
		StringIdentifier::SID_DEVIS_HEADER,

		StringIdentifier::SID_FOOTER_DESCRIPTION,
		StringIdentifier::SID_FOOTER_RESEAUX,
		StringIdentifier::SID_FOOTER_CONTACT,

		StringIdentifier::SID_PROJECT_IDEA,

		StringIdentifier::SID_TELECHARGER_PLAQUETTE,
		StringIdentifier::SID_TELECHARGER_PORTFOLIO,



        StringIdentifier::SID_REA_WEB,
        StringIdentifier::SID_REA_MOBILE,
        StringIdentifier::SID_CREA_LOGICIEL,
        StringIdentifier::SID_DOC_INFORMATIQUE,
        StringIdentifier::SID_CREA_BASES,
        StringIdentifier::SID_REF_WEB,
        StringIdentifier::SID_AUDIT_SI,
        StringIdentifier::SID_SECU_INFO,

        StringIdentifier::SID_ETUDE_MARCHE,
        StringIdentifier::SID_ETUDE_SATISFACTION,
        StringIdentifier::SID_ANALYSE_CONCU,
        StringIdentifier::SID_TRAD,
        StringIdentifier::SID_STRATEGIE_DIGI,
        StringIdentifier::SID_ETUDE_FAISABILITE,

        StringIdentifier::SID_MECANIQUE,
        StringIdentifier::SID_CONSTRUCTION,
        StringIdentifier::SID_SCIENCE_MATERIAUX,
        StringIdentifier::SID_ENVIRONNEMENT,
        StringIdentifier::SID_ENERGIE,
        StringIdentifier::SID_ELECTRIQUE,


        StringIdentifier::SID_DESC_TITLE,
        StringIdentifier::SID_WHY_TITLE,
        StringIdentifier::SID_EXEMPLE_TITLE,
        StringIdentifier::SID_OTHER_TITLE,

        StringIdentifier::SID_REA_WEB_DESC,
        StringIdentifier::SID_REA_MOBILE_DESC,
        StringIdentifier::SID_CREA_LOGICIEL_DESC,
        StringIdentifier::SID_DOC_INFORMATIQUE_DESC,
        StringIdentifier::SID_CREA_BASES_DESC,
        StringIdentifier::SID_REF_WEB_DESC,
        StringIdentifier::SID_AUDIT_SI_DESC,
        StringIdentifier::SID_SECU_INFO_DESC,

        StringIdentifier::SID_ETUDE_MARCHE_DESC,
        StringIdentifier::SID_ETUDE_SATISFACTION_DESC,
        StringIdentifier::SID_ANALYSE_CONCU_DESC,
        StringIdentifier::SID_TRAD_DESC,
        StringIdentifier::SID_STRATEGIE_DIGI_DESC,
        StringIdentifier::SID_ETUDE_FAISABILITE_DESC,

        StringIdentifier::SID_MECANIQUE_DESC,
        StringIdentifier::SID_CONSTRUCTION_DESC,
        StringIdentifier::SID_SCIENCE_MATERIAUX_DESC,
        StringIdentifier::SID_ENVIRONNEMENT_DESC,
        StringIdentifier::SID_ENERGIE_DESC,
        StringIdentifier::SID_ELECTRIQUE_DESC,

        StringIdentifier::SID_REA_WEB_WHY,
        StringIdentifier::SID_REA_MOBILE_WHY,
        StringIdentifier::SID_CREA_LOGICIEL_WHY,
        StringIdentifier::SID_DOC_INFORMATIQUE_WHY,
        StringIdentifier::SID_CREA_BASES_WHY,
        StringIdentifier::SID_REF_WEB_WHY,
        StringIdentifier::SID_AUDIT_SI_WHY,
        StringIdentifier::SID_SECU_INFO_WHY,

        StringIdentifier::SID_ETUDE_MARCHE_WHY,
        StringIdentifier::SID_ETUDE_SATISFACTION_WHY,
        StringIdentifier::SID_ANALYSE_CONCU_WHY,
        StringIdentifier::SID_TRAD_WHY,
        StringIdentifier::SID_STRATEGIE_DIGI_WHY,
        StringIdentifier::SID_ETUDE_FAISABILITE_WHY,

        StringIdentifier::SID_MECANIQUE_WHY,
        StringIdentifier::SID_CONSTRUCTION_WHY,
        StringIdentifier::SID_SCIENCE_MATERIAUX_WHY,
        StringIdentifier::SID_ENVIRONNEMENT_WHY,
        StringIdentifier::SID_ENERGIE_WHY,
        StringIdentifier::SID_ELECTRIQUE_WHY,

        StringIdentifier::SID_REA_WEB_EXEMPLE,
        StringIdentifier::SID_REA_MOBILE_EXEMPLE,
        StringIdentifier::SID_CREA_LOGICIEL_EXEMPLE,
        StringIdentifier::SID_DOC_INFORMATIQUE_EXEMPLE,
        StringIdentifier::SID_CREA_BASES_EXEMPLE,
        StringIdentifier::SID_REF_WEB_EXEMPLE,
        StringIdentifier::SID_AUDIT_SI_EXEMPLE,
        StringIdentifier::SID_SECU_INFO_EXEMPLE,

        StringIdentifier::SID_ETUDE_MARCHE_EXEMPLE,
        StringIdentifier::SID_ETUDE_SATISFACTION_EXEMPLE,
        StringIdentifier::SID_ANALYSE_CONCU_EXEMPLE,
        StringIdentifier::SID_TRAD_EXEMPLE,
        StringIdentifier::SID_STRATEGIE_DIGI_EXEMPLE,
        StringIdentifier::SID_ETUDE_FAISABILITE_EXEMPLE,

        StringIdentifier::SID_MECANIQUE_EXEMPLE,
        StringIdentifier::SID_CONSTRUCTION_EXEMPLE,
        StringIdentifier::SID_SCIENCE_MATERIAUX_EXEMPLE,
        StringIdentifier::SID_ENVIRONNEMENT_EXEMPLE,
        StringIdentifier::SID_ENERGIE_EXEMPLE,
        StringIdentifier::SID_ELECTRIQUE_EXEMPLE,

        StringIdentifier::SID_SLOGAN,
        StringIdentifier::SID_NEXT_READ,
        StringIdentifier::SID_READ_MORE,

        StringIdentifier::SID_FB_BUTTON

		);

	const LINK_DEVIS = "{LINK_DEVIS}"; // titre du site
	const LINK_HOME = "{LINK_HOME}"; // titre du site
	const LINK_SKILLS ="{LINK_SKILLS}"; // titre du menu nos prestations
	const LINK_STUDY ="{LINK_STUDY}"; // lien de pres. du déroulement d'une étude
	const LINK_EVENTS ="{LINK_EVENTS}"; // lien vers la pres. de nos domaines de compétences
	const LINK_ENGAGEMENT ="{LINK_ENGAGEMENT}"; // lien vers la pres. de nos engagemnets
	const LINK_PARTNERS ="{LINK_PARTNERS}"; // titre du menu nous découvrir
	const LINK_TEAM ="{LINK_TEAM}"; // lien vers la pres. de l'équipe
	const LINK_TRUST ="{LINK_TRUST}"; // lien vers la pres. de nos partenaires
	const LINK_BLOG ="{LINK_BLOG}"; // lien vers la revue de press
	const LINK_NETWORK = "{LINK_NETWORK}";
	const LINK_MOUVEMENT ="{LINK_MOUVEMENT}"; // lien vers la pres. du mouvement
    const LINK_PLAN = "{LINK_PLAN}";
    const LINK_ARTICLES = "{LINK_ARTICLES}";
    const LINK_ARTICLE_1 = "{LINK_ARTICLE_1}";

    const LINK_INGENIERIE = "{LINK_INGENIERIE}";
    const LINK_NUMERIQUE = "{LINK_NUMERIQUE}";
    const LINK_ENTREPRISE = "{LINK_ENTREPRISE}";
    const LINK_REA_WEB = "{LINK_REA_WEB}";
    const LINK_REA_MOBILE = "{LINK_REA_MOBILE}";
    const LINK_CREA_LOGICIEL = "{LINK_CREA_LOGICIEL}";
    const LINK_DOC_INFORMATIQUE = "{LINK_DOC_INFORMATIQUE}";
    const LINK_CREA_BASES = "{LINK_CREA_BASES}";
    const LINK_REF_WEB = "{LINK_REF_WEB}";
    const LINK_AUDIT_SI = "{LINK_AUDIT_SI}";
    const LINK_SECU_INFO = "{LINK_SECU_INFO}";

    const LINK_ETUDE_MARCHE = "{LINK_ETUDE_MARCHE}";
    const LINK_ETUDE_SATISFACTION = "{LINK_ETUDE_SATISFACTION}";
    const LINK_ANALYSE_CONCU = "{LINK_ANALYSE_CONCU}";
    const LINK_TRAD = "{LINK_TRAD}";
    const LINK_STRATEGIE_DIGI = "{LINK_STRATEGIE_DIGI}";
    const LINK_ETUDE_FAISABILITE = "{LINK_ETUDE_FAISABILITE}";

    const LINK_MECANIQUE = "{LINK_MECANIQUE}";
    const LINK_CONSTRUCTION = "{LINK_CONSTRUCTION}";
    const LINK_SCIENCE_MATERIAUX = "{LINK_SCIENCE_MATERIAUX}";
    const LINK_ENVIRONNEMENT = "{LINK_ENVIRONNEMENT}";
    const LINK_ENERGIE = "{LINK_ENERGIE}";
    const LINK_ELECTRIQUE = "{LINK_ELECTRIQUE}";

	const LINKS = array(
		StringIdentifier::LINK_DEVIS,
		StringIdentifier::LINK_HOME,
		StringIdentifier::LINK_SKILLS,
		StringIdentifier::LINK_STUDY,
		StringIdentifier::LINK_EVENTS,
		StringIdentifier::LINK_ENGAGEMENT,
		StringIdentifier::LINK_PARTNERS,
		StringIdentifier::LINK_TEAM,
		StringIdentifier::LINK_TRUST,
		StringIdentifier::LINK_BLOG,
		StringIdentifier::LINK_NETWORK,
		StringIdentifier::LINK_MOUVEMENT,
        StringIdentifier::LINK_PLAN,
        StringIdentifier::LINK_ARTICLES,
        StringIdentifier::LINK_ARTICLE_1,

        StringIdentifier::LINK_INGENIERIE,
        StringIdentifier::LINK_NUMERIQUE,
        StringIdentifier::LINK_ENTREPRISE,
        StringIdentifier::LINK_REA_WEB,
        StringIdentifier::LINK_REA_MOBILE,
        StringIdentifier::LINK_CREA_LOGICIEL,
        StringIdentifier::LINK_DOC_INFORMATIQUE,
        StringIdentifier::LINK_CREA_BASES,
        StringIdentifier::LINK_REF_WEB,
        StringIdentifier::LINK_AUDIT_SI,
        StringIdentifier::LINK_SECU_INFO,

        StringIdentifier::LINK_ETUDE_MARCHE,
        StringIdentifier::LINK_ETUDE_SATISFACTION,
        StringIdentifier::LINK_ANALYSE_CONCU,
        StringIdentifier::LINK_TRAD,
        StringIdentifier::LINK_STRATEGIE_DIGI,
        StringIdentifier::LINK_ETUDE_FAISABILITE,

        StringIdentifier::LINK_MECANIQUE,
        StringIdentifier::LINK_CONSTRUCTION,
        StringIdentifier::LINK_SCIENCE_MATERIAUX,
        StringIdentifier::LINK_ENVIRONNEMENT,
        StringIdentifier::LINK_ENERGIE,
        StringIdentifier::LINK_ELECTRIQUE
		);
}

// ---------------------------------------------------------------------
// Classe dictionnaire
// ---------------------------------------------------------------------

class Dictionary implements \JsonSerializable {
	// -- consts
	// -- attributes
	private $lang = null;
	private $dict = null;
	// -- functions
	public function __construct($lang) {
		$this->lang = $lang;
		$this->dict = array();
	}
	/**
	 *	@brief
	 */
	public function jsonSerialize() {
		return [
			"lang" => $this->lang,
			"dict" => $this->mk_json_dict(),
		];
	}
	/**
	 *	@brief
	 */
	public function translate($stringId, $translation) {
		$this->dict[$stringId] = $translation; 
	}
	/**
	 *	@brief
	 */
	public function GetLang() {
		return $this->lang;
	}

	public function GetDict() {
		return $this->dict;
	}

	private function mk_json_dict() {
		$dict = array();
		foreach ($this->dict as $identifier => $translation) {
			array_push($dict, array($identifier, $translation));
		}
		return $dict; 
	}
}

// ---------------------------------------------------------------------
// Classe Traducteur
// ---------------------------------------------------------------------

class Translator  {
	// -- consts
	const DEFAULT_LANG = "fr";
	// -- attributes
	private $dictionaries = null;
	private $links = null;
	// -- functions
	public function __construct() {
		// nothing to do here
	}
	public function addDictionary($dict) {
		$this->dictionaries[$dict->GetLang()] = $dict;
	}

	public function setLinks($links) {
		$this->links = $links;
	}
	// public function dict($lang) {
	// 	if(!array_key_exists($lang, $this->dictionaries)) {
	// 		$lang = Translator::DEFAULT_LANG;
	// 	}
	// 	return $this->dictionaries[$lang];
	// }
	/**
	 *	@brief
	 */
	public function translate($lang, $content) {
		// on vérifie que le dictionnaire existe, si celui-ci n'existe pas on utilise le français par défaut
		if(!array_key_exists($lang, $this->dictionaries)) {
			$lang = Translator::DEFAULT_LANG;
		}
		foreach (StringIdentifier::SIDS as $identifier) {
			if(array_key_exists($identifier, $this->dictionaries[$lang]->GetDict())) {
				$content = str_replace($identifier, $this->dictionaries[$lang]->GetDict()[$identifier], $content);
			} else if(array_key_exists($identifier, $this->dictionaries[Translator::DEFAULT_LANG]->GetDict())) {
				$content = str_replace($identifier, $this->dictionaries[Translator::DEFAULT_LANG]->GetDict()[$identifier], $content);
			} else {
				$content = str_replace($identifier, "-!- traduction manquante(id=".$identifier.") -!-", $content);
			}
		}

		foreach (StringIdentifier::LINKS as $identifier) {
			if(isset($this->links)) {
				$content = str_replace($identifier, $this->links->GetDict()[$identifier]."&lang=".$lang, $content);
			} else {
				$content = str_replace($identifier, "-!- traduction manquante(id=".$identifier.") -!-", $content);
			}
		}
		// on retourne le contenu traduit
		return $content;
	}
}
