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

abstract class Cat
{
    /**
     * @var string
     */
    protected $catBreed;
    /**
     * @var string
     */
    protected $catName;

    /**
     * Cat constructor.
     * @param string $catBreed
     * @param string $catName
     */
    public function __construct(string $catBreed, string $catName)
    {
        $this->setCatBreed($catBreed);
        $this->setCatName($catName);
    }

    /**
     * @return string
     */
    public function getCatBreed(): string
    {
        return $this->catBreed;
    }

    /**
     * @param string $catBreed
     */
    private function setCatBreed(string $catBreed): void
    {
        $this->catBreed = $catBreed;
    }

    /**
     * @return string
     */
    public function getCatName(): string
    {
        return $this->catName;
    }

    /**
     * @param string $catName
     */
    private function setCatName(string $catName): void
    {
        $this->catName = $catName;
    }


    public function __toString()
    {
        return "{$this->catBreed} {$this->catName} ";
    }
}
$cats = [];
while (true){
    $input = explode(' ', readline());
    if ($input[0] == 'End'){
        break;
    }
    [$catBreed, $catName, $catProp] = $input;

    $cats[$catName] = new $catBreed($catBreed, $catName, $catProp);
}

$targetName = readline();

foreach ($cats as $cat){
    if ($targetName == $cat->getCatName()){
        echo $cat;
        break;
    }
}

