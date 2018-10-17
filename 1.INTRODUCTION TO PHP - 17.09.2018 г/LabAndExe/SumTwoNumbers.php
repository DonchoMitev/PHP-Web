<?php

$firstNumber = floatval(readline());
$secondNumber = floatval(readline());
$result = $firstNumber + $secondNumber;
$finalResult = number_format($result, 2 , '.', '');

echo '$firstNumber + $secondNumber = '."$firstNumber + $secondNumber = $finalResult";