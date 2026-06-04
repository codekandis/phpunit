<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Fixtures\Objects;

use BadMethodCallException;
use CodeKandis\PhpUnit\Constraints\Helpers\ArraySubsetHelperInterface;

/**
 * Represents an array subset helper fixture.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ArraySubsetHelperFixture implements ArraySubsetHelperInterface
{
	/**
	 * {@inheritDoc}
	 * @throws BadMethodCallException The method ist not implemented.
	 */
	public function containsSubset( array $array, array $subset ): bool
	{
		throw new BadMethodCallException( 'The method is not implemented.' );
	}
}
