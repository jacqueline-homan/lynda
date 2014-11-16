<?php
$temp = 50;

if ($temp < 50) {
	echo "Put on a coat!", '<br>';	
}else{
	echo "You don't need a coat.", '<p>';
}

$age = 47;

if ($age < 18){
	echo "Ya'll can't vote yet!",'<p>';
}else{
	echo "Go vote!", '<p>';
}


$temperature = 38;

/*if ($temperature < 0){
	echo "tay your butt indoors!";
}elseif ($temperature < 30){
    echo "Wear a coat and hat!";
}elseif ($temperature < 50){
	echo "Wear coat!";
}*/

//Do range using && and stuff to refactor above block
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