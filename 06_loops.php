<?php 

//while loop
$i=0;
while($i<5){
    echo "The value of i is: ";
    echo $i+1;
    echo "<br>";
    $i+=1;
}

//for loop
echo "<br>";
echo "<br>";
for ($i=0; $i<7; $i++){
    echo "The number is: $i <br>";
}

//do while loops
echo "<br>";
echo "<br>";
$i=0;
do{
    echo "$i <br>";
    $i++;
}
while($i<5);

//for each loop
echo "<br>";
echo "<br>";
$arr = array("bananas", "apples", "grapes", "strawberries");

foreach($arr as $value){
    echo "$value <br>";
}

?>
