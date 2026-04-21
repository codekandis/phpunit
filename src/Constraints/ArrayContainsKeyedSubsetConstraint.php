<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Constraints;

use CodeKandis\PhpUnit\Constraints\Helpers\KeyedArraySubsetHelper;
use Override;
use function is_array;

/**
 * Represents a constraint to determine if an array contains a recursively comparable keyed subset with matching keys and values.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ArrayContainsKeyedSubsetConstraint extends AbstractArrayContainsSubsetConstraint implements ArrayContainsKeyedSubsetConstraintInterface
{
	/**
	 * Represents the string representation template.
	 * @var string
	 */
	public const string STRING_REPRESENTATION_TEMPLATE = 'contains the keyed subset `%1$s`';

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	protected string $stringRepresentationTemplate
		{
			get => static::STRING_REPRESENTATION_TEMPLATE;
		}

	/**
	 * Constructor method.
	 * @param array<array-key, mixed> $subset The subset.
	 * @param bool $strict True if the values have to be compared strictly, otherwise false.
	 */
	public function __construct( array $subset, bool $strict )
	{
		parent::__construct( $subset, new KeyedArraySubsetHelper( $strict ) );
	}

	/**
	 * Determines if the value matches the keyed array contains subset constraint.
	 * @param mixed $other The value to match the constraint against.
	 * @return bool True if the value is an array containing the expected keyed subset with matching keys and values, otherwise false.
	 */
	#[Override]
	protected function matches( mixed $other ): bool
	{
		if ( is_array( $other ) === false )
		{
			return false;
		}

		return $this->arraySubsetHelper->containsSubset( $other, $this->subset );
	}
}
