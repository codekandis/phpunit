<?php declare( strict_types = 1 );

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;

return static function ( RectorConfig $rectorConfig ): void
{
	$rectorConfig->paths(
		[
			dirname( __DIR__, 1 ) . '/src'
		]
	);

	$rectorConfig->sets(
		[
			SetList::PHP_81
		]
	);
};
