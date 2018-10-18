<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/18/2018
 * Time: 9:50 AM
 */

class Book
{
    /**
     * @var string
     */
    protected $title;
    /**
     * @var array
     */
    protected $author;
    /**
     * @var float
     */
    protected $price;

    /**
     * Book constructor.
     * @param string $title
     * @param array $author
     * @param float $price
     * @throws Exception
     */
    public function __construct(string $title, array $author, float $price)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @throws Exception
     */
    public function setTitle(string $title): void
    {
        if (strlen($title) < 3){
            throw new Exception('Title not valid!');
        }
        $this->title = $title;
    }

    /**
     * @return array
     */
    public function getAuthor(): array
    {
        return $this->author;
    }

    /**
     * @param array $author
     * @throws Exception
     */
    public function setAuthor(array $author): void
    {
        if (is_numeric($author[1][0])) {
            throw new Exception('Author not valid!');
        }
        $this->author = $author;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @throws Exception
     */
    public function setPrice(float $price): void
    {
        if ($price <= 0) {
            throw new Exception('Price not valid!');
        }
        $this->price = $price;
    }

}

class GoldenEditionBook extends Book
{
    public function increasePrice(){
        return parent::getPrice() * 1.3;
    }


}


$author = explode(' ', readline());
$title = readline();
$price = floatval(readline());
$type = readline();

//$author = explode(' ', 'Vasil Ivanov');
//$title = 'UML Basics';
//$price = floatval('10');
//$type = 'GOLD';

$book = null;

try {
    switch ($type) {
        case 'GOLD':
            $book = new GoldenEditionBook($title, $author, $price);
            $book->increasePrice();
            break;
        case 'STANDARD':
            $book = new Book($title, $author, $price);
            break;
        default:
            throw new Exception('Type is not valid!');
            break;

    }

    echo 'OK' .PHP_EOL;
    echo $book->getPrice();
} catch (Exception $e) {
    echo $e->getMessage();
}

//echo 'OK' .PHP_EOL;
//echo $book->getPrice();