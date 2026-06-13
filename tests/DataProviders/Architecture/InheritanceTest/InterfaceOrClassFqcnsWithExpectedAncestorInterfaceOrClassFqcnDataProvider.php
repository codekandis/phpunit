<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Architecture\InheritanceTest;

use CodeKandis\PhpUnit\Constraints\AbstractArrayContainsSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\AbstractArraySubsetConstraint;
use CodeKandis\PhpUnit\Constraints\AbstractConstraint;
use CodeKandis\PhpUnit\Constraints\AbstractIsSubsetOfArrayConstraint;
use CodeKandis\PhpUnit\Constraints\ArrayContainsKeyedSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\ArrayContainsKeyedSubsetConstraintInterface;
use CodeKandis\PhpUnit\Constraints\ArrayContainsUnkeyedSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\ArrayContainsUnkeyedSubsetConstraintInterface;
use CodeKandis\PhpUnit\Constraints\Helpers\AbstractArraySubsetHelper;
use CodeKandis\PhpUnit\Constraints\Helpers\ArraySubsetHelperInterface;
use CodeKandis\PhpUnit\Constraints\Helpers\KeyedArraySubsetHelper;
use CodeKandis\PhpUnit\Constraints\Helpers\UnkeyedArraySubsetHelper;
use CodeKandis\PhpUnit\Constraints\IsKeyedSubsetOfArrayConstraint;
use CodeKandis\PhpUnit\Constraints\IsKeyedSubsetOfArrayConstraintInterface;
use CodeKandis\PhpUnit\Constraints\IsSubClassOfConstraint;
use CodeKandis\PhpUnit\Constraints\IsSubClassOfConstraintInterface;
use CodeKandis\PhpUnit\Constraints\IsUnkeyedSubsetOfArrayConstraint;
use CodeKandis\PhpUnit\Constraints\IsUnkeyedSubsetOfArrayConstraintInterface;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\TestCaseInterface;
use Override;
use PHPUnit\Framework\Constraint\Constraint;
use PHPUnit\Framework\TestCase as TestCaseOrigin;

/**
 * Represents a data provider providing interface or class FQCNs with expected ancestor interface or class FQCN.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class InterfaceOrClassFqcnsWithExpectedAncestorInterfaceOrClassFqcnDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'interfaceOrClassFqcn'                 => AbstractArrayContainsSubsetConstraint::class,
				'expectedAncestorInterfaceOrClassFqcn' => AbstractArraySubsetConstraint::class
			],
			1  => [
				'interfaceOrClassFqcn'                 => AbstractArraySubsetConstraint::class,
				'expectedAncestorInterfaceOrClassFqcn' => AbstractConstraint::class
			],
			2  => [
				'interfaceOrClassFqcn'                 => AbstractArraySubsetHelper::class,
				'expectedAncestorInterfaceOrClassFqcn' => ArraySubsetHelperInterface::class
			],
			3  => [
				'interfaceOrClassFqcn'                 => AbstractConstraint::class,
				'expectedAncestorInterfaceOrClassFqcn' => Constraint::class
			],
			4  => [
				'interfaceOrClassFqcn'                 => AbstractIsSubsetOfArrayConstraint::class,
				'expectedAncestorInterfaceOrClassFqcn' => AbstractArraySubsetConstraint::class
			],
			5  => [
				'interfaceOrClassFqcn'                 => ArrayContainsKeyedSubsetConstraint::class,
				'expectedAncestorInterfaceOrClassFqcn' => AbstractArrayContainsSubsetConstraint::class
			],
			6  => [
				'interfaceOrClassFqcn'                 => ArrayContainsKeyedSubsetConstraint::class,
				'expectedAncestorInterfaceOrClassFqcn' => ArrayContainsKeyedSubsetConstraintInterface::class
			],
			7  => [
				'interfaceOrClassFqcn'                 => ArrayContainsUnkeyedSubsetConstraint::class,
				'expectedAncestorInterfaceOrClassFqcn' => AbstractArrayContainsSubsetConstraint::class
			],
			8  => [
				'interfaceOrClassFqcn'                 => ArrayContainsUnkeyedSubsetConstraint::class,
				'expectedAncestorInterfaceOrClassFqcn' => ArrayContainsUnkeyedSubsetConstraintInterface::class
			],
			9  => [
				'interfaceOrClassFqcn'                 => IsKeyedSubsetOfArrayConstraint::class,
				'expectedAncestorInterfaceOrClassFqcn' => AbstractIsSubsetOfArrayConstraint::class
			],
			10 => [
				'interfaceOrClassFqcn'                 => IsKeyedSubsetOfArrayConstraint::class,
				'expectedAncestorInterfaceOrClassFqcn' => IsKeyedSubsetOfArrayConstraintInterface::class
			],
			11 => [
				'interfaceOrClassFqcn'                 => IsSubClassOfConstraint::class,
				'expectedAncestorInterfaceOrClassFqcn' => AbstractConstraint::class
			],
			12 => [
				'interfaceOrClassFqcn'                 => IsSubClassOfConstraint::class,
				'expectedAncestorInterfaceOrClassFqcn' => IsSubClassOfConstraintInterface::class
			],
			13 => [
				'interfaceOrClassFqcn'                 => IsUnkeyedSubsetOfArrayConstraint::class,
				'expectedAncestorInterfaceOrClassFqcn' => AbstractIsSubsetOfArrayConstraint::class
			],
			14 => [
				'interfaceOrClassFqcn'                 => IsUnkeyedSubsetOfArrayConstraint::class,
				'expectedAncestorInterfaceOrClassFqcn' => IsUnkeyedSubsetOfArrayConstraintInterface::class
			],
			15 => [
				'interfaceOrClassFqcn'                 => KeyedArraySubsetHelper::class,
				'expectedAncestorInterfaceOrClassFqcn' => AbstractArraySubsetHelper::class
			],
			16 => [
				'interfaceOrClassFqcn'                 => TestCase::class,
				'expectedAncestorInterfaceOrClassFqcn' => TestCaseInterface::class
			],
			17 => [
				'interfaceOrClassFqcn'                 => TestCase::class,
				'expectedAncestorInterfaceOrClassFqcn' => TestCaseOrigin::class
			],
			18 => [
				'interfaceOrClassFqcn'                 => UnkeyedArraySubsetHelper::class,
				'expectedAncestorInterfaceOrClassFqcn' => AbstractArraySubsetHelper::class
			]
		];
	}
}
