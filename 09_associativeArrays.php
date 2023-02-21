<?php 

echo "Welcome to associative arrays in PHP: <br>";

// These are indexed arrays:
// $arr = array('this', 'that', 'what');
// echo $arr[0];
// echo $arr[1];
// echo $arr[2];

//Associative arrays:
$favCol = array('Hargun'=>'black',
                'Sahib'=>'white',
                'Khushi'=>'Red');
echo $favCol['Hargun'];

foreach ($favCol as $key => $value){
    echo "<br> Favorite color of $key is $value";
}
?>