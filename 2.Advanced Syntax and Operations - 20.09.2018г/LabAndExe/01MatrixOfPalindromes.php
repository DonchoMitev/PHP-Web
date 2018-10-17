<?php

$input =array_map('intval',explode(' ', readline()));

$rows = $input[0];
$cols = $input[1];
$middle = 'a';
$startAndEnd = 'a';
$matrix = [];

for ($i = 0; $i < $rows;$i++){
    for ($j = 0; $j < $cols;$j++){
        $matrix[$i][$j] = $startAndEnd . $middle++ . $startAndEnd;
    }
    $startAndEnd++;
    $middle = $startAndEnd;
}

foreach ($matrix as $row){
    foreach ($row as $col) {
        echo $col . " ";
    }

    echo PHP_EOL;
}