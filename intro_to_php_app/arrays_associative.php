<?php
/* This is an Associative Array. The values are
stored as a key-value pair. 
The key must be a string or integer, but the
value can be any type. */

$days_menu = array('Mon' => 'Hamburgers', 'Tues' => 'Spaghetti', 'Wed' => 'Tuna Casserole', 'Thurs' => 'BBQ Chicken', 'Fri' => 'Pizza');
print_r ($days_menu);

/*You can add elements to Associative Arrays by
putting the key inside the "[]" and then 
assign the value to it, like so: 
*/

$days_menu['Sat'] = 'Stuffed Pepper Soup'; 
$days_menu['Sun'] = 'Pot Roast';
echo '<p>';
/* You will get an error when you try running the following
code: 
echo "Tomorrow, we will have $days_menu['Sat'] for dinner."; 

In order to get around that, you do what can be thought of
as a combination string interpolation and array-to-string
conversion in order to print out the value stored in the
key of the array's key-value pair by enclosing 
$days_menu['Sat'] in curly braces, like so:
*/
echo "Tomorrow, we will have {$days_menu['Sat']} for dinner.";

echo '<p>';
print_r($days_menu);

