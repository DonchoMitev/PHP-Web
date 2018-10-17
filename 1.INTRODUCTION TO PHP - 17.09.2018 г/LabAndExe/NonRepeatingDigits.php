<?php

$number = readline();
$arr = [];

if ($number < 102){
    echo "no";
}else{
    if ($number > 999){
        $number = 1000;
    }
    for ($i = 102; $i <= intval($number); $i++){
        $temp = (string)$i;

        if ($temp[0] != $temp[1] && $temp[1] != $temp[2] && $temp[0] != $temp[2]){
            array_push($arr, $temp);
        }
    }

    foreach ($arr as $n){
        if ($n != end($arr)){
            echo $n.', ';
        }else{
            echo $n;
        }
    }
}