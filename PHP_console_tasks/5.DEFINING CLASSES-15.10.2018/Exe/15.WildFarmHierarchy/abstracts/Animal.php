<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2018
 * Time: 3:12 PM
 */

abstract class Animal
{
    /**
     * @var string
     */
    private $animalName;
    /**
     * @var string
     */
    private $animalType;
    /**
     * @var float
     */
    private $animalWeight;
    /**
     * @var integer
     */
    private $foodEaten;

    /**
     * Animal constructor.
     * @param string $animalName
     * @param string $animalType
     * @param float $animalWeight
     * @param int $foodEaten
     */
    protected function __construct(string $animalName, string $animalType, float $animalWeight)
    {
        $this->setAnimalName($animalName);
        $this->setAnimalType($animalType);
        $this->setAnimalWeight($animalWeight);
        $this->setFoodEaten(0);
    }

    /**
     * @return string
     */
    public function getAnimalName(): string
    {
        return $this->animalName;
    }

    /**
     * @param string $animalName
     */
    private function setAnimalName(string $animalName): void
    {
        $this->animalName = $animalName;
    }

    /**
     * @return string
     */
    public function getAnimalType(): string
    {
        return $this->animalType;
    }

    /**
     * @param string $animalType
     */
    private function setAnimalType(string $animalType): void
    {
        $this->animalType = $animalType;
    }

    /**
     * @return float
     */
    public function getAnimalWeight(): float
    {
        return $this->animalWeight;
    }

    /**
     * @param float $animalWeight
     */
    private function setAnimalWeight(float $animalWeight): void
    {
        $this->animalWeight = $animalWeight;
    }

    /**
     * @return int
     */
    public function getFoodEaten(): int
    {
        return $this->foodEaten;
    }

    /**
     * @param int $foodEaten
     */
    protected function setFoodEaten(int $foodEaten): void
    {
        $this->foodEaten += $foodEaten;
    }



    abstract public function makeSound();
    abstract public function eat(Food $foodQuantity);
}