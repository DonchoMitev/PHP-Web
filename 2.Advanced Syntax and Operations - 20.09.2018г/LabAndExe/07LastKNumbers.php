<?php

$n = intval(readline());
$k = intval(readline());

$arr = [1];

for ($current = 1; $current < $n; $current++) {
    $start = max(0, $current - $k);
    $end = $current - 1;
    $sum = 0;
    for ($prev = $start; $prev <= $end; $prev++) {
        $sum += $arr[$prev];
    }
    $arr[$current] = $sum;
}
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . " ";
}
