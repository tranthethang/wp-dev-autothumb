<?php

use \WPDevAutoThumb\Contracts\LoggerInterface;
use \WPDevAutoThumb\Helpers\Logger;

return [
	LoggerInterface::class => \DI\autowire( Logger::class ),
];