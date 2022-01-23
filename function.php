<?php

echo "Welcome to  php tutorials on function <br>";

function AverageMarks($marksArr){
    $sum = 0;
    $i =1;
    foreach ($marksArr as  $value) {
        $sum+=$value;
        $i++;
        
    }
    return $sum/$i;
}

$roahn = [90, 87, 94, 84, 92, 94];
//$sumMarks = ProcessMarks($roahn);
$sumMarks = AverageMarks($roahn);

$satyam = [90, 97, 94, 94, 72, 64];
//$sumMarkssatyam = ProcessMarks($satyam);
$sumMarkssatyam = AverageMarks($satyam);
echo "Total marks scored  by rohan out of 600 is $sumMarks  <br> ";
echo "Total marks scored  by satyam out of 600 is $sumMarkssatyam ";
?>