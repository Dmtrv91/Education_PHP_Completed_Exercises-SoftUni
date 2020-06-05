<?php

$number = intval(readline());
$bestSnowballValue = 0;
$bestQuality = 0;
$bestSnowballSnow = 0;

$bestSnowballSnow = 0;

for($i = 0; $i < $number; $i++) {
    $snowballSnow = intval(readline());
    $snowballTime = intval(readline());
    $snowballQuality = intval(readline());

    $snowballValue = pow(($snowballSnow / $snowballTime) , $snowballQuality);

    if($snowballValue> $bestSnowballValue){
        $bestSnowballValue = $snowballValue;
        $besQuality = $snowballQuality;
        $bestSnowballSnow = $snowballSnow;
        $bestSnowballTime = $snowballTime;
    }
}
echo "$bestSnowballSnow : $bestSnowballTime = $bestSnowballValue ($besQuality)";

?>
