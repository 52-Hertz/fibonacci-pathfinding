<?php

require_once __DIR__ . '/vendor/autoload.php';

use FiftyTwoHertz\Calc\Fibonacci;

for ($i = 1; $i <= 4; $i++) {
    $value = $i;
    $fibonacci = new Fibonacci(
        $value
    );
    echo "The " . $value . "-nth value of Fibonacci is " . $fibonacci->getResult() . "\n";
}

