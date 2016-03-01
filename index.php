<?php

require_once __DIR__ . '/vendor/autoload.php';

use FiftyTwoHertz\Calc\Fibonacci;
use FiftyTwoHertz\Operator\MultiplyMatrix;

//$multiplyMatrix = new MultiplyMatrix();
//print_r($multiplyMatrix->calc(
//    [
//        [1, 2],
//        [3, 4],
//        [5, 6]
//    ],
//    [
//        [1, 2, 3, 4],
//        [5, 6, 7, 8]
//    ]
//));
//die('done');



for ($i = 1; $i <= 5; $i++) {
    $value = $i;
    $fibonacci = new Fibonacci(
        $value
    );
    echo "The " . $value . "-nth value of Fibonacci is " . $fibonacci->getResult() . "\n";
}

