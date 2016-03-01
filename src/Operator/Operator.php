<?php


namespace FiftyTwoHertz\Operator;


use FiftyTwoHertz\Group\ElementGroup;

interface Operator {
    public function calc($left, $right);
}