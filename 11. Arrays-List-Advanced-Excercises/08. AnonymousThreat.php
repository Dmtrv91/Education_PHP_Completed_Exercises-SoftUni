<?php

$arr = explode(' ', readline());
$input = readline();

while ($input != "3:1") {
    $commands = explode(" ", $input);
    $command = $commands[0];
    $startIndex = intval($commands[1]);
    $endIndex = intval($commands[2]);
    $word = "";

    if ($startIndex < 0 || $startIndex > count($arr)) {
        $startIndex = 0;
    }
    if ($endIndex > count($arr) - 1 || $endIndex < 0) {
        $endIndex = count($arr) - 1;
    }
    if ($command == "merge") {
        for ($i = $startIndex; $i <= $endIndex; $i++) {
            $word .= $arr[$i];
        }
        array_splice($arr, $startIndex, $endIndex - $startIndex + 1,$word);
    } elseif ($command == "divide") {
        $divided = [];
        $divide = intval($commands[2]);
        $word = $arr[$startIndex];
        $parts = floor(strlen($word) / $divide);
        for ($i = 0; $i < $divide; $i++) {
            if ($i == $divide - 1) {
                $divided  [] = substr($word, $i * $parts);
            } else {
                $divided  [] = substr($word, $i * $parts, $parts);
            }
        }
        array_splice($arr, $startIndex, 1, $divided);
    }
    $input = readline();
}
echo implode(" ", $arr);