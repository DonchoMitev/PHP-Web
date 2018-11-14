<?php

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

class Car extends Vehicle
{
    public function getConsumption(): float
    {
        return $this->consumption + 0.9;
    }

    public function drive(float $distance)
    {
        $needFuel = $distance * $this->getConsumption();
        if ($needFuel < $this->getFuel()) {
            $this->setFuel($this->getFuel() - $needFuel);
            return "Car travelled {$distance} km" . PHP_EOL;
        }

        return "Car needs refueling" . PHP_EOL;
    }

    public function refuel(float $fuel)
    {
        $this->setFuel($this->getFuel() + $fuel);
    }
}

class Truck extends Vehicle
{
    public function getConsumption(): float
    {
        return $this->consumption + 1.6;
    }

    public function drive(float $distance)
    {
        $needFuel = $distance * $this->getConsumption();
        if ($needFuel < $this->getFuel()) {
            $this->setFuel($this->getFuel() - $needFuel);
            return "Truck travelled {$distance} km" . PHP_EOL;
        }
        return "Truck needs refueling" . PHP_EOL;
    }

    public function refuel(float $fuel)
    {
        $this->setFuel($this->getFuel() + ($fuel * 0.95));
    }
}

class VehicleFactory
{
    public static function getVehicle($data)
    {
        [$type, $fuel, $consumption] = $data;

        return new $type($fuel, $consumption);
    }
}

class Main
{

    public function run()
    {
        $vehicles = [];
        $n = 2;
        while ($n-- != 0) {
            $input = explode(' ', readline());
            $type = $input[0];
            $vehicles[$type] = VehicleFactory::getVehicle($input);
        }

        $n = readline();
        for ($i = 0; $i < $n; $i++) {
            $commandLine = explode(' ', readline());
            $command = $commandLine[0];
            $type = $commandLine[1];
            $distance = floatval($commandLine[2]);

            switch ($command) {
                case 'Drive':
                    echo $vehicles[$type]->drive($distance);
                    break;
                case 'Refuel':
                    $vehicles[$type]->refuel($distance);
            }

        }

        if ($vehicles['Car']->getFuel() > 0) {
            echo "Car: " . $vehicles['Car']->getFuel() . PHP_EOL;
        } else {
            echo "Car: " . "0" . PHP_EOL;
        }

        if ($vehicles['Truck']->getFuel() > 0) {
            echo "Truck: " . $vehicles['Truck']->getFuel();
        } else {
            echo "Truck: " . "0";
        }

    }
}

$main = new Main();
$main->run();