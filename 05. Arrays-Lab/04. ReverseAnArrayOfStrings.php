<?php

$arr = explode(" ", readline());

for($i = 0; $i < count($arr) / 2; $i++) {
    $j = count($arr) - $i - 1;
    $oldElement = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $oldElement;
}
$output = implode(" ", $arr);
echo $output

?>