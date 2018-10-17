<?php

$productsAll = [];
$mode = 'stock';

while (1){

    $input = readline();
    if ($input == "exam time"){
        break;
    }
    if ($input == "shopping time"){
        $mode = 'buy';
        continue;
    }

    $inputLine = explode(" ", $input);
    $product = $inputLine[1];
    $quantity = intval($inputLine[2]);

    if ($mode == 'stock'){
        if (!array_key_exists($product, $productsAll)){
            $productsAll[$product] = $quantity;
        }else{
            $productsAll[$product] += $quantity;
        }
    }else if ($mode = 'buy'){
        if (array_key_exists($product, $productsAll)){

            if ($productsAll[$product] <= 0) {
                echo "$product out of stock" . PHP_EOL;
            }else{
                $productsAll[$product] -= $quantity;
            }
        }else{
            echo "$product doesn't exist" . PHP_EOL;
        }
    }
}

foreach ($productsAll as $product => $quantity){
    if ($quantity > 0){
        echo "$product -> $quantity" .PHP_EOL;
    }
}