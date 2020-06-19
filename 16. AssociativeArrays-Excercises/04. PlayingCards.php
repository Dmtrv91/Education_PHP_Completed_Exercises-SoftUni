<?php

$input = explode(': ', readline());
$name = $input[0];
$names[$name] = [];
$cards = explode(', ', $input[1]);

    while ($name != 'JOKER') {
        for ($i = 0; $i < count($cards); $i++) {
            $exist = false;
            for ($j = 0; $j < count($names[$name]); $j++) {
                if ($cards[$i] == $names[$name][$j]) {
                    $exist = true;
                }
            }
            if ($exist == false) {
                $names[$name][] = $cards[$i];
            }
        }

        $input = explode(': ', readline());
        $name = $input[0];

        if ($name != 'JOKER' && !key_exists($name, $names)) {
            $names[$name] = [];

            $cards = explode(', ', $input[1]);

        } elseif ($name != 'JOKER' ) {
            $cards = explode(', ', $input[1]);
        }
    }

foreach ($names as $name => $cards)
{
    $result = 0;
    for ($i = 0; $i < count($cards); $i++)
    {
        $card = $cards[$i];
        $cardPoints = 1;
        for ($j = 0; $j < strlen($card); $j++)
        {
            switch ($card[$j])
            {
                case '0': $cardPoints += 0; break;
                case '2': $cardPoints *= 2; break;
                case '3': $cardPoints *= 3; break;
                case '4': $cardPoints *= 4; break;
                case '5': $cardPoints *= 5; break;
                case '6': $cardPoints *= 6; break;
                case '7': $cardPoints *= 7; break;
                case '8': $cardPoints *= 8; break;
                case '9': $cardPoints *= 9; break;
                case '1': $cardPoints *= 10; break;
                case 'J': $cardPoints *= 11; break;
                case 'Q': $cardPoints *= 12; break;
                case 'K': $cardPoints *= 13; break;
                case 'A': $cardPoints *= 14; break;
                case 'S': $cardPoints *= 4; break;
                case 'H': $cardPoints *= 3; break;
                case 'D': $cardPoints *= 2; break;
                case 'C': $cardPoints *= 1; break;
            }
        }
        $result += $cardPoints;
    }
    if ($result > 0){
        echo "$name: $result".PHP_EOL;
    }

}