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
     * @return string
     */
    public function getPoints(): string
    {
        return $this->points;
    }

    /**
     * @param string $points
     */
    public function setPoints(string $points): void
    {
        $this->points = $points;
    }
    /**
     * @var string
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
    public function __construct(string $username, string $points, int $level)
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

class Demon extends GameCharacters
{

    public function getPassword(): string
    {
        $pass = strlen($this->getUsername()) * 217;
        return $pass;
    }

    public function getSpecialPoints() : string
    {
        $result = $this->getPoints() * $this->getLevel();
        //echo $result;
        $result = number_format($result, 1, ".", '');
        return $result;
    }


    public function __toString()
    {
        return "\"{$this->getUsername()}\" | \"{$this->getPassword()}\" -> Demon" .PHP_EOL
        ."{$this->getSpecialPoints()}";
    }

}

class Archangel extends GameCharacters
{

    public function getPassword(): string
    {
        $pass = strrev($this->getUsername());
        $pass .= strlen($this->getUsername()) * 21;
        return $pass;
    }

    public function getSpecialPoints() : int
    {
        return $this->getPoints() * $this->getLevel();
    }

    public function __toString()
    {
        return "\"{$this->getUsername()}\" | \"{$this->getPassword()}\" -> Archangel" .PHP_EOL
            ."{$this->getSpecialPoints()}";
    }
}

class TypeFactory
{
    public static function getGameCharacter(array $data){
        [$username, $type, $points, $level] = $data;

        return new $type($username, $points, $level);
    }
}

spl_autoload_register();
class Main
{
    public function readData(){
        $input = explode(" | ", readline());

        $gameType = TypeFactory::getGameCharacter($input);

        echo $gameType;

        //echo number_format(1000, 1, '.', '');
    }
}

$main = new Main();
$main->readData();