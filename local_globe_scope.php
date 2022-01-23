<?php

echo "Welcome to scope local variable in php. <br>";

$a =98;
//echo $a;

function printValue(){
    $a = 56;
    echo "The value of your variable is $a";
}

printValue();
?>