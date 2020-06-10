<?php

$arr = explode(' ', readline());
$p = 0;
$arr2 = [];

for ($i = 0; $i < count($arr); $i++)
{
    for ($j = $i + 1; $j < count($arr); $j++)
    {
        $p++;
        $arr2[$p][] = $arr[$i];
        if ($arr[$j] > $arr[$i])
        {
            array_push($arr2[$p], $arr[$j]);
            $currentNumber = $arr[$j];
            for ($k = $j + 1; $k < count($arr); $k++)
            {
                if ($currentNumber < $arr[$k])
                {
                    array_push($arr2[$p], $arr[$k]);
                    $currentNumber = $arr[$k];
                }
            }
            for ($r = $j + 2; $r < count($arr); $r++)
            {
                if ($arr[$r] > $arr[$j])
                {
                    $p++;
                    $arr2[$p][] = $arr[$i];
                    array_push($arr2[$p], $arr[$j]);
                    array_push($arr2[$p], $arr[$r]);
                    $number = $arr[$r];
                    for ($u = $r + 1; $u < count($arr); $u++)
                    {
                        if ($number < $arr[$u])
                        {
                            array_push($arr2[$p], $arr[$u]);
                            $number = $arr[$u];
                        }
                    }
                }
            }
        }
    }
}

uksort($arr2, function ($key1, $key2) use ($arr2)
{
    if (count($arr2[$key1]) == count($arr2[$key2]))
    {
        return $key1 <=> $key2;
    }
    else
    {
        return count($arr2[$key2]) <=> count($arr2[$key1]);
    }
});

if (count($arr2) > 1)
{
    echo implode(' ', array_shift($arr2));
}

else
{
    echo implode(' ', $arr);
}

?>