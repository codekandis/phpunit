<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Fixtures;

/**
 * Represents an enumeration of fixture exception messages.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class ExceptionMessages
{
	public const string UNKNOWN_INTERFACE_OR_CLASS_NAME = 'Class or interface "%1$s" does not exist';
}
