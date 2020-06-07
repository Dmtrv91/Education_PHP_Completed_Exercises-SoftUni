<?php

while(true) {
    $input = readline();
    if($input == "END") return;
    if(!empty($input)) {
        if(filter_var($input, FILTER_VALIDATE_INT) || filter_var($input, FILTER_VALIDATE_INT) === 0) {
            echo "$input is integer type" . PHP_EOL;
        } else if(filter_var($input, FILTER_VALIDATE_FLOAT) || filter_var($input, FILTER_VALIDATE_FLOAT) === 0.0) {
            echo "$input is floating point type" . PHP_EOL;
        } else if(filter_var($input, FILTER_VALIDATE_BOOLEAN) || strtolower($input) == "false") {
            echo "$input is boolean type" . PHP_EOL;
        } else if(strlen($input) == 1) {
            echo "$input is character type" . PHP_EOL;
        } else {
            echo "$input is string type" . PHP_EOL;
        }
    }
}

?>