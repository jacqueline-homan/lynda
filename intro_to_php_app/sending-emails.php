<?php
$to = 'Jacqueline S. Homan <jacqueline@example.com>';
$subject = 'Subject';
$body = 'This is the body of the email message.';
$headers = "From: webmaster@example.com\r\n";
$headers .= "Content type: text/plain; charset+utf-8\r\n";
$headers .= "CC: myfriendsemail@example.com";

$success = mail($to, $subject, $body, $headers, '-fjacqueline@example.com');
