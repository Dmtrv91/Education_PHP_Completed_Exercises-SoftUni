<?php

$count = intval(readline());
$list = [];

for ($i=0; $i < $count; $i++) {
    $command = readline();
    $name = explode(' ', $command)[0];
    
    if (strpos($command, 'is going!') !== false) {
        if (in_array($name, $list)) {
            echo "{$name} is already in the list!" . PHP_EOL;
        } else {
            $list[] = $name;
        }
    } else if (strpos($command, 'is not going!') !== false) {
        if (!in_array($name, $list)) {
            echo "{$name} is not in the list!" . PHP_EOL;
        } else {
            $index = array_search($name, $list);
            unset($list[$index]);
        }
    }
}
echo implode(PHP_EOL, $list);