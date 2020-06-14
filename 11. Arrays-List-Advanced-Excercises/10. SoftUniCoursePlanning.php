<?php

$courses = explode(", ",readline());
$input = readline();

while($input !== "course start") {
    $args = explode(":", $input);
    $command = $args[0];
    $lesson = $args[1];

    switch ($command) {
        case "Add":
            if(!in_array($lesson, $courses)) {
                $courses[] = $lesson;
            }
        break;
        case "Insert":
            $index = intval($args[2]);
            if(!in_array($lesson, $courses) && ($index >= 0 && $index < count($courses))) {
               // $courses[$index] = $lesson;
                array_splice($courses, $index, 0, $lesson);
            }
            break;
        case "Remove":
            $index = array_search($lesson, $courses);
            if ($index !== false) {
                array_splice($courses, $index, 1);
            }
            break;
        case "Exercise":
            $index = array_search($lesson, $courses);
            if ($index === false) {
                $courses[] = $lesson;
                $courses[] = $lesson . "-Exercise";
            } else if (!in_array($lesson . "-Exercise", $courses)){
                array_splice($courses, $index + 1, 0, $lesson . "-Exercise");
            }
            break;
        case "swap":
           $lesson2 = $args[2];
           $courses = swap($courses, $lesson, $lesson2);
           break;
    }
    $input = readline();
}

for ($i = 0; $i < count($courses); $i++) {
    $number = $i +1;
    echo "$number.$courses[$i]" . PHP_EOL;
}
function swap (array $arr, string $lesson1, string $lesson2)
{
    $index1 = array_search($lesson1, $arr);
    $index2 = array_search($lesson2, $arr);

    if ($index1 !== false && $index2 !== false) {
        $arr[$index1] = $lesson2;
        $arr[$index2] = $lesson1;
    }
    if (isset($arr[$index1 + 1]) && $arr[$index1 + 1] === $lesson1 . "-Exercise") {
        array_splice($aar, $index1 + 1, 1);
        array_splice($aar, $index2 + 1, 0, $lesson1 . "-Exercise");
    } else if (isset($arr[$index2 + 1]) && $arr[$index2 + 1] === $lesson2 . "-Exercise") {
        array_splice($aar, $index2 + 1, 1);
        array_splice($aar, $index1 + 1, 0, $lesson2 . "-Exercise");
    }
    return $arr;
}


?>