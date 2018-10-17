<?php

$input = explode(", ", readline());

$setElements = [];

foreach ($input as $element){
    if (!isset($setElements[$element])){
        $setElements[$element] = 1;
    }else{
        $setElements[$element]++;
    }
}

foreach ($setElements as $element => $count){
    if ($count == 1){
        echo "$element ";
    }
}