<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Constraints;

use CodeKandis\PhpUnit\Constraints\Helpers\UnkeyedArraySubsetHelper;
use Override;
use function is_array;

/**
 * Represents a constraint to determine if an array is a recursively comparable unkeyed subset of another array with matching values while ignoring keys.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsUnkeyedSubsetOfArrayConstraint extends AbstractIsSubsetOfArrayConstraint implements IsUnkeyedSubsetOfArrayConstraintInterface
{
	/**
	 * Represents the string representation template.
	 * @var string
	 */
	public const string STRING_REPRESENTATION_TEMPLATE = 'is an unkeyed subset of `%1$s`';

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
		parent::__construct( $array, new UnkeyedArraySubsetHelper( $strict ) );
	}

	/**
	 * Determines if the value matches the unkeyed subset of array constraint.
	 * @param mixed $other The value to match the constraint against.
	 * @return bool True if the value is an array being an unkeyed subset of the expected array with matching values while ignoring keys, otherwise false.
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
