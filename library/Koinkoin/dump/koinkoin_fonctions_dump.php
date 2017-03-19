<?php
class koinkoin_fonctions_dump {
	public function __construct() {
		
		
		// php_dump_idealitic
		// $_SESSION ['koinkoin314'] ['library'] ['koinkoin'] ['dump'] ['php_dump_dd'] = null;
		require_once APPLICATION_PATH . '/../library/Koinkoin/dump/dump_dd/dump_dd.php'; // SDE #27
		                                                                                 
		// php_dump_marcou
		                                                                                 // $_SESSION ['koinkoin314'] ['library'] ['koinkoin'] ['dump'] ['php_dump_marcou'] = null;
		require_once APPLICATION_PATH . '/../library/Koinkoin/dump/php_dump_marcou/dump.php';
	}
	public function dump_dump_dd($var) {
		return d ( $var );
	}
	public function dump_dump_dd_die($var) {
		return de ( $var );
	}
	public function dump_dump_dd_ob($var) {
		ob_start ();
		d ( $var );
		return ob_get_clean ();
	}
	public function dump_php_dump_idealitic_dump($var) {
	}
	public function dump_php_dump_idealitic_config($var) {
	}
	public function dump_php_dump_marcou($var) {
		return dump ($var);
	}
}
?>