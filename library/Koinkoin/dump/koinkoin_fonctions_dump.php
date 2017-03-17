<?php
class koinkoin_fonctions_dump {
	public function __construct() {
// 		require_once APPLICATION_PATH . '/../library/Koinkoin/dump/php_dump_idealitic/kkscrap/PHP_DUMP_IDEALITIC/src/Dump.php';
// 		$_SESSION ['koinkoin'] ['library'] ['koinkoin']['dump'] ['php_dump_idealitic'] = new Dump ();
		$_SESSION ['koinkoin'] ['library'] ['koinkoin']['dump'] ['php_dump_idealitic'] = null;		
		require_once APPLICATION_PATH . '/../library/Koinkoin/dump/dump_dd/dump_dd.php'; // TODO: vars en dur a virer !
	}
	public function dump_dd_dump($var) {
		return d ( $var );
	}
	public function dump_dd_dump_die($var) {
		return de ( $var );
	}
	public function dump_dd_dump_ob($var) {
		ob_start ();
		d ( $var );
		return ob_get_clean ();
	}
	public function php_dump_idealitic_dump($var) {
		// return d($var);
	}
	public function php_dump_idealitic_config($var) {
		
		// SDE #23 probleme avec PHP_DUMP_IDEALITIC
// 		$_SESSION ['koinkoin'] ['library'] ['dump'] ['php_dump_idealitic']->Dump()->config ( './', array (
// 				'APP_PATH' => '/home/app/www',
// 				'SYSTEM_PATH' => '/home/app/src' 
// 		) );
	}
}
?>