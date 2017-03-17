<?php
class my_fonctions_log {
	private $obj_bdd;
	public $obj_redacteur;
	public $obj_log;
	private $param;
	private $parametres_bdd = array ();
	public function __construct() {
		$this->construct_obj_bdd ();
		$redacteur = $this->construct_obj_redacteur ();
		$this->log_initialise ( $redacteur );
		$this->obj_redacteur = $redacteur;
	}
	private function construct_obj_bdd() {
		$this->parametres_bdd ['host'] = $_SESSION [$_SESSION ['koinkoin'] ['configuration_utilisateur'] ['projet_nom_court']] ['configuration_utilisateur'] ['projet_sgbd_serveur_hote_nom'];
		$this->parametres_bdd ['username'] = $_SESSION [$_SESSION ['koinkoin'] ['configuration_utilisateur'] ['projet_nom_court']] ['configuration_utilisateur'] ['projet_sgbd_login_utilisateur'];
		$this->parametres_bdd ['password'] = $_SESSION [$_SESSION ['koinkoin'] ['configuration_utilisateur'] ['projet_nom_court']] ['configuration_utilisateur'] ['projet_sgbd_mot_de_passe'];
		$this->parametres_bdd ['dbname'] = $_SESSION [$_SESSION ['koinkoin'] ['configuration_utilisateur'] ['projet_nom_court']] ['configuration_utilisateur'] ['projet_sgbd_bdd_nom'];
		
		$this->obj_bdd = Zend_Db::factory ( 'PDO_MYSQL', $this->parametres_bdd );
	}
	private function construct_obj_redacteur() {
		$redacteur = new Zend_Log_Writer_Db ( $this->obj_bdd, 'logs', array (
				// nom_de_colonne => nom_de_la_methode
				'hash_court' => 'hash_court',
				'priorite_num' => 'priority', // zend (PAS TOUCHE)
				'priorite_nom' => 'priorityName', // zend (PAS TOUCHE)
				'message' => 'message', // zend (PAS TOUCHE)
				'reussite' => 'reussite',
				'fichier_en_cours' => 'fichier_en_cours',
				'ligne_en_cours' => 'ligne_en_cours',
				'php_backtrace' => 'php_backtrace',
				'timemestamp' => 'timestamp', // zend (PAS TOUCHE)
				'hash_long' => 'hash_long',
				'global_session' => 'global_session' 
		) );
		return $redacteur;
	}
	public function log_init() {
	}
	private function log_initialise($redacteur) {
		// $param = $this->recupere_parametres_fonction ( func_get_args () );
		// throw new Exception(Zend_Debug::dump($param));
		try {
			$this->obj_log = new Zend_Log ( $redacteur );
		} catch ( Exception $exception_redacteur ) {
			$this->logg ( 0, 1, "EMERG", "ALERT", "CRIT", "ERR-log", "WARN", "NOTICE", "INFO", "DEBUG", basename ( __DIR__ ), basename ( __FILE__ ), basename ( __FUNCTION__ ), basename ( __LINE__ ) );
			return 1;
		}
		$this->logg ( 1, 1, "EMERG", "ALERT", "CRIT", "ERR", "WARN", "NOTICE", "INFO", "DEBUG-log", basename ( __DIR__ ), basename ( __FILE__ ), basename ( __FUNCTION__ ), basename ( __LINE__ ) );
	}
	public function recupere_hash_court() {
		return $this->recupere_hash ( 35 );
	}
	public function recupere_hash_long() {
		return $this->recupere_hash ( 250 );
	}
	public function recupere_hash($nbre) {
		return md5 ( time () . rand () ) . substr ( str_shuffle ( str_repeat ( 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', 500 ) ), 10, $nbre );
	}
	public function recupere_fichier_en_cours($dossier_nom_origine, $fichier_nom_origine) {
		return $dossier_nom_origine . "/" . $fichier_nom_origine;
	}
	public function recupere_ligne_en_cours($ligne_origine) {
		return $ligne_origine;
	}
	public function recupere_reussite($num_reussite) {
		if ($num_reussite == 1)
			return "oui";
		if ($num_reussite == 0)
			return "non";
		if ($num_reussite != 0 || $num_reussite_origine != 1)
			return "non";
	}
	public function file_get_path_fichier_origine($repertoire_origine, $fichier_origine) {
		return '127.0.0.1/KOINKOIN/' . $repertoire_origine . '/' . $fichier_origine;
	}
	public function recupere_variable($var) {
		// throw new Exception(Zend_Debug::dump($var));
		ob_start ();
		if (is_array ( $var )) {
			implode ( "\n", $var );
		}
		print_r ( $var );
		return ob_get_clean ();
	}
	
	// private function recupere_parametres_fonction($param) {
	// // throw new Exception ( Zend_Debug::dump ( $param ) );
	// if (is_object ( $param [0] ))
	// return var_dump ( $param );
	// if (is_array ( $param ) && count ( $param ) > 0) {
	// return implode ( " \n ", $param );
	// } else {
	// return '';
	// }
	// }
	public function logg($reussite, $reset_hash, $emerg, $alert, $crit, $err, $warn, $notice, $info, $debug, $dossier_origine, $fichier_origine, $ligne_origine) {
		// throw new Exception ( Zend_Debug::dump ( $sess ) );
		
		// EMERG = 0; // Urgence : le syst�me est inutilisable
		// ALERT = 1; // Alerte: une mesure corrective doit �tre prise imm�diatement
		// CRIT = 2; // Critique : �tats critiques
		// ERR = 3; // Erreur: �tats d'erreur
		// WARN = 4; // Avertissement: �tats d'avertissement
		// NOTICE = 5; // Notice: normal mais �tat significatif
		// INFO = 6; // Information: messages d'informations
		// DEBUG = 7; // Debug: messages de d�boguages
		//
		if ($reset_hash == 1) {
			$this->obj_log->setEventItem ( 'hash_court', $this->recupere_hash_court () );
			$this->obj_log->setEventItem ( 'hash_long', $this->recupere_hash_long () );
		}
		
// 		$this->obj_log->setEventItem ( 'php_backtrace', $backtrace_php_origine );
		
		$this->obj_log->setEventItem ( 'fichier_en_cours', $this->recupere_fichier_en_cours ( $dossier_origine, $fichier_origine ) );
			
		$this->obj_log->setEventItem ( 'ligne_en_cours', $this->recupere_ligne_en_cours ( $ligne_origine ) );
		
		$this->obj_log->setEventItem ( 'reussite', $this->recupere_reussite ( $reussite ) );
		
		// $this->obj_log->setEventItem ( 'global_session', $this->recupere_variable ( $session ) );
		
		if ($emerg !== "EMERG")
			$this->obj_log->log ( str_replace ( "EMERG-", "", $emerg ), Zend_Log::EMERG );
		
		if ($alert !== "ALERT")
			$this->obj_log->log ( str_replace ( "ALERT-", "", $alert ), Zend_Log::ALERT );
		
		if ($crit !== "CRIT")
			$this->obj_log->log ( str_replace ( "CRIT-", "", $crit ), Zend_Log::CRIT );
		
		if ($err !== "ERR")
			$this->obj_log->log ( str_replace ( "ERR-", "", $err ), Zend_Log::ERR );
		
		if ($warn !== "WARN")
			$this->obj_log->log ( str_replace ( "WARN-", "", $warn ), Zend_Log::WARN );
		
		if ($notice !== "NOTICE")
			$this->obj_log->log ( str_replace ( "NOTICE-", "", $notice ), Zend_Log::NOTICE );
		
		if ($info !== "INFO")
			$this->obj_log->log ( str_replace ( "INFO-", "", $info ), Zend_Log::INFO );
		
		if ($debug !== "DEBUG")
			$this->obj_log->log ( str_replace ( "DEBUG-", "", $debug ), Zend_Log::DEBUG );
	}
}

/*
 *
 * FONCTIONS QUI ETAIENT PUBLIQUES DANS PUBLIC/INDEX.PHP
 * ET QUI NE PEUVENT PAS RESTER LA-BAS
 *
 * function log_recupere_variable() {
 * }
 * function log_recupere_php_backtrace() {
 * ob_start ();
 * var_dump ( debug_backtrace () );
 * return ob_get_clean ();
 * }
 * function log_recupere_parametres_fonction($tab_parametres) {
 * if (is_array ( $tab_parametres ) && count ( $tab_parametres ) > 0) {
 * return implode ( " \n ", $tab_parametres );
 * } else {
 * return '';
 * }
 * }
 *
 */

?>