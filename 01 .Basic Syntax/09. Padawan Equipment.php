<?php

$money = floatval(readline());
$students = floatval(readline());
$priceLightSabers = floatval(readline());
$priceRobes = floatval(readline());
$priceBelts = floatval(readline());

$sumSabers = $priceLightSabers * ceil(($students + 0.10 * $students));
$sumRobes = $priceRobes * $students;
$sumBelts = $priceBelts * ceil($students - ($students / 6));

$sumAll = $sumSabers + $sumRobes + $sumBelts;

if ($sumAll <= $money) {
    echo "The money is enough - it would cost". number_format($sumAll, 2, '.', ''). "lv.";
} else {
    $needMore = $sumAll - $money;
    echo "Ivan Cho will need " . number_format($needMore, 2, '.', ' ') . "lv more.";
}

?>