<?php

$number = readline();

function sumOfEvens($number) {
    $evenSum = 0;

    for ($i = 0; $i < strlen($number); $i++) {
        if ($number[$i] == "-") {
            $evenSum += 0;
        } else if (($number[$i] % 2) == 0) {
            $evenSum += $number[$i];
        }
    }
    return $evenSum;
}

function sumOfOdds($number) {
    $oddSum = 0;

    for ($i = 0; $i < strlen($number); $i++) {
        if ($number[$i] == "-") {
            $oddSum += 0;
        } else if (($number[$i] % 2) == 1) {
            $oddSum += $number[$i];
        }
    }
    return $oddSum;
}

function multiplyEvensbyOdds($number) {
    sumOfEvens($number);
    sumOfOdds($number);

    $product = abs(sumOfEvens($number) * sumOfOdds($number));

    echo $product;
    return $product;
}

multiplyEvensByOdds($number);


?>