<?php
/* Building on previous example with strings 
and the combined concatenation operator,
we now see how php is used as something to embed 
in static html code. Note the " <?= " used. 
That is shorthand for embedding a PHP variable
or string in html. On servers running PHP 5.3 
or earlier, you need to test this because it relies 
on short open tags being labeled in php.ini
*/

$fName = 'Jacqueline';
$lName = 'Homan';
$book = ' "Democracy for the Few" ';
$author = 'Michael Parenti';
$timesListed = 117;
$newLines = "\r\n\r\n";

$fullName = $fName . ' ' . $lName;
//echo $fullName . '<br>';

$recommendation = "$book by $author";
//echo $recommendation;

?>

<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
    <title><?= $fullName; ?> recommends</title>
  </head>

  <body>
  	<h1>Check this out!</h1>
  	<p>Hi, I'm <?= $fullName; ?>. 
  		I'm a fan of <?= $recommendation; ?>.<br>
  		At least <?= $timesListed; ?> other readers
  		have also read and recommended this book. 
  	</p>
  </body>
  </html>

