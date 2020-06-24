<?php

$inputs = explode(", ", readline());

foreach ($inputs as $input){
    $length = strlen($input);
    if($length >=3 && $length <= 16){
        $isValid = true;
        for($i = 0; $i < $length; $i++) {
            $currentChar = $input[$i];
            if (!(ctype_alnum($currentChar)
                ||$currentChar === "_"
                ||$currentChar === "-")) {
                $isValid = false;
                break;
            }
        }
        if($isValid){
            echo $input.PHP_EOL;
        }
    }
}

?>