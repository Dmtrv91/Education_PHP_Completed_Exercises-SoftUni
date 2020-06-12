<?php


$number = intval(readline());
printTopNumber($number);

function printTopNumber(int $number) : void {
    for ($i = 1; $i <= $number; $i++){
        $current = $i;
        $sumDigits = 0;
        $hasOdd = false;
        
        while ($current > 0) {
            $lastDigits = $current % 10;
            $sumDigits += $lastDigits;
            $current = intval($current / 10);
            if ($lastDigits % 2 == 1) {
                $hasOdd = true;
            }

        }
        if($sumDigits % 8 == 0 && $hasOdd){
            echo $i.PHP_EOL;
        }
    }
}

?>