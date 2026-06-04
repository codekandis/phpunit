<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Constraints\Helpers;

/**
 * Represents the base class of all array subset helpers.
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
	 * Determines if two values are equal.
	 * @param mixed $expectedValue The expected value.
	 * @param mixed $actualValue The actual value.
	 * @return bool True if the values are equal according to the comparison mode, otherwise false.
	 */
	protected function valuesAreEqual( mixed $expectedValue, mixed $actualValue ): bool
	{
		return $this->strict === true
			? $expectedValue === $actualValue
			: $expectedValue == $actualValue;
	}
}
