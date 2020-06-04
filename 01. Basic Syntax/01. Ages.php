<?php
$age = intval(readline());

if($age <= 2) {
    echo 'baby';
} else if($age <= 13) {
    echo 'child';
} else if($age <= 19) {
    echo 'teneger';
} else if($age <= 65) {
    echo 'adult';
} else {
    echo 'elder';
}
?>