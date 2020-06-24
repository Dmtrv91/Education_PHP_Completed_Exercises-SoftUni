<?php

$input = readline();
$bomb = 0;

for ($i = 0; $i < strlen($input); $i++) {
    if ($bomb > 0 && $input[$i] != '>') {
        $input = substr_replace($input, '', $i, 1);
        $bomb--;
        $i--;
    } else if ($input[$i] == '>') {
        $bomb += intval($input[$i + 1]);
    }
}
echo $input;