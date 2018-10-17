<?php

class Person{
    private $name;
    private $age;

    public function __construct(string $name, int $age){
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    public function __toString()
    {
        return "{$this->getName()} - {$this->getAge()}" . PHP_EOL;
    }


}

$n = intval(readline());
$persons = [];

while ($n-- != 0){
    $inputLine = explode(' ', readline());

    $name = $inputLine[0];
    $age = $inputLine[1];

    $persons[] = new Person($name, $age);
}


$filteredPeople = array_filter($persons, function (Person $person){
    return $person->getAge() > 30;
});

usort($filteredPeople, function (Person $p1, Person $p2) {
   return $p1->getName() <=> $p2->getName();
});

foreach ($filteredPeople as $person) {
    echo $person;
}