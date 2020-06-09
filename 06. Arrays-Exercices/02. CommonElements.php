<?php

$firstNumber = explode(" ", readline());
$secondNumber = explode(" ", readline());
$arryCommon = [];
$count1 = count($firstNumber);
$count2 = count($secondNumber);

for($i = 0; $i < $count1; $i++){
    for($j = 0; $j < $count2; $j ++){
        if($firstNumber[$i] === $secondNumber[$j]) {
            $arryCommon[] = $firstNumber[$i];
        }
    }
}
echo implode(" ",$arryCommon);

?>
