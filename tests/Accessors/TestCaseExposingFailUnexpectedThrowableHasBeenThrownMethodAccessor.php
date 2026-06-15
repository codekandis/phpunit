<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Accessors;

use CodeKandis\PhpUnit\TestCase;
use Override;

/**
 * Represents a method  accessor exposing {@link TestCase::failUnexpectedThrowableHasBeenThrown()}.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
class TestCaseExposingFailUnexpectedThrowableHasBeenThrownMethodAccessor extends TestCase
{
	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_WITH_UNEXPECTED_THROWABLE_FQCN_TEMPLATE = parent::EXCEPTION_MESSAGE_WITH_UNEXPECTED_THROWABLE_FQCN_TEMPLATE;

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	protected static function failUnexpectedThrowableHasBeenThrown( string $unexpectedThrowableFqcn ): never
	{
		parent::failUnexpectedThrowableHasBeenThrown( $unexpectedThrowableFqcn );
	}
}
