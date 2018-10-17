<?php

class Box
{
    /**
     * @var float
     */
    private $lenght;
    /**
     * @var float
     */
    private $width;
    /**
     * @var float
     */
    private $height;

    /**
     * Box constructor.
     * @param float $lenght
     * @param float $width
     * @param float $height
     */
    public function __construct(float $lenght, float $width, float $height)
    {
        $this->setLenght($lenght);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    /**
     * @return float
     */
    public function getLenght(): float
    {
        return $this->lenght;
    }

    /**
     * @param float $lenght
     */
    public function setLenght(float $lenght): void
    {
        if ($lenght <= 0){
            throw new Exception('Lenght cannot be zero or negative.');
        }

        $this->lenght = $lenght;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @param float $width
     */
    public function setWidth(float $width): void
    {
        if ($width <= 0){
            throw new Exception('Width cannot be zero or negative.');
        }
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param float $height
     */
    public function setHeight(float $height): void
    {
        if ($height <= 0){
            throw new Exception('Height cannot be zero or negative.');
        }
        $this->height = $height;
    }



    public function surfaceArea()
    {
        $surfaceArea = (2 * $this->lenght * $this->width) + (2 * $this->lenght * $this->height) + (2 * $this->width * $this->height);
        return number_format($surfaceArea, 2, '.', '');
    }

    public function lateralArea()
    {
        $lateralArea = (2 * $this->lenght * $this->height) + (2 * $this->width * $this->height);
        return number_format($lateralArea, 2, '.', '');
    }

    public function volume()
    {
        $volume = $this->lenght * $this->width * $this->height;
        return number_format($volume, 2, '.', '');
    }

    public function __toString()
    {
        return "Surface Area - " . $this->surfaceArea() . PHP_EOL .
            "Lateral Surface Area - " . $this->lateralArea() . PHP_EOL .
            "Volume - " . $this->volume();
    }
}

$lenght = floatval(readline());
$width = floatval(readline());
$height = floatval(readline());

try {
    $myBox = new Box($lenght, $width, $height);
    echo $myBox;
} catch (Exception $exception) {
    echo $exception->getMessage();
}

