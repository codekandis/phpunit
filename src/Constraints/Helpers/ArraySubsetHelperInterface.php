<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Constraints\Helpers;

/**
 * Represents the interface of all array subset helpers.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ArraySubsetHelperInterface
{
	/**
	 * Determines if an array contains a subset.
	 * @param array<array-key, mixed> $array The array containing the subset.
	 * @param array<array-key, mixed> $subset The subset.
	 * @return bool True if the array contains the subset, otherwise false.
	 */
	public function containsSubset( array $array, array $subset ): bool;
}
