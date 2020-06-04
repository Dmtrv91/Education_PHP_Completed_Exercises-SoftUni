<?php

$user = readline();
$pass = strrev($user);
$attempts = 0;

while($attempts<4){
    $input = readline();
    if ($input === $pass) {
        echo "User $user logged in." . PHP_EOL;
        break;
    }
    echo "Incorrect password. Try again." . PHP_EOL;
    $attempts++;
}
if ($attempts === 4) {
    echo "User $user blocked!" . PHP_EOL;
}
