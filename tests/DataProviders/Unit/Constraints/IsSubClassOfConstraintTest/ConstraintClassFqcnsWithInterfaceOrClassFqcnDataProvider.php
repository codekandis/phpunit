<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\IsSubClassOfConstraintTest;

use CodeKandis\PhpUnit\Constraints\IsSubClassOfConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing constraint FQCNs with interface or class FQCN.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintClassFqcnsWithInterfaceOrClassFqcnDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'constraintClassFqcn'  => IsSubClassOfConstraint::class,
				'interfaceOrClassFqcn' => Values::INTERFACE_FQCN_0
			],
			1  => [
				'constraintClassFqcn'  => IsSubClassOfConstraint::class,
				'interfaceOrClassFqcn' => Values::INTERFACE_FQCN_1
			],
			2  => [
				'constraintClassFqcn'  => IsSubClassOfConstraint::class,
				'interfaceOrClassFqcn' => Values::INTERFACE_FQCN_2
			],
			3  => [
				'constraintClassFqcn'  => IsSubClassOfConstraint::class,
				'interfaceOrClassFqcn' => Values::CLASS_FQCN_0
			],
			4  => [
				'constraintClassFqcn'  => IsSubClassOfConstraint::class,
				'interfaceOrClassFqcn' => Values::CLASS_FQCN_1
			],
			5  => [
				'constraintClassFqcn'  => IsSubClassOfConstraint::class,
				'interfaceOrClassFqcn' => Values::CLASS_FQCN_2
			],
			6  => [
				'constraintClassFqcn'  => IsSubClassOfConstraint::class,
				'interfaceOrClassFqcn' => Values::CLASS_FQCN_3
			],
			7  => [
				'constraintClassFqcn'  => IsSubClassOfConstraint::class,
				'interfaceOrClassFqcn' => Values::CLASS_FQCN_4
			],
			8  => [
				'constraintClassFqcn'  => IsSubClassOfConstraint::class,
				'interfaceOrClassFqcn' => Values::CLASS_FQCN_5
			],
			9  => [
				'constraintClassFqcn'  => IsSubClassOfConstraint::class,
				'interfaceOrClassFqcn' => Values::CLASS_FQCN_6
			],
			10 => [
				'constraintClassFqcn'  => IsSubClassOfConstraint::class,
				'interfaceOrClassFqcn' => Values::CLASS_FQCN_7
			],
			11 => [
				'constraintClassFqcn'  => IsSubClassOfConstraint::class,
				'interfaceOrClassFqcn' => Values::CLASS_FQCN_8
			],
			12 => [
				'constraintClassFqcn'  => IsSubClassOfConstraint::class,
				'interfaceOrClassFqcn' => Values::CLASS_FQCN_9
			],
			13 => [
				'constraintClassFqcn'  => IsSubClassOfConstraint::class,
				'interfaceOrClassFqcn' => Values::CLASS_FQCN_10
			],
			14 => [
				'constraintClassFqcn'  => IsSubClassOfConstraint::class,
				'interfaceOrClassFqcn' => Values::CLASS_FQCN_11
			]
		];
	}
}
