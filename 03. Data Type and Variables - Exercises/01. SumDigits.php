<?php

$number = intval(readline());
$sum = 0;
$number1 = $number;

do {
    $sum = $sum + ($number1 % 10);
    $number1 = $number1 / 10;
}
while ($number1 > 0);
    echo $sum;

?>