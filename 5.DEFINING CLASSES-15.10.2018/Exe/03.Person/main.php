<?php

spl_autoload_register();

$persons = [];
while(true){
    $input = explode(' ', readline());

    if ($input[0] == 'Child'){
        break;
    }
    $name = $input[0];
    $age = $input[1];
    try{

        $persons[] = new Person($name, $age);


    }catch (Exception $e){
        echo $e->getMessage();
        return;
    }

}

$children = [];
while (true){
    $input = explode(' ', readline());
    if ($input[0] == 'End'){
        break;
    }

    $name = $input[0];
    $age = $input[1];

    try{
        $children[] = new Child($name, $age);
    }catch (Exception $e){
        echo $e->getMessage();
        return;
    }
}

foreach ($persons as $person){
    echo $person . PHP_EOL;
}

foreach ($children as $child){
    echo $child . PHP_EOL;
}


