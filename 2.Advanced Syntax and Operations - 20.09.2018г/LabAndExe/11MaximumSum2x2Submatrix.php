<?php

$commandLine = explode(', ', readline());

$rowCount = intval($commandLine[0]);
$colCount = intval($commandLine[1]);

$matrix = [];

$currentSum = 0;
$maxSum = 0;

$startRow = 0;
$startCol = 0;

for ($i = 0;$i < $rowCount;$i++){
    $matrix[$i] = array_map('intval', explode(' ', readline()));
}

for ($i = 0;$i < $rowCount - 1;$i++){
    for ($j = 0;$j < $colCount - 1;$j++){
        $currentSum = $matrix[$i][$j]
                      +$matrix[$i][$j+1]
                      +$matrix[$i+1][$j]
                      +$matrix[$i+1][$j+1];
        if ($currentSum > $maxSum){
            $maxSum = $currentSum;
            $startRow = $i;
            $startCol = $j;
        }
    }
}

for ($i = $startRow; $i < $startRow + 2;$i++){
    for ($j = $startCol; $j < $startCol + 2;$j++){
        echo $matrix[$i][$j] . " ";
    }
    echo PHP_EOL;
}

echo $maxSum;