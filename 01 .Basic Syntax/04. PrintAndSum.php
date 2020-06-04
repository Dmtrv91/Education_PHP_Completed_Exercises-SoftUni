<?php

$numberStart = readline();
$numberFinish = readline();

$sum = 0;
for ($i = $numberStart; $i <= $numberFinish; $i++) {
    echo "$i ";
    $sum+= $i;
}
echo PHP_EOL;
echo "Sum: $sum";
?>
