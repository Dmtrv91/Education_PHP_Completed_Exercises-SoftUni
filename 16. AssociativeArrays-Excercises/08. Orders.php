<?php

$shop = [];

while (($arrgs = readline()) !== "buy") {
    $arr = explode(" ", $arrgs);
    $articul = $arr[0];
    $price = $arr[1];
    $size = $arr[2];
    
    if (!key_exists($articul, $shop)) {
        $shop[$articul] = [0, 0];
    }
    $shop[$articul][0] = $price;
    $shop[$articul][1] += $size;
}

foreach ($shop as $key => $value) {
    $prices = $value[1] * $value[0];
    printf("$key -> %.2f" . PHP_EOL, $prices);
}
?>