<?php

$fireCells = explode('#', readline());
$water = intval(readline());
$effort = 0;
$totalFire = 0;
$print = [];

foreach ($fireCells as $cellProps) {

    $cellProps = explode(' = ', $cellProps);
    $typeOfFire = $cellProps[0];
    $valueOfFire = (int)$cellProps[1];

    if(isWalid($typeOfFire, $valueOfFire) && ($water >= $valueOfFire)){
        $water-=$valueOfFire;
        $totalFire+=$valueOfFire;
        $effort+=$valueOfFire*0.25;
        $print[]=$valueOfFire;
    }
}
    echo 'Cells:'.PHP_EOL;
    foreach ($print as $cell) {
        echo ' - '.$cell.PHP_EOL;
    }
    printf("Effort: %.2f".PHP_EOL, $effort);
    echo "Total Fire: $totalFire";

function isWalid($typeOfFire, $valueOfFire){
    $valid = false;
    switch ($typeOfFire){
        case 'High':
            if($valueOfFire>=01 && $valueOfFire<=125){
                $valid = true;
            }
        break;
        case 'Medium':
            if($valueOfFire >= 51 && $valueOfFire <= 80) {
                $valid = true;
            }
        break;
        case 'Low':
            if($valueOfFire >= 1 && $valueOfFire <= 50){
                $valid = true;
            }
        break;
    }
    return $valid;
}
?>