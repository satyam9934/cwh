<?php

echo "Welcome to multidimencial array <br>";

$multiDim = array(
    array(2,3,4,5),
    array(4,5,6,7),
    array(6,8,3,5));

//echo var_dump($multiDim);

//echo $multiDim[0][1];

//for ($i=0; $i < count($multiDim); $i++) { 
  //  echo var_dump($multiDim[$i]);
    //echo "<br>";}


    for ($i=0; $i < count($multiDim); $i++) { 
        for ($j=0; $j < count($multiDim[$i]); $j++) { 
            echo $multiDim[$i][$j];
            echo " ";
        }
        echo "<br>";
    }

?>