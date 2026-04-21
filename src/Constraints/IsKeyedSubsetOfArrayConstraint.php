<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Constraints;

use CodeKandis\PhpUnit\Constraints\Helpers\KeyedArraySubsetHelper;
use Override;
use function is_array;

/**
 * Represents a constraint to determine if an array is a recursively comparable keyed subset of another array with matching keys and values.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsKeyedSubsetOfArrayConstraint extends AbstractIsSubsetOfArrayConstraint implements IsKeyedSubsetOfArrayConstraintInterface
{
	/**
	 * Represents the string representation template.
	 * @var string
	 */
	public const string STRING_REPRESENTATION_TEMPLATE = 'is a keyed subset of `%1$s`';

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
	 * @param array<array-key, mixed> $array The array to compare against.
	 * @param bool $strict True if the values have to be compared strictly, otherwise false.
	 */
	public function __construct( array $array, bool $strict )
	{
		parent::__construct( $array, new KeyedArraySubsetHelper( $strict ) );
	}

	/**
	 * Determines if the value matches the keyed subset of array constraint.
	 * @param mixed $other The value to match the constraint against.
	 * @return bool True if the value is an array being a keyed subset of the expected array with matching keys and values, otherwise false.
	 */
	#[Override]
	protected function matches( mixed $other ): bool
	{
		if ( is_array( $other ) === false )
		{
			return false;
		}

		return $this->arraySubsetHelper->containsSubset( $this->array, $other );
	}
}
