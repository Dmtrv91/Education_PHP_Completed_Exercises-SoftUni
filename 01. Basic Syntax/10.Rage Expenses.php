<?php

$lost_games=(int)readline();
$headsets=readline();
$mice=readline();
$keyboards=readline();
$displays=readline();

$headset_price=(int)($lost_games/2);
$mouce_price=(int)($lost_games/3);
$k_price=(int)($lost_games/6);
$d_price=(int)($lost_games/12);

$price = $headset_price*$headsets + $mouce_price*$mice + $k_price*$keyboards +$d_price*$displays;
printf("Rage expenses: %.2f lv.",$price);

?>