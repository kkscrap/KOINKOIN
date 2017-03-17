<?php
class MaquetteController extends Zend_Controller_Action {
	public function init() {
	}
	public function indexAction() {
	}
	public function maquette1Action() {
		$_SESSION ['koinkoin'] ['maquette'] ['maquette_1'] ['titre'] = "Maquette qui se charge de récupérer le code source de 1 page web, pour lui appliquer 1 filtre xpath";
		$_SESSION ['koinkoin'] ['maquette'] ['maquette_1'] ['url_de_depart'] [0] = "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&parrot=0";
		$_SESSION ['koinkoin'] ['maquette'] ['filtre'] ['xpath'] ['texte_xpath'] [0] ["description"] [0] = "Ce filtre permet de récupérer le titre de la 1ere petite annonce qui se présente dans la liste";
		$_SESSION ['koinkoin'] ['maquette'] ['filtre'] ['xpath'] ['texte_xpath'] [0] ["description"] [1] = "le titre de la premiere annonce est derriere la balise <h2>";
		$_SESSION ['koinkoin'] ['maquette'] ['filtre'] ['xpath'] ['texte_xpath'] [0] ["description"] [2] = "le filtre ne recupere que le titre de la premiere annonce de la liste";
		$_SESSION ['koinkoin'] ['maquette'] ['filtre'] ['xpath'] ['texte_xpath'] [0] ["pattern"] = ".//*[@id='all']/ul[3]/li[1]/h2";
		$_SESSION ['koinkoin'] ['maquette'] ['filtre'] ['xpath'] ['texte_xpath'] [0] ["urls"] [0] = "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&parrot=0";
		$_SESSION ['koinkoin'] ['maquette'] ['filtre'] ['xpath'] ['texte_xpath'] [0] ["tidy"] = "1";
		$_SESSION ['koinkoin'] ['library'] ['koinkoin'] ['dump'] ['dd_dump']->dump_dd_dump ( $_SESSION  );
		}
}
?>