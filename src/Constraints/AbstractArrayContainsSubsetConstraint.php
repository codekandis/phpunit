<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Constraints;

use CodeKandis\PhpUnit\Constraints\Helpers\ArraySubsetHelperInterface;
use Override;
use function sprintf;
use function var_export;

/**
 * Represents the base class of all constraints determining if an array contains a subset.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractArrayContainsSubsetConstraint extends AbstractArraySubsetConstraint
{
	/**
	 * Constructor method.
	 * @param array<array-key, mixed> $subset The subset.
	 * @param ArraySubsetHelperInterface $arraySubsetHelper The array subset helper.
	 */
	public function __construct(
		protected readonly array   $subset,
		ArraySubsetHelperInterface $arraySubsetHelper
	)
	{
		parent::__construct( $arraySubsetHelper );
	}

	/**
	 * Gets the string representation describing the expected subset.
	 * @return string The string representation of the constraint.
	 */
	#[Override]
	public function toString(): string
	{
		return sprintf(
			$this->stringRepresentationTemplate,
			var_export( $this->subset, true )
		);
	}
}
