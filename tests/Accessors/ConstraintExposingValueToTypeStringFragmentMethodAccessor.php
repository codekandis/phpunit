<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Accessors;

use Override;
use PHPUnit\Framework\Constraint\Constraint;

/**
 * Represents a method  accessor exposing {@link Constraint::valueToTypeStringFragment()}.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ConstraintExposingValueToTypeStringFragmentMethodAccessor extends Constraint
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public function toString(): string
	{
		return '';
	}

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public function valueToTypeStringFragment( mixed $value ): string
	{
		return parent::valueToTypeStringFragment( $value );
	}
}
