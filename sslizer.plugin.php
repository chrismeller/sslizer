<?php

	namespace Habari;

	class SSLizer extends Plugin {
		
		public function filter_final_output ( $content ) {
			
			if ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] == 'on' ) {
				
				$host = Site::get_url('hostname');
				
				$content = MultiByte::str_replace( 'http://' . $host, 'https://' . $host, $content );
				
			}
			
			return $content;
			
		}
		
	}

?>