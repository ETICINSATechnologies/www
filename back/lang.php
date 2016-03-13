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

