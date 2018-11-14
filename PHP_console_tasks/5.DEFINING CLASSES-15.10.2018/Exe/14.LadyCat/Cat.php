<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2018
 * Time: 12:22 PM
 */

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