<?php

$array = explode(" ", preg_replace('/\s+/', ' ', trim(readline())));

for ($i = 0; $i < count($array); $i++) {
    $array[$i] = intval($array[$i]);
}
$specialNum = $array[0];
$specialIndex = 0;
$sum = $specialNum;

while (true) {
    if (($specialIndex + $specialNum) < count($array)) {
        $sum += $array[$specialIndex + $specialNum];
        $specialIndex += $specialNum;
        $specialNum = $array[$specialIndex];
    } elseif ($specialIndex - $specialNum >= 0) {
        $sum += $array[$specialIndex - $specialNum];
        $specialIndex -= $specialNum;
        $specialNum = $array[$specialIndex];
    } else {
        break;
    }
}
echo $sum;

?>
