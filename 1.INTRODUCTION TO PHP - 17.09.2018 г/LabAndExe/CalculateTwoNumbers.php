<?php

$num1 = intval(readline());
$num2 = intval(readline());
$operation = readline();
$result = 0;

switch ($operation){
    case 'sum':
       echo($result = $num1 + $num2);
       break;
    case 'divide':
        $result = $num1 == 0 || $num2 == 0 ? 'Cannot divide by zero' : $num1 / $num2;
        echo($result);
        break;
    case 'subtract':
        echo($result = $num1 - $num2);
        break;
    case 'multiply':
        echo($result = $num1 * $num2);
        break;
    default:
        echo "Wrong operation supplied";
}