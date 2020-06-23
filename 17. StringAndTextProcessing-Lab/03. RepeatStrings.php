<?php

$input = explode(" ", readline());

foreach ($input as $word){
    $count = strlen($word);
    echo str_repeat($word, $count);

}


?>