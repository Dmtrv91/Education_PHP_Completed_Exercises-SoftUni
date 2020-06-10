<?php

$n = intval(readline());
$sequence = explode('!', readline());
$p = 1;

$bestSequences[$p] = [];
$currentIndex = 0;

while($sequence[0] != 'Clone them')
{
    $sequences[$p] = [];

    for ($i = 0; $i < count($sequence); $i++)
    {
        array_push($sequences[$p], $sequence[$i]);
    }
    for ($i = 0; $i < count($sequences[$p]); $i++)
    {
        if ($sequences[$p][$i] == 1)
        {
            $currentIndex = $i;
            $bestSequences[$p][$currentIndex] = 0;
            $bestSequences[$p][$currentIndex] ++;
            for ($j = $i + 1; $j < count($sequences[$p]); $j++)
            {
                if ($sequences[$p][$j] == 1)
                {
                    $bestSequences[$p][$currentIndex] ++;
                    $i++;
                }
                else
                {
                    break;
                }
            }
        }
    }

    arsort($bestSequences[$p]);
    $sequence = explode('!', readline());
    $p++;
}

for ($i = 1; $i <= count($bestSequences); $i++)
{
    $bestSequences[$i]['Sum'] = 0;
    foreach ($bestSequences[$i] as $key => $value)
    {
        $bestSequences[$i]['Sum'] += $value;
    }
}

uksort($bestSequences, function ($key1, $key2) use ($bestSequences)
{
    $v = $bestSequences[$key1][first_key($bestSequences[$key1])] <=> $bestSequences[$key2][first_key($bestSequences[$key2])];
    $k = first_key($bestSequences[$key1]) <=> first_key($bestSequences[$key2]);
    $s = $bestSequences[$key1]['Sum'] <=> $bestSequences[$key2]['Sum'];

    if ($v != 0)
    {
        return $bestSequences[$key2][first_key($bestSequences[$key2])] <=> $bestSequences[$key1][first_key($bestSequences[$key1])];
    }
    else
    {
        if ($k != 0)
        {
            return $bestSequences[$key1] <=> $bestSequences[$key2];
        }
        else
        {
            return $bestSequences[$key2]['Sum'] <=> $bestSequences[$key1]['Sum'];
        }
    }
});

$bestSample = first_key($bestSequences);
$sum = $bestSequences[$bestSample]['Sum'];

$sample = implode(' ', $sequences[$bestSample]);

echo "Best DNA sample {$bestSample} with sum: {$sum}.".PHP_EOL;
echo $sample;

function first_key(array $arr)
{
    $a = [];
    $a = array_keys($arr);
    return $a[0];
}

?>