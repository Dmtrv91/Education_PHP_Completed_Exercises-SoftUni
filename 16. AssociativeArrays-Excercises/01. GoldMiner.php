<?php

$goldArr = [];
$command = readline();

while ($command !== "stop"){

    $type = $command;
    $carats = intval(readline());
    if(key_exists($type, $goldArr)){
        $goldArr[$type]+= $carats;
    }else{
        $goldArr[$type]= $carats;
    }
    $command = readline();
}

foreach ($goldArr as $type=>$carats) {
    echo "$type -> $carats"."K".PHP_EOL;
}