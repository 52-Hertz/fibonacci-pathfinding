<?php


namespace FiftyTwoHertz\Calc;


use FiftyTwoHertz\Group\ElementGroup;
use FiftyTwoHertz\Operator\MultiplyMatrix;
use FiftyTwoHertz\Operator\Operator;

class PowerAccumulate {
    /**
     * PowerAccumulate calc.
     *
     * r the element group element to multiply the result by.
     * a the element group element to be raised to the power \p n.
     * n the non-negative integer power to raise \p a to.
     * op the element group operation.
     *
     * @param array                                 $r
     * @param array                                 $a
     * @param int                                   $n
     * @param \FiftyTwoHertz\Calc\MultiplyMatrix    $op
     * @return int
     */
    public function calc($r, $a, $n, MultiplyMatrix $op)
    {
        if ($n === 0) {
            return $r;
        }

        while(true) {
            if ($n % 2 !== 0) {
                $r = $op->calc($r, $a);

                if ((int)$n === 1) {
                    break;
                }
            }

            $a = $op->calc($a, $a);
            $n = floor($n /= 2);
        }
        return $r;
    }
}