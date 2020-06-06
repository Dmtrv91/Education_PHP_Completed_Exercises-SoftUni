<?php
$n = intval(readline());
$isSpecial = false;

for($i=1; $i <= $n; $i++) {
       $sumOfDigits = 0;
       $number = $i;

       while ($number> 0) {
           $sumOfDigits += $number % 10;
           $number = $number / 10;

       }
    $isSpecial= ($sumOfDigits === 5) || ($sumOfDigits === 7) || ($sumOfDigits == 11);

    $trueOrFalse = $isSpecial ? "True" : "False";
    echo sprintf("%d -> %s", $i, $trueOrFalse) . PHP_EOL;
}



?>
