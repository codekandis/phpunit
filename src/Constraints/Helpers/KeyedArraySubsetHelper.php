<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Constraints\Helpers;

use Override;
use function array_key_exists;
use function is_array;

/**
 * Represents a helper for keyed array subset comparisons.
 * Determines whether one array contains another array as a keyed subset by matching keys and values.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
class KeyedArraySubsetHelper extends AbstractArraySubsetHelper
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public function containsSubset( array $array, array $subset ): bool
	{
		foreach ( $subset as $expectedKey => $expectedValue )
		{
			if ( array_key_exists( $expectedKey, $array ) === false )
			{
				return false;
			}

			$actualValue = $array[ $expectedKey ];

			if ( is_array( $expectedValue ) === true )
			{
				if ( is_array( $actualValue ) === false )
				{
					return false;
				}

				if ( $this->containsSubset( $actualValue, $expectedValue ) === false )
				{
					return false;
				}

				continue;
			}

			if ( is_array( $actualValue ) === true )
			{
				return false;
			}

			if ( $this->valuesAreEqual( $expectedValue, $actualValue ) === false )
			{
				return false;
			}
		}

		return true;
	}
}
