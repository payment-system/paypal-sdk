<?php

namespace PaymentSystem\PaypalSdk\Tests;

use PaymentSystem\PaypalSdk\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase{
    
    /**
     * @test
     */
    public function itSum() {
        $calculator = new Calculator();
        $sum = $calculator->sum(7, 8);

        $this->assertSame(15, $sum);
    }
}