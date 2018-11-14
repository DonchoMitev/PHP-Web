<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2018
 * Time: 3:24 PM
 */

class Zebra extends Mammal
{

    public function makeSound()
    {
        echo "Zs" . PHP_EOL;
    }

    public function eat(Food $foodQuantity)
    {
        if($foodQuantity->getClassName() == 'Vegetable'){
            $this->setFoodEaten($foodQuantity->getQuantity());
        }else{
            throw new Exception("Zebras are not eating that type of food!");
        }

    }
}