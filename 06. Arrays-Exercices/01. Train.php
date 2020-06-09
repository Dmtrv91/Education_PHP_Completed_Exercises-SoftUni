<?php

$number = intval(readline());
$arr= [];
$sum = 0;

for($i = 0; $i < $number; $i++) {
    $console = intval(readline());
    $arr[$i] = $console;
    $sum += $console;
}

echo implode(" ", $arr).PHP_EOL;
echo $sum;