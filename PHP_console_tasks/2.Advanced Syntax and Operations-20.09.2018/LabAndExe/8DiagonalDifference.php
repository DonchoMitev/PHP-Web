<?php

$count = intval(readline());
//$count  = 3;

$matrix = [];

for ($i = 0;$i < $count;$i++){
    $matrix[$i] = array_map('intval', explode(' ', readline()));
    //$matrix[$i] = [11, 2, 4];
}

$firstSum = 0;
$secondSum = 0;

for ($i = 0;$i < count($matrix);$i++){
    for ($j = $i;$j < $i + 1;$j++){
        $firstSum += $matrix[$i][$j];
        $secondSum += $matrix[$i][$count - 1 - $i];
    }
}

$difference = abs($firstSum - $secondSum);

echo $difference;