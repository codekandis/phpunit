<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit;

/**
 * Represents the interface of any data provider
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface DataProviderInterface
{
	/**
	 * Provides the data of the data provider.
	 * @return iterable The data of the data provider.
	 */
	public static function provideData(): iterable;
}
