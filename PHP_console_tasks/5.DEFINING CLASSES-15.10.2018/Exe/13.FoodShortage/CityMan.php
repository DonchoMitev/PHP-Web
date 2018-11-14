<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2018
 * Time: 9:44 AM
 */

class CityMan implements Buyer
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
    private $id;

    /**
     * @var string
     */
    private $date;
    /**
     * @var int
     */
    private $food;

    /**
     * Citizen constructor.
     * @param string $name
     * @param int $age
     * @param string $id
     */
    public function __construct(string $name, int $age, string $id, string $date)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
        $this->setDate($date);
        $this->setFood(0);
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
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
    public function getId(): string
    {
        return $this->id;
    }



    public function setId($id)
    {
        $this->id = $id;
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
        return 10;
    }
}