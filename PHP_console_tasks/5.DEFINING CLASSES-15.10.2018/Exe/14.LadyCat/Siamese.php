<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2018
 * Time: 12:27 PM
 */

class Siamese extends Cat
{
    /**
     * @var int
     */
    private $earSize;

    public function __construct(string $catBreed, string $catName, int $earSize)
    {
        parent::__construct($catBreed, $catName);
        $this->setEarSize($earSize);
    }

    /**
     * @return int
     */
    public function getEarSize(): int
    {
        return $this->earSize;
    }

    /**
     * @param int $earSize
     */
    public function setEarSize(int $earSize): void
    {
        $this->earSize = $earSize;
    }

    public function __toString()
    {
        return parent::__toString() . $this->getEarSize();
    }


}