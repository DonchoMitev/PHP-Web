<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2018
 * Time: 8:47 AM
 */

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

    public function setIds($id)
    {
        // TODO: Implement setIds() method.
    }

    public function getFakeID(string $id)
    {
        // TODO: Implement getFakeID() method.
    }

    public function getBirthdayDate(string $targetYear): void
    {
        $year = explode('/', $this->getDate())[2];
        if ($year == $targetYear){
            echo $this->getDate();
        }
    }
}