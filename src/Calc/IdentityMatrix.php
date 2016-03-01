<?php


namespace FiftyTwoHertz\Calc;


class IdentityMatrix {
    public function calc($n)
    {
        $return = [];

        for ($i = 0; $i < $n; ++$i) {
            $return[] = [];

            for ($j = 0; $j < $n; ++$j) {
                $return[$i][] = ($i == $j) ? 1 : 0;
            }
        }

        return $return;
    }
}