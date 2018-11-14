<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/22/2018
 * Time: 5:51 PM
 */

class Truck extends Vehicle
{
    public function getConsumption()
    {
        return $this->consumption + 0.9;
    }

    protected function getFuel()
    {
        return $this->fuel * 0.95;
    }

}