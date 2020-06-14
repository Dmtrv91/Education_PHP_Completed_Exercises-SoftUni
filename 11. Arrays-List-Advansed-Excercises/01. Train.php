<?php

$train = explode(" ",readline());
$capacity = readline();

$input = readline();

while ($input !== 'end') {
    $args = explode(" ",$input);
    $command = $args[0];

    if ($command === "Add") {
        $wagon = $args[1];
        $train[] = $wagon;
    }else {
        $passangers = intval($args[0]);
        for($i = 0; $i < count($train); $i++) {
            if ($train[$i] + $passangers <= $capacity) {
                $train[$i] += $passangers;
                break;
            }
        }
    }
    $input = readline();
}
echo implode(" ",$train);

?>
