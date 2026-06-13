<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\IsSubClassOfConstraintTest;

use CodeKandis\PhpUnit\Constraints\IsSubClassOfConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\ExceptionMessages;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use PHPUnit\Framework\UnknownClassOrInterfaceException;

/**
 * Represents a data provider providing constraint FQCNs with unknown interface or class FQCN, expected throwable class FQCN, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintClassFqcnsWithUnknownInterfaceOrClassFqcnExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'constraintClassFqcn'         => IsSubClassOfConstraint::class,
				'unknownInterfaceOrClassFqcn' => $unknownInterfaceOrClassFqcn = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn'  => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'    => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_FQCN, $unknownInterfaceOrClassFqcn ),
				'expectedThrowableCode'       => 0,
				'expectedThrowablePrevious'   => null
			],
			1 => [
				'constraintClassFqcn'         => IsSubClassOfConstraint::class,
				'unknownInterfaceOrClassFqcn' => $unknownInterfaceOrClassFqcn = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn'  => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'    => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_FQCN, $unknownInterfaceOrClassFqcn ),
				'expectedThrowableCode'       => 0,
				'expectedThrowablePrevious'   => null
			]
		];
	}
}
