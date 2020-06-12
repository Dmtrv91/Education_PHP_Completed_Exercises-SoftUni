<?php

$n1 = intval(readline());
$n2 = intval(readline());

$fact1 = factorialNumber1($n1);
$fact2 = factorialNumber1($n2);
$result = $fact1 / $fact2;

echo  number_format($result,2);

function factorialNumber1($number) : int{
    $factorial = 1 ;
    if($number <= 1){
        return $factorial = 1;
    }
    else {
        for ($i = 2; $i <= $number; $i++) {
            $factorial = $factorial * $i;
        }
        return $factorial;
    }
}

?>

