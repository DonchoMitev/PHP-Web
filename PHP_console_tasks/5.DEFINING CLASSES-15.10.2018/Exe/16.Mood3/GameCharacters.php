<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/26/2018
 * Time: 8:35 AM
 */

abstract class GameCharacters
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $hashedPassword;

    /**
     * @return float
     */
    public function getPoints(): float
    {
        return $this->points;
    }

    /**
     * @param float $points
     */
    public function setPoints(float $points): void
    {
        $this->points = $points;
    }
    /**
     * @var float
     */
    private $points;
    /**
     * @var int
     */
    private $level;

    /**
     * GameCharacters constructor.
     * @param string $username
     * @param int $level
     */
    public function __construct(string $username, float $points, int $level)
    {
        $this->setUsername($username);
        $this->setPoints($points);
        $this->setLevel($level);
    }


    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level): void
    {
        $this->level = $level;
    }



    abstract public function getPassword() : string;
    abstract public function getSpecialPoints();



}