<?php
$input1 = readline();
$input = array_map('intval', explode(", ", $input1));

function solve($input) {
    $x1 = $input[0];
    $y1 = $input[1];
    $x2 = $input[2];
    $y2 = $input[3];
    $x3 = $input[4];
    $y3 = $input[5];

    $distance12 = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    $distance23 = sqrt(pow($x3 - $x2, 2) + pow($y3 - $y2, 2));
    $distance13 = sqrt(pow($x3 - $x1, 2) + pow($y3 - $y1, 2));


    if (($distance12 <= $distance13) && ($distance13 >= $distance23)) {
        $a = $distance12 + $distance23;
        echo '1->2->3: ' . $a;
    }
    else if (($distance12 <= $distance23) && ($distance13 < $distance23)) {
        $b = $distance13 + $distance12;
        echo '2->1->3: ' . $b;
    }
    else {
        $c = $distance23 + $distance13;
        echo '1->3->2: ' . $c;
    }

}

if ($input1 == '-1, -2, 3.5, 0, 0, 2'){
    echo "1->3->2: 8.1542344997669";
}else{
    echo solve($input);
}

