<?php

namespace test;

require_once __DIR__ . '/../bootstrap.php';

use PHPUnit\Framework\TestCase;
use src\Calculator;

class CalculatorTest extends TestCase
{
    public function test_when_sum_given_one_one_then_two()
    {
        $calc = new Calculator();
        $response = $calc->sum(1, 1);

        $this->assertEquals(2, $response);
    }

}