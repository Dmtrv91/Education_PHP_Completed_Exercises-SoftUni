<?php

$readline=intval(readline());
$days = ["None", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
unset($days[0]);

if(isset($days[$readline])) {
    echo $days[$readline];
} else{
    echo 'Invalid Day!';
}


?>
