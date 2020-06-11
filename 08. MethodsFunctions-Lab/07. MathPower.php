<?php

$n = intval(readline());
$power = intval(readline());

function mathPower($n, $power){
    $result = 1;
    for ($i = 0; $i < $power; $i++)
        $result *=$n;
    return $result;

}
echo mathPower($n, $power);


?>
