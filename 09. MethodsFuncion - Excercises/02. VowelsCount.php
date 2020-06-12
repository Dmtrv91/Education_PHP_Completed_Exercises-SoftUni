<?php

$word = readline();
$result = countVowels($word);
echo $result;

function countVowels(String $word) : int {
    $count = 0;
    for($i = 0; $i < strlen($word); $i++) {
        $current = strtolower($word[$i]);
        if ($current == "a" || $current == "u" || $current == "o" || $current == "e" || $current == "i")
        {
            $count++;
        }
    }
    return intval($count);
}



?>
