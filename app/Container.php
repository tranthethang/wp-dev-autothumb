<?php

namespace WPDevAutoThumb;

use \WPDevAutoThumb\Traits\Singleton;

final class Container {
	use Singleton;

	/** @var \DI\Container */
	private $_container;

	/**
	 * Create an inaccessible constructor.
	 */
	private function __construct() {
		$builder = new \DI\ContainerBuilder;
		$builder->addDefinitions( WDA_DIR_PATH . '/etc/mapping.php' );
		$builder->enableCompilation( WDA_DIR_PATH . '/storage/tmp/' );
		$builder->writeProxiesToFile( true, WDA_DIR_PATH . '/storage/proxies/' );
		try {
			$this->_container = $builder->build();
		} catch ( \Exception $e ) {
			// TODO: handle this exception.
		}
	}

	/**
	 * @param string $abstract
	 *
	 * @return mixed
	 * @throws \DI\DependencyException
	 * @throws \DI\NotFoundException
	 */
	public function get( $abstract = '' ) {
		return $this->_container->get( $abstract );
	}

	public function getContainer() {
		return $this->_container;
	}
}
