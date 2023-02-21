<?php 

echo "Local and global scope in php: <br>";

$b = 100;

function printValue(){
    $a = 95;
    global $b;
    echo "The value of your variable is: $a $b";
}

echo $b;
echo "<br>";

printValue();

?>