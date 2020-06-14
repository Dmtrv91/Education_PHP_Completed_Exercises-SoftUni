<?php

$arr = explode(" ",readline());
$input = readline();

while (true) {
    $args = explode(" ", $input);
    $command = $args[0];
    $element = $args[1];

    if ($command === "Delete") {
        $element = $args[1];
        while(array_search($element, $arr) !== false){
        $index = array_search($element, $arr);
        array_splice($arr, $index, 1);
         }
    }
    else if($command === "Insert") {
        $element = $args[1];
        $position = $args[2];
        if ($position >= 0 && $position <= count($arr)) {
           array_splice($arr, $position, 0, $element);
        }
    }
    if ($input === "Odd" || $input === "Even") {
        $reminder = 0;
        if ($input === "Odd") {
            $reminder = 1;
        }
        for ($i = 0; $i < count($arr); $i++) {
            if($arr[$i] % 2 == $reminder) {
                echo "$arr[$i] ";
            }
        }
        echo PHP_EOL;
        break;
    }
    $input = readline();
}



?>