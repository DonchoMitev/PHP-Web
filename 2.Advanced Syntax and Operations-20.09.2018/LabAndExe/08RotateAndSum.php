<?php

$numbers = array_map('intval', explode(' ', readline()));
//$numbers = [3, 2, 4, -1];
$rotateCount = intval(readline());
//$rotateCount = 2;
$sumArr = array_fill(0, count($numbers), NULL);

for ($i = 0;$i < $rotateCount;$i++){
    $firstElement = $numbers[count($numbers) - 1];
    for ($j = count($numbers) - 1; $j > 0;$j--){
        $numbers[$j] = $numbers[$j - 1];
    }
    $numbers[0] = $firstElement;

    for ($k = 0; $k < count($numbers);$k++){
        $sumArr[$k] += $numbers[$k];
    }
}

echo implode(" ", $sumArr);