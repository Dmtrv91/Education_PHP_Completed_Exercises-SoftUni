<?php

$input = readline();

while ($input !== "END") {
    $isPalindrome = isPalindrome($input);
    if ($isPalindrome) {
        echo "true".PHP_EOL;
    }else{
        echo "false".PHP_EOL;
    }
    $input = readline();
}

function isPalindrome($number)  {
    $start = 0;
    for ($i = strlen($number) - 1; $i >= 0; $i--) {
        if ($number[$start] !== $number[$i]) {
            return false;
        }
        $start++;
    }
    return true;
}


?>
