<?php 

$name = "Hargun";
$income = 200;

// php data types
// 1. String
// 2. Integer
// 3. Float
// 4. Boolean
// 5. Object
// 6. Array
// 7. NULL

//String - sequence of characters:
$name = "Hargun";
$friend = "Pooja";

echo "$name ki friend is $friend<br>";

//Integer - non decimal number
$income = 200;
$debts = -700;

echo "$income<br>";
echo "$debts<br>";

//Float - Decimal point number
$income = 344.5;
$debts = -45.5;

echo "$income<br>";
echo "$debts<br>";

//Boolean - can be either true or false
$x = true;
$is_friend = false;

//var_dump() function prints the value
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";

//Object - Instances of classes
// Employee is a class --> Hargun can be one object

//Array - used to store multiple values in a single variable.
$friends = array("Hargun", "Sahib", "Pooja");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";

//NULL - no value is assigned
$name = NULL;
echo "$name";
var_dump($name);


?>