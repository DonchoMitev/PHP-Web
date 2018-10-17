<?php

$numbers = array_map('floatval',explode(' ', readline()));
//$numbers = [-2, 0.33, 0.33, 2];
asort($numbers);

$numbers = array_values($numbers);
$countNum = [];

for ($i = 0; $i < count($numbers); $i++) {
    $key = $numbers[$i];
    if (!isset($countNum["$key"])) {
        $countNum["$key"] = 0;
    }
    for ($j = 0; $j < count($numbers);$j++){
        if ($numbers[$i] == $numbers[$j]) {
            $countNum["$key"] += 1;
        }else{
            break;
        }
    }
    foreach (array_keys($numbers, "$key") as $key) {
        unset($numbers[$key]);
    }
    $numbers = array_values($numbers);
    $i = -1;
}

foreach ($countNum as $num => $count) {
    echo "$num -> $count" . PHP_EOL;
}