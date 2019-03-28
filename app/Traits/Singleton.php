<?php

namespace WPDevAutoThumb\Traits;

/**
 * Define a reusable singleton trait.
 */
trait Singleton {
	/**
	 * Store the singleton object.
	 */
	private static $instance = false;

	/**
	 * Create an inaccessible constructor.
	 */
	private function __construct() {
	}

	/**
	 * Fetch an instance of the class.
	 */
	public static function getInstance() {
		if ( self::$instance === false ) {
			self::$instance = new self();
		}

		return self::$instance;
	}
}
