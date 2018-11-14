<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/24/2018
 * Time: 5:06 PM
 */


class Citizen implements IControl
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

    public function getFakeID($n)
    {
        if (substr($this->getId(), -strlen($n)) == $n){
            echo $this->getId() . PHP_EOL;
        }
    }

    public function getBirthdayDate(string $targetYear): void
    {
        $year = explode('/', $this->getDate())[2];
        if ($year == $targetYear){
            echo $this->getDate();
        }
    }
}

class Pet implements IControl
{
    /**
     * @var string
     */
    private $name;

    /**
     * Pet constructor.
     * @param string $name
     * @param string $date
     */
    public function __construct(string $name, string $date)
    {
        $this->setName($name);
        $this->setDate($date);
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
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $birthday
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }
    /**
     * @var string
     */
    private $date;


    public function getBirthdayDate(string $targetYear): void
    {
        $year = explode('/', $this->getDate())[2];
        if ($year == $targetYear){
            echo $this->getDate();
        }
    }
}

interface IControl
{
    public function getBirthdayDate(string $date) : void;
}

$units = [];
$unitsWhitDate = [];
while (true){
    $input = explode(' ', readline());
    if ($input[0] == "End"){
        break;
    }



    if ($input[0] == 'Citizen'){
        [$type, $name, $age, $id, $date] = $input;
        $unitsWhitDate[] = new Citizen($name, $age, $id, $date);
    }else if ($input[0] == 'Pet'){
        [$type, $name, $date] = $input;
        $unitsWhitDate[] = new Pet($name, $date);
    }
}




$targetYear = readline();


foreach ($unitsWhitDate as $item) {
   echo $item->getBirthdayDate($targetYear) . PHP_EOL;
}

