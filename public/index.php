<?php

/*  _  __ ____  _____  _   _  _  _  ____  _____  _   _
 | |/ // __ \|_   _|| \ | || |/ // __ \|_   _|| \ | |
 | ' /| |  | | | |  |  \| || ' /| |  | | | |  |  \| |
 |  < | |  | | | |  | . ` ||  < | |  | | | |  | . ` |
 | . \| |__| |_| |_ | |\  || . \| |__| |_| |_ | |\  |
 |_|\_\\____/|_____||_| \_||_|\_\\____/|_____||_| \_|   
   
 * Koinkoin est un programme php/zend qui permet d'extraire du contenu sur le web,
 * que l'on recupere(ra) sous la forme de csv ou d'autres formats
 *
 * Site internet : http://dreamproject.fr/koinkoin/public
 * Github : https://github.com/kkscrap/koinkoin
 * Wiki : http://dreamproject.fr/koinkoin/wiki
 * Forum : http://dreamproject.fr/koinkoin/forum
 * Mail : koinkoin-php@dreamproject.fr */

class koinkoin {
	public $obj_zend;
	public $kks;
	public function __construct() {
		$this->projet = array (
				'nom' => 'koinkoin' 
		);
		$this->construct_zend ();
		$this->construct_session ();
		$this->construct_my_fonctions ();
		$this->main ();
	}
	private function main() {
	}
	private function construct_my_fonctions() {
		$this->construct_my_fonctions_dump ();
		$this->construct_my_fonctions_curl ();
		$this->construct_my_fonctions_xpath ();
	}
	private function construct_my_fonctions_dump() {
		require_once APPLICATION_PATH . '/../library/my_fonctions/my_fonctions_dump.php';
		$_SESSION [$this->projet ['nom']] ['my_fonctions'] ['dump'] = new my_fonctions_dump ();
	}
	private function construct_my_fonctions_curl() {
		require_once APPLICATION_PATH . '/../library/my_fonctions/my_fonctions_curl.php';
		$_SESSION [$this->projet ['nom']] ['my_fonctions'] ['curl'] = new my_fonctions_curl ();
	}
	private function construct_my_fonctions_xpath() {
		require_once APPLICATION_PATH . '/../library/my_fonctions/my_fonctions_xpath.php';
		$_SESSION [$this->projet ['nom']] ['my_fonctions'] ['xpath'] = new my_fonctions_xpath ();
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
