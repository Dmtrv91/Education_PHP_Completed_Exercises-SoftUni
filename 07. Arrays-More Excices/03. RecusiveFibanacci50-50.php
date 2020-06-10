<?php

function Fibonacci($n){

    $num1 = 1;
    $num2 = 1;

    $counter = 0;
    while ($counter < $n){
        echo ' '.$num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
}

$n = readline();
Fibonacci($n);
array_key_last(fibonacci($n));
?>