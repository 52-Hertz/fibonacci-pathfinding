<?php


namespace FiftyTwoHertz\Tests\Operator;


use FiftyTwoHertz\Operator\MultiplyMatrix;

class MultiplyMatrixTest extends \PHPUnit_Framework_TestCase {
    public function testMultiplicationOne()
    {
        $multiMatrix = new MultiplyMatrix();

        $left = [
            [1, 2],
            [3, 4],
            [5, 6],
        ];
        $right = [
            [7, 8],
            [9, 10]
        ];

        $result = $multiMatrix->calc(
            $left,
            $right
        );
        $this->assertEquals(
            [
                [25, 28],
                [57, 64],
                [89, 100],
            ],
            $result
        );
    }

    public function testMultiplicationTwo()
    {
        $multiMatrix = new MultiplyMatrix();

        $left = [
            [1, 0],
            [0, 1],
        ];
        $right = [
            [42, 43],
            [44, 45],
        ];

        $result = $multiMatrix->calc(
            $left,
            $right
        );
        $this->assertEquals(
            $right,
            $result
        );
    }

    public function testMultiplicationNIsOne()
    {
        $multiMatrix = new MultiplyMatrix();

        $left = [
            [2, 1],
            [1, 1],
        ];
        $right = [
            [1, 1],
            [1, 0],
        ];

        $result = $multiMatrix->calc(
            $left,
            $right
        );
        $this->assertEquals(
            [
                [3, 2],
                [2, 1]
            ],
            $result
        );
    }
}