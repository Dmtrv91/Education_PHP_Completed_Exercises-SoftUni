<?php

$num=readline();
$num_arr=explode(" ",$num);
$len=count($num_arr);
$sum=0;

for($i=0;$i<$len;$i++)
{
    $arr[$i]=strrev($num_arr[$i]);
    $sum+=$arr[$i];
}
echo $sum;