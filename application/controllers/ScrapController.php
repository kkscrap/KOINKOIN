<?php
class ScrapController extends Zend_Controller_Action {
	private function init() {
		ini_set ( 'display_errors', 'on' );
		error_reporting ( E_ALL );
		require '../library/My_fonctions/Curl_fonctions.php';
	}
	private function indexAction() {
		$this->scrap_page ();
	}
	private function scrap_page() {
		$html = curl_download ( "http://www.metronews.fr/high-tech/comment-eteindre-automatiquement-votre-ecran-lors-du-verrouillage-de-l-ordinateur/mpcy!v82QpIutJlDRU/" );
		echo $html;
	}
}

?>