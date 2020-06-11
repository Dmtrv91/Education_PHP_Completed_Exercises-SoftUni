<?php

$number = intval(readline());
printSign($number);

function printSign($number) {
    if($number > 0)
        $result = "The number $number is positive.";
    else if ($number < 0)
        $result = "The number $number is negative.";
    else

        $result = "The number $number is zero.";
    echo $result;
}
?>
