<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\IsSubClassOfConstraintTest;

use CodeKandis\PhpUnit\Constraints\IsSubClassOfConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\ExceptionMessages;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use PHPUnit\Framework\UnknownClassOrInterfaceException;

/**
 * Represents a data provider providing constraint class names with unknown interface or class name, expected throwable class name, expected throwable message, expected throwable code and expected previous throwable.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintClassNamesWithUnkownInterfaceOrClassNameExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'constraintClassName'         => IsSubClassOfConstraint::class,
				'unknownInterfaceOrClassName' => $unknownInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName'  => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'    => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $unknownInterfaceOrClassName ),
				'expectedThrowableCode'       => 0,
				'expectedPreviousThrowable'   => null
			],
			1 => [
				'constraintClassName'         => IsSubClassOfConstraint::class,
				'unknownInterfaceOrClassName' => $unknownInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName'  => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'    => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $unknownInterfaceOrClassName ),
				'expectedThrowableCode'       => 0,
				'expectedPreviousThrowable'   => null
			]
		];
	}
}
