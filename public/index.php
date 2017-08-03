<?php

/*
 * _ __ ____ _____ _ _ _ _ ____ _____ _ _
 * | |/ // __ \|_ _|| \ | || |/ // __ \|_ _|| \ | |
 * | ' /| | | | | | | \| || ' /| | | | | | | \| |
 * | < | | | | | | | . ` || < | | | | | | | . ` |
 * | . \| |__| |_| |_ | |\ || . \| |__| |_| |_ | |\ |
 * |_|\_\\____/|_____||_| \_||_|\_\\____/|_____||_| \_|
 *
 * Site internet : http://dreamproject.fr/koinkoin/public
 * Github : https://github.com/kkscrap/koinkoin
 * Wiki : http://dreamproject.fr/koinkoin/wiki
 * Forum : http://dreamproject.fr/koinkoin/forum
 * Mail : koinkoin-php( at )dreamproject( point.) fr
 */
class koinkoin {
	public $kkzend;
	public function __construct() {
		$this->construct_zend ();
		$this->construct_session ();
		$this->construct_library_koinkoin ();
		$this->main ();
	}
	private function main() {
	}
	private function construct_library_koinkoin() {
		$this->construct_library_koinkoin_curl ();
		$this->construct_library_koinkoin_xpath ();
		$this->construct_library_koinkoin_dump ();
		$this->construct_library_koinkoin_configs ();
	}
	private function construct_library_koinkoin_dump() {
		$this->construct_library_koinkoin_dump_dd ();
		$this->construct_library_koinkoin_dump_idealitic (); // SDE #23
		$this->construct_library_koinkoin_dump_marcou ();
		$this->construct_library_koinkoin_dump_krumo ();
	}
	private function construct_library_koinkoin_dump_dd() {
		$kkslibrary = new \Zend_Session_Namespace ( 'kks_library' );
		require_once APPLICATION_PATH . '/../library/Koinkoin/dump/dump_koinkoin.php';
		$kkslibrary->dump_dd = new stdClass ();
		$kkslibrary->dump_dd = new dump_koinkoin ();
		$kkslibrary->dump_dd->dump_dd ( $_SESSION );
	}
	private function construct_library_koinkoin_dump_idealitic() {
		// SDE #23
	}
	private function construct_library_koinkoin_dump_marcou() {
		$kkslibrary = new \Zend_Session_Namespace ( 'kks_library' );
		require_once APPLICATION_PATH . '/../library/Koinkoin/dump/dump_koinkoin.php';
		$kkslibrary->dump_marcou = new stdClass ();
		$kkslibrary->dump_marcou = new dump_koinkoin ();
		// $kkslibrary->dump_marcou->dump_marcou ( $_SESSION );
	}
	private function construct_library_koinkoin_dump_krumo() {
		$kkslibrary = new \Zend_Session_Namespace ( 'kks_library' );
		require_once APPLICATION_PATH . '/../library/Koinkoin/dump/dump_koinkoin.php';
		$kkslibrary->dump_krumo = new stdClass ();
		$kkslibrary->dump_krumo = new dump_koinkoin ();
		// $kkslibrary->dump_krumo->dump_krumo ( $_SESSION );
	}
	private function construct_library_koinkoin_curl() {
		$kkslibrary = new \Zend_Session_Namespace ( 'kks_library' );
		require_once APPLICATION_PATH . '/../library/Koinkoin/curl/curl_koinkoin.php';
		$kkslibrary->curl_koinkoin = new stdClass ();
		$kkslibrary->curl_koinkoin = new curl_koinkoin ();
		$kkslibrary->resultat_curl = new stdClass ();
		$kkslibrary->resultat_curl = $kkslibrary->curl_koinkoin->get_curl_1_page_ssl ( "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&parrot=0" );
		
		// $kkslibrary->resultat_curl = $kkslibrary->library->curl_kkcurl->get_curl_1_page_ssl (
		// "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&parrot=0"
		// );
	}
	private function construct_library_koinkoin_xpath() {
		$kkslibrary = new \Zend_Session_Namespace ( 'kks_library' );
		require_once APPLICATION_PATH . '/../library/Koinkoin/xpath/xpath_koinkoin.php';
		$kkslibrary->xpath_koinkoin = new stdClass ();
		$kkslibrary->xpath_koinkoin = new xpath_koinkoin ();
		$kkslibrary->resultat_xpath = new stdClass ();
		$kkslibrary->resultat_xpath = $kkslibrary->xpath_koinkoin->get_xpath_1_filtre_sur_1_html ( $kkslibrary->resultat_curl, ".//*[@id='listingAds']/section/section/ul/li[1]/a/section/h2", 0 );
	}
	private function construct_library_koinkoin_configs() {
		require_once APPLICATION_PATH . '/../library/Koinkoin/configs/configs_koinkoin.php';
	}
	private function construct_session() {
		Zend_Session::start ();
		
		Zend_Session::namespaceUnset ( 'kks_library' );
		$kkslibrary = new \Zend_Session_Namespace ( 'kks_library' );
		$kkslibrary->unsetAll ();
		
		Zend_Session::namespaceUnset ( 'kks_maquettes' );
		$kksmaquettes = new \Zend_Session_Namespace ( 'kks_maquettes' );
		$kksmaquettes->unsetAll ();
		
		Zend_Session::namespaceUnset ( 'kks_urls' );
		$kksurls = new \Zend_Session_Namespace ( 'kks_urls' );
		$kksurls->unsetAll ();
		
		Zend_Session::namespaceUnset ( 'kks_xpath' );
		$kksxpath = new \Zend_Session_Namespace ( 'kks_xpath' );
		$kksxpath->unsetAll ();
		
		Zend_Session::namespaceUnset ( 'kks_regex' );
		$kksregex = new \Zend_Session_Namespace ( 'kks_regex' );
		$kksregex->unsetAll ();
		
		Zend_Session::namespaceUnset ( 'kks_scripts' );
		$kksscripts = new \Zend_Session_Namespace ( 'kks_scripts' );
		$kksscripts->unsetAll ();
		
		Zend_Session::namespaceUnset ( 'kks_tidy' );
		$kkstidy = new \Zend_Session_Namespace ( 'kks_tidy' );
		$kkstidy->unsetAll ();
		
		Zend_Session::namespaceUnset ( 'kks_notes' );
		$kksnotes = new \Zend_Session_Namespace ( 'kks_notes' );
		$kksnotes->unsetAll ();
	}
	private function construct_zend() {
		defined ( 'APPLICATION_PATH' ) || define ( 'APPLICATION_PATH', realpath ( dirname ( __FILE__ ) . '/../application' ) );
		defined ( 'APPLICATION_ENV' ) || define ( 'APPLICATION_ENV', (getenv ( 'APPLICATION_ENV' ) ? getenv ( 'APPLICATION_ENV' ) : 'development') );
		set_include_path ( implode ( PATH_SEPARATOR, array (
				realpath ( APPLICATION_PATH . '/../library' ),
				get_include_path () 
		) ) );
		require_once 'Zend/Application.php';
		try {
			$this->kkzend = new Zend_Application ( APPLICATION_ENV, APPLICATION_PATH . '/configs/' . 'koinkoin314' . '.ini' );
		} catch ( Exception $erreur_zend_fichier_ini ) {
			echo 'ERREUR : probleme zend::application() dans le fichier public/index.php => fichier ini inconnu / mal formé / probleme avec environment/production ? ?';
		}
	}
}
$koinkoin314 = new koinkoin ();
$koinkoin314->kkzend->bootstrap ()->run ();
?>
