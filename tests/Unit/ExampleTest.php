<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }
/*    
    public function testvalue():void
    {
        $a = 1;
        $b = 3;
        $addition = app('App\Http\Controllers\OperationControl')->add($a,$b);
        $this->assertEquals(($a + $b), $addition);
    }
*/
    public function testRestar():void
    {   
        $a = 9;
        $b = 3;
        $result = app('App\Http\Controllers\OperationControl')->Restar($a,$b);
        $this->assertSame(2, $result);
        $this->assertNotEquals(6, $result);
    }

    public function testMultiplicar():void
    {   
        $c = 4;
        $d = 3;
        $result = app('App\Http\Controllers\OperationControl')->Multiplicar($c,$d);
        $this->assertGreaterThan(10, $result);
    }

    public function testDividir():void
    {   
        $e = 100;
        $f = 50;
        $result = app('App\Http\Controllers\OperationControl')->Dividir($e,$f);
        $this->assertLessThanOrEqual(5, $result);
    }

    public function testMultiplicarDecimal():void
    {   
        $g = 2;
        $h = 2;
        $result = app('App\Http\Controllers\OperationControl')->Multiplicardec($g,$h);
        $this->assertIsFloat($result);
    }
}
