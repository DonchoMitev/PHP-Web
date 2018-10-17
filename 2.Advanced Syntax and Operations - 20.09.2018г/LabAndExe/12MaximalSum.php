<?php

$commandLine = explode(' ', readline());

$rowCount = intval($commandLine[0]);
$colCount = intval($commandLine[1]);

$matrix = [];

$maxSum = 0;

$startRow = 0;
$startCol = 0;

for ($i = 0;$i < $rowCount;$i++){
    $matrix[$i] = array_map('intval', explode(' ', readline()));
}

for ($i = 0;$i < $rowCount - 2;$i++){
    for ($j = 0;$j < $colCount - 2;$j++){
        $currentSum =
             $matrix[$i][$j]
            +$matrix[$i][$j+1]
            +$matrix[$i][$j + 2]

            +$matrix[$i+1][$j]
            +$matrix[$i+1][$j+1]
            +$matrix[$i + 1][$j + 2]

            +$matrix[$i + 2][$j]
            +$matrix[$i + 2][$j+1]
            +$matrix[$i + 2][$j+2];
        if ($currentSum > $maxSum){
            $maxSum = $currentSum;
            $startRow = $i;
            $startCol = $j;
        }
    }
}

echo "Sum = $maxSum" . PHP_EOL;

for ($i = $startRow; $i < $startRow + 3;$i++){
    for ($j = $startCol; $j < $startCol + 3;$j++){
        echo $matrix[$i][$j] . " ";
    }
    echo PHP_EOL;
}

