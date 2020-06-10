<?php

$n = intval(readline());
$m = [];

for ($i = 0; $i < $n; $i++) {
    $m[$i] = 0;
}
$cells = array_map('intval', explode(' ', readline()));

foreach ($cells as $key => $cell) {
    if ($cell >= 0 && $cell < $n) {
        $m[$cell] = 1;
    }
}
$input = readline();

while ($input != 'end') {
    $arr = explode(' ', $input);
    $position = intval($arr[0]);
    $direction = $arr[1];
    $shift = intval($arr[2]);
    if ($position >= 0 && $position < $n && $m[$position] == 1) {
        $m[$position] = 0;
        if ($direction == 'left') {
            $shift = -$shift;
        }
        for ($i = $position + $shift; $i >= 0 && $i < $n; $i += $shift) {
            if ($m[$i] == 0) {
                $m[$i] = 1;
                break;
            }
        }
    }
    $input = readline();
}
echo implode(' ', $m);

?>
