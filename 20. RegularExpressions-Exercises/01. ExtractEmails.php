<?php

$re = '/(?:(^| ))[a-zA-Z0-9]+[\w\-.]*@[a-zA-z-]+(\.[a-zA-Z]+)+/m';
$str = readline();

preg_match_all($re, $str, $matches);

echo implode("\n", $matches[0]);

?>