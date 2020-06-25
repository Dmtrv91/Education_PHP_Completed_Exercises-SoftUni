<?php

$pattern = '/\+359([\-| ])2(\1)\d{3}(\1)\d{4}\b/';
$input = readline();

preg_match_all($pattern, $input, $phones);

echo implode(', ', $phones[0]);

?>