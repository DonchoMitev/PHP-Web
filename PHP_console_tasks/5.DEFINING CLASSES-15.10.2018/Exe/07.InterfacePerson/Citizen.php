<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/24/2018
 * Time: 3:27 PM
 */


class Citizen implements Person
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $age;

    /**
     * Citizen constructor.
     * @param $name
     * @param $age
     */
    public function __construct(string $name,int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function __toString()
    {
        $output = "{$this->getName()}" .PHP_EOL .
                  "{$this->getAge()}";

        return $output;
    }
}