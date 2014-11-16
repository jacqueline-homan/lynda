<?php
/*************************************************** 
 *Rules for Naming Variables:                      *
 * 1. Variable names must always begin with "$"	   *
 * 2. First char after the "$" can't be a number   *
 * 3. No spaces or punctuation marks EXCEPT the "_"*
 * 4. Variable names are casse-sensitive.          *
 * 'firstName' =/= 'firstname' =/= 'first_name'    *
 * 5. "$this" is reserved for use                  *
 *    in object-oriented scripts.                  *
 *   Example: $this -> ed = "Dood"                 *
 * 												   *
 ***************************************************/
$firstName = " Jacqueline "; // spaces provide some padding between the values printed out.
$total = 47;
$firstname = " Ed ";
$Total = 49;
$number = 7.625;

/* Outputs the value stored 
in the var "$firstName" to the screen */ 
//echo $firstName;

/**************************************** 
 *Now let's do it with "print."			*
 *Why are there 2 commands that do 		*
 *the same thing? Does it matter?		*
 *Print can only dsiplay a single value *
 * but echo can display a 				*
 * comma-separated list of values 		*
 ***************************************/
//print $firstName;
//print $total;

//echo $firstName, $total, $firstname, $Total;

/*****************************************
* You can also assign the value of a var *
* to another var  					     *
*****************************************/
//$nom = $firstName;
//echo "I've assigned the value of the variable firstName to another variable, nom: ", $nom; 										

// This is a single line comment.
# This is also a single line comment.

/********************************
*PHP ignores white space so you *
*must use an empty string '';   *
*to make a space like so:		*
********************************/

/*echo $firstName;
echo '';
echo $total;
echo '';
echo $firstname;
echo '';
echo $Total;
*/
echo $number, '', $firstName, '', $firstname, '', $total, '', $Total;

?>