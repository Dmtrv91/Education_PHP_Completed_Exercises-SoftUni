<?php

$person = readline();
$capacity = readline();

$curse = $person / $capacity;

echo round($curse,0, PHP_ROUND_HALF_UP);

?>