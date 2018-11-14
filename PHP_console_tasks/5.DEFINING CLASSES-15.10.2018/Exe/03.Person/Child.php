<?php

spl_autoload_register();

class Child extends Person
{
   public function __construct(string $name, int $age)
   {
       parent::__construct($name, $age);
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
     * @throws Exception
     */
    public function setAge(int $age): void
    {
        if ($age > 16){
            throw new Exception('Child’s age must be less than 16!');
        }
        $this->age = $age;
    }

    public function __toString()
    {
        return parent::__toString();
    }

}