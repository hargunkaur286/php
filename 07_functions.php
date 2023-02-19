<?php 

function processMarks($marksArr){
    $sum=0;
    foreach($marksArr as $value){
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $i = 1;

    foreach($marksArr as $value){
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$Hargun = [77, 45, 68, 99, 98, 100];
$sumMarks = processMarks($Hargun);
$average = avgMarks($Hargun);
echo "Total marks scored by Hargun is: $sumMarks <br>";
echo "Average marks scored by Hargun is: $average";

?>