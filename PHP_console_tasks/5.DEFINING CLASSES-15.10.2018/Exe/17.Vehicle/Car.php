<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/26/2018
 * Time: 10:21 AM
 */

class Car extends Vehicle
{
    public function getConsumption() : float{
        return $this->consumption + 0.9;
    }

    public function drive(float $distance)
    {
        $needFuel = $distance * $this->getConsumption();
        if ($needFuel < $this->getFuel()){
            $this->setFuel($this->getFuel() - $needFuel);
            return "Car traveled {$distance} km" . PHP_EOL;
        }

        return "Car needs refueling" .PHP_EOL;
    }

    public function refuel(float $fuel)
    {
        $this->setFuel($this->getFuel() + $fuel);
    }
}