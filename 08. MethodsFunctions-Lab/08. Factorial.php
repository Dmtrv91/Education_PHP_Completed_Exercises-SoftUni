<?php


$n = (readline());
function factoriell($n){
    $factoriel = 1;
    for($i = 1; $i<= $n; $i++) {
        $factoriel = $factoriel * $i;
    }
    return $factoriel;
}

$fac = factoriell($n);
echo $fac;



?>
