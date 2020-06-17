<?php

$days = intval(readline());
$players = intval(readline());
$energyGroup = floatval(readline());
$waterPerson = floatval(readline());
$foodPerson = floatval(readline());

$totalWater = $waterPerson * $days * $players;
$totalFood = $foodPerson * $days * $players;
$temp = 0;
$boost = 0;

for ($i = 1; $i <= $days; $i++) {
    $energyLoss = floatval(readline());
    $energyGroup -= $energyLoss;

    if ($energyGroup <= 0) {
        break;
    }

    if ($i % 3 == 0) {
        $energyGroup *= 1.1;
        $temp = $totalFood / $players;
        $totalFood -= $temp;
    }
    if ($i % 2 == 0) {
        $energyGroup *= 1.05;
        $totalWater *= 0.7;
    }
}

if ($energyGroup <= 0) {
    $totalFood= number_format($totalFood, 2);
    $totalWater = number_format($totalWater, 2);
    echo "You will run out of energy. You will be left with $totalFood food and $totalWater water.";
} else {
    printf("You are ready for the quest. You will be left with - %.2f energy!", $energyGroup);
}