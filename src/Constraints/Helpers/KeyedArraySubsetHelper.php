<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Constraints\Helpers;

use Override;
use function array_key_exists;
use function is_array;

/**
 * Represents a helper determining if an array contains a keyed subset with matching keys and values.
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

			$actualValue          = $array[ $expectedKey ];
			$isExpectedValueArray = is_array( $expectedValue );
			$isActualValueArray   = is_array( $actualValue );

			if ( $isExpectedValueArray !== $isActualValueArray )
			{
				return false;
			}

			if ( $isExpectedValueArray === true )
			{
				if ( $this->containsSubset( $actualValue, $expectedValue ) === false )
				{
					return false;
				}

				continue;
			}

			if ( $this->valuesAreEqual( $expectedValue, $actualValue ) === false )
			{
				return false;
			}
		}

		return true;
	}
}
