<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/26/2018
 * Time: 8:46 AM
 */

class Demon extends GameCharacters
{

    public function getPassword(): string
    {
        $pass = strlen($this->getUsername()) * 217;
        return $pass;
    }

    public function getSpecialPoints()
    {
        $result = $this->getPoints() * $this->getLevel();
        return number_format($result, 1, ".", '');
    }


        public function __toString()
    {
        return "{$this->getUsername()} | {$this->getPassword()} -> Demon {$this->getSpecialPoints()}";
    }

}