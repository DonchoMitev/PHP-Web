<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2018
 * Time: 3:33 PM
 */

class AnimalFactory
{
    public static function getAnimal(array $data) {
        $animalType = $data[0];
        switch (strtolower($animalType)){
            case 'cat':
                [$animalType, $animalName,  $animalWeight, $animalLivingRegion, $catBreed] = $data;
                return new Cat($animalType, $animalName, $animalWeight, $animalLivingRegion, $catBreed);
                break;
            case 'tiger':
            case 'zebra':
            case 'mouse':
                [$animalType, $animalName, $animalWeight, $animalLivingRegion] = $data;
                return new $animalType($animalType, $animalName, $animalWeight, $animalLivingRegion);
                break;
            default:
                return null;
        }
    }
}