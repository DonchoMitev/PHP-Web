<?php

$numbers = array_map('intval', explode(' ', readline()));

$sum = 0;
$num = '';

for ($i = 0;$i < count($numbers);$i++){
    $tempN = $numbers[$i];

    while($tempN != 0){
        $n = $tempN % 10;
        //echo $n;
        $tempN = intval($tempN / 10);
        //echo $tempN;
        $num .= $n;
        //echo $num . PHP_EOL;
        $n = 0;
    }
    $sum += intval($num);
    $num = '';

}

echo $sum;