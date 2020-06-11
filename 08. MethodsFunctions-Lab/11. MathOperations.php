<?php

$a = intval(readline());
$operator = readline();
$b = intval(readline());

function calculate($a, $operator, $b) {
    $result = 0.0;

    switch($operator){
        case "*":
             $result = $a * $b;
             echo number_format($result,2);
             break;

        case "/":
            $result = $a / $b;
            echo number_format($result,2);
            break;
        case "+":
            $result = $a + $b;
            echo number_format($result,2);
            break;
        case "-":
            $result = $a - $b;
            echo number_format($result,2);
            break;
    }

}
echo calculate($a, $operator, $b);



?>