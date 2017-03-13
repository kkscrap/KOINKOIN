<?php
class ScrapController extends Zend_Controller_Action {
	public function init() {
	}
	public function indexAction() {
	}
	public function maquette1Action() {
		
		$_SESSION ['koinkoin'] ['maquettes'] ['1'] ['config'] ['titre'] = "Maquette qui se charge de récupérer le code source de 1 page web, pour lui appliquer 1 filtre xpath";
		$_SESSION ['koinkoin'] ['maquettes'] ['1'] ['config'] ['description'] [0] = "le titre de la premiere annonce est derriere la balise <h2>";
		$_SESSION ['koinkoin'] ['maquettes'] ['1'] ['config'] ['description'] [1] = "le filtre ne recupere que le titre de la premiere annonce de la liste";
		$_SESSION ['koinkoin'] ['maquettes'] ['1'] ['config'] ['url_de_depart'] [0] = "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&parrot=0";
		$_SESSION ['koinkoin'] ['maquettes'] ['1'] ['config'] ['filtre_xpath'] [0] ["pattern"] = ".//*[@id='all']/ul[3]/li[1]/h2";
		$_SESSION ['koinkoin'] ['maquettes'] ['1'] ['config'] ['filtre_xpath'] [0] ["description"] = "Ce filtre permet de récupérer le titre de la 1ere petite annonce qui se présente dans la liste";
		$_SESSION ['koinkoin'] ['maquettes'] ['1'] ['config'] ['filtre_xpath'] [0] ["urls"] [0] = "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&parrot=0";
		$_SESSION ['koinkoin'] ['maquettes'] ['1'] ['config'] ['filtre_xpath'] [0] ["tidy"] = "1";
		
		// Recuperation du code source html de la cible
		$_SESSION ['koinkoin'] ['maquettes'] [1] ['resultats'] ['code_html_tidy'] = $_SESSION ['koinkoin'] ['my_fonctions'] ['curl']->get_curl_1_page_ssl ( $_SESSION ['koinkoin'] ['maquettes'] ['1'] ['config'] ['url_de_depart'] [0] );
		
		// Execution du filtre xpath sur le code source html
		$_SESSION ['koinkoin'] ['maquettes'] [1] ['resultats'] ['match_xpath'] = $_SESSION ['koinkoin'] ['my_fonctions'] ['xpath']->get_xpath_1_filtre_sur_1_html ( $_SESSION ['koinkoin'] ['maquettes'] ['1'] ['resultats'] ['code_html_tidy'], $_SESSION ['koinkoin'] ['maquettes'] ['1'] ['config'] ['filtre_xpath'] [0] ["pattern"], $_SESSION ['koinkoin'] ['maquettes'] ['1'] ['config'] ['filtre_xpath'] [0] ["tidy"] );
		
		// END
		$_SESSION ['koinkoin'] ['my_fonctions'] ['dump']->dump ( $_SESSION ['koinkoin'] );
	}
}
?>