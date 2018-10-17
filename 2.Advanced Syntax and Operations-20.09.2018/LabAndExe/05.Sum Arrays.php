<?php

$firstArr = array_map('intval', explode(' ', readline()));
$secondArr = array_map('intval', explode(' ', readline()));

$sumArr = [];

function FillArray($smallArr, $bigArr)
{
    for ($i = count($smallArr), $j = 0; $i < count($bigArr); $i++, $j++) {
        if ($j > count($smallArr)) {
            $j = 0;
        }
        array_push($smallArr, $smallArr[$j]);
    }
    return $smallArr;
}

function SumArr($firstArr, $secondArr, $sumArr)
{
    for ($i = 0; $i < count($firstArr); $i++) {
        $sumArr[] = $firstArr[$i] + $secondArr[$i];
    }
    return $sumArr;
}

if (count($firstArr) == count($secondArr)) {
    $sumArr = SumArr($firstArr, $secondArr, $sumArr);
} else if (count($firstArr) < count($secondArr)) {
    $firstArr = FillArray($firstArr, $secondArr);
    $sumArr = SumArr($firstArr, $secondArr, $sumArr);
} else if (count($firstArr) > count($secondArr)) {
    $secondArr = FillArray($secondArr, $firstArr);
    $sumArr = SumArr($firstArr, $secondArr, $sumArr);
}

echo implode(' ', $sumArr);