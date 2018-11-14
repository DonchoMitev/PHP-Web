<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2018
 * Time: 12:32 PM
 */

class StreetExtraordinaire extends Cat
{
    /**
     * @var int
     */
    private $decibelsOfMeows;

    public function __construct(string $catBreed, string $catName, $decibelsOfMeows)
    {
        parent::__construct($catBreed, $catName);
        $this->setDecibelsOfMeows($decibelsOfMeows);
    }

    /**
     * @return int
     */
    public function getDecibelsOfMeows(): int
    {
        return $this->decibelsOfMeows;
    }

    /**
     * @param int $decibelsOfMeows
     */
    public function setDecibelsOfMeows(int $decibelsOfMeows): void
    {
        $this->decibelsOfMeows = $decibelsOfMeows;
    }

    public function __toString()
    {
        return parent::__toString() . $this->getDecibelsOfMeows();
    }

}