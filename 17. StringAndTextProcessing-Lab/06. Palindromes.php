<?php

$text = readline();
$text = str_replace([' ', ',', '.', '?', '!'], '@', $text);
$arr = explode('@', $text);
$palindromes = [];

for ($i = 0; $i < count($arr); $i++)
{
    if ($arr[$i] == strrev($arr[$i]) && !empty($arr[$i]))
    {
        $palindromes[] = $arr[$i];
    }
}

$palindromes = array_unique($palindromes);
natcasesort($palindromes);

echo implode(', ', $palindromes);