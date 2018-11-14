<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2018
 * Time: 3:21 PM
 */

class Mouse extends Mammal
{

    public function makeSound()
    {
        echo "SQUEEEAAAK!" . PHP_EOL;
    }

    public function eat(Food $foodQuantity)
    {
        if($foodQuantity->getClassName() == 'Vegetable'){
            $this->setFoodEaten($foodQuantity->getQuantity());
        }else{
            throw new Exception("Mice are not eating that type of food!");
        }
    }
}