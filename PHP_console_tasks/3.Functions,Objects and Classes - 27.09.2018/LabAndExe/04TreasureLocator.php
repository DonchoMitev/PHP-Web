<?php

$cordinates = array_map('floatval', explode(", ", readline()));
//$cordinates = [4, 2, 1.5, 6.5, 1, 3];


for ($i = 0; $i < count($cordinates); $i += 2) {
    $x = $cordinates[$i];
    $y = $cordinates[$i + 1];

    if (($x >= 1 && $x <= 3) && ($y >= 1 && $y <= 3)) {
        echo "Tuvalu" . PHP_EOL;
    } else if (($x >= 8 && $x <= 9) && ($y >= 0 && $y <= 1)) {
        echo "Tokelau" .PHP_EOL;
    } else if (($x >= 5 && $x <= 7) && ($y >= 3 && $y <= 6)) {
        echo "Samoa" .PHP_EOL;
    } else if (($x >= 0 && $x <= 2) && ($y >= 6 && $y <= 8)) {
        echo "Tonga" .PHP_EOL;
    } else if (($x >= 4 && $x <= 9) && ($y >= 7 && $y <= 8)) {
        echo "Cook" .PHP_EOL;
    } else {
        echo "On the bottom of the ocean" .PHP_EOL;
    }


}

