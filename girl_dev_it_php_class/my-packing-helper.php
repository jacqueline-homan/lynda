<?php
$hikingtripdays = 5;
$hourspertrip = 24 * $hikingtripdays;
$totalhours = $hourspertrip + 12 ;
$pairsofsocksperday = 2;

$a = $hikingtripdays;
$b = $pairsofsocksperday;

$result = $a * $b;

$pairsofsockspertrip = $result + 1;
$result2 = $pairsofsockspertrip;




echo "You will need $result pairs of socks for your trip,\n 
     unless you extend your trip by half a day,\n
     which is a 5 1/2 day trip, or $totalhours hour long trip. \n
     Then you will need $result2 pairs of socks:)";