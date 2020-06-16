<?php

class Student
{
    public $comments = [];
    public $dates = [];
    public $name;

    public function getComments(): array
    {
        return $this->comments;
    }

    public function setComments($comments): void
    {
        array_push($this->comments, $comments);
    }

    public function getDates(): array
    {
        return $this->dates;
    }

    public function setDates($dates): void
    {
        array_push($this->dates, $dates);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }
}

function userExist($data, $user)
{
    foreach ($data as $val) {
        if ($val->getName() == $user) {
            return true;
        }
    }
    return false;
}

$students = [];

while (($input = trim(readline())) != "end of dates") {
    $tempStudent = new Student();
    $tokens = explode(" ", $input);
    $name = $tokens[0];
    $tempStudent->setName($name);
    if (count($tokens) > 1) {
        $tokens = explode(",", $tokens[1]);
        for ($i = 0; $i < count($tokens); $i++) {
            $tempStudent->dates[] = date_create_from_format('d/m/Y', $tokens[$i]);
        }
    }
    if (!userExist($students, $name)) {
        array_push($students, $tempStudent);
    } else {
        if ($tempStudent->dates != null) {
            foreach ($students as $student) {
                if ($name == $student->name) {
                    for ($i = 0; $i < count($tokens); $i++) {
                        $student->dates[] = date_create_from_format('d/m/Y', $tokens[$i]);
                    }
                }
            }
        }
    }
}

while (($input = trim(readline())) != "end of comments") {
    $tokens = explode("-", $input);
    $name = $tokens[0];
    if (count($tokens) > 1) {
        $comment = $tokens[1];
    } else {
        $comment = "";
    }
    foreach ($students as $student) {
        if ($name == $student->name) {
            $student->comments[] = $comment;
        }
    }
}

usort($students, function($a, $b) {
    return strcoll($a->name, $b->name);
});

foreach ($students as $output) {
    echo $output->name . PHP_EOL;
    echo "Comments:" . PHP_EOL;
    if (count($output->comments) > 0) {
        foreach ($output->comments as $comment) {
            echo "- $comment" . PHP_EOL;
        }
    }
    
    echo "Dates attended:" . PHP_EOL;
    
    if ($output->dates != null) {
        sort($output->dates);
        foreach ($output->dates as $date) {
            $dateStr = date_format($date, 'd/m/Y');
            //$dateStr = date('d/m/Y', $date);
            echo "-- $dateStr" . PHP_EOL;
        }
    }
}