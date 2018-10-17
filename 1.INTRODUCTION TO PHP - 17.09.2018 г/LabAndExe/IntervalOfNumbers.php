<?php

$num1 = intval(readline());
$num2 = intval(readline());

$start = min($num1, $num2);
$end = max($num1, $num2);

for ($i = $start; $i <= $end; $i++){
    echo $i. PHP_EOL;
}