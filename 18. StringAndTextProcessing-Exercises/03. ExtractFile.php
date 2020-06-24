<?php

$input = readline();
$lastSlash = strrpos($input, "\\");
$file = substr($input, $lastSlash+1);
$lastDot = strrpos($file, ".");
$dot = substr($file, $lastDot + 1);
$fileName = substr($file, 0, $lastDot);

echo "File name: $fileName".PHP_EOL;
echo "File extension: $dot".PHP_EOL;


?>