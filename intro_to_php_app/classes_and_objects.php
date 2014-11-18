<?php
/* Instantiating a DateTime object and storing
it in the variable $now.
*/
$now = new DateTime();
echo $now->format('F j, Y h:ia') . ' New York, USA' . '<p>';

$tokyo = new DateTimeZone('Asia/Tokyo');
$now->setTimeZone($tokyo);
echo $now->format('F j, Y h:ia') . ' Tokyo, Japan' . '<p>';

$arctic = new DateTimeZone('Arctic/Longyearbyen');
$now->setTimeZone($arctic);
echo $now->format('F j, Y h:ia') . ' Arctic' . '<p>';

$nwterr = new DateTimeZone('America/Inuvik');
$now->setTimeZone($nwterr);
echo $now->format('F j, Y h:ia') . ' Arctic: Inuvik, NW Territories' . '<p>';