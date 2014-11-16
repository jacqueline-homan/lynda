<?php

$number = 5;
$number2 = 2;
echo $number % $number2,'<br>' .  $number / $number2, '<br>'; 
echo ++$number, '<br>';
echo --$number, '<br>';
echo --$number, '<br>';
echo $number += $number2,'<br>';
echo $number += $number2,'<p>';

$hikingtripdays = 5;
$hourspertrip = 24 * $hikingtripdays;
//$totalhours = $hourspertrip / ;
$pairsofsocksperday = 2;
$a = $hikingtripdays;
$b = $pairsofsocksperday;
$result = $a * $b;
echo "You will need $result pairs of socks for your trip :)";
?>