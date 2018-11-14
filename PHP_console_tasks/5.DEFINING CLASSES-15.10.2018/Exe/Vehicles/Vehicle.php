<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/22/2018
 * Time: 5:50 PM
 */

abstract class Vehicle
{
    /**
     * @var float
     */
    protected $fuel;
    /**
     * @var float
     */
    protected $consumption;

    /**
     * Vehicle constructor.
     * @param float $fuel
     * @param float $consumption
     */
    public function __construct(float $fuel, float $consumption)
    {
        $this->fuel = $fuel;
        $this->consumption = $consumption;
    }


    public function drive(float $distance)
    {
        $range = $this->getFuel() / $this->getConsumption();

        if ($distance > $range) {
            throw new Exception('needs refueling');
        }

        return $range;
    }

    public function refuel($fuel)
    {
        $this->fuel = $fuel;
    }

   abstract public function getConsumption();

    private function getFuel()
    {
        $this->fuel;
    }


}

