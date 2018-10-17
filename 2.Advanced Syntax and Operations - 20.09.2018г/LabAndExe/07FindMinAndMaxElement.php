<?php

$rowsAndColumns = explode(' ', readline());

$rows = intval($rowsAndColumns[0]);
$cols = intval($rowsAndColumns[1]);

$matrix = [];

$min = PHP_INT_MAX;
$max = PHP_INT_MIN;


for ($i = 0; $i < $rows; $i++){
    $matrix[$i] = array_map('intval', explode(', ', readline()));
}

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        $element = $matrix[$i][$j];

        if ($element < $min){
            $min = $element;
        }
        if ($element > $max){
            $max = $element;
        }
    }
}

echo "Min: $min" . PHP_EOL;
echo "Max: $max";

