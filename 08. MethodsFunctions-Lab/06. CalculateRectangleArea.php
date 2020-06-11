<?php

$a = floatval(readline());
$b = floatval(readline());

function calcRactangleArea($a, $b) :float
{
    return $a * $b;
}

$area = calcRactangleArea($a, $b);
echo $area;


?>