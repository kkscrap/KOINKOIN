<?php
class koinkoin_fonctions_xpath {
	public function __construct() {
	}
	public function get_xpath_1_filtre_sur_1_html($txt_source_html, $filtre, $tidy) {
		
		// Tidy
		if ($tidy == '1') {
			$config = array (
					'indent' => true,
					'output-xhtml' => true,
					'wrap' => 200 
			);
			$tidy = new tidy ();
			$tidy->parseString ( $txt_source_html, $config, 'utf8' );
			$tidy->cleanRepair ();
			$txt_source_html = $tidy;
		}
		
		// Dom
		$dom = new DOMDocument ();
		$dom->loadHTML ( $txt_source_html );
		$dom_xpath = new DOMXPath ( $dom );
		
		// Xpath
		$resultat_xpath = $dom_xpath->query ( $filtre );
		
		// Recuperation du resultat de la requete XPATH
		foreach ( $resultat_xpath as $result_object ) {
			$resultat = $result_object->childNodes->item ( 0 )->nodeValue;
		}
		
		return trim ( strip_tags ( $resultat ) );
	}
}
?>
