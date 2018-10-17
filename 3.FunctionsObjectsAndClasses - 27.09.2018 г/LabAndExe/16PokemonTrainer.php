<?php

class Trainer
{
    public $name;
    public $numberBadges = 0;
    public $pokemons;

    public function __construct($name, int $numberBadges)
    {
        $this->name = $name;
        $this->numberBadges = $numberBadges;
        $this->pokemons = [];
    }

    public function addPokemon(Pokemon $pokemonI)
    {
        $this->pokemons[] = $pokemonI;
    }

    public function addBadges(){
        return $this->numberBadges++;
    }

    public function addPocemonCollection($collection){
        return $this->pokemons = $collection;
    }


}

class Pokemon
{
    public $name;
    public $element;
    public $health;

    public function __construct($name, $element, $health)
    {
        $this->name = $name;
        $this->element = $element;
        $this->health = $health;
    }

    public function reduceHealth()
    {
        $this->health -= 10;
    }

    public function getHealth(): int
    {
        return $this->health;
    }


}

$mode = 'set';
$trainers = [];
$pokemonI = [];
$i = 0;
while (true) {
    $input = readline();
//    $input = ['Pesho Charizard Fire 100',
//        'Gosho Squirtle Water 38',
//        'Pesho Pikachu Electricity 10',
//        'Tournament',
//        'Fire',
//        'Electricity',
//        'End'
//    ];

    if ($input == 'Tournament') {
        $mode = 'Tournament';
        $i++;
        continue;
    }
    if ($input == 'End') {
        break;
    }

    $inputLine = explode(' ', $input);


    if ($mode == 'set') {
        $i++;
        $trainerName = $inputLine[0];
        $pokemonName = $inputLine[1];
        $pokemonElement = $inputLine[2];
        $pokemonHealth = $inputLine[3];

        $pokemonI = new Pokemon($pokemonName, $pokemonElement, $pokemonHealth);

        if (!array_key_exists($trainerName, $trainers)){
            $trainers[$trainerName] = new Trainer($trainerName, 0);
        }

        $trainers[$trainerName]->addPokemon($pokemonI);



    } else if ($mode == 'Tournament') {
        $command = $inputLine[0];
        $i++;
        foreach ($trainers as $trainer) {
            $pokemonSearch = $trainer->pokemons;
            foreach ($pokemonSearch as $key => $pokemon){
                if ($pokemon->element == $command) {
                    $trainer->addBadges();
                    break;
                } else {
                    $pokemon->reduceHealth();
                    if ($pokemon->getHealth() <= 0) {
                        array_splice($pokemonSearch, $key, 1);
                    }
                }

                $trainer->addPocemonCollection($pokemonSearch);

            }
        }
    }

}

usort($trainers, 'orderByNumberOfBadges');
foreach ($trainers as $trainer) {
    echo $trainer->name . ' ' .
        $trainer->numberBadges . ' ' .
        count($trainer->pokemons) . PHP_EOL;
}
function orderByNumberOfBadges($a, $b)
{
    return $a->numberBadges < $b->numberBadges;
}

//print_r($trainers);

