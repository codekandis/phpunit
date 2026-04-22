<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\UnitTests;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\InheritanceTest\InterfaceOrClassNamesWithExpectedAncestorInterfaceOrClassNameDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of inheritances.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final class InheritanceTest extends TestCase
{
	/**
	 * Tests if an interface or class is a subclass of a specific ancestor interface or class name.
	 * @param string $interfaceOrClassName The interface or class name to test.
	 * @param string $expectedAncestorInterfaceOrClassName The expected ancestor interface or class name.
	 */
	#[DataProviderExternal( InterfaceOrClassNamesWithExpectedAncestorInterfaceOrClassNameDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfInterfaceOrClassIsSubClassOfAncestorInterfaceOrClassName( string $interfaceOrClassName, string $expectedAncestorInterfaceOrClassName ): void
	{
		static::assertIsSubClassOf( $expectedAncestorInterfaceOrClassName, $interfaceOrClassName );
	}
}
