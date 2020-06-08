<?php


$arr = explode(" ", readline());
for($i = 0; $i < count($arr); $i++) {
    echo number_format($arr[$i], 2)." =>"." ".round($arr[$i]).PHP_EOL;
}


?>