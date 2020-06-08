<?php

$n= explode(' ', readline());
$arr = array_map('intval', $n);
$sumEven = 0;
$sumOdd = 0;
$numm = 0;

for ($i = 0; $i < count($n); $i++) {
    $num = readline();
    }if ($i % 2 == 0) {
    $sumEven += $num;
    }
    else if ($i % 2 != 0){
        $sumOdd += $num;
    }
    $diff = $sumEven - $sumOdd;
    var_dump($diff);
?>
