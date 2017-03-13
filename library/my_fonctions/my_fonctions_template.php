<?php
class my_fonctions_template {
	public $template = "simple_basic";
	public function __construct() {
		$_SESSION ["my_fonctions_log"]->logg ( 1, 0, "EMERG", "ALERT", "CRIT", "ERR", "WARN", "NOTICE", "INFO", "DEBUG-template", basename ( __DIR__ ), basename ( __FILE__ ), basename ( __FUNCTION__ ), basename ( __LINE__ ), $this->recupere_php_backtrace () );
	}
	public function log_init() {
	}
	public function template_applique($nom) {
		$_SESSION ["my_fonctions_log"]->logg ( 1, 0, "EMERG", "ALERT", "CRIT", "ERR", "WARN", "NOTICE", "INFO", "DEBUG-template", basename ( __DIR__ ), basename ( __FILE__ ), basename ( __FUNCTION__ ), basename ( __LINE__ ), $this->recupere_php_backtrace () );
		throw new Exception ( Zend_Debug::dump ( "COQUILLE : template_applique() => " . $nom . " => " . APPLICATION_PATH ) );
		// charge template $nom
		require_once APPLICATION_PATH;
	}
	function recupere_php_backtrace() {
		ob_start ();
		var_dump ( debug_backtrace () );
		return ob_get_clean ();
	}
}
	