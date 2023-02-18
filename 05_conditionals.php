<?php 

$a = 65;
$b = 9;

if ($a > 78){
    echo "a is grater than 78";
    echo "<br>";
}
else{
    echo "a is not greater than 78";
    echo "<br>";
}

$age = 54;

if($age > 18){
    echo "You can drink water with chai and alcohol";
    echo "<br>";
}
elseif($age > 13){
    echo "You can drink chai only with water. No alcohol for 
    you.";
    echo "<br>";
}
else{
    echo "You can drink water only";
    echo "<br>";
}

echo "Done";
echo "<br>";

/* Quick quiz:
1. Create an if else ladder using more than one elseif
2. Write a program to allow a driver only when his age is greater than or equal to 25 and less or equal to than 65
*/
$driverage = 10;

if($driverage>=25 && $driverage<=65){
    echo "The person can drive the vehicle.";
}
else{
    echo "Sorry, you cannot drive";
    echo "<br>";
}

//switch-case statement
$switchage = 50;

switch($switchage){
    case 12:
        echo "You are 12 years old <br>";
        break;
    
    case 45:
        echo "You are 45 years old <br>";
        break;
    
    case 50:
        echo "You are 50 years old <br>";
        break;
    
    default:
        echo "Your age is weird <br>";
        break;
}

?>