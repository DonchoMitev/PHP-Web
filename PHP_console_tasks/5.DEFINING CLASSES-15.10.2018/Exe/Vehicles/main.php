<?php

class Application
{
    private $vehicle =[];
    public function readData()
    {
        while ($line = readline('Insert vehicel:')) {
            if ($line === '') {
                break;
            }

            [$type, $fuel, $consumption] = explode(' ', readline());

            if (!class_exists($type)) {
                throw new Exception('Non valid type');
            }

            $vehicle[] = new $type($fuel, $consumption);
        }
    }

    public function printData() {
        while ($line = readline('Type operation:')) {
            if ($line === '') {
                break;
            }
        }
    }
}
