<?php

$batches = intval(readline());
$totalBoxes = 0;

for($i = 0; $i < $batches; $i++) {
    $currentFlour = floatval(readline());
    $currentSugar = floatval(readline());
    $currentCocoa = floatval(readline());

    $flourCups = floor($currentFlour / 140);
    $sugarSpoons = floor($currentSugar / 20);
    $cocoaSpoons = floor($currentCocoa / 10);

    $min = min($flourCups, $sugarSpoons, $cocoaSpoons);
    if($min <= 0){
        echo "Ingredients are not enough for a box of cookies.",PHP_EOL;
        continue;
    }
    $totalCookiesPerBake = (140 + 10 + 20) * $min / 25;
    $currentBoxes = floar($totalCookiesPerBake / 5);
    $totalBoxes+= $currentBoxes;
    echo "Boxes of cookies: $currentBoxes".PHP_EOL;
}
echo "Total boxes: $totalBoxes".PHP_EOL;

?>