<?php

$personCount = intval(readline());
$type = readline();
$price = 0;

if ($personCount <= 50){
    $price = 2500;
    echo "We can offer you the Small Hall";
}else if ($personCount <= 100){
    $price = 5000;
    echo "We can offer you the Terrace";
}else if ($personCount <= 120){
    $price = 7500;
    echo "We can offer you the Great Hall";
}else{
    echo "We do not have an appropriate hall.";
    return;
}

switch ($type){
    case 'Normal':
        $price += 500;
        $price *= 0.95;
        break;
    case 'Gold':
        $price += 750;
        $price *= 0.90;
        break;
    case 'Platinum':
        $price += 1000;
        $price *= 0.85;
        break;
}

$pricePerPerson = $price / $personCount;
$pricePerPerson = number_format($pricePerPerson, '2', '.', '');

echo PHP_EOL."The price per person is $pricePerPerson$";