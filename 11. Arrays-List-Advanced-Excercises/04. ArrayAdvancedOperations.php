<?php

$arr = explode(" ",readline());
$input = readline();

while($input !== 'End') {
    $args = explode(" ", $input);
    $command = $args[0];
    switch ($command) {
        case "Add":
            $number = $args[1];
            $arr[] = $number;
            break;
        case "Remove":
            $index = intval($args[1]);
            if ($index >= 0 && $index < count($arr)) {
                array_splice($arr, $index, 1);
            } else {
                echo "Invalid index" . PHP_EOL;
            }
            break;
        case "Insert":
            $number = $args[1];
            $index = intval($args[2]);
            if ($index >= 0 && $index < count($arr)) {
                array_splice($arr, $index, 0, $number);
            } else {
                echo "Invalid index" . PHP_EOL;
            }
            break;
        case "Shift":
            $position = $args[1];
            $count = intval($args[2]);
            if ($position === "left") {
                for ($i = 0; $i < $count; $i++) {
                    $first = array_shift($arr);
                    $arr[] = $first;
                }
            } else {
                for ($i = 0; $i < $count; $i++) {
                    $last = array_pop($arr);
                    array_unshift($arr, $last);
                }
            }
    }
    $input = readline();
}
echo implode(" ",$arr);

?>