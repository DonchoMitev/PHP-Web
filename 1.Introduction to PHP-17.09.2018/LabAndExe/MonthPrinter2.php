<?php

$monthNumber = (int)readline();
$dateObj = DateTime::createFromFormat('!m', $monthNumber);
$montName = $dateObj->format('F');

echo $montName;