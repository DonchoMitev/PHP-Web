<?php

spl_autoload_register();

$units = [];
while (true){
    $input = explode(' ', readline());
    if ($input[0] == "End"){
        break;
    }



    if (count($input) == 3){
        [$name, $age, $id] = $input;
        $units[] = new Citizen($name, $age, $id);
    }else if (count($input) == 2){
        $model = $input[0];
        $id = $input[1];
        $units[] = new Robot($model, $id);
    }
}




$n = readline();


foreach ($units as $item) {
    if (substr($item->getId(), -strlen($n)) == $n){
        echo $item->getId() . PHP_EOL;
    }
}

