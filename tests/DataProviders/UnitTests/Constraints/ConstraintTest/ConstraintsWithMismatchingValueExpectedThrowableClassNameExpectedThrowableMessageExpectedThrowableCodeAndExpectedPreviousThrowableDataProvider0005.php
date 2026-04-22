<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\ConstraintTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Accessors\ConstraintExposingValueToTypeStringFragmentMethodAccessor;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use PHPUnit\Framework\ExpectationFailedException;
use CodeKandis\PhpUnit\Constraints\ArrayContainsKeyedSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\ArrayContainsUnkeyedSubsetConstraint;

/**
 * Represents a data provider providing constraints with mismatching value, expected throwable class name, expected throwable message, expected throwable code and expected previous throwable.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintsWithMismatchingValueExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider0005 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			5000 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5001 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5002 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5003 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5004 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5005 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5006 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5007 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5008 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5009 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5010 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5011 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5012 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5013 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5014 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5015 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5016 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5017 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5018 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5019 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5020 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5021 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5022 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5023 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5024 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5025 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5026 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5027 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5028 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5029 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			5030 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5031 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5032 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5033 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5034 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5035 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5036 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5037 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5038 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5039 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5040 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5041 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5042 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5043 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5044 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5045 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5046 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5047 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5048 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5049 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5050 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5051 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5052 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5053 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5054 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5055 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5056 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5057 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5058 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5059 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5060 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5061 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5062 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5063 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5064 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5065 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5066 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5067 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5068 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5069 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5070 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5071 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5072 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5073 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5074 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5075 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5076 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5077 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5078 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5079 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5080 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5081 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5082 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			5083 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5084 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5085 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5086 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5087 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5088 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5089 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5090 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5091 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5092 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5093 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5094 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5095 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5096 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5097 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5098 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5099 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5100 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5101 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5102 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5103 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5104 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5105 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5106 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5107 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5108 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5109 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5110 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5111 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5112 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5113 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5114 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5115 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5116 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5117 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5118 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5119 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5120 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5121 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5122 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5123 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5124 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5125 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5126 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5127 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5128 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5129 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5130 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5131 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5132 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5133 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			5134 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5135 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5136 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5137 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5138 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5139 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5140 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5141 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5142 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5143 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5144 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5145 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5146 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5147 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5148 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5149 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5150 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5151 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5152 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5153 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5154 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5155 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5156 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5157 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5158 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5159 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5160 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5161 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5162 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5163 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5164 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5165 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5166 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5167 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5168 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5169 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5170 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5171 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5172 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5173 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5174 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5175 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5176 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5177 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5178 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5179 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5180 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5181 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5182 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5183 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5184 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			5185 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5186 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5187 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5188 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5189 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5190 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5191 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5192 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5193 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5194 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5195 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5196 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5197 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5198 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5199 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5200 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5201 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5202 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5203 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5204 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5205 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5206 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5207 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5208 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5209 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5210 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5211 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5212 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5213 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5214 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5215 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5216 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5217 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5218 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5219 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5220 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5221 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5222 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5223 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5224 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5225 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5226 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5227 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5228 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5229 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5230 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5231 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5232 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5233 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5234 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5235 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5236 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5237 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			5238 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5239 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5240 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5241 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5242 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5243 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5244 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5245 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5246 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5247 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5248 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5249 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5250 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5251 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5252 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5253 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5254 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5255 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5256 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5257 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5258 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5259 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5260 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5261 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5262 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5263 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5264 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5265 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5266 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5267 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5268 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5269 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5270 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5271 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5272 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5273 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5274 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5275 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5276 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5277 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5278 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5279 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5280 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5281 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5282 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5283 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5284 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5285 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5286 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5287 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5288 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5289 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5290 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			5291 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5292 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5293 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5294 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5295 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5296 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5297 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5298 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5299 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5300 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5301 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5302 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5303 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5304 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5305 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5306 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5307 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5308 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5309 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5310 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5311 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5312 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5313 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5314 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5315 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5316 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5317 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5318 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5319 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5320 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5321 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5322 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5323 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5324 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5325 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5326 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5327 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5328 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5329 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5330 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5331 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5332 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5333 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5334 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5335 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5336 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5337 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5338 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5339 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5340 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5341 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5342 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5343 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			5344 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5345 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5346 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5347 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5348 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5349 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5350 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5351 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5352 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5353 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5354 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5355 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5356 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5357 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5358 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5359 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5360 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5361 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5362 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5363 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5364 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5365 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5366 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5367 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5368 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5369 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5370 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5371 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5372 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5373 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5374 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5375 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5376 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5377 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5378 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5379 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5380 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5381 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5382 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5383 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5384 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5385 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5386 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5387 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5388 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5389 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5390 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5391 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5392 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5393 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5394 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5395 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5396 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			5397 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5398 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5399 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5400 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5401 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5402 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5403 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5404 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5405 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5406 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5407 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5408 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5409 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5410 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5411 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5412 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5413 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5414 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5415 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5416 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5417 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5418 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5419 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5420 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5421 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5422 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5423 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5424 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5425 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5426 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5427 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5428 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5429 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5430 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5431 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5432 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5433 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5434 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5435 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5436 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5437 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5438 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5439 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5440 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5441 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5442 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5443 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5444 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5445 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5446 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5447 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			5448 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5449 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5450 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5451 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5452 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5453 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5454 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5455 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5456 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5457 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5458 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5459 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5460 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5461 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5462 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5463 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5464 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5465 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5466 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5467 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5468 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5469 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5470 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5471 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5472 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5473 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5474 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5475 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5476 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5477 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5478 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5479 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5480 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5481 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5482 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5483 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5484 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5485 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5486 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5487 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5488 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5489 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5490 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5491 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5492 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5493 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5494 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5495 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5496 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5497 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5498 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			5499 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5500 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5501 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5502 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5503 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5504 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5505 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5506 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5507 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5508 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5509 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5510 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5511 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5512 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5513 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5514 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5515 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5516 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5517 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5518 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5519 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5520 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5521 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5522 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5523 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5524 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5525 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5526 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5527 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5528 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5529 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5530 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5531 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5532 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5533 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5534 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5535 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5536 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5537 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5538 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5539 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5540 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5541 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5542 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5543 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5544 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5545 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			5546 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5547 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5548 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5549 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5550 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5551 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5552 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5553 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5554 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5555 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5556 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5557 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5558 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5559 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5560 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5561 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5562 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5563 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5564 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5565 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5566 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5567 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5568 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5569 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5570 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5571 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5572 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5573 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5574 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5575 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5576 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5577 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5578 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5579 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5580 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5581 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5582 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5583 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5584 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5585 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5586 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5587 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5588 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5589 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5590 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5591 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5592 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5593 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			5594 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5595 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5596 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5597 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5598 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5599 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5600 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5601 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5602 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5603 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5604 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5605 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5606 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5607 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5608 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5609 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5610 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5611 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5612 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5613 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5614 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5615 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5616 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5617 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5618 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5619 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5620 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5621 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5622 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5623 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5624 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5625 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5626 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5627 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5628 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5629 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5630 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5631 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5632 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5633 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5634 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5635 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5636 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5637 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5638 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5639 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5640 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5641 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5642 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5643 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5644 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5645 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5646 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5647 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			5648 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5649 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5650 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5651 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5652 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5653 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5654 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5655 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5656 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5657 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5658 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5659 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5660 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5661 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5662 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5663 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5664 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5665 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5666 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5667 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5668 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5669 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5670 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5671 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5672 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5673 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5674 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5675 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5676 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5677 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5678 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5679 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5680 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5681 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5682 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5683 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5684 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5685 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5686 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5687 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5688 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5689 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5690 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5691 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5692 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5693 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5694 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5695 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5696 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5697 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5698 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5699 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5700 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5701 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			5702 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5703 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5704 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5705 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5706 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5707 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5708 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5709 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5710 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5711 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5712 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5713 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5714 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5715 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5716 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5717 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5718 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5719 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5720 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5721 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5722 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5723 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5724 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5725 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5726 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5727 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5728 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5729 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5730 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5731 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5732 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5733 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5734 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5735 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5736 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5737 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5738 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5739 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5740 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5741 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5742 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5743 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5744 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5745 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5746 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5747 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5748 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5749 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5750 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5751 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5752 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5753 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5754 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			5755 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5756 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5757 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5758 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5759 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5760 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5761 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5762 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5763 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5764 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5765 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5766 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5767 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5768 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5769 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5770 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5771 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5772 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5773 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5774 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5775 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5776 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5777 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5778 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5779 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5780 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5781 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5782 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5783 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5784 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5785 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5786 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5787 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5788 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5789 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5790 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5791 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5792 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5793 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5794 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5795 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5796 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5797 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5798 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5799 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5800 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5801 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5802 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5803 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5804 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5805 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5806 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5807 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			5808 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5809 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5810 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5811 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5812 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5813 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5814 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5815 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5816 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5817 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5818 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5819 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5820 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5821 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5822 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5823 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5824 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5825 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5826 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5827 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5828 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5829 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5830 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5831 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5832 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5833 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5834 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5835 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5836 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5837 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5838 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5839 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5840 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5841 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5842 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5843 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5844 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5845 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5846 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5847 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5848 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5849 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5850 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5851 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5852 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5853 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5854 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5855 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5856 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5857 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5858 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5859 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5860 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			5861 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5862 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5863 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5864 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5865 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5866 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5867 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5868 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5869 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5870 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5871 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5872 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5873 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5874 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5875 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5876 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5877 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5878 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5879 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5880 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5881 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5882 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5883 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5884 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5885 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5886 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5887 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5888 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5889 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5890 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5891 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5892 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5893 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5894 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5895 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5896 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5897 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5898 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5899 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5900 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5901 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5902 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5903 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5904 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5905 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5906 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5907 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5908 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5909 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5910 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5911 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5912 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5913 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			5914 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5915 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5916 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5917 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5918 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5919 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5920 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5921 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5922 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5923 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5924 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5925 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5926 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5927 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5928 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5929 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5930 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5931 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5932 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5933 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5934 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5935 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5936 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5937 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5938 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5939 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5940 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5941 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5942 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5943 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5944 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5945 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5946 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5947 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5948 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5949 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5950 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5951 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5952 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5953 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5954 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5955 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5956 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5957 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5958 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5959 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5960 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5961 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5962 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5963 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5964 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5965 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5966 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5967 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
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
			5968 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5969 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5970 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5971 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5972 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5973 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5974 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5975 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5976 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5977 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5978 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5979 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5980 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5981 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5982 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5983 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5984 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5985 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5986 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5987 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5988 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5989 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5990 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5991 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5992 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5993 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5994 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5995 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5996 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5997 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5998 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			5999 => [
				'constraint'                 => $constraint = new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
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
			]
		];
	}
}
