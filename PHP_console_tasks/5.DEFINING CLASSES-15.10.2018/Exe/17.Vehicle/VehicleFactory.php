<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/26/2018
 * Time: 10:26 AM
 */

class VehicleFactory
{
    public static function getVehicle($data){
        [$type, $fuel, $consumption] = $data;

        return new $type($fuel,$consumption);
    }
}