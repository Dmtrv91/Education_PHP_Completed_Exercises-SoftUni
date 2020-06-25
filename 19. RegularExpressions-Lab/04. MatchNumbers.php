<?php

$pattern = '/(^|(?<=\s))-?\d+(\.\d+)?($|(?=\s))/';
$numbers = readline();

preg_match_all($pattern, $numbers, $matches );

echo implode(" ",$matches[0]);

?>