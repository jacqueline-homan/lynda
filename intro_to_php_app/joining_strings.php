<?php
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

$message = "Name: $fullName $newLines";
$message .= "Recommendation: $recommendation $newLines";
$message .= "Number of readers recommending: $timesListed";
echo $message;