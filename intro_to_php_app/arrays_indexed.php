<?php
$chars = array ('Mon', 'Tues', 'Wed', 'Thurs', 'Fri');
print_r($chars);
//echo $chars; //uncomment this line to see what happens.

// Outputs element by its index number in the array.
echo '<p>' . $chars[2]; 

//Adding elements to an array
$chars[] = 'Sat';
$chars[] = 'Sun';
echo '<p>' . $chars[5] . ' and ' . $chars[6] . ' have now been added. <br>';

//Let's inspect the array to make sure
print_r($chars);

