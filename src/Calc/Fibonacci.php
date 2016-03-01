<?php


namespace FiftyTwoHertz\Calc;


use FiftyTwoHertz\Group\ElementGroup;

class Fibonacci {

    private $result;

    /**
     * Fibonacci constructor.
     *
     * @param $n
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($n)
    {
        if ($n < 0) {
            throw new \InvalidArgumentException(
                'Value must be positive'
            );
        }

        if ((int)$n === 0 || (int)$n === 1) {
            $this->result = [
                [0, $n],
                [0, 0]
            ];
        } else {
            $fibonacciGroup = [
                [1, 1],
                [1, 0]
            ];
            $powerMatrix = new PowerMatrix(
                $fibonacciGroup,
                (int)$n - 2
            );

            $this->result = $powerMatrix->getResult();
        }
    }

    /**
     * @return int
     */
    public function getResult()
    {
        return (int)$this->result[0][0] + (int)$this->result[0][1];
    }
}