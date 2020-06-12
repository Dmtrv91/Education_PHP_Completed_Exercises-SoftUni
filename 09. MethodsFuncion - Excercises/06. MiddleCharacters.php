<?php

$input = readline();
$result = middleCharacters($input);
echo $result;

function middleCharacters($input)
{
    $m = 0;
    $p = 0;
    $result = "";

    for ($i = 0; $i < strlen($input); $i++)
    {
        $m += 1;
    }

    if (strlen($input) % 2 == 1)
    {
        $p = $m / 2;
        return $input[$p];
    }
    else
    {
        $p = $m / 2;
        return $input[$p -1 ].$input[$p];
    }
}

