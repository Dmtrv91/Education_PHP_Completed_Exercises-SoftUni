<?php

$input = explode(' ', readline());

for($i = 0; $i < count($input); $i++) {
    $arr= [$i];
    $result = $arr[$i+1] + $arr[$i-1];
    echo $result;
}

echo implode(' ',$input);


?>