<?php

$racersList = explode(", ",readline());
$racers = [];
$input = readline();

while($input !== "end of race"){
    $name = "";
    $kilometers = 0;
    for($i = 0; $i < strlen($input); $i++){
        $current = $input[$i];
        if(ctype_alpha($current)){
            $name .= $current;
        } elseif (ctype_digit($current)){
            $kilometers += $current;
        }
    }
    if(in_array($name, $racersList )){
        if(!key_exists($name, $racers )){
            $racers[$name] = $kilometers;
        } else {
            $racers[$name] += $kilometers;
        }
    }
    $input = readline();
}

arsort($racers);
$place = 1;

foreach ($racers as $racer=>$km){
    if($place == 1){
        echo "1st place: ";
    }else if($place == 2){
        echo "2nd place: ";
    }else {
        echo "3rd place: ";
    }
    echo "$racer".PHP_EOL;
    if($place ==3){
        break;
    }
    $place++;
}

?>