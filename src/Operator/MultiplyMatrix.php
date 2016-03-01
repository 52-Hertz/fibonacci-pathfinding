<?php


namespace FiftyTwoHertz\Operator;


use FiftyTwoHertz\Group\ElementGroup;

class MultiplyMatrix implements Operator {

    /**
     * MultiplyMatrix constructor.
     *
     * @param array $left
     * @param array $right
     * @return array
     */
    public function calc($left, $right)
    {
        $r  = count($left);
        $c  = count($right[0]);
        $in = count($right);

        // allocate ret val
        $retval = [];
        for ($i=0; $i< $r; $i++) {
            $retval[$i] = [];
        }

        // multiplication here
        for ($ri=0; $ri<$r; $ri++) {
            for ($ci=0; $ci<$c; $ci++) {
                $retval[$ri][$ci] = 0.0;
                for ($j=0; $j<$in; $j++) {
                    $retval[$ri][$ci] += $left[$ri][$j] * $right[$j][$ci];
                }
            }
        }
        return $retval;

        // @TODO: Debug this
//        $result = [];
//        for ($i = 0; $i < $right->getWidth(); $i++) {
//            for ($k = 0; $k < $right->getHeight(); $k++) {
//                for ($j = 0; $j < $left->getHeight(); $j++) {
//                    $result[$i][$j] += $right->getIndex([$i][$k]) * $left->getIndex([$k][$j]);
//                }
//            }
//        }
//        return new ElementGroup($result);
    }
}