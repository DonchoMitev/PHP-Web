<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2018
 * Time: 9:39 AM
 */

class Rebel implements Buyer
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
     * @var string
     */
    private $group;

    /**
     * @var int
     */
    private $food;

    /**
     * Rebel constructor.
     * @param string $name
     * @param int $age
     * @param string $group
     */
    public function __construct(string $name, int $age, string $group)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setGroup($group);
        $this->setFood(0);
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

    /**
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @param string $group
     */
    public function setGroup(string $group): void
    {
        $this->group = $group;
    }

    /**
     * @return int
     */
    public function getFood(): int
    {
        return $this->food;
    }

    /**
     * @param int $food
     */
    public function setFood(int $food): void
    {
        $this->food = $food;
    }


    public function buyFood()
    {
        return 5;
    }
}