<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Constraints;

use Override;
use PHPUnit\Framework\Constraint\Constraint;
use function sprintf;

/**
 * Represents
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractConstraint extends Constraint
{
	/**
	 * Represents the string representation template.
	 * @var string
	 */
	abstract protected string $stringRepresentationTemplate {
		get;
	}

	/**
	 * Returns the description of the failure.
	 * @param mixed $other The value to get its type.
	 * @return string The description of the failure.
	 */
	#[Override]
	protected function failureDescription( mixed $other ): string
	{
		return sprintf(
			'%1$s%2$s',
			$this->valueToTypeStringFragment( $other ),
			$this->toString()
		);
	}
}
