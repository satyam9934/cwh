<?php

//echo "Welcome to associative array <br>";
//$arr = array("this", "that", "what");
//echo $arr[0];

$favCol = array('shubham' => 'red', 'satyam' => 'blue', 'Kishan' => 'black', 'yash' => 'purple', 'adarsh' => 'black', 8 =>'this') ;

foreach ($favCol as $key => $value){
    echo "<br> Favorite color of $key is $value";
}


//echo $favCol['satyam'];
//echo "<br>";
//echo $favCol[8];

?>