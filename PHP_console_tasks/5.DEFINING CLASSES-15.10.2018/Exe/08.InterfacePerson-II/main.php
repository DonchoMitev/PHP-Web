<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/24/2018
 * Time: 3:26 PM
 */

interface Person
{
    public function setName(string $name);
    public function setAge(int $age);
}


/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/24/2018
 * Time: 3:48 PM
 */

interface Identifiable
{
    public function setId(string $id);
}


/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/24/2018
 * Time: 3:50 PM
 */

interface Birthable
{
    public function setBirthdate($birthDate);

}


/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/24/2018
 * Time: 3:27 PM
 */


class Citizen implements Person, Identifiable, Birthable
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
    private $birthDate;

    /**
     * Citizen constructor.
     * @param $name
     * @param $age
     */
    public function __construct(string $name,int $age, $id, $birthDate)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
        $this->setBirthdate($birthDate);
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
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
            "{$this->getAge()}" .PHP_EOL .
            "{$this->getId()}" .PHP_EOL.
            "{$this->getBirthDate()}";

        return $output;
    }

    public function setBirthdate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return string
     */
    public function getBirthDate(): string
    {
        return $this->birthDate;
    }
}
spl_autoload_register();

$name = readline();
$age = intval(readline());
$id = readline();
$birthDate = readline();

$citizen = new Citizen($name, $age, $id, $birthDate);

echo $citizen;