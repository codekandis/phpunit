<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Accessors;

use BadMethodCallException;
use CodeKandis\PhpUnit\Constraints\Helpers\AbstractArraySubsetHelper;
use Override;

/**
 * Represents a method accessor exposing {@link AbstractArraySubsetHelper::valuesAreEqual()}.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ArraySubsetHelperExposingValuesAreEqualMethodAccessor extends AbstractArraySubsetHelper
{
	/**
	 * {@inheritDoc}
	 * @throws BadMethodCallException The method ist not implemented.
	 */
	#[Override]
	public function containsSubset( array $array, array $subset ): bool
	{
		throw new BadMethodCallException( 'The method is not implemented.' );
	}

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public function valuesAreEqual( mixed $expectedValue, mixed $actualValue ): bool
	{
		return parent::valuesAreEqual( $expectedValue, $actualValue );
	}
}
