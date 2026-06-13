<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Suites\Architecture;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\Tests\DataProviders\Architecture\InheritanceTest\InterfaceOrClassFqcnsWithExpectedAncestorInterfaceOrClassFqcnDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of inheritances.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final class InheritanceTest extends TestCase
{
	/**
	 * Tests if an interface or class is a subclass of a specific ancestor interface or class FQCN.
	 * @param class-string $interfaceOrClassFqcn The interface or class FQCN to test.
	 * @param class-string $expectedAncestorInterfaceOrClassFqcn The expected ancestor interface or class FQCN.
	 */
	#[DataProviderExternal( InterfaceOrClassFqcnsWithExpectedAncestorInterfaceOrClassFqcnDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfInterfaceOrClassIsSubClassOfAncestorInterfaceOrClassFqcn( string $interfaceOrClassFqcn, string $expectedAncestorInterfaceOrClassFqcn ): void
	{
		static::assertIsSubClassOf( $expectedAncestorInterfaceOrClassFqcn, $interfaceOrClassFqcn );
	}
}
