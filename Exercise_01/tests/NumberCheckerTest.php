<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../index.php';

final class NumberCheckerTest extends TestCase {
    public function testIsEvenWithEvenNumber() {
        $checker = new NumberChecker(8);
        $this->assertTrue($checker->isEven());
    }

    public function testIsEvenWithOddNumber() {
        $checker = new NumberChecker(5);
        $this->assertFalse($checker->isEven());
    }

    public function testIsPositiveWithPositiveNumber() {
        $checker = new NumberChecker(12);
        $this->assertTrue($checker->isPositive());
    }

    public function testIsPositiveWithNegativeNumber() {
        $checker = new NumberChecker(-12);
        $this->assertFalse($checker->isPositive());
    }
}