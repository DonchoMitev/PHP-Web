<?php

class Vehicle {
    private $numberDoors;
    private $color;

    /**
     * @return mixed
     */
    public function getNumberDoors()
    {
        return $this->numberDoors;
    }

    /**
     * @param mixed $numberDoors
     */
    public function setNumberDoors($numberDoors): void
    {
        $this->numberDoors = $numberDoors;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * Vehicle constructor.
     * @param $numberDoors
     * @param $color
     */
    public function __construct($numberDoors, $color)
    {
        $this->setNumberDoors($numberDoors);
        $this->setColor($color);
    }
}


$myVehicle = new Vehicle($numberDoors, $color);