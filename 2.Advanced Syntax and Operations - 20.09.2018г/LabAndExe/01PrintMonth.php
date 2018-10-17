<?php

$months = ["January", "February", "March", "April", "May", "June",  "July", "August", "September", "October", "November", "December"];
$num = intval(readline());

echo $num > 0 && $num < count($months) + 1 ? $months[$num - 1] : "Invalid Month!";