<?php

$input = explode(" ", readline());
$size = count($input);

for ($i = 0; $i < $size; $i++) {
    $leftSum = 0;
    $rightSum = 0;

    for ($j = 0; $j < $i; $j++) {
        $leftSum += $input[$j];
    }

    for ($k = $i + 1; $k < $size; $k++) {
        $rightSum += $input[$k];
    }

    if ($leftSum == $rightSum) {
        echo $i;
        return;
    }
}
echo "no";

?>