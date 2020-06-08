<?php

$items = explode(' ', readline());
$numbers = array_map('intval', $items);
$evenSum = 0;
$oddSum = 0;

foreach ($numbers as $num) {
    if ($num % 2 == 0) $evenSum += $num;
    else $oddSum += $num;
}
echo $evenSum;


?>
