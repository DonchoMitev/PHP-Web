<?php

$countAndType = explode(', ', readline());
//$countAndType = [4, 'b'];

$matrix = [];
$count = 1;

$rowsXCows = intval($countAndType[0]);
$type = strtolower($countAndType[1]);


function printMatrix($matrix)
{
    foreach ($matrix as $row) {
        foreach ($row as $col) {
            echo $col . " ";
        }
        echo PHP_EOL;
    }
}

switch ($type) {
    case 'a':
        for ($i = 0; $i < $rowsXCows; $i++) {
            for ($j = 0; $j < $rowsXCows; $j++) {
                $matrix[$j][$i] = $count++;
            }
        }
        printMatrix($matrix);
        break;
    case 'b':
        for ($i = 0; $i < $rowsXCows; $i++) {
            for ($j = 0; $j < $rowsXCows; $j++) {

                if ($i % 2 != 0){
                    $matrix[$rowsXCows - 1 - $j][$i] = $count++;
                }else{
                    $matrix[$j][$i] = $count++;
                }
            }
        }
        printMatrix($matrix);
        break;
}



