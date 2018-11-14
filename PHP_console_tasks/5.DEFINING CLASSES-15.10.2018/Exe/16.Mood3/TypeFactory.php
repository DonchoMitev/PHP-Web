<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/26/2018
 * Time: 9:06 AM
 */

class TypeFactory
{
    public static function getGameCharacter(array $data){

        [$username, $type, $points, $level] = $data;
        floatval($points);

        return new $type($username, $points, $level);
    }
}