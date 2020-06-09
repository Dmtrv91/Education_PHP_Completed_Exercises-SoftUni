<?php

$array = explode(" ", readline());
$count = count($array);
$input = readline();

while ($input !== "No Money") {
    $args = explode(" ", $input);
    $command = $args[0];
    $gift = $args[1];

    if ($command === "OutOfStock") {
        for ($i = 0; $i < $count; $i++) {
            if ($array[$i] === $gift) {
                $array[$i] = "None";
            }
        }
    } else if ($command=== "Required") {
        $index = $args[2];
        if ($index >= 0 && $index < $count) {
            $array[$index] = $gift;
        }
    }
    else if ($command === "JustInCase") {
        $lastIndex = $count - 1;
        $array[$lastIndex] = $gift;
    }


    $input = readline();
}

for($i = 0; $i < $count; $i++) {
    if ($array[$i] !== "None") {
        echo $array[$i]." ";
    }
}


?>
