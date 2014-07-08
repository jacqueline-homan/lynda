<?php

 /********************************************
 *Double quotes surrounding a string escapes * 
 * the ', but if single quotes were used,	 *
 * then we'd need to escape the ' with \ 	 *
 * like so: 'Winter\'s Bone'                 *
 ********************************************/  

$movie = "Winter's Bone";
echo $movie;
echo " ";

/*************************************
 * If we want to print out the value *
 * of a variable together with other *
 * stuff in a string, use "" around  *
 * the entire string. Strings that   *
 * are enclosed by '' are viewed by  *
 * PHP as literal text.              *
 ************************************/
echo 'I love movies like $movie';
echo "  ";
echo "I love movies like $movie";

?>