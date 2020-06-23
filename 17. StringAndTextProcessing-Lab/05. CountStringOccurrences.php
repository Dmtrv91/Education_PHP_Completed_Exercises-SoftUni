<?php

$input = preg_split("/[ ,.?!]/", readline(), null, PREG_SPLIT_NO_EMPTY);
$word = readline();
$counter = 0;

for ($i = 0; $i < count($input); $i++) {
    if ($word == $input[$i])
        $counter++;
}
echo $counter;


?>