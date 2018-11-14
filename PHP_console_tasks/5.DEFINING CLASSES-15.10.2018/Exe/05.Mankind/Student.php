<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/23/2018
 * Time: 8:50 AM
 */

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