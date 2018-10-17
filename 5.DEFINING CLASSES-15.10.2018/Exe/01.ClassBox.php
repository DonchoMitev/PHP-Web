<?php

class Box {
    private $lenght;
    private $width;
    private $height;

    /**
     * Box constructor.
     * @param $lenght
     * @param $width
     * @param $height
     */
    public function __construct(float $lenght, float $width, float $height)
    {
        $this->setLenght($lenght);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    /**
     * @return mixed
     */
    public function getLenght()
    {
        return $this->lenght;
    }

    /**
     * @param mixed $lenght
     */
    public function setLenght($lenght): void
    {
        $this->lenght = $lenght;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width): void
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

    public function surfaceArea() {
        $surfaceArea = (2*$this->lenght*$this->width) + (2*$this->lenght*$this->height) + (2*$this->width * $this->height);
        return number_format($surfaceArea, 2, '.', '');
    }

    public function lateralArea() {
        $lateralArea = (2*$this->lenght*$this->height) + (2*$this->width * $this->height);
        return number_format($lateralArea, 2, '.', '');
    }

    public function volume() {
        $volume = $this->lenght * $this->width * $this->height;
        return number_format($volume, 2, '.', '');
    }

    public function __toString()
    {
        return "Surface Area - " . $this->surfaceArea() . PHP_EOL .
                "Lateral Surface Area - " . $this->lateralArea() .PHP_EOL.
                "Volume - ". $this->volume();
    }
}

$lenght = floatval(readline());
$width = floatval(readline());
$height = floatval(readline());

$myBox = new Box($lenght, $width, $height);

echo $myBox;
