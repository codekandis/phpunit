<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Fixtures;

/**
 * Represents enumeration of fixture type kinds.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class TypeKinds
{
	/**
	 * Represents the type kind `interface`.
	 * @var string
	 */
	public const string INTERFACE_KIND = 'interface';

	/**
	 * Represents the type kind `class`.
	 * @var string
	 */
	public const string CLASS_KIND = 'class';
}
