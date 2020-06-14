<?php

$sequence = array_map("intval", explode(" ", readline()));
$index = readline();
$sum = 0;

while (count($sequence)) {
    $index = intval($index);
    $removed = null;

    if ($index < 0) {
        $lastEl = $sequence[0];
        $sequence[0] = $sequence[count($sequence) - 1];
    } else if ($index >= count($sequence)) {
        $lastEl = $sequence[count($sequence) - 1];
        $sequence[count($sequence) - 1] = $sequence[0];
    } else {
        $lastEl = array_splice($sequence, $index, 1)[0];
    }
    $sum += $lastEl;
    for ($i = 0; $i < count($sequence);$i++){
        if ($sequence[$i] <= $lastEl) {
            $sequence[$i] += $lastEl;
        } else {
            $sequence[$i] -= $lastEl;
        }
    }
    $index = readline();
}
echo $sum;