<?php

$n = readline();

for ($i = 0; $i < $n; $i++) {
    // $nums = explode(" ", preg_replace('/\s+/', ' ', trim(readline())));
    $nums = explode(' ', readline());
    $greaterNum = $nums[0] > $nums[1] ? $nums[0] : $nums[1];
    $sum = 0;
    for ($j = 0; $j < strlen($greaterNum); $j++) {
        $sum += intval($greaterNum[$j]);
    }
    echo $sum . PHP_EOL;
}
