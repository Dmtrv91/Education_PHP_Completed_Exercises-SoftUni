<?php

$array = explode(" ", readline());
$rotations = intval(readline());
$count = count($array);
$rotations = $rotations % $count;

for ($i = $rotations; $i < $count; $i++){
    $newArray[] = $array[$i];
}for ($i = 0; $i < $rotations; $i++){
    $newArray[] = $array[$i];
}
echo implode(" ", $newArray);

?>
