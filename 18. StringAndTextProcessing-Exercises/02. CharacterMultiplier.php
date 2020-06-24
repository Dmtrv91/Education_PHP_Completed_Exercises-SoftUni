<?php

$args = explode(" ",readline());
$word1 = $args[0];
$word2 = $args[1];
$min = min(strlen($word1), strlen($word2));
$max = max(strlen($word1), strlen($word2));
$sum = 0;

for($i = 0; $i < $min; $i++){
    $code1 = ord($word1[$i]);
    $code2 = ord($word2[$i]);
    $sum += $code1 * $code2;
}

if(strlen($word1) > strlen($word2)) {
    $remaining = substr($word1, $min);
} else {
    $remaining = substr($word2, $min);
}

for($i = 0; $i < strlen($remaining); $i++){
    $code = ord($remaining[$i]);
    $sum += $code;
}
echo $sum;


?>