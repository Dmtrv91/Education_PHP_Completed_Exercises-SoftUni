<?php

function binomialCoeff($n, $k)
{
    $res = 1;
    if ($k > $n - $k)
        $k = $n - $k;
    for ($i = 0; $i < $k; ++$i)
    {
        $res *= ($n - $i);
        $res /= ($i + 1);
    }
    return $res;
}
function printPascal($n)
{
    for ($line = 0; $line < $n; $line++)
    {
        for ($i = 0; $i <= $line; $i++)
            echo "".binomialCoeff($line, $i)." ";
        echo "\n";
    }
}
$n= readline();
printPascal($n);

?>