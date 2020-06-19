<?php

$command = readline();
$courses = [];

while ($command !== "end") {

    $args = explode(" : ", $command);
    $course = $args[0];
    $student = $args[1];
    $courses[$course][] = $student;

    $command = readline();
}

uksort($courses, function ($arr1, $arr2) use ($courses){
    $len1 = count($courses[$arr1]);
    $len2 = count($courses[$arr2]);
    return $len2 <=> $len1;
});

foreach ($courses as $course => $students) {
    sort($students);
    $count = count($students);
    echo "$course: $count".PHP_EOL;
    foreach ($students as $student) {
        echo "-- $student".PHP_EOL;
    }
}