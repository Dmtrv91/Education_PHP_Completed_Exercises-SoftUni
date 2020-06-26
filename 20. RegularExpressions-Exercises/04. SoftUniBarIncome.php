<?php

$pattern = '/%([A-Z][a-z]+)%[^|$%.]*<(\w+)>[^|$%.]*\|(\d+)\|[^|$%.0-9]*(\d+[.\d]{0,})\$/m';
$input = readline();
$total = 0;

while($input !== "end of shift"){

    if(preg_match($pattern, $input, $matches)){
        $customer = $matches[1];
        $product = $matches[2];
        $price = $matches[3] * $matches[4];;
        $price = number_format($price, 2, ".", "");
        echo "$customer: $product - $price".PHP_EOL;
        $totalSum += (float)$price;
    }
    $input = readline();
}
$totalSum = number_format($totalSum, 2,'.',"");
echo "Total income: $totalSum".PHP_EOL;


?>