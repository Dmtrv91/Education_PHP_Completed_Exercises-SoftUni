<?php

$array = explode(" ", readline());
$count = count($array);
$bestCount = 0;
$BestElement = 0;

for ($i = 0; $i <  $count; $i++) {
    $repeat = 1;
    for ($j = $i + 1; $j < $count; $j++) {
        if ($array[$i] === $array[$j]) {
            $repeat++;
        } else {
            break;
        }
    }

    if ($repeat > $bestCount) {
        $bestCount = $repeat;
        $bestElement = $array[$i];
    }
}

for ($i = 0; $i < $bestCount; $i++) {
    echo $bestElement." ";
}

?>