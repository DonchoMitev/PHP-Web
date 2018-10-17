<?php



while (true){

    $input = readline();
    if ($input === 'end'){
        break;
    }

    echo "$input = ".strrev($input), PHP_EOL;
}

