<?php

$centuries = readline();
$centuriesToYear = $centuries * 100; //years
$tropicalYearToDays = $centuriesToYear * 365.24; // days
$daysToHours = $tropicalYearToDays * 24; //hours
$hoursToMin = $daysToHours * 60;


echo $centuries.' centuries '.'= '.$centuriesToYear.' years '.'= '.round($tropicalYearToDays,0).' days '.'= '.round($daysToHours,0).' hours '.'= '.round($hoursToMin,0).' minutes ';

?>
