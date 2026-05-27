<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\InheritanceTest;

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
use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\Constraint\Constraint;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase as TestCaseOrigin;
use PHPUnit\Framework\UnknownClassOrInterfaceException;
use Throwable;
use function array_key_exists;
use function class_exists;
use function interface_exists;
use function is_array;
use function is_object;
use function is_string;
use function is_subclass_of;
use function sprintf;
use function var_export;

/**
 * Represents a data provider providing interface or class names with expected ancestor interface or class name.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceOrClassNamesWithExpectedAncestorInterfaceOrClassNameDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'interfaceOrClassName'                 => AbstractArrayContainsSubsetConstraint::class,
				'expectedAncestorInterfaceOrClassName' => AbstractArraySubsetConstraint::class
			],
			1  => [
				'interfaceOrClassName'                 => AbstractArraySubsetConstraint::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConstraint::class
			],
			2  => [
				'interfaceOrClassName'                 => AbstractArraySubsetHelper::class,
				'expectedAncestorInterfaceOrClassName' => ArraySubsetHelperInterface::class
			],
			3  => [
				'interfaceOrClassName'                 => AbstractConstraint::class,
				'expectedAncestorInterfaceOrClassName' => Constraint::class
			],
			4  => [
				'interfaceOrClassName'                 => AbstractIsSubsetOfArrayConstraint::class,
				'expectedAncestorInterfaceOrClassName' => AbstractArraySubsetConstraint::class
			],
			5  => [
				'interfaceOrClassName'                 => ArrayContainsKeyedSubsetConstraint::class,
				'expectedAncestorInterfaceOrClassName' => AbstractArrayContainsSubsetConstraint::class
			],
			6  => [
				'interfaceOrClassName'                 => ArrayContainsKeyedSubsetConstraint::class,
				'expectedAncestorInterfaceOrClassName' => ArrayContainsKeyedSubsetConstraintInterface::class
			],
			7  => [
				'interfaceOrClassName'                 => ArrayContainsUnkeyedSubsetConstraint::class,
				'expectedAncestorInterfaceOrClassName' => AbstractArrayContainsSubsetConstraint::class
			],
			8  => [
				'interfaceOrClassName'                 => ArrayContainsUnkeyedSubsetConstraint::class,
				'expectedAncestorInterfaceOrClassName' => ArrayContainsUnkeyedSubsetConstraintInterface::class
			],
			9  => [
				'interfaceOrClassName'                 => IsKeyedSubsetOfArrayConstraint::class,
				'expectedAncestorInterfaceOrClassName' => AbstractIsSubsetOfArrayConstraint::class
			],
			10 => [
				'interfaceOrClassName'                 => IsKeyedSubsetOfArrayConstraint::class,
				'expectedAncestorInterfaceOrClassName' => IsKeyedSubsetOfArrayConstraintInterface::class
			],
			11 => [
				'interfaceOrClassName'                 => IsSubClassOfConstraint::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConstraint::class
			],
			12 => [
				'interfaceOrClassName'                 => IsSubClassOfConstraint::class,
				'expectedAncestorInterfaceOrClassName' => IsSubClassOfConstraintInterface::class
			],
			13 => [
				'interfaceOrClassName'                 => IsUnkeyedSubsetOfArrayConstraint::class,
				'expectedAncestorInterfaceOrClassName' => AbstractIsSubsetOfArrayConstraint::class
			],
			14 => [
				'interfaceOrClassName'                 => IsUnkeyedSubsetOfArrayConstraint::class,
				'expectedAncestorInterfaceOrClassName' => IsUnkeyedSubsetOfArrayConstraintInterface::class
			],
			15 => [
				'interfaceOrClassName'                 => KeyedArraySubsetHelper::class,
				'expectedAncestorInterfaceOrClassName' => AbstractArraySubsetHelper::class
			],
			16 => [
				'interfaceOrClassName'                 => TestCase::class,
				'expectedAncestorInterfaceOrClassName' => TestCaseInterface::class
			],
			17 => [
				'interfaceOrClassName'                 => TestCase::class,
				'expectedAncestorInterfaceOrClassName' => TestCaseOrigin::class
			],
			18 => [
				'interfaceOrClassName'                 => UnkeyedArraySubsetHelper::class,
				'expectedAncestorInterfaceOrClassName' => AbstractArraySubsetHelper::class
			]
		];
	}
}
