<?php

$word = explode(" ", readline());
$input = readline();

while ($input != "Stop") {
    $comand = explode(" ", $input);
    switch ($comand[0]) {
        case"Delete":
            $index = $comand[1] + 1;
            if ($index >= 0 && $index <= count($word)) {
                array_splice($word, $index, 1);
            }
            break;
        case"Swap":
            $word1 = $comand[1];
            $word2 = $comand[2];
            if (in_array($word1, $word) && in_array($word2, $word)) {
                $temp = $word1;
                $index1 = array_search($word1, $word);
                $index2 = array_search($word2, $word);
                array_splice($word, $index1, 1, $word2);
                array_splice($word, $index2, 1, $temp);
            }
            break;
        case "Put":
            $element = $comand[1];
            $index = $comand[2] - 1;
            if ($index >= 0 && $index <= count($word)) {
                array_splice($word, $index, 0, $element);
            }
            break;
        case"Sort":
            rsort($word);
            break;
        case"Replace":
            $word1 = $comand[1];
            $word2 = $comand[2];
            if (in_array($word2, $word)) {
                $index = array_search($word2, $word);
                array_splice($word, $index, 1, $word1);
            }
            break;
    }
    $input = readline();
}
echo implode(" ", $word);

?>