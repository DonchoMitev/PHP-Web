<?php

$input = readline();

$setLetterCount = [];

for ($i = 0; $i < strlen($input); $i++) {

    if (!isset($setLetterCount[$input[$i]])) {
        $setLetterCount[$input[$i]] = 1;
    } else {
        $setLetterCount[$input[$i]]++;
    }

}
//foreach ($input as $letter){
//    if (!isset($setLetterCount[$letter])){
//        $setLetterCount[$letter] = 1;
//    }else{
//        $setLetterCount[$letter]++;
//    }
//}

foreach ($setLetterCount as $letter => $count) {
    echo "$letter -> $count" . PHP_EOL;
}