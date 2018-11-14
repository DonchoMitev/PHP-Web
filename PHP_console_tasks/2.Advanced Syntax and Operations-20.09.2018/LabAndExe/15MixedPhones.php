<?php

$phoneBook = [];

while (true){

    $input = readline();
    if ($input == "Over"){
        break;
    }

    $inputLine = explode(' : ', $input);

    $name = $inputLine[0];
    $tel = $inputLine[1];

    if (!is_numeric($name)){
        $phoneBook["$name"] = $tel;
    }else{
        $phoneBook["$tel"] = $name;
    }
}

ksort($phoneBook);
foreach ($phoneBook as $name => $tel) {
    echo "$name -> $tel" .PHP_EOL;
}