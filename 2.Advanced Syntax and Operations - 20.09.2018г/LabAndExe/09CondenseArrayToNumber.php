<?php

$numbers = array_map('intval', explode(' ', readline()));


while(count($numbers) != 1){
    for ($i = 0;$i < count($numbers) - 1;$i++){
        $numbers[$i] = $numbers[$i] + $numbers[$i + 1];
    }
    array_pop($numbers);
}

echo implode(' ', $numbers);