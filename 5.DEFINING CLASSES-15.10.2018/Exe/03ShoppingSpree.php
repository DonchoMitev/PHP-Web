<?php

class Person {
    /**
     * @var string
     */
    private $name;
    /**
     * @var float
     */
    private $money;
    /**
     * @var Product[]
     */
    private $bagOfProducts;

    /**
     * Person constructor.
     * @param string $name
     * @param float $money
     * @param array $bagOfProducts
     * @throws Exception
     */
    public function __construct(string $name, float $money)
    {
        $this->setName($name);
        $this->setMoney($money);
        $this->bagOfProducts = [];

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
     * @throws Exception
     */
    public function setName(string $name): void
    {
        if ($name == ''){
            throw new Exception('Name cannot be empty');
        }
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getMoney(): float
    {
        return $this->money;
    }

    /**
     * @param float $money
     * @throws Exception
     */
    public function setMoney(float $money): void
    {
        if ($money < 0){
            throw new Exception('Money cannot be negative');
        }
        $this->money = $money;
    }

    /**
     * @return array
     */
    public function getBagOfProducts(): array
    {
        return $this->bagOfProducts;
    }

    /**
     * @param array $bagOfProducts
     */
    public function setBagOfProducts(array $bagOfProducts): void
    {
        $this->bagOfProducts = $bagOfProducts;
    }

    public function buyProduct(Product $product) {
        if ($product->getCost() > $this->getMoney()){
            throw new Exception($this->getName() ." can't afford " . $product->getName() . PHP_EOL);
        }

        $this->money -= $product->getCost();
        $this->bagOfProducts[] = $product;
        echo "{$this->getName()} bought {$product->getName()}\n";
    }

    public function __toString()
    {
        if (count($this->bagOfProducts)== 0){
            return "{$this->getName()} - Nothing bought" . PHP_EOL;
        }

        $output = $this->getName() . " - ";
        $output .= implode(",", array_map(function (Product $product){
            return $product->getName();
        }, $this->bagOfProducts));

        return $output . PHP_EOL;
    }


}

class Product {
    /**
     * @var string
     */
    private $name;
    /**
     * @var float
     */
    private $cost;

    /**
     * Product constructor.
     * @param string $name
     * @param float $cost
     * @throws Exception
     */
    public function __construct(string $name, float $cost)
    {
        $this->setName($name);
        $this->setCost($cost);
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
     * @throws Exception
     */
    public function setName(string $name): void
    {
        if ($name == ''){
            throw new Exception('Name cannot be empty');
        }
        $this->name = $name;
    }


    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     */
    public function setCost(float $cost): void
    {
        $this->cost = $cost;
    }
}

$personData = preg_split('/[=;]/', readline());

$person = [];
for ($i = 0; $i < count($personData) - 1; $i+=2){
    try {
        $name = $personData[$i];
        $money = floatval($personData[$i+1]);

        $person[$name] = new Person($name, $money);

//        if (!array_key_exists($name, $person)){
//            $person[$name] = $money;
//        }else {
//            $person[$name]+= $money;
//        }
    }catch (Exception $exception){
        echo $exception->getMessage();
        return;
    }

}



$productData = preg_split('/[=;]/', readline(), -1, PREG_SPLIT_NO_EMPTY);


$products = [];

for ($i = 0; $i < count($productData)- 1;$i+=2){

    try{
        $product = $productData[$i];
        $cost = floatval($productData[$i + 1]);
        $products[$product] = new Product($product, $cost);
    }catch (Exception $exception){
        echo $exception->getMessage();
    }

}

//
//
while (true){
    $input = explode(' ', readline());

    if ($input[0] == 'END'){
        break;
    }

    $personName = $input[0];
    $productName = $input[1];
    try{
        if (array_key_exists($personName, $person) &&
            array_key_exists($productName, $products)){
                $person[$personName]->buyProduct($products[$productName]);
            }

    }catch (Exception $exception){
        echo $exception->getMessage();
    }
}
foreach ($person as $per) {
    echo $per;
}

