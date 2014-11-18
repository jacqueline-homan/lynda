<?php
/* When you pass a variable as an arg to a function, 
the php engine makes a copy of that value stored in
that variable and it works on that copy.  
So the original value stored in that variable
remains unchanged. Here is an example of 
Passing by Value.*/
$num = 2;

function doubleIt($num){
	return $num *= 2;
}
//Calling the function:
$doubled = doubleIt($num);

echo '$doubled is: ' . $doubled . '<br>';
echo '$num is: ' . $num . '<br>';
echo '<p>';

/* Next: example of Process by Referece. Here we
change the name of the function so we don't
get a fatal error thrown at us for declaring 
the same function more than once.
Only variables can be Passed by Reference!!
*/

function doubleNum(&$num){
	$num *= 2;
}
//Calling the function:
$doubled = doubleNum($num);

echo '$doubled is: ' . $doubled . '<br>';
echo '$num is: ' . $num . '<br>';
var_dump($doubled);
echo '<br>';
/*shows variable type as Integer with a
new stored value as 4 */
echo 'Doing a var_dump shows us the variable
type as integer with a new stored value: ';
var_dump($num) . '<br>';

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet"<?php include './style.css'; ?> href = "style.css">	
</head>
<body>
  
  
  
</body>
</html>