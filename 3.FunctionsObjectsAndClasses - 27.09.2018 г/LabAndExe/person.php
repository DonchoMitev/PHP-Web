<?php

class Person
{
    private $name;
    private $company;
    private $car;
    private $pokemon;
    private $parent;
    private $children;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Person constructor.
     * @param $name
     * @param $company
     * @param $car
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->pokemon = [];
        $this->parent = [];
        $this->children = [];
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany(Company $company): void
    {
        $this->company = $company;
    }

    /**
     * @param mixed $car
     */
    public function setCar(Car $car): void
    {
        $this->car = $car;
    }

    /**
     * @param array $children
     */

    function setPokemon(Pokemon $pokemon)
    {
        $this->pokemon[] = $pokemon;
    }

    function setParent(ParentClass $parent)
    {
        $this->parent[] = $parent;
    }

    function setChild(Child $children)
    {
        $this->children[] = $children;
    }

    public function __toString()
    {
        $output = $this->name . PHP_EOL;
        $output .= 'Company:' . PHP_EOL;
        if (isset($this->company)) {
            $output .= $this->getCompany()->getCompanyName() . ' ' . $this->getCompany()->getDepartmen() . ' ' . number_format($this->getCompany()->getSalary(), 2) . PHP_EOL;
        }
        $output .= 'Car:' . PHP_EOL;
        if (isset($this->car)) {
            $output .= $this->car->getCarModel() . ' ' . $this->car->getCarSpeed() . PHP_EOL;
        }
        $output .= 'Pokemon:' . PHP_EOL;
        if (count($this->pokemon) > 0) {
            foreach ($this->pokemon as $pokemon) {
                $output .= $pokemon->getPokemonName() . ' ' . $pokemon->getPokemonType() . PHP_EOL;
            }
        }
        $output .= 'Parents:' . PHP_EOL;
        if (count($this->parent) > 0) {
            foreach ($this->parent as $parent) {
                $output .= $parent->getParentName() . ' ' . $parent->getParentBirthday() . PHP_EOL;
            }
        }
        $output .= 'Children:' . PHP_EOL;
        if (count($this->children) > 0) {
            foreach ($this->children as $child) {
                $output .= $child->getChildName() . ' ' . $child->getChildBirthday() . PHP_EOL;
            }
        }
        return $output;
    }


}

class Company
{
    private $companyName;
    private $departmen;
    private $salary;

    /**
     * @return mixed
     */
    public function getDepartmen()
    {
        return $this->departmen;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {

        return $this->companyName;


    }

    /**
     * Company constructor.
     * @param $companyName
     * @param $departmen
     * @param $salary
     */
    public function __construct($companyName, $departmen, float $salary)
    {
        $this->companyName = $companyName;
        $this->departmen = $departmen;
        $this->salary = $salary;
    }

}

class Car
{
    private $carModel;
    private $carSpeed;

    /**
     * Car constructor.
     * @param $carModel
     * @param $carSpeed
     */
    public function __construct($carModel, $carSpeed)
    {
        $this->carModel = $carModel;
        $this->carSpeed = $carSpeed;
    }

    /**
     * @return mixed
     */
    public function getCarModel()
    {
        return $this->carModel;
    }

    /**
     * @return mixed
     */
    public function getCarSpeed()
    {
        return $this->carSpeed;
    }
}

class Pokemon
{
    private $pokemonName;
    private $pokemonType;

    /**
     * @return mixed
     */
    public function getPokemonName()
    {
        return $this->pokemonName;
    }

    /**
     * @return mixed
     */
    public function getPokemonType()
    {
        return $this->pokemonType;
    }

    /**
     * Pokemon constructor.
     * @param $pokemonName
     * @param $pokemonType
     */
    public function __construct($pokemonName, $pokemonType)
    {
        $this->pokemonName = $pokemonName;
        $this->pokemonType = $pokemonType;
    }
}

class ParentClass
{
    private $parentName;
    private $parentBirthday;

    /**
     * @return mixed
     */
    public function getParentName()
    {
        return $this->parentName;
    }

    /**
     * @return mixed
     */
    public function getParentBirthday()
    {
        return $this->parentBirthday;
    }

    /**
     * ParentClass constructor.
     * @param $parentName
     * @param $parentBirthday
     */
    public function __construct($parentName, $parentBirthday)
    {
        $this->parentName = $parentName;
        $this->parentBirthday = $parentBirthday;
    }

}

class Child
{
    private $childName;
    private $childBirthday;

    /**
     * @return mixed
     */
    public function getChildName()
    {
        return $this->childName;
    }

    /**
     * @return mixed
     */
    public function getChildBirthday()
    {
        return $this->childBirthday;
    }

    /**
     * Child constructor.
     * @param $childtName
     * @param $childtBirthday
     */
    public function __construct($childName, $childBirthday)
    {
        $this->childName = $childName;
        $this->childBirthday = $childBirthday;
    }
}

$person = [];
while (true) {
    $input = readline();
    if ($input == "End") {
        break;
    }

    $inputLine = explode(' ', $input);

    list($personName, $class, $className, $classProperty) = $inputLine;

    if (!array_key_exists($personName, $person)) {
        $person[$personName] = new Person($personName);
    }

    if (count($inputLine) == 5) {

        $salary = floatval($inputLine[4]);
        $myCompany = new Company($className, $classProperty, $salary);
        $person[$personName]->setCompany($myCompany);

    } else if (count($inputLine) == 4) {

        switch ($class) {
            case 'pokemon':
                $myPokemon = new Pokemon($className, $classProperty);
                $person[$personName]->setPokemon($myPokemon);
                break;
            case 'parents':
                $myParents = new ParentClass($className, $classProperty);
                $person[$personName]->setParent($myParents);
                break;
            case 'children':
                $myChildren = new Child($className, $classProperty);
                $person[$personName]->setChild($myChildren);
                break;
            case 'car':
                $myCar = new Car($className, $classProperty);
                $person[$personName]->setCar($myCar);
                break;
        }
    }

}
$findName = readline();

if (array_key_exists($findName, $person)){
    echo $person[$findName];
}


//print_r($person);
