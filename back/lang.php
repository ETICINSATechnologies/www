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
	const SID_TITLE = "TITLE"; // titre du site
	const SID_HOME = "HOME"; // titre du site
	// tableau des identifiants
	const SIDS = array(
		StringIdentifier::SID_TITLE,
		StringIdentifier::SID_HOME
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
		$dict[$stringId] = $translation; // manquant ?
	}
	/**
	 *	@brief
	 */
	public function GetLang() { 
		return $this->lang; 
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
	// -- functions
	public function __construct() {
		// nothing to do here
	}
	public function addDictionary($dict) {
		$dictionaries[$dict->GetLang()] = $dict;
	}
	/**
	 *	@brief
	 */
	public function translate($lang, $content) {
		// on vérifie que le dictionnaire existe, si celui-ci n'existe pas on utilise le français par défaut
		if(!array_key_exists($lang, $dictionaries)) {
			$lang = Translator::DEFAULT_LANG;
		}
		foreach (StringIdentifier::SIDS as $identifier) {
			if(array_key_exists($identifier, $dictionaries[$lang])) {
				$content = str_replace($identifier, $dictionaries[$lang][$identifier], $content);
			} else if(array_key_exists($identifier, $dictionaries[Translator::DEFAULT_LANG])) {
				$content = str_replace($identifier, $dictionaries[Translator::DEFAULT_LANG][$identifier], $content);
			} else {
				$content = str_replace($identifier, "-!- traduction manquante(id=".$identifier.") -!-", $content);
			}
		}
		// on retourne le contenu traduit
		return $content;
	}
}

