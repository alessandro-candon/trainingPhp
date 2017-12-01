<?php

namespace test;

require_once __DIR__ . '/../bootstrap.php';

use PHPUnit\Framework\TestCase;
use src\Calculator;

class CalculatorTest extends TestCase
{
    public static function setUpBeforeClass()
    {
        echo "setUpBeforeClass \n";
    }

    public function setUp()
    {
        echo "setUp \n";
    }

    public function tearDown()
    {
        echo "tearDown \n";
    }

    public static function tearDownAfterClass()
    {
        echo "tearDownAfterClass \n";
    }

    public function test_when_sum_given_one_one_then_two()
    {
        $calc = new Calculator();
        $response = $calc->sum(1, 1);

        $this->assertEquals(2, $response);
    }

    public function testTrue()
    {
        $this->assertTrue(true);
    }

}