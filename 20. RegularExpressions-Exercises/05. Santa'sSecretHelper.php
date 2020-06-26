<?php

$key = intval(readline());
$pattern = '/@([A-Za-z]+)[^@\-!:>]*!([GN])!/';
$names = [];
$input = readline();

while ($input != 'end')
{
    $word = '';
    for ($i = 0; $i < strlen($input); $i++)
    {
        $char = ord($input[$i]) - $key;
        $char = chr($char);
        $word .= $char;
    }
    if (preg_match($pattern, $word, $arr))
    {
        $name = $arr[1];
        $behaviour = $arr[2];
        $names[$name] = $behaviour;
    }
    $input = readline();
}

foreach ($names as $name => $behaviour)
{
    if ($behaviour == 'G')
    {
        echo $name.PHP_EOL;
    }
}



?>