<?php

class Car
{
    private $model;
    private $fuelAmount;
    private $fuelCost;
    private $allCars = [];
    private $distance = 0;

    /**
     * Car constructor.
     * @param $model
     * @param $fuelAmount
     * @param $fuelCost
     * @param array $allCars
     */
    public function __construct($model, $fuelAmount, $fuelCost)
    {
        $this->model = $model;
        $this->fuelAmount = $fuelAmount;
        $this->fuelCost = $fuelCost;
    }

    /**
     * Car constructor.
     * @param $model
     * @param $fuelAmount
     * @param $fuelCost
     */


    public function setModel($model): void
    {
        $this->model = $model;
    }


    public function setFuelAmount($fuelAmount): void
    {
        $this->fuelAmount = $fuelAmount;
    }

    public function setFuelCost($fuelCost): void
    {
        $this->fuelCost = $fuelCost;
    }

    public function addCars($cars)
    {
        if (!array_key_exists($this->model, $cars)) {
            $cars[$this->model] = [$this->fuelAmount, $this->fuelCost];
        }

        return $cars;
    }

    public function isFuelOk($car, $kilometers, $cars)
    {

        foreach ($cars as $i => $iv) {
            if ($i == $car) {
                $fuelNeed = $kilometers * $iv[1];
                if ($fuelNeed < $iv[0]) {
                    return true;
                }
            }
        }

        return false;
    }

    public function correctCars($car, $cars, $kilometers)
    {
        foreach ($cars as $i => $iv) {
            if ($i == $car) {
                $fuelNeed = $kilometers * $iv[1];
                $cars[$car][0] = $iv[0] - $fuelNeed;
            }
        }

        return $cars;
    }


}

$n = 2;
$inputLine = ['AudiA4 23 0.3',
    'BMW-M2 45 0.42',
    'Drive BMW-M2 56',
    'Drive AudiA4 5',
    'Drive AudiA4 13',
    'END'

];
$i = 0;

$cars = [];

while ($n-- > 0) {
    $input = explode(' ', $inputLine[$i]);

    if ($input[0] == 'END') {
        break;
    }

    $car = new Car($input[0], $input[1], $input[2]);
    $cars = $car->addCars($cars);
    $i++;
}

while (true) {
    $input = explode(' ', $inputLine[$i]);
    $i++;

    if ($input[0] == 'END') {
        break;
    }

    $carI = $input[1];
    $kilometers = $input[2];


    if ($car->isFuelOk($carI, $kilometers, $cars)) {
       $cars = $car->correctCars($carI, $cars, $kilometers);
        foreach ($cars as $key => $value){
            if ($key == $carI){
                echo "$key $value[0] $kilometers" .PHP_EOL;
            }
        }
    }else{
        echo "Insufficient fuel for the drive" .PHP_EOL;
    }

}







