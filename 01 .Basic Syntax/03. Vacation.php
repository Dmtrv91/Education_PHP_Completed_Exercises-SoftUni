<?php

$groupCount = readline();
$groupType = readline();
$dayOfWeek = readline();
$pricePerNight = 0;

switch ($groupType){
    case "Student":
        if ($dayOfWeek == "Friday"){
            $pricePerNight = 8.45;
        } else if ($dayOfWeek == "Saturday") {
            $pricePerNight = 9.80;
        } else if ($dayOfWeek == "Sunday") {
            $pricePerNight = 10.46;
        }
        break;
    case "Business":
        if ($dayOfWeek == "Friday"){
            $pricePerNight = 10.90;
        } else if ($dayOfWeek == "Saturday") {
            $pricePerNight = 15.60;
        } else if ($dayOfWeek == "Sunday") {
            $pricePerNight = 16;
        }
        break;
    case "Regular":
        if ($dayOfWeek == "Friday"){
            $pricePerNight = 15;
        } else if ($dayOfWeek == "Saturday") {
            $pricePerNight = 20;
        } else if ($dayOfWeek == "Sunday") {
            $pricePerNight = 22.50;
        }
        break;
}

$totalPrices = $pricePerNight *  $groupCount;
if ($groupType = "Business" && $groupCount >= 100) {
    $total -= 10;
}if ($groupType = "Student" && $groupCount >= 30) {
    $total *= 0.85;
}if ($groupType = "Regular" && $groupCount >= 10 && $groupCount <= 20) {
    $total *= 0.95;
}
$formatted = number_format($totalPrices, 2, ".", "");

echo "Total price: $formatted";
?>