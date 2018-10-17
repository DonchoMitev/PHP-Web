<?php
class Person {
    public $name;
    public $age;

    /**
     * Person constructor.
     * @param $name
     * @param $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


}

class Family{
    public $member;

    /**
     * @param mixed $member
     */
    public function setMember(Person $member)
    {
       return $this->member[] = $member;
    }

//    public function __toString()
//    {
//        return $this->member;
//    }

}

$n = intval(readline());
$allFamily = [];
//$input =  [ 'Pesho 3',
//            'Gosho 4',
//            'Annie 5'
//];
$i=0;
while ($n-- != 0 ){
    $inputLine = explode(' ', readline());

    $myPerson = new Person($inputLine[0], intval($inputLine[1]));

    $family = new Family();
    $allFamily[] = $family->setMember($myPerson);

    $i++;

}
function cmp($a, $b)
{
    return $b->age <=> $a->age;
}

usort($allFamily, "cmp");

foreach ($allFamily as $name) {
    echo $name->name . ' ' . $name->age;
    break;
}