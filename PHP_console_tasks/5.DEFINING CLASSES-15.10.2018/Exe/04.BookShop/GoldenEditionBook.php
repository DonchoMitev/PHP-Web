<?php

class GoldenEditionBook extends Book
{
   public function increasePrice(){
       return parent::getPrice() * 1.3;
   }


}