<?php

namespace WPDevAutoThumb;

use \WPDevAutoThumb\Traits\Singleton;

final class Bootstrap {
	use Singleton;

	function __construct() {
		$env = new \Dotenv\Dotenv(WDA_DIR_PATH);
		$env->load();
	}
}
