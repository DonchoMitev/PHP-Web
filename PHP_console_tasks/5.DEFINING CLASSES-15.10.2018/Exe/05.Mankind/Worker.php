<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/23/2018
 * Time: 8:52 AM
 */

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
        if (strlen($lastName) < 4) {
            throw new Exception("Expected length more than 3 symbols!Argument: $lastName");
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
        if ($workHoursPerDay < 1 && $workHoursPerDay > 12){
            throw new Exception("Expected value mismatch!Argument: $workHoursPerDay");
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
                    "Week Salary: {$this->salary}".PHP_EOL.
                    "Hours per day: {$this->workHoursPerDay}".PHP_EOL.
                    "Salary per hour: {$this->salaryPerHouer()}".PHP_EOL;

        return $output;

    }

}