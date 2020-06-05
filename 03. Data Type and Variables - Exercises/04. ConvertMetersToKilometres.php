<?php

$meters = intval(readline());
$metarsToKilometars = $meters / 1000;

echo number_format($metarsToKilometars,2,".","");

?>