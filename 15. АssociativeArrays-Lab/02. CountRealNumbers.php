<?php

$numbers = explode(' ', readline());
$numbersArr = [];

for ($i = 0; $i < count($numbers); $i++) {
    $num = $numbers[$i];
    if (!key_exists($num, $numbersArr)) {
        $numbersArr[$num] = 1;
    } else { $numbersArr[$num]++; }
}

ksort($numbersArr);

foreach ($numbersArr as $key => $value)
    echo "$key -> $value" . PHP_EOL;


?>


