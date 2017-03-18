<?php
class MaquettesController extends Zend_Controller_Action {
	public function init() {
	}
	public function indexAction() {
	}
	public function maquette1Action() {
		$_SESSION ['koinkoin314'] ['configuration_maquettes'] [0] ['code_id'] = "M0";
		$_SESSION ['koinkoin314'] ['configuration_maquettes'] [0] ['titre'] = "Maquette qui se charge de récupérer le code source de 1 page web https de leboncoin, pour lui appliquer 1 filtre xpath";
		$_SESSION ['koinkoin314'] ['configuration_maquettes'] [0] ['objectif'] = "Scraper une URL_HTTPS avec un filtre XPATH pour obtenir un TEXTE";
		$_SESSION ['koinkoin314'] ['configuration_maquettes'] [0] ['description'] [0] = "Cette maquette est un exemple concret de l'utilisation d'un filtre XPATH sur une page web (unique)";
		$_SESSION ['koinkoin314'] ['configuration_maquettes'] [0] ['description'] [1] = "Cette maquette scrape une page du site de petites annonces de LEBONCOIN, pour extraire le premier element de la liste principale (qui contient les titres des peites annonces";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ["code_id"] = "F0";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ["date_creation"] = "20170317";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ["nbre_elements_attendus"] = "1";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ["description"] [0] = "Le filtre permet de récupérer le titre de la 1ere petite annonce qui se présente dans la liste";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ["description"] [1] = 'Le titre de la premiere annonce est derriere la balise \<h2\>';
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ["description"] [2] = "Le filtre ne recupere que le titre de la premiere annonce de la liste";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ["pattern"] = ".//*[@id='all']/ul[3]/li[1]/h2";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ["type"] = "texte";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ['urls_de_depart'] [0] ['url'] [0] = "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&parrot=0";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ['urls_de_depart'] [0] ['owner'] = "leboncoin";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ['urls_de_depart'] [0] ['description'] = "Page au hasard de leboncoin pour le premier test xpath";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ['urls_de_depart'] [0] ['tag'] = "test, maquette1";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ["path_fonctionnels"] [0] = "https://www.leboncoin.fr/telephonie/offres/ile_de_france/";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ["path_fonctionnels"] [1] = "https://www.leboncoin.fr/telephonie/offres/";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ["path_fonctionnels"] [2] = "https://www.leboncoin.fr/telephonie/";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ["tidy"] = "1";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ['profondeur_maxi_autorisee'] = "0";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ['url_de_deplacement_suivant'] ['actif'] = "0";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ['url_de_deplacement_suivant'] ['filtres_xpath'] = "0";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ['url_de_deplacement_suivant'] ['filtre'] ['regex'] = "0";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ['url_de_deplacement_precedent'] ['actif'] = "0";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ['url_de_deplacement_precedent'] ['filtres_xpath'] = "0";
		$_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ['url_de_deplacement_precedent'] ['filtre'] ['regex'] = "0";
		
		// Recuperation du code source html
		$_SESSION ['koinkoin314'] ['resultats_filtres'] [0] ['httrack_html_tidy'] = null;
		$_SESSION ['koinkoin314'] ['resultats_filtres'] [0] ['httrack_html_tidy'] = $_SESSION ['koinkoin314'] ['library_curl'] ['koinkoin_curl']->get_curl_1_page_ssl ( $_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ['urls_de_depart'] [0] ['url'] [0] );
		
		// Execution du filtre xpath
		$_SESSION ['koinkoin314'] ['resultats_filtres'] [0] ['match_xpath'] = $_SESSION ['koinkoin314'] ['library_xpath'] ['koinkoin_xpath']->get_xpath_1_filtre_sur_1_html ( $_SESSION ['koinkoin314'] ['resultats_filtres'] [0] ['httrack_html_tidy'], $_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ["pattern"], $_SESSION ['koinkoin314'] ['configuration_filtres'] [0] ["tidy"] );
		
		$_SESSION ['koinkoin314'] ['test'] ['password'] = 'tintin <== A CACHER';
	}
}
?>