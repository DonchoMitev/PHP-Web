<?php


$strings = explode(' ', readline());

for ($i = count($strings) - 1; $i >= 0;$i--){
    echo $strings[$i] . " ";
}