<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2018
 * Time: 3:12 PM
 */

spl_autoload_register();
class Main
{
    private const END = 'End';
    public function readData(){

        $input = readline();
        while ($input != self::END){
            $animalData = explode(' ', $input);
            $animal = AnimalFactory::getAnimal($animalData);

            $foodData = explode(' ', readline());
            $food = FoodFactory::getFood($foodData);

            $animal->makeSound();

            try{
                $animal->eat($food);

            }catch(Exception $e){
                echo $e->getMessage() . PHP_EOL;
            }

            echo $animal . PHP_EOL;


            $input = readline();
        }
    }

}

$main = new Main();
$main->readData();