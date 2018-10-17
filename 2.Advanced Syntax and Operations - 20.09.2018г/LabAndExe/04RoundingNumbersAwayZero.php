<?php

$numbers = explode(' ', readline());

for ($i = 0; $i < count($numbers); $i++){
    echo $numbers[$i] .  " => ". round((float)$numbers[$i], 0, PHP_ROUND_HALF_UP) .PHP_EOL;
}