<?php

$n1 = intval(readline());
$n2 = intval(readline());
$n3 = intval(readline());

$result = smallestNumber ($n1, $n2, $n3);
echo $result;

function smallestNumber (int $n1, int  $n2, int $n3) : int{
    if ($n1 < $n2 && $n1 < $n3) {
        return $n1;
    }
    if ($n2 < $n1 && $n2 < $n3) {
        return $n2;
    }
    return $n3;
}

?>
