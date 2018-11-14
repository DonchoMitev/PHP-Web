<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/24/2018
 * Time: 5:06 PM
 */

class Robot implements IControl
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $model;

    /**
     * Robot constructor.
     * @param string $id
     * @param string $model
     */
    public function __construct(string $model, string $id)
    {
        $this->setModel($model);
        $this->setId($id);
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getFakeID($n)
    {
        if (substr($this->getId(), -strlen($n)) == $n){
            echo $this->getId() . PHP_EOL;
        }
    }

    public function getBirthdayDate(string $date): void
    {

    }
}