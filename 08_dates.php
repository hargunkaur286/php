<?php 
echo "Welcome to the world of dates: <br>";

$d = date("dS F Y");
$d2 = date("dS F Y, g:i A");

echo "Today's date is: $d <br>";
echo "Alternate way is: $d2 <br>";

$year = date("y");

echo "copyright $year";
//We can refer the ways of writing dates in php from php.net/dates
?>