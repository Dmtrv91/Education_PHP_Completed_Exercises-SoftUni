<?php

$input = readline();

while ($input != "end"){
    $reversed = strrev($input);
    echo $input." = ". $reversed.PHP_EOL;
    $input = readline();
}

?>