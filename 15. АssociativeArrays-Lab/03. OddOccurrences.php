<?php

$input = array_map('strtolower', explode(' ', readline()));
$arr = [];
$final = [];

for($i = 0; $i < count($input); $i++){
    $word = $input[$i];
    if (!key_exists($word, $arr)){
        $arr[$word] = 1;
    }else {
        $arr[$word]++;
    }
}

foreach ($arr as $key => $value){
    if($value % 2 !==0){
        $final[] = $key;
    }
}
echo implode(' ', $final);

?>