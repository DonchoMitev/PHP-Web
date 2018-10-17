<?php

class Car {
    private $speed;
    private $fuel;
    private $fuelEconomy;
    public $distance;

    /**
     * Car constructor.
     * @param $speed
     * @param $fuel
     * @param $fuelEconomy
     */
    public function __construct($speed, $fuel, $fuelEconomy)
    {
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->fuelEconomy = $fuelEconomy;
        $this->distance = 0;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @return mixed
     */
    public function getFuel()
    {
        return number_format($this->fuel, 1);
    }

    /**
     * @param mixed $fuel
     */
    public function setFuel($fuel): void
    {
        $this->fuel += $fuel;
    }

    /**
     * @return mixed
     */
    public function getFuelEconomy()
    {
        return $this->fuelEconomy;
    }

    /**
     * @param mixed $fuelEconomy
     */
    public function setFuelEconomy($fuelEconomy): void
    {
        $this->fuelEconomy = $fuelEconomy;
    }

    public function setDistance($kilometers){
        $needLitres = $kilometers * ($this->fuelEconomy / 100);

        if ($needLitres <= $this->fuel){
           $this->distance += $kilometers;
           $this->fuel -= $needLitres;
        }else{
            $instockFuel = ($this->fuel / $this->fuelEconomy) * 100;
            $this->distance += $instockFuel;
            $this->fuel = 0;
        }

        $this->distance = number_format($this->distance, 1);
        echo "Total Distance: $this->distance" . PHP_EOL;
    }

    public function setTime(){
        $timeS = ($this->distance / $this->speed) * 60;
        $resultHouer = intval($timeS / 60);
        //echo $resultHouer;
        $resultMinute = intval($timeS % 60);

        echo "Total Time: $resultHouer hours and $resultMinute minutes" .PHP_EOL;

    }

    public function getDistance(){
        return $this->distance;

    }

//    public function __toString()
//    {
//        $fuel = number_format($this->fuel, 1);
//        $distanceT = number_format($this->distance, 1);
//       return "Total Distance: $distanceT".PHP_EOL .
//        "Total Time: {$this->setTime()}" .PHP_EOL.
//        "Fuel left: $fuel liters" .PHP_EOL;
//
//    }


}

$inputLine = explode(' ', readline());
//$inputLine = explode(' ','150 60 20');

$myCar = new Car($inputLine[0], $inputLine[1], $inputLine[2]);

//$inputCommand = ['Travel 150',
//            'Distance',
//            'Time',
//            'Fuel',
//            'END'];
$i = 0;
while (true){
    //$input = $inputCommand[$i];
    $input = readline();
    //$input = 'Travel 100';
    if ($input == 'END'){
        break;
    }
    $commandLine = explode(' ', $input);
    $command = $commandLine[0];
    switch ($command){
        case 'Travel':
            $myCar->setDistance($commandLine[1]);
            break;
        case 'Refuel':
            $myCar->setFuel($commandLine[1]);
            break;
        case 'Distance':
            $myCar->getDistance();
            break;
        case 'Time':
            $myCar->setTime();
            break;
        case 'Fuel':
            echo "Fuel left: {$myCar->getFuel()} liters" .PHP_EOL;
            break;
    }
    $i++;
}

//print_r($myCar);
//echo $myCar;