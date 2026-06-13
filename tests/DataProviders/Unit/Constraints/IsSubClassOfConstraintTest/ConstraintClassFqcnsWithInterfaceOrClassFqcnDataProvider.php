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
			0 => [
				'constraintClassFqcn'  => IsSubClassOfConstraint::class,
				'interfaceOrClassFqcn' => Values::INTERFACE_FQCN
			],
			1 => [
				'constraintClassFqcn'  => IsSubClassOfConstraint::class,
				'interfaceOrClassFqcn' => Values::CLASS_FQCN_0
			],
			2 => [
				'constraintClassFqcn'  => IsSubClassOfConstraint::class,
				'interfaceOrClassFqcn' => Values::CLASS_FQCN_1
			]
		];
	}
}
