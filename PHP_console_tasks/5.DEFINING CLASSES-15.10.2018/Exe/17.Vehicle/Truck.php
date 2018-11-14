<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/26/2018
 * Time: 10:22 AM
 */

class Truck extends Vehicle
{
    public function getConsumption() : float{
        return $this->consumption + 1.6;
    }

    public function drive(float $distance)
    {
        $needFuel = $distance * $this->getConsumption();
        if ($needFuel < $this->getFuel()){
            $this->setFuel($this->getFuel() - $needFuel);
            return "Truck traveled {$distance} km" . PHP_EOL;
        }
        return "Truck needs refueling" .PHP_EOL;
    }

    public function refuel(float $fuel)
    {
        $this->setFuel($this->getFuel() + ($fuel * 0.95));
    }
}