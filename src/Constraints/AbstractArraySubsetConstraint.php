<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Constraints;

use CodeKandis\PhpUnit\Constraints\Helpers\ArraySubsetHelperInterface;

/**
 * Represents the base class of all array subset constraints.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractArraySubsetConstraint extends AbstractConstraint
{
	/**
	 * Constructor method.
	 * @param ArraySubsetHelperInterface $arraySubsetHelper The array subset helper.
	 */
	public function __construct(
		protected readonly ArraySubsetHelperInterface $arraySubsetHelper
	)
	{
	}
}
