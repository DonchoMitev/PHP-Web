<?php

$userBook = [];

while (true) {
    $input = readline();
    if ($input == "login") {
        break;
    }
    $inputLine = explode(" -> ", $input);
    $user = $inputLine[0];
    $password = $inputLine[1];

    $userBook[$user] = $password;
}

$count = 0;
while (true){
    $input = readline();
    if ($input == "end"){
        break;
    }

    $inputLine = explode(" -> ", $input);
    $user = $inputLine[0];
    $password = $inputLine[1];

    if ($userBook[$user] == $password){
        echo "$user: logged in successfully" . PHP_EOL;
    }else{
        $count++;
        echo "$user: login failed" . PHP_EOL;
    }
}

echo "unsuccessful login attempts: $count";