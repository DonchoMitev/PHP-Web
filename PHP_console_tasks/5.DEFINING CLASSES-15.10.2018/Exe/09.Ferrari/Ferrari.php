<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/24/2018
 * Time: 4:15 PM
 */

class Ferrari implements Car
{
    /**
     * @var string
     */
    private $name;

    /**
     * Ferrari constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->setName($name);
        $this->setModel();
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
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(): void
    {
        $this->model = "488-Spider";
    }
    /**
     * @var string
     */
    private $model;

    public function brakes()
    {
        return "Brakes!";
    }

    public function gas()
    {
        return "Zadu6avam sA!";
    }

    public function __toString()
    {
        $output = "{$this->getModel()}/{$this->brakes()}/{$this->gas()}/{$this->getName()}";
        return $output;
    }
}