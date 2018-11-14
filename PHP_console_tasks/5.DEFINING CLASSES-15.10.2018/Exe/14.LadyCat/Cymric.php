<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2018
 * Time: 12:29 PM
 */

class Cymric extends Cat
{
    /**
     * @var int
     */
    private $furLength;

    public function __construct(string $catBreed, string $catName, $furLength)
    {
        parent::__construct($catBreed, $catName);
        $this->setFurLength($furLength);

    }

    /**
     * @return int
     */
    public function getFurLength(): int
    {
        return $this->furLength;
    }

    /**
     * @param int $furLength
     */
    public function setFurLength(int $furLength): void
    {
        $this->furLength = $furLength;
    }

    public function __toString()
    {
        return parent::__toString() . $this->getFurLength();
    }
}