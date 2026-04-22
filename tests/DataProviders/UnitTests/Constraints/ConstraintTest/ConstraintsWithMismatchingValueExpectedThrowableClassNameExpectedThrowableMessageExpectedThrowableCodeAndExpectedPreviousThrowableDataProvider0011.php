<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\ConstraintTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Accessors\ConstraintExposingValueToTypeStringFragmentMethodAccessor;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use PHPUnit\Framework\ExpectationFailedException;
use CodeKandis\PhpUnit\Constraints\ArrayContainsKeyedSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\ArrayContainsUnkeyedSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\IsKeyedSubsetOfArrayConstraint;
use CodeKandis\PhpUnit\Constraints\IsSubClassOfConstraint;
use CodeKandis\PhpUnit\Constraints\IsUnkeyedSubsetOfArrayConstraint;

/**
 * Represents a data provider providing constraints with mismatching value, expected throwable class name, expected throwable message, expected throwable code and expected previous throwable.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintsWithMismatchingValueExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider0011 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			11000 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11001 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11002 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11003 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11004 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11005 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11006 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11007 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11008 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11009 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11010 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11011 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11012 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11013 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11014 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11015 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11016 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11017 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11018 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11019 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11020 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11021 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11022 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11023 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11024 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11025 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11026 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11027 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11028 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11029 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11030 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11031 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11032 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11033 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11034 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11035 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11036 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11037 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11038 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11039 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11040 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11041 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11042 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11043 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11044 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11045 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11046 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11047 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11048 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11049 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11050 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11051 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11052 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11053 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11054 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11055 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11056 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11057 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11058 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11059 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11060 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11061 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11062 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11063 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11064 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11065 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11066 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11067 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11068 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11069 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11070 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11071 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11072 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11073 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11074 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11075 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11076 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11077 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11078 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11079 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11080 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11081 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11082 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11083 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11084 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11085 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11086 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11087 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11088 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11089 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11090 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11091 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11092 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11093 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11094 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11095 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11096 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11097 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11098 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11099 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11100 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11101 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11102 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11103 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11104 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11105 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11106 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11107 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11108 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11109 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11110 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11111 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11112 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11113 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11114 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11115 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11116 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11117 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11118 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11119 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11120 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11121 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11122 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11123 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11124 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11125 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11126 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11127 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11128 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11129 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11130 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11131 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11132 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11133 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11134 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11135 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11136 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11137 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11138 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11139 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11140 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11141 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11142 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11143 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11144 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11145 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11146 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11147 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11148 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11149 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11150 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11151 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11152 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11153 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11154 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11155 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11156 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11157 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11158 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11159 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11160 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11161 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11162 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11163 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11164 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11165 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11166 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11167 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11168 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11169 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11170 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11171 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11172 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11173 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11174 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11175 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11176 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11177 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11178 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11179 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11180 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11181 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11182 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11183 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11184 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11185 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11186 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11187 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11188 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11189 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11190 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11191 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11192 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11193 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11194 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11195 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11196 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11197 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11198 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11199 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11200 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11201 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11202 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11203 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11204 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11205 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11206 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11207 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11208 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11209 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11210 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11211 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11212 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11213 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11214 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11215 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11216 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11217 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11218 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11219 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11220 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11221 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11222 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11223 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11224 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11225 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11226 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11227 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11228 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11229 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11230 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11231 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11232 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11233 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11234 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11235 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11236 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11237 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11238 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11239 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11240 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11241 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11242 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11243 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11244 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11245 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11246 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11247 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11248 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11249 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11250 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11251 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11252 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11253 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11254 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11255 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11256 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11257 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11258 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11259 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11260 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11261 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11262 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11263 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11264 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11265 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11266 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11267 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11268 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11269 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11270 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11271 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11272 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11273 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11274 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11275 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11276 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11277 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11278 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11279 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11280 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11281 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11282 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11283 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11284 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11285 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11286 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11287 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11288 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11289 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11290 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11291 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11292 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11293 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11294 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11295 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11296 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11297 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11298 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11299 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11300 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11301 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11302 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11303 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11304 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11305 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11306 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11307 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11308 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11309 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11310 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11311 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11312 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11313 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11314 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11315 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11316 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11317 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11318 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11319 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11320 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11321 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11322 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11323 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11324 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11325 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11326 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11327 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11328 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11329 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11330 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11331 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11332 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11333 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11334 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11335 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11336 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11337 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11338 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11339 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11340 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11341 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11342 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11343 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11344 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11345 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11346 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11347 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11348 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11349 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11350 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11351 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11352 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11353 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11354 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11355 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11356 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11357 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11358 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11359 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11360 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11361 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11362 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11363 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11364 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11365 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11366 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11367 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11368 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11369 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11370 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11371 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11372 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11373 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11374 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11375 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11376 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11377 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11378 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11379 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11380 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11381 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11382 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11383 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11384 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11385 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11386 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11387 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11388 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11389 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11390 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11391 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11392 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11393 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11394 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11395 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11396 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11397 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11398 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11399 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11400 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11401 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11402 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11403 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11404 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11405 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11406 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11407 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11408 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11409 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11410 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11411 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11412 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11413 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11414 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11415 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11416 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11417 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11418 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11419 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11420 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11421 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11422 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11423 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11424 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11425 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11426 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11427 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11428 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11429 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11430 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11431 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11432 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11433 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11434 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11435 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11436 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11437 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11438 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11439 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11440 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11441 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11442 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11443 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11444 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11445 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11446 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11447 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11448 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11449 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11450 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11451 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11452 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11453 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11454 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11455 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11456 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11457 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11458 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11459 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11460 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11461 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11462 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11463 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11464 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11465 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11466 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11467 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11468 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11469 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11470 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11471 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11472 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11473 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11474 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11475 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11476 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11477 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11478 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11479 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11480 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11481 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11482 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11483 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11484 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11485 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11486 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11487 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11488 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11489 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11490 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11491 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11492 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11493 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11494 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11495 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11496 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11497 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11498 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11499 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11500 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11501 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11502 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11503 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11504 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11505 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11506 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11507 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11508 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11509 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11510 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11511 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11512 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11513 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11514 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11515 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11516 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11517 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11518 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11519 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11520 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11521 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11522 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11523 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11524 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11525 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11526 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11527 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11528 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11529 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11530 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11531 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11532 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11533 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11534 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11535 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11536 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11537 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11538 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11539 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11540 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11541 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11542 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11543 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11544 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11545 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11546 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11547 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11548 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11549 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11550 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11551 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11552 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11553 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11554 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11555 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11556 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11557 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11558 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11559 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11560 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11561 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11562 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11563 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11564 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11565 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11566 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11567 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11568 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11569 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11570 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11571 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11572 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11573 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11574 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11575 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11576 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11577 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11578 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11579 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11580 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11581 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11582 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11583 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11584 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11585 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11586 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11587 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11588 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11589 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11590 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11591 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11592 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11593 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11594 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11595 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11596 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11597 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11598 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11599 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11600 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11601 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11602 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11603 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11604 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11605 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11606 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11607 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11608 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11609 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11610 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11611 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11612 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11613 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11614 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11615 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11616 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11617 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11618 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11619 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11620 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11621 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11622 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11623 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11624 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11625 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11626 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11627 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11628 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11629 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11630 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11631 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11632 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11633 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11634 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11635 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11636 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11637 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11638 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11639 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11640 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11641 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11642 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11643 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11644 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11645 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11646 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11647 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11648 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11649 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11650 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11651 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11652 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11653 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11654 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11655 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11656 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11657 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11658 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11659 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11660 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11661 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11662 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11663 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11664 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11665 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11666 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11667 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11668 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11669 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11670 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11671 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11672 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11673 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11674 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11675 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11676 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11677 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11678 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11679 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11680 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11681 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11682 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11683 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11684 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11685 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11686 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11687 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11688 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11689 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11690 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11691 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11692 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11693 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11694 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11695 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11696 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11697 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11698 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11699 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11700 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11701 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11702 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11703 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11704 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11705 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11706 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11707 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11708 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11709 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11710 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11711 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11712 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11713 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11714 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11715 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11716 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11717 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11718 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11719 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11720 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11721 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11722 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11723 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11724 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11725 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11726 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11727 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11728 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11729 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11730 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11731 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11732 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11733 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11734 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11735 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11736 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11737 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11738 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11739 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11740 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11741 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11742 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11743 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11744 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11745 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11746 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11747 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11748 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11749 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11750 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11751 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11752 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11753 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11754 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11755 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11756 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11757 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11758 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11759 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11760 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11761 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11762 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11763 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11764 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11765 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11766 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11767 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11768 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11769 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11770 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11771 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11772 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11773 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11774 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11775 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11776 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11777 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11778 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11779 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11780 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11781 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11782 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11783 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11784 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11785 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11786 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11787 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11788 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11789 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11790 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11791 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11792 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11793 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11794 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11795 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11796 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11797 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11798 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11799 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11800 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11801 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11802 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11803 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11804 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11805 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11806 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11807 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11808 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11809 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11810 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11811 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11812 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11813 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11814 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11815 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11816 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11817 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11818 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11819 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11820 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11821 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11822 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11823 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11824 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11825 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11826 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11827 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11828 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11829 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11830 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11831 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11832 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11833 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11834 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11835 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11836 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11837 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11838 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11839 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11840 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11841 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11842 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11843 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11844 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11845 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11846 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11847 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11848 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11849 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11850 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11851 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11852 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11853 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11854 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11855 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11856 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11857 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11858 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11859 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11860 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11861 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11862 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11863 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11864 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11865 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11866 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11867 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11868 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11869 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11870 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11871 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11872 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11873 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11874 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11875 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11876 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11877 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11878 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11879 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11880 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11881 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11882 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11883 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11884 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11885 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11886 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11887 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11888 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11889 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11890 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11891 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11892 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11893 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11894 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11895 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11896 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11897 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11898 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11899 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11900 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11901 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11902 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11903 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11904 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11905 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11906 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11907 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11908 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11909 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11910 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11911 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11912 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11913 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11914 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11915 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11916 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11917 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11918 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11919 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11920 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11921 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11922 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11923 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11924 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11925 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11926 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11927 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11928 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11929 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11930 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11931 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11932 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11933 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11934 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11935 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11936 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11937 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11938 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11939 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11940 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11941 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11942 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11943 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11944 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11945 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11946 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11947 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11948 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11949 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11950 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11951 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11952 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11953 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11954 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11955 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11956 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11957 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11958 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11959 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11960 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11961 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11962 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11963 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11964 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11965 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11966 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11967 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11968 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11969 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11970 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11971 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11972 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11973 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11974 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11975 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_NAME_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11976 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_NAME,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11977 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11978 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11979 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11980 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11981 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11982 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11983 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11984 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11985 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11986 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11987 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11988 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11989 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11990 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11991 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11992 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11993 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11994 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11995 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11996 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11997 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11998 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			11999 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			]
		];
	}
}
