<?php

$array = array(
    1 => "one",
    2 => "two",
    3 => "three",
    4 => "four",
    5 => "five",
    6 => "six",
    7 => "seven",
    8 => "eight",
    9 => "nine",
    10 => "ten",
    11 => "eleven",
    12 => "twelve",
    13 => "thirteen",
    14 => "fourteen",
    15 => "fifteen",
    16 => "sixteen",
    17 => "seventeen",
    18 => "eighteen",
    19 => "ninteen",
    20 => "twenty",
    30 => "thirty",
    40 => "fourty",
    50 => "fifty",
    60 => "sixty",
    70 => "seventy",
    80 => "eighty",
    90 => "ninty"
);

$input = $argv[1];

$devisor = 1000;

while ($devisor >= 1) {
    $result = floor($input / $devisor);
    
    if ($result > 0) {
        switch ($devisor) {
            case 1000:
                print $array[$result];
                print " thousand ";
                break;
            case 100:
                print $array[$result];
                print " hundred and ";
                break;
            case 10:
                if ($result == 1) {
                    print $array[$input] . " ";
                    $devisor = 1;
                } else {
                    print $array[$result * 10] . " ";
                }
                break;
            case 1:
                print $array[$input];
                break;
        }
        
        $input = $input - ($result * $devisor);
    } else {
    }
    $devisor = ($devisor / 10);
}
print "\n";

?>
