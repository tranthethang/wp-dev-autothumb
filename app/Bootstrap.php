<?php

namespace WPDevAutoThumb;

use \Dotenv\Dotenv;
use \WPDevAutoThumb\Traits\Singleton;

final class Bootstrap {
	use Singleton;

	function __construct() {
		$this->_loadEnv();
	}

	private function _loadEnv() {
		$env = new Dotenv( WDA_DIR_PATH );
		$env->load();
	}
}
