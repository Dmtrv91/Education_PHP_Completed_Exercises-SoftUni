<?php

$key = readline();
$text = readline();

while (true) {
    $old = $text;
    $text = str_replace($key,'' ,$text );
    if($old == $text) {
        echo $text;
        break;
    }
}
?>