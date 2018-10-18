<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/18/2018
 * Time: 8:50 AM
 */

class Person
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $age;

    /**
     * Person constructor.
     * @param string $name
     * @param int $age
     * @throws Exception
     */
    public function __construct(string $name, int $age)
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
     * @throws Exception
     */
    public function setName(string $name): void
    {
        if (strlen($name) < 3){
            throw new Exception('Name’s length should not be less than 3 symbols!');
        }
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
     * @throws Exception
     */
    public function setAge(int $age): void
    {
        if ($age < 1){
            throw new Exception('Age must be positive!');
        }

        $this->age = $age;
    }

    public function __toString()
    {
        $output = 'Name: ' .$this->name . ', Age: ' .$this->age .PHP_EOL;

        return $output;
    }


}