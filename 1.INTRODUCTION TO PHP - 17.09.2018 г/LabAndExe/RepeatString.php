<?php

$arr = explode(" ", readline());

for ($i = 0; $i < count($arr); $i++){
    for($j = 0; $j < strlen($arr[$i]);$j++){
        echo $arr[$i];
    }

    echo PHP_EOL;
}