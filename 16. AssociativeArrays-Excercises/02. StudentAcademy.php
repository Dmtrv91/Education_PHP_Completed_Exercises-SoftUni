<?php

$studentCount = readline();
$studentGradeTotal = [];
$studentGradeCount = [];

for ($i = 0; $i < $studentCount; $i++) {
    $name = readline();
    $grade = floatval(readline());

    if (!key_exists($name, $studentGradeTotal)) {
        $studentGradeTotal[$name] = $grade;
        $studentGradeCount[$name] = 1;
    } else {
        $studentGradeTotal[$name] += $grade;
        $studentGradeCount[$name]++;
    }

    $studentsAverageGrade = [];

    foreach ($studentGradeTotal as $name => $grade) {
        $avgTemp = $grade / $studentGradeCount[$name];
        $average = number_format($avgTemp, 2);
        $studentsAverageGrade[$name] = $average;
    }
}
arsort($studentsAverageGrade);

foreach ($studentsAverageGrade as $name => $avg) {
    if ($avg >= 4.50) {
        echo "$name -> $avg".PHP_EOL;
    }
}

?>