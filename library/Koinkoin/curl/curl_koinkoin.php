<?php
class koinkoin_fonctions_curl {
	public function __construct() {
	}
	public function get_curl_1_page_non_ssl($Url) {
		if (! function_exists ( 'curl_init' )) {
			phpinfo ();
			die ( 'Le programme curl n\'est pas installé sur votre sytème. KOINKOIN' );
		}
		$ch = curl_init ();
		curl_setopt ( $ch, CURLOPT_URL, $Url );
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
		$output = curl_exec ( $ch );
		echo $output;
		curl_close ( $ch );
		return $output;
	}
	public function get_curl_1_page_ssl($url) {
		$ch = curl_init ();
		curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, FALSE );
		curl_setopt ( $ch, CURLOPT_HEADER, false );
		curl_setopt ( $ch, CURLOPT_FOLLOWLOCATION, true );
		curl_setopt ( $ch, CURLOPT_URL, $url );
		curl_setopt ( $ch, CURLOPT_REFERER, $url );
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, TRUE );
		$result = curl_exec ( $ch );
		curl_close ( $ch );
		return $result;
	}
}
?>