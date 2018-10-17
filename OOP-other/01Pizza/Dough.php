<?php

class Dough
{
    private $flourType;
    private $bakingTechnique;
    private $weight;

    public function setFlourType($flourType): void
    {   //To do validation

        $this->flourType = $flourType;
    }

    public function setBakingTechnique($bakingTechnique): void
    {
        $this->bakingTechnique = $bakingTechnique;
    }

    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }
    private $calories = null;

    public function __construct($flourType, $bakingTechnique, $weight)
    {
        $this->flourType = $flourType;
        $this->bakingTechnique = $bakingTechnique;
        $this->weight = $weight;
        //$this->calories = $calories;
    }

    public function getFlourType()
    {
        return $this->flourType;
    }
    
    public function getBakingTechnique()
    {
        return $this->bakingTechnique;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return null
     */
    public function getCalories()
    {
        return $this->calories;
    }

//White – 1.5;
// Wholegrain – 1.0;
// Crispy – 0.9;
// Chewy – 1.1;
// Homemade – 1.0;

    public function caloriesPerGram($flourType, $bakingTechnique, $weight){
        $mfType = 0;
        $mbType = 0;
        if ($flourType == 'White'){
            $mfType = 1.5;
        }else if($flourType == 'Wholegrain'){
            $mfType = 1.0;
        }

        if ($bakingTechnique == 'Cruspy'){
            $mbType = 0.9;
        }else if ($bakingTechnique == 'Chewy'){
            $mbType = 1.1;
        }else if ($bakingTechnique == 'Homemade'){
            $mbType = 1.0;
        }
        $result  = (2 * $weight) * $mfType * $mbType;

        return $result;
    }

}

$pizza1 = new Dough('White', 'Chewy', 100);
echo $pizza1->caloriesPerGram('White', 'Chewy', 100);