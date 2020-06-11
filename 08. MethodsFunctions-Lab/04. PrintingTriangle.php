<?php

$n = intval(readline());

function printLine($start,$end)
{
    for ($i = $start; $i <= $end; $i++) {
        echo($i . ' ');
    }
    echo " " . PHP_EOL;
}
    for($i = 0; $i < $n; $i++){
        printLine(1,$i);
    }
    printLine(1,$i);

    for($i = $n-1; $i > 0; $i--){
    printLine(1,$i);
}


?>



