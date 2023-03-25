<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

require_once 'Calculator.php';

class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        $calculator = new Calculator();
        $result = $calculator->sum(1, 2);
        $this->assertEquals(3, $result);

        $result = $calculator->sum(-1, 1);
        $this->assertEquals(0, $result);

        $result = $calculator->sum(0.1, 0.2);
        $this->assertEquals(0.3, $result, '', 0.0001);
    }
}
