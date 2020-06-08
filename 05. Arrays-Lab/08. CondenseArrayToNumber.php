<?php

$arr = array_map('intval', explode(' ', readline()));

while (count($arr) > 1) {
    $arrNew = [];
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $arrNew[$i] = $arr[$i] + $arr[$i + 1];
    }
    $arr = $arrNew;
}

echo $arr[0];

?>
