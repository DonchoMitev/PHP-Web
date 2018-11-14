<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2018
 * Time: 3:24 PM
 */

class Cat extends Felime
{
    /**
     * @var string
     */
    private $breed;

    public function __construct(string $animalName, string $animalType, float $animalWeight, $livingRegion, $breed)
    {
        parent::__construct($animalName, $animalType, $animalWeight, $livingRegion);
        $this->setBreed($breed);
    }

    /**
     * @return string
     */
    public function getBreed(): string
    {
        return $this->breed;
    }

    /**
     * @param string $breed
     */
    public function setBreed(string $breed): void
    {
        $this->breed = $breed;
    }



    public function makeSound()
    {
        echo 'Meowwww' .PHP_EOL;
    }

    public function eat(Food $foodQuantity)
    {
        $this->setFoodEaten($foodQuantity->getQuantity());
    }

    public function __toString()
    {
        return "{$this->getAnimalName()}[{$this->getAnimalType()}, {$this->getBreed()}, {$this->getAnimalWeight()}, {$this->getLivingRegion()}, {$this->getFoodEaten()}]";
    }
}