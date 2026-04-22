<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Fixtures\Objects;

use BadMethodCallException;
use CodeKandis\PhpUnit\Constraints\AbstractArraySubsetConstraint;
use Override;

/**
 * Represents
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ArraySubsetConstraintFixture extends AbstractArraySubsetConstraint
{
	/**
	 * {@inheritDoc}
	 * @throws BadMethodCallException The method ist not implemented.
	 */
	#[Override]
	protected string $stringRepresentationTemplate
		{
			get {
				throw new BadMethodCallException( 'The method is not implemented.' );
			}
		}

	/**
	 * {@inheritDoc}
	 * @throws BadMethodCallException The method ist not implemented.
	 */
	#[Override]
	public function toString(): string
	{
		throw new BadMethodCallException( 'The method is not implemented.' );
	}
}
