<?php

$numbers = explode(' ', readline());

$currentLenght = 1;
$maxLenght = 0;
$element = 0;
$lastIndex = 0;

for($i = 0; $i < count($numbers) - 1;$i++){
    $n = $numbers[$i];

    for ($j = $i; $j < count($numbers) - 1;$j++){
        if ($n == $numbers[$j + 1]){
            $currentLenght++;
            if ($maxLenght < $currentLenght){
                $maxLenght = $currentLenght;
                $element = $n;
                $lastIndex = $j + 1;

            }
        }else{
            break;
        }
    }

    $currentLenght = 1;
}


if($maxLenght > 0){
    for ($i = $lastIndex; $i > $lastIndex - $maxLenght; $i--){
        echo $numbers[$i] ." " ;
    }

}else{
    echo $numbers[0];
}
