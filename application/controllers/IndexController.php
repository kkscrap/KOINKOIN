<?php
class IndexController extends Zend_Controller_Action {
	public function init() {
  $_SESSION ['koinkoin'] ['configuration_utilisateur']['projet_sgbd_mot_de_passe'] = 'titine';
	$_SESSION ['koinkoin'] ['configuration_utilisateur']['projet_sgbd_serveur_hote_nom'] = 'miloute';
  $_SESSION ['koinkoin'] ['configuration_utilisateur']['projet_sgbd_login_utilisateur'] = 'titine';
  $_SESSION ['koinkoin'] ['configuration_utilisateur']['projet_sgbd_bdd_nom'] = 'titine';
  }
	public function indexAction() {
	}
	public function releasesAction() {
	}
}
?>