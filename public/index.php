<?php

/*
 * _ __ ____ _____ _ _ _ _ ____ _____ _ _
 * | |/ // __ \|_ _|| \ | || |/ // __ \|_ _|| \ | |
 * | ' /| | | | | | | \| || ' /| | | | | | | \| |
 * | < | | | | | | | . ` || < | | | | | | | . ` |
 * | . \| |__| |_| |_ | |\ || . \| |__| |_| |_ | |\ |
 * |_|\_\\____/|_____||_| \_||_|\_\\____/|_____||_| \_|
 *
 * Koinkoin est un programme php/zend qui permet d'extraire du contenu sur le web,
 * que l'on recupere(ra) sous la forme de csv ou d'autres formats
 *
 * Site internet : http://dreamproject.fr/koinkoin/public
 * Github : https://github.com/kkscrap/koinkoin
 * Wiki : http://dreamproject.fr/koinkoin/wiki
 * Forum : http://dreamproject.fr/koinkoin/forum
 * Mail : koinkoin-php@dreamproject.fr
 */
class koinkoin {
	public $obj_zend;
	public $kks;
	public function __construct() {
		$this->projet = array (
				'nom' => 'koinkoin' 
		);
		$this->construct_zend ();
		$this->construct_session ();
		$this->construct_library_koinkoin ();
		$this->main ();
	}
	private function main() {
		$_SESSION [$this->projet ['nom']] ['library'] ['github'] = null;
	}
	private function construct_library_koinkoin() {
		$this->construct_library_koinkoin_dump ();
		$this->construct_library_koinkoin_curl ();
		$this->construct_library_koinkoin_xpath ();
	}
	private function construct_library_koinkoin_dump() {
		$this->construct_library_koinkoin_dump_dd_dump ();
		$this->construct_library_koinkoin_dump_php_dump_idealitic ();
	}
	private function construct_library_koinkoin_dump_dd_dump() {
		require_once APPLICATION_PATH . '/../library/Koinkoin/dump/koinkoin_fonctions_dump.php';
		$_SESSION [$this->projet ['nom']] ['library'] ['koinkoin'] ['dump'] ['dd_dump'] = new koinkoin_fonctions_dump ();
	}
	private function construct_library_koinkoin_dump_php_dump_idealitic() {
		
		// SDE #23 probleme installation library/php_dump_idealitic
		// require_once APPLICATION_PATH . '/../library/Koinkoin/dump/koinkoin_fonctions_dump.php';
	}
	private function construct_library_koinkoin_curl() {
		require_once APPLICATION_PATH . '/../library/Koinkoin/curl/koinkoin_fonctions_curl.php';
		$_SESSION [$this->projet ['nom']] ['library'] ['koinkoin'] ['curl'] ['koinkoin_curl'] = new koinkoin_fonctions_curl ();
	}
	private function construct_library_koinkoin_xpath() {
		require_once APPLICATION_PATH . '/../library/Koinkoin/xpath/koinkoin_fonctions_xpath.php';
		$_SESSION [$this->projet ['nom']] ['library'] ['koinkoin'] ['xpath'] ['koinkoin_xpath'] = new koinkoin_fonctions_xpath ();
	}
	private function construct_session() {
		// $this->kks = new Zend_Session_Namespace('koinkoin'); // KoinKoin Session
		$kks = new \Zend_Session_Namespace ( $this->projet ['nom'] );
		$kks->unsetAll ();
	}
	private function construct_zend() {
		defined ( 'APPLICATION_PATH' ) || define ( 'APPLICATION_PATH', realpath ( dirname ( __FILE__ ) . '/../application' ) );
		defined ( 'APPLICATION_ENV' ) || define ( 'APPLICATION_ENV', (getenv ( 'APPLICATION_ENV' ) ? getenv ( 'APPLICATION_ENV' ) : 'developpement') );
		set_include_path ( implode ( PATH_SEPARATOR, array (
				realpath ( APPLICATION_PATH . '/../library' ),
				get_include_path () 
		) ) );
		require_once 'Zend/Application.php';
		try {
			$this->obj_zend = new Zend_Application ( APPLICATION_ENV, APPLICATION_PATH . '/configs/' . $this->projet ['nom'] . '.ini' );
		} catch ( Exception $erreur_zend_fichier_ini ) {
			echo 'ERREUR : probleme zend::application() dans le fichier public/index.php => fichier ini inconnu ?';
		}
	}
}
$koinkoin314 = new koinkoin ();
$koinkoin314->obj_zend->bootstrap ()->run ();
?>
