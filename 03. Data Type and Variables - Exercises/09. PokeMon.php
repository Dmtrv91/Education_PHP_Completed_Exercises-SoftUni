<?php

$pokePowerN = intval(readline());
$distanceM = intval(readline());
$exhoustionFactory = intval(readline());
$count = 0;
$half = $pokePowerN / 2.0;

while ($pokePowerN >= $distanceM) {
    $count++;

    $pokePowerN -= $distanceM;
    if($half == $pokePowerN) {
        if($exhoustionFactory > 0) {
            $pokePowerN /= $exhoustionFactory;
        }
    }
}
echo round($pokePowerN,0), PHP_EOL;
echo round($count,0), PHP_EOL;

?>
