<?php

$time = date('m', strtotime(readline()));
$dayInMonth = cal_days_in_month(CAL_GREGORIAN, $time, 2018);

for ($i = 1; $i <= $dayInMonth; $i++){
   if (date('N', strtotime(2018 . '-' . $time . '-' . $i)) == 7){
       echo $i . 'rd ' . $time . ', ' . '2018'  . PHP_EOL;
   }
}
