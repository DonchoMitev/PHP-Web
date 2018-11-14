<?php

class Car extends Vehicle {
    public function getConsumption()
    {
        return $this->consumption * 0.9;
    }


}