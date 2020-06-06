<?php

$firstNumber = intval(readline());
$secondNumber = intval(readline());
$thirdNumber = intval(readline());
$fourthNumber = intval(readline());

$sum = $firstNumber + $secondNumber;
$division = (int)($sum / $thirdNumber);
$multiplication = (int)($division * $fourthNumber);

echo $multiplication;

?>
