<?php

$arr = ['a', 'b', 'c','d', 'e', 'f','g', 'h', 'i','j', 'k', 'l','m', 'n', 'o', 'p', 'q', 'r','s', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

$input = strtolower(readline());

for ($i = 0;$i < strlen($input); $i++){

    for ($j = 0; $j < count($arr); $j++){
        if ($input[$i] == $arr[$j]){
            echo $input[$i].' -> '. $j . PHP_EOL;
        }
    }
}