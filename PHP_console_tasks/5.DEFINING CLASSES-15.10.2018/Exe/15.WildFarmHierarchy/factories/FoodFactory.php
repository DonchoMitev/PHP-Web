<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2018
 * Time: 3:46 PM
 */

class FoodFactory
{
    public static function getFood($data){
        $foodName = $data[0];
        $quantity = $data[1];

        return new $foodName($quantity, $foodName);
    }
}