<?php

$arr = array_map('intval', explode(' ', readline()));
$explode = array_map('intval', explode(' ', readline()));
$sum = 0;

while (in_array($explode[0], $arr)) {
    $index = array_search($explode[0], $arr);
    $startIndex = $index - $explode[1];

    if ($startIndex < 0) $startIndex = 0;
    array_splice($arr, $startIndex, 2 * $explode[1] + 1);
}

for ($i = 0; $i < count($arr); $i++) {
    $sum += $arr[$i];
}
echo $sum;

?>