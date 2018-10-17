<?php

$input = readline();
$command = readline();
//$arr = explode(' ', readline());
//$letter = $arr[0];
//$place = $arr[1];

$letter = substr($command, 0, strpos($command, ' '));
$place = substr($command, strpos($command, ' ') + 1);

$count = 0;
for ($i = 0; $i < strlen($input); $i++){
    if ($input[$i] == $letter){
        $count++;
        if ($count == $place){
            echo $i;
            return;
        }
    }
}

echo "Find the letter yourself!";