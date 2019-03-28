<?php

namespace WPDevAutoThumb\Helpers;

use WPDevAutoThumb\Contracts\LoggerInterface;

class Logger implements LoggerInterface {
	public function info( $message ) {
		if ( is_array( $message ) || is_object( $message ) ) {
			error_log( print_r( $message, true ) );
		} else {
			error_log( $message );
		}
	}
}
