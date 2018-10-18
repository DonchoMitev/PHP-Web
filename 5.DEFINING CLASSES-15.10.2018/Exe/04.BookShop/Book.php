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