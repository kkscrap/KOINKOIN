<?php
class ScrapController extends Zend_Controller_Action {
	public function init() {
	}
	public function indexAction() {
	}
	public function maquetteAction() {
		
		// Recuperation du code source html de la cible
		$_SESSION ['koinkoin'] ['maquettes'] [1] ['resultats'] ['code_html_tidy']=null;
		$_SESSION ['koinkoin'] ['maquettes'] [1] ['resultats'] ['code_html_tidy'] = $_SESSION ['koinkoin'] ['library'] ['koinkoin'] ['curl'] ['koinkoin_curl']->get_curl_1_page_ssl ( $_SESSION ['koinkoin'] ['maquettes'] ['1'] ['config'] ['url_de_depart'] [0] );
		
		// Execution du filtre xpath sur le code source html
		$_SESSION ['koinkoin'] ['maquettes'] [1] ['resultats'] ['match_xpath'] = $_SESSION ['koinkoin'] ['library'] ['koinkoin'] ['xpath'] ['koinkoin_xpath']->get_xpath_1_filtre_sur_1_html ( $_SESSION ['koinkoin'] ['maquettes'] ['1'] ['resultats'] ['code_html_tidy'], $_SESSION ['koinkoin'] ['maquettes'] ['1'] ['config'] ['filtre_xpath'] [0] ["pattern"], $_SESSION ['koinkoin'] ['maquettes'] ['1'] ['config'] ['filtre_xpath'] [0] ["tidy"] );
		
		// END
	}
	public function screen1Action() {
	}
	public function ihm1Action() {
	}
}
?>