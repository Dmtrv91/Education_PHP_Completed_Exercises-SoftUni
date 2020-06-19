<?php

$input = readline();
$forceSides = [];
$forceUsers = [];

while ($input != 'Lumpawaroo') {
    if (strpos($input, ' | ')) {
        $arr = explode(' | ', $input);
        $forceSide = $arr[0];
        $forceUser = $arr[1];
        if (!array_key_exists($forceUser, $forceUsers)) {
            addUser($forceUser, $forceUsers, $forceSide, $forceSides);
        }
    } else {
        $arr = explode(' -> ', $input);
        $forceSide = $arr[1];
        $forceUser = $arr[0];
        if (array_key_exists($forceUser, $forceUsers)) {
            $index = array_search($forceUser, $forceSides[$forceUsers[$forceUser]]);
            array_splice($forceSides[$forceUsers[$forceUser]], $index, 1);
        }
        addUser($forceUser, $forceUsers, $forceSide, $forceSides);
        echo "$forceUser joins the $forceSide side!" . PHP_EOL;
    }
    $input = readline();
}

ksort($forceSides);

function cmp($a, $b) {
    return count($b) - count($a);
}

uasort($forceSides, cmp);

foreach ($forceSides as $side => $users) {
    $count = count($users);
    if ($count) {
        echo "Side: $side, Members: $count" . PHP_EOL;
        sort($users);
        foreach ($users as $user) {
            echo "! $user" . PHP_EOL;
        }
    }
}

function addUser($forceUser, &$forceUsers, $forceSide, &$forceSides)
{
    $forceUsers[$forceUser] = $forceSide;
    if (!array_key_exists($forceSide, $forceSides)) {
        $forceSides[$forceSide] = [];
    }
    $forceSides[$forceSide][] = $forceUser;
}