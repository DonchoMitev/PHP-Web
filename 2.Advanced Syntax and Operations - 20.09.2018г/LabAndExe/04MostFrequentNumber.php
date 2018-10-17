<?php

$numbers = explode(' ', readline());
$count = 0;
$maxCount = 0;
$targetNum = 0;

for ($i = 0;$i < count($numbers);$i++){
    $n = $numbers[$i];
    for ($j = 0; $j < count($numbers);$j++){
        if ($n == $numbers[$j]){
            $count++;
            if ($maxCount < $count){
                $targetNum = $n;
                $maxCount = $count;
            }

        }
    }
    $count = 0;

}

echo $targetNum;