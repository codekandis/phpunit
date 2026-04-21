<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit;

use PHPUnit\Framework\ExpectationFailedException;

/**
 * Represents the interface of all test cases.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface TestCaseInterface
{
	/**
	 * Asserts that an array contains a recursively comparable keyed subset with matching keys and values.
	 * @param array<array-key, mixed> $expectedSubset The expected subset.
	 * @param array<array-key, mixed> $actualArray The actual array.
	 * @param bool $strict True if the values have to be compared strictly, otherwise false.
	 * @param string $message The additional failure message.
	 * @return void
	 * @throws ExpectationFailedException The assertion failed.
	 */
	public static function assertArrayContainsKeyedSubset( array $expectedSubset, array $actualArray, bool $strict, string $message = '' ): void;

	/**
	 * Asserts that an array contains a recursively comparable unkeyed subset with matching values while ignoring keys.
	 * @param array<array-key, mixed> $expectedSubset The expected subset.
	 * @param array<array-key, mixed> $actualArray The actual array.
	 * @param bool $strict True if the values have to be compared strictly, otherwise false.
	 * @param string $message The additional failure message.
	 * @return void
	 * @throws ExpectationFailedException The assertion failed.
	 */
	public static function assertArrayContainsUnkeyedSubset( array $expectedSubset, array $actualArray, bool $strict, string $message = '' ): void;

	/**
	 * Asserts that an array is a recursively comparable keyed subset of another array with matching keys and values.
	 * @param array<array-key, mixed> $expectedArray The expected array to compare against.
	 * @param array<array-key, mixed> $actualSubset The actual subset.
	 * @param bool $strict True if the values have to be compared strictly, otherwise false.
	 * @param string $message The additional failure message.
	 * @return void
	 * @throws ExpectationFailedException The assertion failed.
	 */
	public static function assertIsKeyedSubsetOfArray( array $expectedArray, array $actualSubset, bool $strict, string $message = '' ): void;

	/**
	 * Asserts that an array is a recursively comparable unkeyed subset of another array with matching values while ignoring keys.
	 * @param array<array-key, mixed> $expectedArray The expected array to compare against.
	 * @param array<array-key, mixed> $actualSubset The actual subset.
	 * @param bool $strict True if the values have to be compared strictly, otherwise false.
	 * @param string $message The additional failure message.
	 * @return void
	 * @throws ExpectationFailedException The assertion failed.
	 */
	public static function assertIsUnkeyedSubsetOfArray( array $expectedArray, array $actualSubset, bool $strict, string $message = '' ): void;
}
