<?php
class my_fonctions {
	public function __construct() {
		// throw new Exception("COQUILLE VIDE !");
	}
	public function my_fonctions_to_obj() {
		$this->include_my_fonctions ();
	}
	private function include_my_fonctions() {
		$path = "C:\Easyphp\data\localweb\projects\KOINKOIN/";
		$path .= $_SESSION ["koinkoin"] ["projet_configuration"] ["path"] ["my_fonctions"];
		
		if (is_dir ( $path )) {
			$dossier = opendir ( $path );
			while ( $fichier = readdir ( $dossier ) ) {
				if (is_file ( $path . '/' . $fichier ) && $fichier != '/' && $fichier != '.' && $fichier != '..' && strtolower ( substr ( $fichier, - 4 ) ) == ".php") {
					require_once ($path . '/' . $fichier);
				}
			}
			closedir ( $dossier );
		}
	}
	private function str_recupere_nom_de_fichier_sans_extension($nom_fichier_avec_extension) {
		$tab = explode ( ".", $nom_fichier_avec_extension );
		throw new Exception ( Zend_Debug::dump ( "COQUILLE (fonction non testée) : " . $nom_fichier_avec_extension . " => " . $tab ) );
	}
	private function ini_recupere_valeur_application_ini($valeur_ini) {
		$bootstrap = $this->getInvokeArg ( 'bootstrap' );
		$db = $bootstrap->getResource ( 'appnamespace' );
	}
}