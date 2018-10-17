<?php

$numbers = array_map('intval', explode(" ", readline()));

$isTrue = false;

for ($i = 0; $i < count($numbers) - 1;$i++){
    $firstN = $numbers[$i];

    for($j = $i + 1; $j < count($numbers); $j++){
        $secondN = $numbers[$j];

        for ($k = 0; $k < count($numbers); $k++){
            $sum = $firstN + $secondN;
            if ($sum == $numbers[$k]){
                echo "$numbers[$i] + $secondN == $sum" . PHP_EOL;
                $isTrue = true;
            }
        }

    }
}

if (!$isTrue){
    echo "No";
}