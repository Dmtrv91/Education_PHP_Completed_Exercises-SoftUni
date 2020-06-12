<?php

$n = intval(readline());
$result = madeMatrix($n);
echo $result;

function madeMatrix(int $n)
{
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            echo($n . " ");
        }
        echo "" . PHP_EOL;
    }
}

?>