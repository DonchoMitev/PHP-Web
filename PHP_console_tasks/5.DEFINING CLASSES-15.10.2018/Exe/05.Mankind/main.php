<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/23/2018
 * Time: 8:49 AM
 */

class Human
{
    /**
     * Human constructor.
     * @param string $firstName
     * @param string $lastName
     * @throws Exception
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @throws Exception
     */
    public function setFirstName(string $firstName): void
    {
        if (!ctype_upper($firstName[0]) || is_numeric($firstName[0])){
            throw new Exception("Expected upper case letter!Argument: firstName");
        }else if(strlen($firstName) < 4){
            throw new Exception("Expected length at least 4 symbols!Argument: firstName");
        }
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @throws Exception
     */
    public function setLastName(string $lastName): void
    {
        if (!ctype_upper($lastName[0]) || is_numeric($lastName[0])){
            throw new Exception("Expected upper case letter!Argument: lastName");
        }else if(strlen($lastName) < 3){
            throw new Exception("Expected length at least 3 symbols!Argument: lastName");
        }
        $this->lastName = $lastName;
    }
    /**
     * @var string
     */
    protected $firstName;
    /**
     * @var string
     */
    protected $lastName;
}

class Student extends Human
{
    /**
     * @var string
     */
    private $facilityNumber;

    public function __construct(string $firstName, string $lastName, string $facilityNumber)
    {
        parent::__construct($firstName, $lastName);
        $this->setFacilityNumber($facilityNumber);
    }


    /**
     * @return int
     */
    public function getFacilityNumber(): string
    {
        return $this->facilityNumber;
    }

    /**
     * @param string $facilityNumber
     * @throws Exception
     */
    public function setFacilityNumber(string $facilityNumber): void
    {
        if (strlen($facilityNumber) < 5 || strlen($facilityNumber) > 10) {
            throw new Exception("Invalid faculty number!");
        }

        $this->facilityNumber = $facilityNumber;
    }

    public function __toString()
    {
        $output =   "First Name: {$this->firstName}" .PHP_EOL.
            "Last Name: {$this->lastName}".PHP_EOL.
            "Faculty number: {$this->facilityNumber}".PHP_EOL;

        return $output;

    }

}

class Worker extends Human
{
    /**
     * @var float
     */
    private $salary;
    /**
     * @var int
     */
    private $workHoursPerDay;


    public function __construct(string $firstName, string $lastName, int $salary, int $workHoursPerDay)
    {
        parent::__construct($firstName, $lastName);
        $this->setLastName($lastName);
        $this->setSalary($salary);
        $this->setWorkHoursPerDay($workHoursPerDay);
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @throws Exception
     */
    public function setLastName(string $lastName): void
    {
        if (strlen($lastName) <= 3) {
            throw new Exception("Expected length more than 3 symbols!Argument: lastName");
        }
        $this->lastName = $lastName;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @param float $salary
     * @throws Exception
     */
    public function setSalary(float $salary): void
    {
        if ($salary < 10) {
            throw new Exception("Expected value mismatch!Argument: weekSalary");
        }
        $this->salary = $salary;
    }

    /**
     * @return int
     */
    public function getWorkHoursPerDay(): int
    {
        return $this->workHoursPerDay;
    }

    /**
     * @param int $workHoursPerDay
     * @throws Exception
     */
    public function setWorkHoursPerDay(int $workHoursPerDay): void
    {
        if ($workHoursPerDay < 1 || $workHoursPerDay > 12){
            throw new Exception("Expected value mismatch!Argument: workHoursPerDay");
        }
        $this->workHoursPerDay = $workHoursPerDay;
    }

    public function salaryPerHouer() {
        $result = ($this->salary / 7) / $this->workHoursPerDay;

        return number_format($result, 2);
    }

    public function __toString()
    {
        $output =   "First Name: {$this->firstName}" .PHP_EOL.
            "Last Name: {$this->lastName}".PHP_EOL.
            "Week Salary: " . number_format($this->salary, 2, '.', '') . PHP_EOL.
            "Hours per day: " . number_format($this->workHoursPerDay, 2, '.', '') .PHP_EOL.
            "Salary per hour: {$this->salaryPerHouer()}".PHP_EOL;

        return $output;

    }

}

//spl_autoload_register();

[$firstName, $lastName, $facilityNumber] = explode(' ', readline());

try{
    $student = new Student($firstName, $lastName, $facilityNumber);
    echo $student;
}catch (Exception $e){
    echo $e->getMessage();
    die();
}

[$firstName, $lastName, $salary, $workHoursPerDay] = explode(' ', readline());
echo PHP_EOL;
try{
    $worker = new Worker($firstName, $lastName, $salary, $workHoursPerDay);
    echo $worker;
}catch (Exception $e){
    echo $e->getMessage();
    die();
}