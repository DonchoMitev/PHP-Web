<?php

$input = strtolower(readline());
//$input = strtolower("3 5 5 hi pi HO Hi 5 ho 3 hi pi");
$arr = explode(' ', $input);

$setWordCount = [];
$addOddWord = [];


foreach ($arr as $word) {
    if (!isset($setWordCount[$word])){
        $setWordCount[$word] = 1;
    }else{
        $setWordCount[$word]++;
    }
}

foreach ($setWordCount as $word => $count){
    if ($count % 2 != 0) {
       $addOddWord[$word] = $count;
    }
}

echo implode(', ', array_keys($addOddWord));