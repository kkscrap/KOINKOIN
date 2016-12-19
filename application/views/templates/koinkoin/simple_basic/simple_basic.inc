<?php
$_SESSION ["my_fonctions_log"]->logg ( 1, 0, "EMERG", "ALERT", "CRIT", "ERR", "WARN", "NOTICE", "INFO-template", "DEBUG", basename ( __DIR__ ), basename ( __FILE__ ), basename ( __FUNCTION__ ), basename ( __LINE__ ), recupere_php_backtrace () );
?>
<!doctype html>
<html>
<?php require_once 'html_head/html_head.inc';?>
<body>
	<div
		id="<?php $_SESSION ["my_fonctions_template"]->str_recupere_nom_de_fichier_sans_extension( basename ( __FILE__ ) )?>">
	    <?php require_once 'zone_haut/zone_haut.inc'?>
	    <?php require_once 'zone_milieu/zone_milieu.inc'?>
	    <?php require_once 'zone_bas/zone_bas.inc'?>
	</div>
</body>
</html>