<?php

$text = readline();
$s = 3;
echo encrypt($text, $s);

function encrypt($text, $s)
{
    $result = "";

    for ($i = 0; $i < strlen($text); $i++)
    {
        if (ctype_upper($text[$i]))
            $result = $result.chr((ord($text[$i]) + $s));
        else
            $result = $result.chr((ord($text[$i]) + $s));
    }
    return $result;
}

?>