<?php

$array = explode(" ", readline());
$count = count($array);
$topInteger = [];

for ($row = 0; $row < $count; $row++) {
    $top = true;
    for ($i = $row + 1; $i < $count; $i++){
        if ($array[$row] <= $array[$i]) {
            $top = false;
            break;
        }
    }
    if ($top) {
        $topInteger[] = $array[$row];
    }
}
echo implode(" ",$topInteger);

?>