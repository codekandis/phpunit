<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\IsSubClassOfConstraintTest;

use CodeKandis\PhpUnit\Constraints\IsSubClassOfConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing constraint class names with interface or class name.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintClassNamesWithInterfaceOrClassNameDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'constraintClassName'  => IsSubClassOfConstraint::class,
				'interfaceOrClassName' => Values::INTERFACE_NAME
			],
			1 => [
				'constraintClassName'  => IsSubClassOfConstraint::class,
				'interfaceOrClassName' => Values::CLASS_NAME_0
			],
			2 => [
				'constraintClassName'  => IsSubClassOfConstraint::class,
				'interfaceOrClassName' => Values::CLASS_NAME_1
			]
		];
	}
}
