<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit;

use DMS\PHPUnitExtensions\ArraySubset\ArraySubsetAsserts;
use PHPUnit\Framework\TestCase as TestCaseOrigin;

/**
 * Represents the base class for all test cases.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class TestCase extends TestCaseOrigin
{
	use ArraySubsetAsserts;
}
