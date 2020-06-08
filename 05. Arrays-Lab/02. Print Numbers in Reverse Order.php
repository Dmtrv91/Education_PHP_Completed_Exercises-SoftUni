<?php

$n = intval(readline());
$toReverse = [];

for($i = 0; $i < $n; $i++) {
    $toReverse[] = intval(readline());
}
for($j = ($n - 1); $j >= 0; $j--){
    echo($toReverse[$j].' ');
}

?>