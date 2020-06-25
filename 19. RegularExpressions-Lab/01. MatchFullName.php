<?php

$regular = '/\b[A-Z][a-z]+ [A-Z][a-z]+/';
$names = readline();

preg_match_all($regular, $names, $matches);

foreach ($matches[0] as $fullName) {
    echo $fullName.' ';
}

?>