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

interface Buyer
{
    public function buyFood();
}
spl_autoload_register();
$n = readline();
//$n = 2;

$citizens = [];

//$names = ["Pesho 25 8904041303 04/04/1989",
//            "Stancho 27 WildMonkeys"
//];

for ($i = 0; $i < $n; $i++){
    $input = explode(' ' ,readline());

    if (count($input) == 4){
        [$name, $age, $id, $date] = $input;
        $citizens[$name] = new CityMan($name, $age, $id, $date);
    }else if (count($input) == 3){
        [$name, $age, $group] = $input;
        $citizens[$name] = new Rebel($name, $age, $group);
    }
}


$total = 0;

//$names = ['Pesho',
//            'Gosho',
//            'Pesho',
//            'End'
//];
$i = 0;
while (true){
    $input = readline();
    //$input = $names[$i++];

    if ($input == 'End'){
        break;
    }

    foreach ($citizens as $citizen) {

        if ($input == $citizen->getName()){
            $total += $citizen->buyFood();
            break;
        }


    }
}


echo $total;