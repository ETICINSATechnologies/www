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
	// identifiants
	const SID_TITLE = "{TITLE}"; // titre du site
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
	const SID_PLAQUETTE ="{PLAQUETTE}"; // lien vers la plaquette
	const SID_DEVIS ="{DEVIS}"; // lien vers le formulaire

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

	const SID_ETUDE_P_1 = "{ETUDE_P_1}"; // premier paragraphe de la page  déroulement d'une étude
	const SID_ETUDE_P_2 = "{ETUDE_P_2}";
	const SID_ETUDE_P_3 = "{ETUDE_P_3}";
	const SID_ETUDE_P_4 = "{ETUDE_P_4}";
	const SID_ETUDE_P_5 = "{ETUDE_P_5}";
	const SID_ETUDE_P_6 = "{ETUDE_P_6}";
	const SID_ETUDE_P_7 = "{ETUDE_P_7}";
	const SID_ETUDE_P_8 = "{ETUDE_P_8}";
	
	// tableau des identifiants
	const SIDS = array(
		StringIdentifier::SID_TITLE,
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
		StringIdentifier::SID_PLAQUETTE,
		StringIdentifier::SID_DEVIS,
		
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

		StringIdentifier::SID_ETUDE_P_1,
		StringIdentifier::SID_ETUDE_P_2,
		StringIdentifier::SID_ETUDE_P_3,
		StringIdentifier::SID_ETUDE_P_4,
		StringIdentifier::SID_ETUDE_P_5,
		StringIdentifier::SID_ETUDE_P_6,
		StringIdentifier::SID_ETUDE_P_7,
		StringIdentifier::SID_ETUDE_P_8,
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
	
	const LINKS = array(
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
			"dict" => $this->dict,
		];
	}
	/**
	 *	@brief
	 */
	public function translate($stringId, $translation) {
		$this->dict[$stringId] = $translation; // manquant ?
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

	public function addLinks($link) {
		$this->links[$link->GetLang()] = $link;
	}
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
			if(array_key_exists($identifier, $this->links[$lang]->GetDict())) {
				$content = str_replace($identifier, $this->links[$lang]->GetDict()[$identifier], $content);
			} else if(array_key_exists($identifier, $this->links[Translator::DEFAULT_LANG]->GetDict())) {
				$content = str_replace($identifier, $this->links[Translator::DEFAULT_LANG]->GetDict()[$identifier], $content); 
			} else {	
				$content = str_replace($identifier, "-!- traduction manquante(id=".$identifier.") -!-", $content);
			}
		}
		// on retourne le contenu traduit
		return $content;
	}
}

