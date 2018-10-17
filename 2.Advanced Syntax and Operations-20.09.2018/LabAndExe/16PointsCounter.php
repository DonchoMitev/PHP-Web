<?php


$teamBook = [];
$teamScore = [];
$i = 0;


while (true) {
//    $inputArr = ['LA|Bryant|70',
//        'L%@A|Odom|67',
//        'Bry*%ant|LA|71',
//        'James|%CAVA@@LIE$$$RS|54',
//        'C@art%er|GR%%IZZ%%LIE@S@@@|49',
//        'Anthony|KNICKS|11',
//        'UTAH|Jo%%%%hn$$so@@n|24',
//        'S@@PU*R*S$|Ga***so**l|32',
//        'Jone@@@@s|KNICKS|5',
//        'Result',
//    ];
    $inputArr = ['SO@@@FTU%*NI|P*&@esho|30',
                'SO$$FT*UNI|Gos%@ho|42',
                'PAARTHURNAX|Maria|35',
                'S*OFT$$$UNI|Iv****@an|3',
                'L@u*b%o@|HE***RO@@ES|11',
                'Result'
        ];
    $input = $inputArr[$i];
    $i++;
    //$input = "LA|Bryant|70";
    if ($input == "Result") {
        break;
    }

    $inputLine = explode('|', $input);

    $firstValue = preg_replace('/[^A-Za-z]/', '', $inputLine[0]);
    $secondValue = preg_replace('/[^A-Za-z]/', '', $inputLine[1]);
    $score = $inputLine[2];

    if (ctype_upper($firstValue[1])) {
        $team = $firstValue;
        $player = $secondValue;
    } else {
        $team = $secondValue;
        $player = $firstValue;
    }

    $teamBook[$team][$player] = $score;

}


foreach ($teamBook as $team => &$score){

    usort($score, function ($item1, $item2) {
        return $item2 - $item1;
    });

    //array_multisort($score, SORT_DESC, $score);
    //arsort($score);
    if (!isset($teamScore[$team])){
        $teamScore[$team] = 0;
    }

    foreach ($score as $k => $v) {
        $teamScore[$team] += $v;
    }
}

arsort($teamScore);

foreach ($teamScore as $team => $score){
    echo $team . " -> " . $score . PHP_EOL;
    echo "Most points scored by " . key($teamBook[$team]) . PHP_EOL;
}