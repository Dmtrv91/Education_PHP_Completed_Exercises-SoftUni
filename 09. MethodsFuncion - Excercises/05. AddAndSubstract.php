<?php

$n1 = intval(readline());
$n2 = intval(readline());
$n3 = intval(readline());

$result = sumFirstTwoNumbers($n1, $n2) - subtractSum($n3);
echo $result;

function sumFirstTwoNumbers (int $n1, int $n2) : int {
    $sumFirstTwoNumbers = $n1 + $n2;
    return $sumFirstTwoNumbers;
}

function subtractSum (int $n3) : int{
    return $n3;
}