<?php
/************************************
 * In PHP, you can chain conditions *
 * and when you do that, only the   *
 * first condition that equates to  *
 * "true" is executed. So if the    *
 * first condition is "false", the  *
 * second conditon is "true."       *
 * If BOTH are "true", only the     *
 * first block of code is executed. *
 ***********************************/ 
$name = 'Arthur';
$today = 'Fri';

if($name =='Arthur' && $today == 'Thurs') {
	echo 'I hate Mondays!';
} elseif($name == 'Maven' || $today == 'Sat') {
	echo 'You am a pain, Sparky!';
} else {
	echo "Mu capece." . '<p>';
}

/* Logical operators are often used in control
conditions involving ranges of values in PHP.*/

$temperature = 50;

if ($temperature < 0){
	echo "Stay indoors!";
}elseif ($temperature > 0 && $temperature <= 30){
	echo "Wear a coat and hat!";
}elseif ($temperature > 30 && $temperature < 50){
	echo "Wear a coat.";
}else{
	echo "Wear whatever you want.";
}

?>