<?php


namespace FiftyTwoHertz\Tests\Calc;


use FiftyTwoHertz\Calc\Fibonacci;

class FibonacciTest extends \PHPUnit_Framework_TestCase {

    /**
     * @expectedException InvalidArgumentException
     */
    public function testInvalidArgument()
    {
        $fibonacci = new Fibonacci(
            -1
        );
    }

    public function testZeroValue()
    {
        $fibonacci = new Fibonacci(
            0
        );

        $this->assertEquals(
            0,
            $fibonacci->getResult()
        );
    }

    public function testSecondFibonacciNumber()
    {
        $fibonacci = new Fibonacci(
            2
        );

        $this->assertEquals(
            2,
            $fibonacci->getResult()
        );
    }
}