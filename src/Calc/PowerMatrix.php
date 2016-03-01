<?php


namespace FiftyTwoHertz\Calc;


use FiftyTwoHertz\Group\ElementGroup;
use FiftyTwoHertz\Operator\MultiplyMatrix;

class PowerMatrix {
    private $result;

    /**
     * PowerMatrix constructor.
     *
     * @param array      $m
     * @param int        $n
     */
    public function __construct($m, $n)
    {
        $o = new MultiplyMatrix();
        $powerAccumulate = new PowerAccumulate();
        $this->result = $powerAccumulate->calc($m, $m, $n, $o);
    }

    public function getResult()
    {
        return $this->result;
    }
}