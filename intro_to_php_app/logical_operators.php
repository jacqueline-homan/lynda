<?php
/*******************************************
 * Logical Operators:			           *
 * Symbol  Example    Definition           *
 * &&	   $a && $b   True iff both $a and *
 *                    $b are true          *
 * ||      $a || $b   True of either $a or *
 *                    $b are true          *
 * !       !$a        True if $a is false  *
 ******************************************/
$name = 'Arthur';
$today = 'Wednesday';

if($name =='Arthur' && $today == 'Friday') {
	echo 'I hate Mondays!';
} elseif($name == 'Maven' || $today == 'Wednesday') {
	echo 'You am a pain, Sparky!';
} else {
	echo "Mu capece.";
}
                                
?>                      
