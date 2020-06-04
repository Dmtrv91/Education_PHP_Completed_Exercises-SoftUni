<?php

$input = readline(); //Четем входа като String
$n = str_split($input); //Правим масив от отделните цифри които сме получили на входа
$sum = 0;

for ($i = 0; $i < count($n); $i++) { //обхождаме елементите в масива
    $curSum = 1;
    for ($j = 1; $j <= intval($n[$i]); $j++) { //извличаме факториел от всяко число в масива
        $curSum *= $j;
    }
    $sum += $curSum;
}

if ($sum == intval($input)) {
    echo 'yes';
} else {
    echo 'no';
}