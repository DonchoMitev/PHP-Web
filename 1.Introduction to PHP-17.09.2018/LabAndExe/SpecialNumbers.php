<?php

$num = intval(readline());


for ($i = 1; $i <= $num; $i++){
    $temp = $i;
    $sum = 0;
    $bool = "False";
    while ($temp != 0){
        $sum += $temp % 10;
        $temp /= 10;
    }

 //echo $sum, PHP_EOL;

    if ($sum == 5 || $sum == 7 || $sum == 11){
        $bool = "True";
    }


    echo "$i -> $bool", PHP_EOL;
}



