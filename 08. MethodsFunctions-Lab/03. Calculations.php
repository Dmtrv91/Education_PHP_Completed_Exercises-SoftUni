<?php


$command = readline();
$a = readline();
$b = readline();

function funcia ($command, $a, $b){
    $result=0;
switch ($command) {

    case 'add':
        echo "$a $b";
        break;
    case 'multiply':
        $result = $a * $b;
        echo($result);
        break;
    case 'subtract':
        $result = $a - $b;
        echo($result);
        break;
    case 'divide':
        $result = ($a / $b);
        echo($result);
        break;

    }

}
$abc = funcia ($command, $a, $b);
echo $abc;


?>
