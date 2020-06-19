<?php

$n = intval(readline());
$arr = [];

for($i = 0; $i < $n; $i++) {
    $input = readline();
    $tokens = explode(" ", $input);

    $operation = $tokens[0];
    $name = $tokens[1];
    $registrationNumber = $tokens[2];

    if ($operation == "register") {
        if (!key_exists($name, $arr)) {
            $arr[$name] = $registrationNumber;
            echo "$name registered $registrationNumber successfully" . PHP_EOL;
        } else {
            echo "ERROR: already registered with plate number $registrationNumber" . PHP_EOL;
        }
    } else if ($operation == "unregister") {
        if (key_exists($name, $arr)) {
            unset($arr[$name]);
            echo "$name unregistered successfully" . PHP_EOL;
        } else {
            echo "ERROR: user $name not found" . PHP_EOL;
        }
    }
}

foreach ($arr as $key => $value) {
    echo $key. " => " . $value . PHP_EOL;
}


?>



