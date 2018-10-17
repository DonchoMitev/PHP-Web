<?php

function NumberProcess(int $a, $arr){
    for ($i = 0; $i < 5;$i++){
        switch ($arr[$i]){
            case 'chop':
                $a = $a / 2;
                break;
            case 'dice':
                $a = sqrt($a);
                break;
            case 'spice':
                $a += 1;
                break;
            case 'bake':
                $a *= 3;
                break;
            case 'fillet':
                $a = $a - ($a * 0.20);
                break;

        }
        echo $a . PHP_EOL;
    }
}

$a = readline();
$arr = explode(', ', readline());

NumberProcess($a, $arr);