<?php

$pound = intval(readline());
$poundToDollar = 1.31;
$convert = $pound * $poundToDollar;

echo number_format($convert,3,".","");

?>
