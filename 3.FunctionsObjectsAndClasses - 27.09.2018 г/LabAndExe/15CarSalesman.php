<?php


/*
 * Define two classes Car and Engine. A Car has a model, engine, weight and color.
 * An Engine has model, power, displacement and efficiency.
 * A Car’s weight and color and its Engine’s displacements and efficiency are optional.
 */

class Car
{
    public $model;
    public $engine;
    public $wight;
    public $color;

    public function __construct($model, $engine, $wight = 'n/a', $color = 'n/a')
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->wight = $wight;
        $this->color = $color;
    }


}

class Engine
{
    public $model;
    public $power;
    public $displacement;
    public $efficiency;

    public function __construct($model, $power, $displacement = 'n/a', $efficiency = 'n/a')
    {
        $this->model = $model;
        $this->power = $power;
        $this->displacement = $displacement;
        $this->efficiency = $efficiency;
    }
}

$n = intval(readline());
$enginesModels = [];
while ($n-- > 0) {
    $input = explode(' ', readline());

    $model = $input[0];
    $power = $input[1];

    if (count($input) > 2 and count($input) == 3) {
        $displacement = $input[2];
        $engineInstance = new Engine($model, $power, $displacement);
    } else if (count($input) > 3) {
        $displacement = $input[2];
        $efficiency = $input[3];
        $engineInstance = new Engine($model, $power, $displacement, $efficiency);
    } else {
        $engineInstance = new Engine($model, $power);
    }

    $enginesModels[] = $engineInstance;


}

$m = intval(readline());
$carsModels = [];

while ($m-- > 0) {
    $input = explode(' ', readline());

    $model = $input[0];
    $engine = $input[1];

    if (count($input) > 2 and count($input) == 3) {
        $weight = $input[2];
        $carInstance = new Car($model, $power, $weight);
    } else if (count($input) > 3) {
        $weight = $input[2];
        $color = $input[3];
        $carInstance = new Car($model, $power, $weight, $color);
    } else {
        $carInstance = new Car($model, $power);
    }

    $carsModels[] = $carInstance;
}

print_r($carsModels);
print_r($enginesModels);

foreach ($carsModels as $carsModel) {
    foreach ($enginesModels as $engine){
        echo $carInstance->model . ":" .PHP_EOL;
        echo $engineInstance->model. ':' . PHP_EOL;
    }
}