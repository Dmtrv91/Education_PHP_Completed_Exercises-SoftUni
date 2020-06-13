<?php

$arr = explode(' ',readline());
$command = readline();

while ($command != 'end') {
    $commands = explode(' ', $command);
    $action = $commands[0];
    $numberCommand = $commands[1];
    $number = isset($commands[2]) ? $commands[2] : false;

    switch ($action) {
        case "Add":
            $arr[] = $numberCommand;
            break;
        case "Remove":
            $indexForDeletion = array_search(intval($numberCommand), $arr);
            if ($indexForDeletion !== false) {
                array_splice($arr, $indexForDeletion, 1);
            }
            break;
        case "RemoveAt":
            array_splice($arr, $numberCommand, 1);
            break;
        case "Insert":
            array_splice($arr, $number, 0, $numberCommand);
            break;
        case "Contains":
            if (in_array($numberCommand, $arr)) {
                echo 'Yes' . PHP_EOL;
            } else {
                echo 'No such number' . PHP_EOL;
            }
            break;
        case "Print":
            for ($i = 0; $i < count($arr); $i++) {
                if ($numberCommand == 'odd') {
                    if ($arr[$i] % 2 !== 0) {
                        echo $arr[$i] . ' ';
                    }
                } else if ($numberCommand == 'even') {
                    if ($arr[$i] % 2 == 0) {
                        echo $arr[$i] . ' ';
                    }
                }
            }
            echo PHP_EOL;
            break; 
        case "Get":
            echo array_sum($arr) . PHP_EOL;
            break;        
        case "Filter":
            foreach ($arr as $value) {
                switch ($numberCommand) {
                    case '>':
                        if ($value > $numberCommand) {
                            echo $value . ' ';
                        }
                        break;
                    case '<':
                        if ($value < $numberCommand) {
                            echo $value . ' ';
                        }
                        break;
                    case '>=':
                        if ($value >= $numberCommand) {
                            echo $value . ' ';
                        }
                        break;
                    case '<=':
                        if ($value <= $numberCommand) {
                            echo $value . ' ';
                        }
                        break;
                }
            }
                echo PHP_EOL;
                break;
            }
    $command = readline();
}

echo implode(' ',$arr);

?>
