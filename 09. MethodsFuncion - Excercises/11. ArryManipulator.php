<?php

$arr = array_map('intval', explode(' ', readline()));
$command = readline();
$c = explode(' ', $command);

while ($command != 'end')
{
    switch ($c[0])
    {
        case 'exchange': exchange($arr, $c); break;
        case 'max':
            switch ($c[1])
            {
                case 'even': maxEven($arr); break;
                case 'odd': maxOdd($arr); break;
            }
            break;
        case 'min':
            switch ($c[1])
            {
                case 'even': minEven($arr); break;
                case 'odd': minOdd($arr); break;
            }
            break;
        case 'first':
            switch ($c[2])
            {
                case 'even': firstEven($arr, $c); break;
                case 'odd': firstOdd($arr, $c); break;
            }
            break;
        case 'last':
            switch ($c[2])
            {
                case 'even': lastEven($arr, $c); break;
                case 'odd': lastOdd($arr, $c); break;
            }
            break;
    }
    $command = readline();
    $c = explode(' ', $command);
}

echo '[';
echo implode(', ',$arr);
echo ']';

function firstEven($arr, $c)
{
    $evens = [];
    $firstEven = [];

    if ($c[1] > count($arr))
    {
        echo 'Invalid count'.PHP_EOL;
    }
    else
    {
        for ($i = 0; $i < count($arr); $i++)
        {
            if ($arr[$i] % 2 == 0)
            {
                $evens[] = $arr[$i];
            }
        }
        if ($c[1] >= count($evens))
        {
            for ($j = 0; $j < count($evens); $j++)
            {
                $firstEven[] = $evens[$j];
            }
        }
        else
        {
            for ($k = 0; $k < $c[1]; $k++)
            {
                $firstEven[] = $evens[$k];
            }
        }

        echo '[';
        echo implode(', ', $firstEven);
        echo ']'.PHP_EOL;
    }
}

function firstOdd($arr, $c)
{
    $odds = [];
    $firstOdd = [];

    if ($c[1] > count($arr))
    {
        echo 'Invalid count'.PHP_EOL;
    }
    else
    {
        for ($i = 0; $i < count($arr); $i++)
        {
            if ($arr[$i] % 2 == 1)
            {
                $odds[] = $arr[$i];
            }
        }
        if ($c[1] >= count($odds))
        {
            for ($j = 0; $j < count($odds); $j++)
            {
                $firstOdd[] = $odds[$j];
            }
        }
        else
        {
            for ($k = 0; $k < $c[1]; $k++)
            {
                $firstOdd[] = $odds[$k];
            }
        }

        echo '[';
        echo implode(', ', $firstOdd);
        echo ']'.PHP_EOL;
    }
}

function lastEven($arr, $c)
{
    $evens = [];
    $lastEven = [];
    $lastEven1 = [];
    $lastEven2 = [];

    if ($c[1] > count($arr))
    {
        echo 'Invalid count'.PHP_EOL;
    }
    else
    {
        for ($i = 0; $i < count($arr); $i++)
        {
            if ($arr[$i] % 2 == 0)
            {
                $evens[] = $arr[$i];
            }
        }
        if ($c[1] >= count($evens))
        {
            for ($j = 0; $j < count($evens); $j++)
            {
                $lastEven[] = $evens[$j];
            }

            echo '[';
            echo implode(', ', $lastEven);
            echo ']'.PHP_EOL;
        }
        else
        {
            $lastEven1 = array_reverse($evens);

            for ($k = 0; $k < $c[1]; $k++)
            {
                $lastEven2[] = $lastEven1[$k];
            }

            echo '[';
            echo implode(', ', array_reverse($lastEven2));
            echo ']'.PHP_EOL;
        }
    }
}

function lastOdd($arr, $c)
{
    $odds = [];
    $lastOdd = [];
    $lastOdd1 = [];
    $lastOdd2 = [];

    if ($c[1] > count($arr))
    {
        echo 'Invalid count'.PHP_EOL;
    }
    else
    {
        for ($i = 0; $i < count($arr); $i++)
        {
            if ($arr[$i] % 2 == 1)
            {
                $odds[] = $arr[$i];
            }
        }
        if ($c[1] >= count($odds))
        {
            for ($j = 0; $j < count($odds); $j++)
            {
                $lastOdd[] = $odds[$j];
            }

            echo '[';
            echo implode(', ', $lastOdd);
            echo ']'.PHP_EOL;
        }
        else
        {
            $lastOdd1 = array_reverse($odds);

            for ($k = 0; $k < $c[1]; $k++)
            {
                $lastOdd2[] = $lastOdd1[$k];
            }

            echo '[';
            echo implode(', ', array_reverse($lastOdd2));
            echo ']'.PHP_EOL;
        }
    }
}

function maxOdd($arr)
{
    $maxOdd = 0;
    $index = -1;

    for ($i = 0; $i < count($arr);$i++)
    {
        if ($arr[$i] % 2 == 1)
        {
            if ($arr[$i] >= $maxOdd)
            {
                $maxOdd = $arr[$i];
                $index = $i;
            }
        }
    }

    if ($index == -1)
    {
        echo 'No matches'.PHP_EOL;
    }
    else
    {
        echo $index.PHP_EOL;
    }
}

function minOdd($arr)
{
    $minOdd = 9999;
    $index = -1;

    for ($i = 0; $i < count($arr);$i++)
    {
        if ($arr[$i] % 2 == 1)
        {
            if ($arr[$i] <= $minOdd)
            {
                $minOdd = $arr[$i];
                $index = $i;
            }
        }
    }

    if ($index == -1)
    {
        echo 'No matches'.PHP_EOL;
    }
    else
    {
        echo $index.PHP_EOL;
    }
}

function maxEven($arr)
{
    $maxEven = 0;
    $index = -1;

    for ($i = 0; $i < count($arr);$i++)
    {
        if ($arr[$i] % 2 == 0)
        {
            if ($arr[$i] >= $maxEven)
            {
                $maxEven = $arr[$i];
                $index = $i;
            }
        }
    }

    if ($index == -1)
    {
        echo 'No matches'.PHP_EOL;
    }
    else
    {
        echo $index.PHP_EOL;
    }
}

function minEven($arr)
{
    $minEven = 9999;
    $index = -1;

    for ($i = 0; $i < count($arr);$i++)
    {
        if ($arr[$i] % 2 == 0)
        {
            if ($arr[$i] <= $minEven)
            {
                $minEven = $arr[$i];
                $index = $i;
            }
        }
    }

    if ($index == -1)
    {
        echo 'No matches'.PHP_EOL;
    }
    else
    {
        echo $index.PHP_EOL;
    }
}

function exchange(&$arr, $c)
{
    if ($c[1] >= count($arr) || $c[1] < 0)
    {
        echo 'Invalid index'.PHP_EOL;
    }
    else
    {
        for ($i = 0; $i <= $c[1]; $i++)
        {
            $index = array_shift($arr);
            $arr[] = $index;
        }
    }
}

?>
