<?php

$input = readline();
$arr = [];

for($i = 0; $i < strlen($input); $i++) {
    $char = $input[$i];

    if (!key_exists($char, $arr))
        $arr[$char] = 0;
    $arr[$char]++;
    }
    foreach ($arr as $k => $v)
        echo "$k -> $v" . PHP_EOL;


?>

