<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Constraints;

use CodeKandis\PhpUnit\Constraints\Helpers\ArraySubsetHelperInterface;
use Override;
use function sprintf;
use function var_export;

/**
 * Represents the base class of all constraints determining if an array is a subset of another array.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractIsSubsetOfArrayConstraint extends AbstractArraySubsetConstraint
{
	/**
	 * Constructor method.
	 * @param array<array-key, mixed> $array The array to compare against.
	 * @param ArraySubsetHelperInterface $arraySubsetHelper The array subset helper.
	 */
	public function __construct(
		protected readonly array   $array,
		ArraySubsetHelperInterface $arraySubsetHelper
	)
	{
		parent::__construct( $arraySubsetHelper );
	}

	/**
	 * Gets the string representation describing the array to compare against.
	 * @return string The string representation of the constraint.
	 */
	#[Override]
	public function toString(): string
	{
		return sprintf(
			$this->stringRepresentationTemplate,
			var_export( $this->array, true )
		);
	}
}
