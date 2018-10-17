<?php

$input = readline();
$numeric = "";
$letters = "";
$others = "";

for($i = 0; $i < strlen($input);$i++){
    if (is_numeric($input[$i])) {
        $numeric .= $input[$i];
    }else if (ctype_alpha($input[$i])){
        $letters .= $input[$i];
    }else{
        $others .= $input[$i];
    }
}

echo $numeric . PHP_EOL;
echo $letters . PHP_EOL;
echo $others . PHP_EOL;