<?php

$chars = "";
for ($i = 0; $i<3;$i++){
    $chars .= readline()." ";
}

$output = strrev($chars);
echo $output;

?>
