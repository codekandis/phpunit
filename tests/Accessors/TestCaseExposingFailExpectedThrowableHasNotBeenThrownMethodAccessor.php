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
	public const string EXPECTED_THROWABLE_HAS_NOT_BEEN_THROWN_MESSAGE = parent::EXPECTED_THROWABLE_HAS_NOT_BEEN_THROWN_MESSAGE;

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function failExpectedThrowableHasNotBeenThrown(): never
	{
		parent::failExpectedThrowableHasNotBeenThrown();
	}
}
