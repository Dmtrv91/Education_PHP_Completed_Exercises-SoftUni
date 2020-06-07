<?php

$number = intval(readline());
$t = true;

for($t = 2; $t <= $number; $t++){
    $t = true;

    for($c = 2; $c < $t; $c++){
        if($t % $c == 0){
            $t = false;
            break;
        }
    }
    
    if($t)
        printf("%d -> true" . PHP_EOL, $t);
    else
        printf("%d -> false" . PHP_EOL, $t);
    }


?>