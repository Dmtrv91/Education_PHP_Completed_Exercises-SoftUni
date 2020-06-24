<?php

$input = readline();
$re = '/(?<string>[a-zA-z\W]+)(?<repeat>[\d]+)/m';

preg_match_all($re, $input, $matches, PREG_SET_ORDER, 0);
$finalString = "";
$symbols = "";

for ($i = 0; $i < count($matches); $i++) {
    $finalString .= str_repeat(strtoupper($matches[$i]['string']), $matches[$i]['repeat']);
    $symbols .= strtoupper($matches[$i]['string']);
}
$arr = str_split($symbols);
echo "Unique symbols used: " . count(array_unique($arr)) . PHP_EOL;
echo $finalString;