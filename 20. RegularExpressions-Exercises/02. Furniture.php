<?php

$pattern = '/>>([a-zA-Z]+)<<([\d]+[\d.]{1,})!(\d+)/m';
$input = readline();
$matches = [];
$totalMoneySpend = 0;
echo "Bought furniture:".PHP_EOL;

while($input !== "Purchase"){
    if(preg_match($pattern, $input, $matches)){

        $product = $matches[1];
        $price = $matches[2];
        $quantity = $matches[3];
        $totalMoneySpend+= $price * $quantity;
        echo $product.PHP_EOL;
    }
    $input = readline();
}

$totalMoneySpend = number_format($totalMoneySpend, 2, ".", "");
echo "Total money spend: $totalMoneySpend".PHP_EOL;


?>