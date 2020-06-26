<?php

$input = readline();
$arr = preg_replace('/\s*,\s*/', ',', $input);
$args = explode(",", $arr);
$pattern = '/^.*?(\@{6,}|\${6,}|\^{6,}|\#{6,}).*?$/';

for ($i = 0; $i < count($args); $i++) {
    $ticket = $args[$i];
    $leftHalf = substr($ticket, 0, 10);
    $rigthHalf = substr($ticket, 10);
    
    if (strlen($ticket) !== 20) {
        echo "invalid ticket\n";
    } else if (preg_match($pattern, $leftHalf, $leftMatches) && preg_match($pattern, $rigthHalf, $rigthMatches)) {
        $left = $leftMatches[1];
        $rigth = $rigthMatches[1];
        $symbolLeft = substr($left, 0, 1);
        $symbolRigth = substr($rigth, 0, 1);
        
        if ($symbolLeft == $symbolRigth) {
            if (strlen($left) == 10 && strlen($rigth) == 10) {
                echo "ticket \"$ticket\" - 10" . $symbolLeft . " Jackpot!\n";
            } else {
                echo "ticket \"$ticket\" - " . min(strlen($left), strlen($rigth)) . $symbolLeft . "\n";
            }
        } else {
            echo "ticket \"$ticket\" - no match\n";
        }
    } else {
        echo "ticket \"$ticket\" - no match\n";
    }
}


?>