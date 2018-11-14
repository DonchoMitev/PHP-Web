<?php

$n = intval(readline());

$start = 1;
$sum = 0;

while ($n != 0){
    if ($start % 2 != 0){
        echo $start . PHP_EOL;
        $sum += $start;
        $n--;
    }
    $start++;
};

echo "Sum: $sum";