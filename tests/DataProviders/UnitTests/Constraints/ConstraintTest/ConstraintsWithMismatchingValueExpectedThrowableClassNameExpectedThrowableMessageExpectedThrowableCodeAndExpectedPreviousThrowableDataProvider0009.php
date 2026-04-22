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
final readonly class ConstraintsWithMismatchingValueExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider0009 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			9000 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9001 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9002 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9003 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9004 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9005 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9006 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9007 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9008 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9009 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9010 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9011 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9012 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9013 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9014 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9015 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9016 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9017 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9018 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9019 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9020 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9021 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9022 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9023 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9024 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9025 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9026 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9027 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9028 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9029 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9030 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			9031 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9032 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9033 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9034 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9035 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9036 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9037 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9038 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9039 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9040 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9041 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9042 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9043 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9044 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9045 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9046 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9047 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9048 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9049 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9050 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9051 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9052 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9053 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9054 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9055 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9056 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9057 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9058 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9059 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9060 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9061 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9062 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9063 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9064 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9065 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9066 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9067 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9068 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9069 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9070 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9071 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9072 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9073 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9074 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9075 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9076 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9077 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9078 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9079 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9080 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9081 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			9082 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9083 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9084 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9085 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9086 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9087 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9088 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9089 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9090 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9091 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9092 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9093 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9094 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9095 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9096 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9097 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9098 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9099 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9100 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9101 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9102 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9103 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9104 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			9105 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9106 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9107 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9108 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9109 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9110 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9111 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9112 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9113 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9114 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9115 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9116 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			9117 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9118 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9119 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9120 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9121 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9122 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9123 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9124 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9125 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9126 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9127 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9128 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9129 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9130 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9131 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9132 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9133 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9134 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::INTERFACE_NAME ),
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
			9135 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9136 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9137 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9138 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9139 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9140 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9141 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9142 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9143 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9144 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9145 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9146 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9147 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9148 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9149 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9150 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9151 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9152 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9153 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9154 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9155 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9156 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9157 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9158 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			9159 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9160 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9161 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9162 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9163 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9164 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9165 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9166 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9167 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9168 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9169 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9170 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			9171 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9172 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9173 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9174 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9175 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9176 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9177 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9178 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9179 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9180 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9181 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9182 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9183 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9184 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9185 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9186 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9187 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9188 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9189 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_0 ),
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
			9190 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9191 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9192 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9193 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9194 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9195 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9196 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9197 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9198 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9199 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9200 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9201 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9202 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9203 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9204 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9205 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9206 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9207 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9208 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9209 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9210 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9211 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9212 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9213 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			9214 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9215 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9216 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9217 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9218 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9219 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9220 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9221 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9222 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9223 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9224 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9225 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassName' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedPreviousThrowable'  => Values::PREVIOUS_THROWABLE
			],
			9226 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9227 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9228 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9229 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9230 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9231 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9232 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9233 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9234 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9235 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9236 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9237 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9238 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9239 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9240 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9241 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9242 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9243 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9244 => [
				'constraint'                 => $constraint = new IsSubClassOfConstraint( Values::CLASS_NAME_1 ),
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
			9245 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9246 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9247 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9248 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9249 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9250 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9251 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9252 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9253 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9254 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9255 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9256 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9257 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9258 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9259 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9260 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9261 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9262 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9263 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9264 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9265 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9266 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9267 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9268 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9269 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9270 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9271 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9272 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9273 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9274 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9275 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9276 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9277 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9278 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9279 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9280 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9281 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9282 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9283 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9284 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9285 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9286 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9287 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9288 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9289 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9290 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9291 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9292 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9293 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9294 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9295 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9296 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9297 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
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
			9298 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9299 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9300 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9301 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9302 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9303 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9304 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9305 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9306 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9307 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9308 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9309 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9310 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9311 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9312 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9313 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9314 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9315 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9316 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9317 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9318 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9319 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9320 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9321 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9322 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9323 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9324 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9325 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9326 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9327 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9328 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9329 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9330 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9331 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9332 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9333 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9334 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9335 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9336 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9337 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9338 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9339 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9340 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9341 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9342 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9343 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9344 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9345 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9346 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9347 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9348 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9349 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9350 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
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
			9351 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9352 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9353 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9354 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9355 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9356 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9357 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9358 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9359 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9360 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9361 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9362 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9363 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9364 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9365 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9366 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9367 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9368 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9369 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9370 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9371 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9372 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9373 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9374 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9375 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9376 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9377 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9378 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9379 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9380 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9381 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9382 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9383 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9384 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9385 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9386 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9387 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9388 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9389 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9390 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9391 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9392 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9393 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9394 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9395 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9396 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9397 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
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
			9398 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9399 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9400 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9401 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9402 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9403 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9404 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9405 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9406 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9407 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9408 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9409 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9410 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9411 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9412 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9413 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9414 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9415 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9416 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9417 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9418 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9419 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9420 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9421 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9422 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9423 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9424 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9425 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9426 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9427 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9428 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9429 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9430 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9431 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9432 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9433 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9434 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9435 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9436 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9437 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9438 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9439 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9440 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9441 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9442 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9443 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9444 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9445 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
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
			9446 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9447 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9448 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9449 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9450 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9451 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9452 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9453 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9454 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9455 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9456 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9457 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9458 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9459 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9460 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9461 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9462 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9463 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9464 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9465 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9466 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9467 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9468 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9469 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9470 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9471 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9472 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9473 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9474 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9475 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9476 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9477 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9478 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9479 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9480 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9481 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9482 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9483 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9484 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9485 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9486 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9487 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9488 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9489 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9490 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9491 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9492 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9493 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9494 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
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
			9495 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9496 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9497 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9498 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9499 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9500 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9501 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9502 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9503 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9504 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9505 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9506 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9507 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9508 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9509 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9510 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9511 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9512 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9513 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9514 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9515 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9516 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9517 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9518 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9519 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9520 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9521 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9522 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9523 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9524 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9525 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9526 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9527 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9528 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9529 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9530 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9531 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9532 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9533 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9534 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9535 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9536 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9537 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9538 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9539 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9540 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9541 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9542 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9543 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
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
			9544 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9545 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9546 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9547 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9548 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9549 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9550 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9551 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9552 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9553 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9554 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9555 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9556 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9557 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9558 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9559 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9560 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9561 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9562 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9563 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9564 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9565 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9566 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9567 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9568 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9569 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9570 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9571 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9572 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9573 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9574 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9575 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9576 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9577 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9578 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9579 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9580 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9581 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9582 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9583 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9584 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9585 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9586 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9587 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9588 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9589 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9590 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9591 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9592 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9593 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
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
			9594 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9595 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9596 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9597 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9598 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9599 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9600 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9601 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9602 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9603 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9604 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9605 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9606 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9607 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9608 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9609 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9610 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9611 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9612 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9613 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9614 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9615 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9616 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9617 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9618 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9619 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9620 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9621 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9622 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9623 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9624 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9625 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9626 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9627 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9628 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9629 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9630 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9631 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9632 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9633 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9634 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9635 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9636 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9637 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9638 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9639 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9640 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9641 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9642 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9643 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
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
			9644 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9645 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9646 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9647 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9648 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9649 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9650 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9651 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9652 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9653 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9654 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9655 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9656 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9657 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9658 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9659 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9660 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9661 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9662 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9663 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9664 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9665 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9666 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9667 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9668 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9669 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9670 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9671 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9672 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9673 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9674 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9675 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9676 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9677 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9678 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9679 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9680 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9681 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9682 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9683 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9684 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9685 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9686 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9687 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9688 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9689 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9690 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9691 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
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
			9692 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9693 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9694 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9695 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9696 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9697 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9698 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9699 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9700 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9701 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9702 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9703 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9704 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9705 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9706 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9707 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9708 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9709 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9710 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9711 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9712 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9713 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9714 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9715 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9716 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9717 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9718 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9719 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9720 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9721 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9722 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9723 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9724 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9725 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9726 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9727 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9728 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9729 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9730 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9731 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9732 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9733 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9734 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9735 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9736 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9737 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9738 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9739 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
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
			9740 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9741 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9742 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9743 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9744 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9745 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9746 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9747 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9748 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9749 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9750 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9751 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9752 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9753 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9754 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9755 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9756 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9757 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9758 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9759 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9760 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9761 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9762 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9763 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9764 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9765 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9766 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9767 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9768 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9769 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9770 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9771 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9772 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9773 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9774 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9775 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9776 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9777 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9778 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9779 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9780 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9781 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9782 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9783 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9784 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9785 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9786 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9787 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9788 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9789 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
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
			9790 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9791 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9792 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9793 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9794 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9795 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9796 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9797 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9798 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9799 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9800 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9801 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9802 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9803 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9804 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9805 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9806 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9807 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9808 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9809 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9810 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9811 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9812 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9813 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9814 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9815 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9816 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9817 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9818 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9819 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9820 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9821 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9822 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9823 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9824 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9825 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9826 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9827 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9828 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9829 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9830 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9831 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9832 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9833 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9834 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9835 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9836 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9837 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9838 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9839 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
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
			9840 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9841 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9842 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9843 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9844 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9845 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9846 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9847 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9848 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9849 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9850 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9851 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9852 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9853 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9854 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9855 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9856 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9857 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9858 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9859 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9860 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9861 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9862 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9863 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9864 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9865 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9866 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9867 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9868 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9869 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9870 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9871 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9872 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9873 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9874 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9875 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9876 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9877 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9878 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9879 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9880 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9881 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9882 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9883 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9884 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9885 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9886 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9887 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9888 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9889 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9890 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
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
			9891 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9892 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9893 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9894 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9895 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9896 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9897 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9898 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9899 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9900 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9901 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9902 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9903 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9904 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9905 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9906 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9907 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9908 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9909 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9910 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9911 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9912 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9913 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9914 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9915 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9916 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9917 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9918 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9919 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9920 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9921 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9922 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9923 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9924 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9925 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9926 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9927 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9928 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9929 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9930 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9931 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9932 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9933 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9934 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9935 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9936 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9937 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9938 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9939 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9940 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9941 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
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
			9942 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9943 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9944 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9945 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9946 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9947 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9948 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9949 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9950 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9951 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9952 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9953 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9954 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9955 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9956 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9957 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9958 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9959 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9960 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9961 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9962 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9963 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9964 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9965 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9966 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9967 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9968 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9969 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9970 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9971 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9972 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9973 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9974 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9975 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9976 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9977 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9978 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9979 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9980 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9981 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9982 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9983 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9984 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9985 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9986 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9987 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9988 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9989 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
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
			9990 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			9991 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			9992 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			9993 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			9994 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			9995 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			9996 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			9997 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			9998 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			9999 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			]
		];
	}
}
