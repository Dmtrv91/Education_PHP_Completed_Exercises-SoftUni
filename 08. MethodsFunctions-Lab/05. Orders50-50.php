<?php

$drinks = readline();
$numberOfDrinks = (readline());

function printDrink($drinks, $numberOfDrinks): float
{
    return($drinks * $numberOfDrinks);
}
    switch ($drinks){
        case "coffee":
            $result =  $numberOfDrinks * 1.50;
            echo  number_format($result,2);
            break;
        case "water":
            $result = $numberOfDrinks * 1.00;
            echo number_format($result,2);
            break;
        case "coke":
            $result = $numberOfDrinks * 1.40;
            echo number_format($result,2);;
            break;
        case "snacks":
            $result = $numberOfDrinks * 2.00;
            echo number_format($result,2);;
            break;
    }


?>