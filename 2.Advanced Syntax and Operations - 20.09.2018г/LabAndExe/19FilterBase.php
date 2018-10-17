<?php

$ageName = [];
$salaryName = [];
$positionName = [];


function isfloat($findType) {
    return ($findType == (string)(float)$findType);
}

while (1){
    $input = readline();
    //$input = "Isacc -> 34";
    if ($input == 'filter base'){
        break;
    }

    $inputLine = explode(' -> ', $input);

    $name = $inputLine[0];
    $findType = $inputLine[1];

    if (is_numeric($findType) && (strpos($findType, '.') == false)){
        if (!array_key_exists($name, $ageName)){
            $ageName[$name] = intval($findType);
        }
    }else if (is_numeric($findType) && strpos($findType, '.')){
       $findType = number_format($findType, 2, '.', '');
       if (!array_key_exists($name, $salaryName)){
           $salaryName[$name] = $findType;
       }
    }else{
        if (!array_key_exists($name, $positionName))
        $positionName[$name] = $findType;
    }
}

$type = readline();
switch ($type){
    case 'Age':
        foreach ($ageName as $name => $age){
            echo "Name: $name" . PHP_EOL;
            echo "Age: $age". PHP_EOL;
            echo "====================" .PHP_EOL;
        }
        break;
    case 'Salary':
        foreach ($salaryName as $name => $salary){
            echo "Name: $name" . PHP_EOL;
            echo "Salary: $salary". PHP_EOL;
            echo "====================" .PHP_EOL;
        }
        break;
    case 'Position':
        foreach ($positionName as $name => $position){
            echo "Name: $name" . PHP_EOL;
            echo "Position: $position". PHP_EOL;
            echo "====================" .PHP_EOL;
        }
        break;

}