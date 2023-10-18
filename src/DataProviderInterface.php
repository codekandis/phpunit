<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit;

use Throwable;

/**
 * Represents the interface of all data providers.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface DataProviderInterface
{
	/**
	 * Represents the name of the data provider method.
	 * @var string
	 */
	public const string PROVIDER_METHOD_NAME = 'provideData';

	/**
	 * Provides the data sets of the data provider.
	 * @return iterable<array-key, mixed> The data sets of the data provider.
	 * @throws Throwable An unexpected error occurred.
	 */
	public static function provideData(): iterable;
}
