<?php

$number = readline();

$ManNum = function ($number){
    $sum = 0;
    for ($i = 0; $i < strlen($number); $i++){
        $sum += $number[$i];
    }

    if ($sum / strlen($number) >= 5){
       return;
    }else{
       return $number .= 9;
    }
};

while (true){
    $ManNum($number);
}

echo $number;
