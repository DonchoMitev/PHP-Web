<?php

$rowsAndCols = array_map('intval', explode(', ', readline()));
$matrix = [];
//$rowsAndCols = [3, 6];
$rows = $rowsAndCols[0];
$cols = $rowsAndCols[1];
$sum = 0;

for ($row = 0; $row < $rows;$row++ ){
    $arrayWhitFill = explode(', ', readline());
    for ($col = 0; $col < $cols;$col++){
        $matrix[$row][$col] = $arrayWhitFill[$col];
        $sum += $arrayWhitFill[$col];
    }
}

echo $rows . PHP_EOL;
echo $cols . PHP_EOL;
echo $sum . PHP_EOL;