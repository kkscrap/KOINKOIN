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
		$this->construct_library_koinkoin_dump ();
		$this->construct_library_koinkoin_curl ();
		$this->construct_library_koinkoin_xpath ();
		$this->construct_library_koinkoin_configs ();
	}
	private function construct_library_koinkoin_dump() {
		$this->construct_library_koinkoin_dump_dd ();
		$this->construct_library_koinkoin_dump_idealitic (); // SDE #23
		$this->construct_library_koinkoin_dump_marcou ();
		$this->construct_library_koinkoin_dump_krumo ();
	}
	private function construct_library_koinkoin_dump_dd() {
		$kksession = new \Zend_Session_Namespace ( 'koinkoin314' );
		require_once APPLICATION_PATH . '/../library/Koinkoin/dump/dump_koinkoin.php';
		$kksession->library = new stdClass ();
		$kksession->library->dump_dd = new stdClass ();
		$kksession->library->dump_dd = new koinkoin_fonctions_dump ();
		// $kksession->library->dump_dd->dump_dd ( $_SESSION );
	}
	private function construct_library_koinkoin_dump_idealitic() {
		// SDE #23
	}
	private function construct_library_koinkoin_dump_marcou() {
		$kksession = new \Zend_Session_Namespace ( 'koinkoin314' );
		require_once APPLICATION_PATH . '/../library/Koinkoin/dump/dump_koinkoin.php';
		$kksession->library->dump_marcou = new stdClass ();
		$kksession->library->dump_marcou = new koinkoin_fonctions_dump ();
		// $kksession->library->dump_marcou->dump_marcou ( $_SESSION );
	}
	private function construct_library_koinkoin_dump_krumo() {
		$kksession = new \Zend_Session_Namespace ( 'koinkoin314' );
		require_once APPLICATION_PATH . '/../library/Koinkoin/dump/dump_koinkoin.php';
		$kksession->library->dump_krumo = new stdClass ();
		$kksession->library->dump_krumo = new koinkoin_fonctions_dump ();
		// $kksession->library->dump_krumo->dump_krumo ( $_SESSION );
	}
	private function construct_library_koinkoin_curl() {
		$kksession = new \Zend_Session_Namespace ( 'koinkoin314' );
		require_once APPLICATION_PATH . '/../library/Koinkoin/curl/curl_koinkoin.php';
		$kksession->library->curl_kkcurl = new stdClass ();
		$kksession->library->curl_kkcurl = new koinkoin_fonctions_curl ();
		// $kksession->resultat_curl = $kksession->library->curl_kkcurl->get_curl_1_page_ssl ( "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&parrot=0" );
	}
	private function construct_library_koinkoin_xpath() {
		$kksession = new \Zend_Session_Namespace ( 'koinkoin314' );
		require_once APPLICATION_PATH . '/../library/Koinkoin/xpath/xpath_koinkoin.php';
		$kksession->library->xpath_kkxpath = new stdClass ();
		$kksession->library->xpath_kkxpath = new koinkoin_fonctions_xpath ();
		// $kksession->resultat_xpath = $kksession->library->xpath_kkxpath->get_xpath_1_filtre_sur_1_html ( $kksession->resultat_curl, ".//*[@id='all']/ul[3]/li[1]/h2", 1 );
	}
	private function construct_library_koinkoin_configs() {
		require_once APPLICATION_PATH . '/../library/Koinkoin/configs/configs_koinkoin.php';
	}
	private function construct_session() {
		Zend_Session::start ( 'koinkoin314' );
		$kksession = new \Zend_Session_Namespace ( 'koinkoin314' );
		$kksessionc = new \Zend_Session_Namespace ( 'koinkoin314_configs' );
		$kksession->unsetAll ();
		$kksessionc->unsetAll ();
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
$koinkoin = new koinkoin ();
$koinkoin->kkzend->bootstrap ()->run ();
?>
