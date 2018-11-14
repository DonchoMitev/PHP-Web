<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2018
 * Time: 3:17 PM
 */

abstract class Mammal extends Animal
{
    /**
     * @var string
     */
    private $livingRegion;

    public function __construct(string $animalName, string $animalType, float $animalWeight, $livingRegion)
    {
        parent::__construct($animalName, $animalType, $animalWeight);
        $this->setLivingRegion($livingRegion);

    }

    /**
     * @return string
     */
    public function getLivingRegion(): string
    {
        return $this->livingRegion;
    }

    /**
     * @param string $livingRegion
     */
    public function setLivingRegion(string $livingRegion): void
    {
        $this->livingRegion = $livingRegion;
    }

    public function __toString()
    {
        return "{$this->getAnimalName()}[{$this->getAnimalType()}, {$this->getAnimalWeight()}, {$this->getLivingRegion()}, {$this->getFoodEaten()}]";
    }


}