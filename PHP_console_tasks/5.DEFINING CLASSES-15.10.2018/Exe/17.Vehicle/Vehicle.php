<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/26/2018
 * Time: 10:18 AM
 */

abstract class Vehicle
{
    /**
     * @var float
     */
    private $fuel;
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
        $this->setFuel($fuel);
        $this->setConsumption($consumption);
    }

    /**
     * @return float
     */
    public function getFuel(): string
    {
        return number_format($this->fuel, 2);
    }

    /**
     * @param float $fuel
     */
    public function setFuel(float $fuel): void
    {
        $this->fuel = $fuel;
    }

    /**
     * @return float
     */
    public function getConsumption(): float
    {
        return $this->consumption;
    }

    /**
     * @param float $consumption
     */
    public function setConsumption(float $consumption): void
    {
        $this->consumption = $consumption;
    }



    abstract public function drive(float $distance);
    abstract public function refuel(float $fuel);

}