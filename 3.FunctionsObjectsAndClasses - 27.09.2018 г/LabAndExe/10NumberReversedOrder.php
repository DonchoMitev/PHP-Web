<?php

class DecimalNumber{
    private $number;

    public function __construct($number){
        $this->number = $number;
    }

    public function reverseNumber(){
        return strrev($this->number);
    }
}
$num = readline();
$number = new DecimalNumber($num);
echo $number->reverseNumber();