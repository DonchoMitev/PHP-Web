<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2018
 * Time: 3:08 PM
 */

abstract class Food
{
    /**
     * @return string
     */
    public function getClassName(): string
    {
        return $this->className;
    }

    /**
     * @param string $className
     */
    public function setClassName(string $className): void
    {
        $this->className = $className;
    }
    /**
     * @var string
     */
    private $className;
    /**
     * @var integer
     */
    private $quantity;

    /**
     * Food constructor.
     * @param int $quantity
     */
    public function __construct(int $quantity, string $className)
    {
        $this->setQuantity($quantity);
        $this->setClassName($className);
    }


    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    private function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }




}