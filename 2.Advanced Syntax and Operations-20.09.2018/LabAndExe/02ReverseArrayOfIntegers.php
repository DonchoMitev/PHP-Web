<?php

$arr = [];
$n = intval(readline());

for($i = 0; $i < $n; $i++){
    $arr[] = intval(readline());
}

for ($i = $n - 1; $i >=0; $i--){
    echo $arr[$i] . " ";
}

