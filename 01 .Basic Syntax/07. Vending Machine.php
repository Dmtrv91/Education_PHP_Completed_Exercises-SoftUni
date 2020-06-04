<?php

$n = readline();
$sum = 0;
$price = 0;

while($n != 'Start')
{
    switch ($n)
    {
        case '0.1': $sum += (float)$n; break;
        case '0.2': $sum += (float)$n; break;
        case '0.5': $sum += (float)$n; break;
        case '1': $sum += (float)$n; break;
        case '2': $sum += (float)$n; break;
        default: printf('Cannot accept %s', $n);
            echo PHP_EOL;
    }
    $n = readline();
}

$m = readline();

while($m != 'End')
{
    switch ($m)
    {
        case 'Nuts':
            if ($price <= $sum)
            {
                $price += (float)2.0;
                $sum -= (float)2.0;
                printf('Purchased %s', strtolower($m));
                echo PHP_EOL;
            }
            else if ($price > $sum)
            {
                echo 'Sorry, not enough money';
                echo PHP_EOL;
            }break;

        case 'Water':
            if ($price <= $sum)
            {
                $price += (float)0.7;
                $sum -= (float)0.7;
                printf('Purchased %s', strtolower($m));
                echo PHP_EOL;
            }
            else if ($price > $sum)
            {
                echo 'Sorry, not enough money';
                echo PHP_EOL;
            }break;

        case 'Crisps':
            if ($price <= $sum)
            {
                $price += (float)1.5;
                $sum -= (float)1.5;
                printf('Purchased %s', strtolower($m));
                echo PHP_EOL;
            }
            else if ($price > $sum)
            {
                echo 'Sorry, not enough money';
                echo PHP_EOL;
            }break;

        case 'Soda':
            if ($price <= $sum)
            {
                $price += (float)0.8;
                $sum -= (float)0.8;
                printf('Purchased %s', strtolower($m));
                echo PHP_EOL;
            }
            else if ($price > $sum)
            {
                echo 'Sorry, not enough money';
                echo PHP_EOL;
            }break;

        case 'Coke':
            if ($price <= $sum)
            {
                $price += (float)1.0;
                $sum -= (float)1.0;
                printf('Purchased %s', strtolower($m));
                echo PHP_EOL;
            }
            else if ($price > $sum)
            {
                echo 'Sorry, not enough money';
                echo PHP_EOL;
            }break;

        default: printf('Invalid product');
            echo PHP_EOL;
    }
    $m = readline();
}

printf('Change: %.2f',$sum);