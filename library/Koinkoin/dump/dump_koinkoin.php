<?php
class dump_koinkoin {
	public function __construct() {
		require_once APPLICATION_PATH . '/../library/Koinkoin/dump/dump_dd/dump_dd.php'; // KKSCRAP #27
		require_once APPLICATION_PATH . '/../library/Koinkoin/dump/dump_marcou/dump.php';
		require_once APPLICATION_PATH . '/../library/Koinkoin/dump/dump_krumo/class.krumo.php';
	}
	public function dump_dd($var) {
		return d ( $var );
	}
	public function dump_ddd($var) {
		// Dump dd + quitter/exit
		return de ( $var );
	}
	public function dump_ddob($var) {
		ob_start ();
		d ( $var );
		return ob_get_clean ();
	}
	public function dump_idealitic($var) {
		// SDE #23
	}
	public function dump_marcou($var) {
		return dump ( $var );
	}
	public function dump_krumo($var) {
		$tmp = new Krumo ();
		return $tmp::Dump ( $var );
	}
	public function dump_krumos() {
		// Obtenir la liste des variables de session sans parametres
		$tmp = new Krumo ();
		return $tmp::Session ();
	}
}
?>
