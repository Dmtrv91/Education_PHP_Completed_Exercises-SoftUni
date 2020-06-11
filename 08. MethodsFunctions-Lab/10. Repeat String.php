<?php

$str = readline();
$count = intval(readline());

function repeatString($str, $count) {
    $result = "";
    for($i = 0; $i < $count; $i++)
        $result .=$str;
    return $result;

}
echo repeatString($str, $count);
?>