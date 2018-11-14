<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2018
 * Time: 3:26 PM
 */

class Tiger extends Felime
{

    public function makeSound()
    {
        echo "ROAAR!!!" .PHP_EOL;
    }

    /**
     * @param Food $foodQuantity
     * @throws ReflectionException
     */
    public function eat(Food $foodQuantity)
    {
        $function = new \ReflectionClass($foodQuantity);

        if("Meat" == $function->getName()){
            $this->setFoodEaten($foodQuantity->getQuantity());
        }else{
            throw new Exception("Tigers are not eating that type of food!");
        }

    }
}