<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/23/2018
 * Time: 10:39 AM
 */

class Radio
{
    /**
     * @var string
     */
    private $artistName;
    /**
     * @var string
     */
    private $songName;
    /**
     * @var string
     */
    private $songLenght;
    /**
     * @var int
     */
    private $minutes;
    /**
     * @var int
     */
    private $seconds;

    /**
     * Radio constructor.
     * @param string $artistName
     * @param string $songName
     * @param string $songLenght
     * @param int $minutes
     * @param int $seconds
     * @throws Exception
     */
    public function __construct(string $artistName, string $songName, string $songLenght)
    {

        $this->setArtistName($artistName);
        $this->setSongName($songName);
        $this->setSongLenght($songLenght);
        $this->setMinutes($this->minutes);
        $this->setSeconds($this->seconds);
    }


    /**
     * @return string
     */
    public function getArtistName(): string
    {
        return $this->artistName;
    }

    /**
     * @param string $artistName
     * @throws Exception
     */
    public function setArtistName(string $artistName): void
    {
        if (strlen($artistName) < 3 || strlen($artistName) > 20) {
            throw new Exception("Artist name should be between 3 and 20 symbols." . PHP_EOL);
        }
        $this->artistName = $artistName;
    }

    /**
     * @return string
     */
    public function getSongName(): string
    {
        return $this->songName;
    }

    /**
     * @param string $songName
     * @throws Exception
     */
    public function setSongName(string $songName): void
    {
        if (strlen($songName) < 3 || strlen($songName) > 30) {
            throw new Exception("Song name should be between 3 and 30 symbols." . PHP_EOL);
        }
        $this->songName = $songName;
    }

    /**
     * @return string
     */
    public function getSongLenght(): int
    {
        return $this->songLenght;
    }

    /**
     * @param string $songLenght
     * @throws Exception
     */
    public function setSongLenght(string $songLenght): void
    {
        $minutes = explode(':', $songLenght)[0];
        $seconds = explode(':', $songLenght)[1];

        if ($minutes > 14 || $seconds < 0) {
            throw new Exception("Invalid song length." . PHP_EOL);
        }

        $total = $minutes * 60 + $seconds;
        $this->songLenght = $total;
    }



    /**
     * @return int
     */
    public function getMinutes(): int
    {
        return $this->minutes;
    }

    /**
     * @param int $minutes
     * @throws Exception
     */
    public function setMinutes(int $minutes): void
    {
        if ($minutes < 0 || $minutes > 14){
            throw new Exception("Song minutes should be between 0 and 14." . PHP_EOL);
        }
        $this->minutes = $minutes;
    }

    /**
     * @return int
     */
    public function getSeconds(): int
    {
        return $this->seconds;
    }

    /**
     * @param int $seconds
     * @throws Exception
     */
    public function setSeconds(int $seconds): void
    {
        if ($seconds < 0 || $seconds > 59){
            throw new Exception("Song seconds should be between 0 and 59." . PHP_EOL);
        }
        $this->seconds = $seconds;
    }





}