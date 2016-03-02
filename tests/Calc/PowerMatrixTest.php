<?php


namespace FiftyTwoHertz\Tests\Calc;


use FiftyTwoHertz\Calc\PowerMatrix;

class PowerMatrixTest extends \PHPUnit_Framework_TestCase {
    public function testCreateFibonacciGroup()
    {
        return [
            [1, 1],
            [1, 0]
        ];
    }

    /**
     * @depends testCreateFibonacciGroup
     */
    public function testReturnIdentityMatrixForNIsZero($matrix)
    {
        $powerMatrix = new PowerMatrix(
            $matrix,
            0
        );

        $this->assertEquals(
            [
                [1, 0],
                [0, 1]
            ],
            $powerMatrix->getResult()
        );
    }
}