<?php

// str_count
function str_count($str, $substr) {
    $count = 0;
    $pos = 0;

    while (($pos = strpos($str, $substr, $pos)) !== false) {
        $count++;
        $pos++;
    }

    return $count;
}
echo "1) str_count('Annihilation', 'i') = " . str_count("Annihilation", "i") . "<br>";


//  no_space
function no_space(string $str): string {
    return str_replace(" ", "", $str);
}

echo "2) no_space('day and night') = " . no_space("day and night") . "<br>";


// max_number
function max_number(int $num): int {
    $digits = str_split((string)$num);
    rsort($digits);
    return (int)implode("", $digits);
}

echo "3) max_number(034) = " . max_number(034);

?>