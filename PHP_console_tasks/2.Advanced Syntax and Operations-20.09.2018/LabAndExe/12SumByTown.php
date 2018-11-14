<?php

$input = explode(', ', readline());

$townsAndIncomes  = [];

for ($i = 0;$i < count($input); $i+=2){
    $town = $input[$i];
    $incomes = $input[$i + 1];

    if (!isset($townsAndIncomes[$town])){
        $townsAndIncomes[$town] = $incomes;
    }else{
        $townsAndIncomes[$town] += $incomes;
    }
}

foreach ($townsAndIncomes as $town => $income){
    echo "$town => $income" .PHP_EOL;
}