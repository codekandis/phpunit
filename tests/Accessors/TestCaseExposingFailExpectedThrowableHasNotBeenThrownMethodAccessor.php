<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Accessors;

use CodeKandis\PhpUnit\TestCase;
use Override;

/**
 * Represents a method  accessor exposing {@link TestCase::failExpectedThrowableHasNotBeenThrown()}.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
class TestCaseExposingFailExpectedThrowableHasNotBeenThrownMethodAccessor extends TestCase
{
	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_WITH_EXPECTED_THROWABLE_FQCN_TEMPLATE = parent::EXCEPTION_MESSAGE_WITH_EXPECTED_THROWABLE_FQCN_TEMPLATE;

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function failExpectedThrowableHasNotBeenThrown( string $expectedThrowableFqcn ): never
	{
		parent::failExpectedThrowableHasNotBeenThrown( $expectedThrowableFqcn );
	}
}
