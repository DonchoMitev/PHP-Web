<?php

$numbers = array_map('intval', explode(' ', readline()));
//$numbers = [3, 2, 3, 4, 2, 2, 4];

$currentLenght = 1;
$maxLenght = 0;
$index = -1;

for ($i = 0; $i < count($numbers) - 1; $i++) {

    if ($numbers[$i] < $numbers[$i + 1]) {
        $currentLenght++;
        if ($maxLenght < $currentLenght) {
            $maxLenght = $currentLenght;
            $index = $i + 1;
        }
    }else{
        $currentLenght = 1;
    }


}

if ($maxLenght > 0){
    for ($i = $index - $maxLenght + 1; $i <= $index; $i++) {
        echo $numbers[$i] . " ";
    }
}else{
   echo $numbers[0];
}
