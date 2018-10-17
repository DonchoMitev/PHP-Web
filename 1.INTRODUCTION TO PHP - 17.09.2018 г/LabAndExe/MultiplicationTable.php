<?php

$n = intval(readline());
$start = intval(readline());

if ($start > 10){
    $result = $n * $start;
    echo "$n X $start = $result" .PHP_EOL;
}else{

    for ($i = $start; $i <= 10; $i++){
        $result = $i * $n;
        echo "$n X $i = $result" .PHP_EOL;

    }

}