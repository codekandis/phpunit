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
final readonly class ConstraintsWithMismatchingValueExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider0010 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			10000 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10001 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10002 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10003 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10004 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10005 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10006 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10007 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10008 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10009 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10010 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10011 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10012 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10013 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10014 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10015 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10016 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10017 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10018 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10019 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10020 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10021 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10022 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10023 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10024 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10025 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10026 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10027 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10028 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10029 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10030 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10031 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10032 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10033 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10034 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10035 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10036 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10037 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10038 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
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
			10039 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10040 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10041 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10042 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10043 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10044 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10045 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10046 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10047 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10048 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10049 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10050 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10051 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10052 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10053 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10054 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10055 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10056 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10057 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10058 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10059 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10060 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10061 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10062 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10063 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10064 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10065 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10066 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10067 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10068 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10069 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10070 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10071 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10072 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10073 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10074 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10075 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10076 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10077 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10078 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10079 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10080 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10081 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10082 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10083 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10084 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
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
			10085 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10086 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10087 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10088 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10089 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10090 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10091 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10092 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10093 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10094 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10095 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10096 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10097 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10098 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10099 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10100 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10101 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10102 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10103 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10104 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10105 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10106 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10107 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10108 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10109 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10110 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10111 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10112 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10113 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10114 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10115 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10116 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10117 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10118 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10119 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10120 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10121 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10122 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10123 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10124 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10125 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10126 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10127 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10128 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10129 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10130 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
			10131 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10132 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10133 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10134 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10135 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10136 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10137 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10138 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10139 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10140 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10141 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10142 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10143 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10144 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10145 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10146 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10147 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10148 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10149 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10150 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10151 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10152 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10153 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10154 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10155 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10156 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10157 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10158 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10159 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10160 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10161 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10162 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10163 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10164 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10165 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10166 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10167 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10168 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10169 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10170 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10171 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10172 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10173 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10174 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10175 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
			10176 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10177 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10178 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10179 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10180 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10181 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10182 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10183 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10184 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10185 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10186 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10187 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10188 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10189 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10190 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10191 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10192 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10193 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10194 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10195 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10196 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10197 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10198 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10199 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10200 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10201 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10202 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10203 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10204 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10205 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10206 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10207 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10208 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10209 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10210 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10211 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10212 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10213 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10214 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10215 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10216 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10217 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10218 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10219 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10220 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10221 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
			10222 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10223 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10224 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10225 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10226 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10227 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10228 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10229 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10230 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10231 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10232 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10233 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10234 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10235 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10236 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10237 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10238 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10239 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10240 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10241 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10242 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10243 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10244 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10245 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10246 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10247 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10248 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10249 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10250 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10251 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10252 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10253 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10254 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10255 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10256 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10257 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10258 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10259 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10260 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
			10261 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10262 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10263 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10264 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10265 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10266 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10267 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10268 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10269 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10270 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10271 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10272 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10273 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10274 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10275 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10276 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10277 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10278 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10279 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10280 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10281 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10282 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10283 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10284 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10285 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10286 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10287 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10288 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10289 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10290 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10291 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10292 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10293 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10294 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10295 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10296 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10297 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10298 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10299 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10300 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
			10301 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10302 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10303 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10304 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10305 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10306 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10307 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10308 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10309 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10310 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10311 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10312 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10313 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10314 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10315 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10316 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10317 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10318 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10319 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10320 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10321 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10322 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10323 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10324 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10325 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10326 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10327 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10328 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10329 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10330 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10331 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10332 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10333 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10334 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10335 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10336 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10337 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10338 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10339 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10340 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10341 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10342 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10343 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
			10344 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10345 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10346 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10347 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10348 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10349 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10350 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10351 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10352 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10353 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10354 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10355 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10356 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10357 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10358 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10359 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10360 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10361 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10362 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10363 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10364 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10365 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10366 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10367 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10368 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10369 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10370 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10371 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10372 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10373 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10374 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10375 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10376 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10377 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10378 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10379 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10380 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10381 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10382 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10383 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10384 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10385 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10386 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10387 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
			10388 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10389 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10390 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10391 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10392 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10393 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10394 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10395 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10396 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10397 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10398 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10399 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10400 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10401 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10402 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10403 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10404 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10405 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10406 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10407 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10408 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10409 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10410 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10411 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10412 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10413 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10414 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10415 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10416 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10417 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10418 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10419 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10420 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10421 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10422 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10423 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10424 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10425 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10426 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10427 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10428 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10429 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10430 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10431 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10432 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10433 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10434 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10435 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10436 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10437 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10438 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10439 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10440 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
			10441 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10442 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10443 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10444 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10445 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10446 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10447 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10448 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10449 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10450 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10451 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10452 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10453 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10454 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10455 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10456 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10457 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10458 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10459 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10460 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10461 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10462 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10463 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10464 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10465 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10466 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10467 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10468 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10469 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10470 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10471 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10472 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10473 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10474 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10475 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10476 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10477 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10478 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10479 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10480 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10481 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10482 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10483 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10484 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10485 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10486 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10487 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10488 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10489 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10490 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10491 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10492 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10493 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
			10494 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10495 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10496 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10497 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10498 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10499 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10500 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10501 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10502 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10503 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10504 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10505 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10506 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10507 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10508 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10509 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10510 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10511 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10512 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10513 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10514 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10515 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10516 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10517 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10518 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10519 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10520 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10521 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10522 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10523 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10524 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10525 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10526 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10527 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10528 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10529 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10530 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10531 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10532 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10533 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10534 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10535 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10536 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10537 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10538 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10539 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10540 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10541 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10542 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10543 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			10544 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10545 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10546 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10547 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10548 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10549 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10550 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10551 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10552 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10553 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10554 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10555 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10556 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10557 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10558 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10559 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10560 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10561 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10562 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10563 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10564 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10565 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10566 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10567 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10568 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10569 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10570 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10571 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10572 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10573 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10574 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10575 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10576 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10577 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10578 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10579 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10580 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10581 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10582 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10583 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10584 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10585 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10586 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10587 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10588 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10589 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10590 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10591 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10592 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10593 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			10594 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10595 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10596 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10597 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10598 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10599 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10600 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10601 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10602 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10603 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10604 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10605 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10606 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10607 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10608 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10609 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10610 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10611 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10612 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10613 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10614 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10615 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10616 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10617 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10618 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10619 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10620 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10621 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10622 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10623 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10624 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10625 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10626 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10627 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10628 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10629 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10630 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10631 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10632 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10633 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10634 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10635 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10636 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10637 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10638 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10639 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10640 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10641 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			10642 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10643 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10644 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10645 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10646 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10647 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10648 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10649 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10650 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10651 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10652 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10653 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10654 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10655 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10656 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10657 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10658 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10659 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10660 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10661 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10662 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10663 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10664 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10665 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10666 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10667 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10668 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10669 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10670 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10671 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10672 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10673 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10674 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10675 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10676 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10677 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10678 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10679 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10680 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10681 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10682 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10683 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10684 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10685 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10686 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10687 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10688 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10689 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			10690 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10691 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10692 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10693 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10694 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10695 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10696 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10697 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10698 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10699 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10700 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10701 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10702 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10703 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10704 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10705 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10706 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10707 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10708 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10709 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10710 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10711 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10712 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10713 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10714 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10715 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10716 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10717 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10718 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10719 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10720 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10721 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10722 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10723 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10724 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10725 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10726 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10727 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10728 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10729 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10730 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10731 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10732 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10733 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10734 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10735 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10736 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10737 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10738 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10739 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10740 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			10741 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10742 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10743 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10744 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10745 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10746 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10747 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10748 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10749 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10750 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10751 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10752 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10753 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10754 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10755 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10756 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10757 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10758 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10759 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10760 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10761 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10762 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10763 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10764 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10765 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10766 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10767 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10768 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10769 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10770 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10771 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10772 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10773 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10774 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10775 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10776 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10777 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10778 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10779 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10780 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10781 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10782 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10783 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10784 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10785 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10786 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10787 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10788 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10789 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10790 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10791 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			10792 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10793 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10794 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10795 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10796 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10797 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10798 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10799 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10800 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10801 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10802 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10803 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10804 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10805 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10806 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10807 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10808 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10809 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10810 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10811 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10812 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10813 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10814 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10815 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10816 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10817 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10818 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10819 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10820 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10821 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10822 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10823 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10824 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10825 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10826 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10827 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10828 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10829 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10830 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10831 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10832 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10833 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10834 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10835 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10836 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10837 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10838 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10839 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10840 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10841 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			10842 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10843 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10844 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10845 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10846 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10847 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10848 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10849 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10850 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10851 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10852 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10853 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10854 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10855 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10856 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10857 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10858 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10859 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10860 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10861 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10862 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10863 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10864 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10865 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10866 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10867 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10868 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10869 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10870 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10871 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10872 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10873 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10874 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10875 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10876 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10877 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10878 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10879 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10880 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10881 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10882 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10883 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10884 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10885 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10886 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10887 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10888 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10889 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10890 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10891 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			10892 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10893 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10894 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10895 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10896 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10897 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10898 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10899 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10900 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10901 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10902 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10903 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10904 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10905 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10906 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10907 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10908 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10909 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10910 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10911 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10912 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10913 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10914 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10915 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10916 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10917 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10918 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10919 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10920 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10921 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10922 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10923 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10924 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10925 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10926 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10927 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10928 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10929 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10930 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10931 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10932 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10933 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10934 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10935 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10936 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10937 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			10938 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10939 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10940 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10941 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10942 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10943 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10944 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10945 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10946 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10947 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10948 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10949 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10950 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10951 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10952 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10953 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10954 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10955 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10956 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10957 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10958 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10959 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10960 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10961 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10962 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10963 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10964 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10965 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10966 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10967 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10968 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10969 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10970 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10971 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10972 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10973 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10974 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10975 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10976 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10977 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10978 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10979 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10980 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10981 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10982 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10983 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			10984 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			10985 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			10986 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			10987 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			10988 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			10989 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			10990 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			10991 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			10992 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			10993 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			10994 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			10995 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			10996 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			10997 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			10998 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			10999 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			]
		];
	}
}
