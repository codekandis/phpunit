<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Constraints\Helpers;

use function array_key_exists;
use function array_keys;
use function count;
use function is_array;
use function is_float;
use function is_nan;

/**
 * Represents the base class of all array subset helpers.
 * Defines the common type for checking whether one array contains another array as a subset.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractArraySubsetHelper implements ArraySubsetHelperInterface
{
	/**
	 * Constructor method.
	 * @param bool $strict True if the values have to be compared strictly, otherwise false.
	 */
	public function __construct(
		protected readonly bool $strict
	)
	{
	}

	/**
	 * Determines if two arrays are equal.
	 * @param array<array-key, mixed> $expectedArray The expected array.
	 * @param array<array-key, mixed> $actualArray The actual array.
	 * @return bool True if the arrays are equal according to the comparison mode, otherwise false.
	 */
	protected function arraysAreEqual( array $expectedArray, array $actualArray ): bool
	{
		if ( count( $expectedArray ) !== count( $actualArray ) )
		{
			return false;
		}

		if (
			$this->strict === true
			&& array_keys( $expectedArray ) !== array_keys( $actualArray )
		)
		{
			return false;
		}

		foreach ( $expectedArray as $expectedKey => $expectedValue )
		{
			if (
				array_key_exists( $expectedKey, $actualArray ) === false
				|| $this->valuesAreEqual( $expectedValue, $actualArray[ $expectedKey ] ) === false
			)
			{
				return false;
			}
		}

		return true;
	}

	/**
	 * Determines if two values are equal.
	 * @param mixed $expectedValue The expected value.
	 * @param mixed $actualValue The actual value.
	 * @return bool True if the values are equal according to the comparison mode, otherwise false.
	 */
	protected function valuesAreEqual( mixed $expectedValue, mixed $actualValue ): bool
	{
		if ( is_array( $expectedValue ) === true )
		{
			return is_array( $actualValue ) === true
			       && $this->arraysAreEqual( $expectedValue, $actualValue );
		}

		if ( is_array( $actualValue ) === true )
		{
			return false;
		}

		return (
				   is_float( $expectedValue ) === true
			       && is_float( $actualValue ) === true
			       && is_nan( $expectedValue ) === true
			       && is_nan( $actualValue ) === true
			   )
		       || (
			   $this->strict === true
				   ? $expectedValue === $actualValue
				   : $expectedValue == $actualValue
			   );
	}
}
