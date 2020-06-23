<?php

$banlist = explode(", ",readline());
$text = readline();

foreach($banlist as  $word){
    $wordMask = str_pad('*', strlen($word), '*');
    $text = str_replace($word, $wordMask, $text);
}
echo $text;
?>