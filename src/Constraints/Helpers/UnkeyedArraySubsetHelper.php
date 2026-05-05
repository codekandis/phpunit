<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Constraints\Helpers;

use Override;
use function is_array;

/**
 * Represents a helper determining if an array contains an unkeyed subset with matching values while ignoring keys.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
class UnkeyedArraySubsetHelper extends AbstractArraySubsetHelper
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public function containsSubset( array $array, array $subset ): bool
	{
		foreach ( $subset as $expectedValue )
		{
			$isMatchingActualValueFound = false;
			foreach ( $array as $actualKey => $actualValue )
			{
				$isExpectedValueArray = is_array( $expectedValue );
				$isActualValueArray   = is_array( $actualValue );

				if ( $isExpectedValueArray !== $isActualValueArray )
				{
					continue;
				}

				if ( $isExpectedValueArray === true && $this->containsSubset( $actualValue, $expectedValue ) === false )
				{
					continue;
				}

				if ( $isExpectedValueArray === false && $this->valuesAreEqual( $expectedValue, $actualValue ) === false )
				{
					continue;
				}

				$isMatchingActualValueFound = true;
				unset( $array[ $actualKey ] );

				break;
			}

			if ( $isMatchingActualValueFound === false )
			{
				return false;
			}
		}

		return true;
	}
}
