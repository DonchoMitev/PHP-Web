<?php

$phonebook = [];

function AddPerson($commandLine, $phonebook)
{
    $name = $commandLine[1];
    $tel = $commandLine[2];

    $phonebook["$name"] = $tel;

    return $phonebook;
}

function SearchName($phonebook, $commandLine)
{
    $name = $commandLine[1];

    if (array_key_exists($name, $phonebook)) {
        echo "$name -> $phonebook[$name]" . PHP_EOL;
    } else {
        echo "Contact $name does not exist." . PHP_EOL;
    }
}

while (true) {

    $input = readline();
    if ($input == 'END') {
        break;
    }

    $commandLine = explode(' ', $input);

    $command = strtolower($commandLine[0]);

    switch ($command) {
        case 'a':
            $phonebook = AddPerson($commandLine, $phonebook);
            break;
        case 's':
            SearchName($phonebook, $commandLine);
    }

}