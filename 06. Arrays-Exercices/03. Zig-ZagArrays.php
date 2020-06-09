<?php

$number = intval(readline());
$zig = [];
$zag = [];

for($i = 0; $i < $number; $i++){
    $args = explode(" ", readline());
    if($i % 2 == 0){
        $zig[] = $args[0];
        $zag[] = $args[1];
    }else {
        $zag[] = $args[0];
        $zig[] = $args[1];
    }
}
echo implode(" ",$zig).PHP_EOL;
echo implode(" ",$zag).PHP_EOL;

?>
