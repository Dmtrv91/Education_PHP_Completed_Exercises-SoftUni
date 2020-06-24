<?php

$input = readline();
$newString = '';
$lastCharacter = '';

for ($i = 0; $i < strlen($input); $i++) {
    if ($input[$i] !== $lastCharacter) {
        $newString .= $input[$i];
    }
    $lastCharacter = $input[$i];
}
echo $newString;

?>