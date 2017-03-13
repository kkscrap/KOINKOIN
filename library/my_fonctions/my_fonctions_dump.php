<?php
class my_fonctions_dump {
	public function __construct() {
		require_once APPLICATION_PATH . '/../library/api_externes/' . 'dump' . '/' . 'dump_dd' . '.php'; // TODO: variables en dur a virer !
	}
	public function dump($variable){
		return d($variable);
	}
	public function dump_die($variable){
		return de($variable);
	}
	public function dump_ob($variable){
		ob_start();
		d($variable);
		return ob_get_clean();
	}
}
?>