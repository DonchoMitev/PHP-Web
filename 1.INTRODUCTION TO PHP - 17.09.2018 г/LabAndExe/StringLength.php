<?php

$input = readline();

if (strlen($input) < 20){
    echo "$input";
    for ($i = 0; $i < 20 - strlen($input);$i++){
        echo "*";
    }
}else{
    echo $input;
}