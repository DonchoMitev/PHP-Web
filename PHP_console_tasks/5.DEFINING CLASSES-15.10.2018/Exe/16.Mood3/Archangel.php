<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/26/2018
 * Time: 8:46 AM
 */

class Archangel extends GameCharacters
{

    public function getPassword(): string
    {
        $pass = strrev($this->getUsername());
        $pass .= strlen($this->getUsername()) * 21;
        return $pass;
    }

    public function getSpecialPoints() : int
    {
        return $this->getPoints() * $this->getLevel();
    }

    public function __toString()
    {
        return "\"{$this->getUsername()}\" | \"{$this->getPassword()}\" -> Archangel {$this->getSpecialPoints()}";
    }
}