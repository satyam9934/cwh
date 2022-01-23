<?php
$str = "This is string";

echo $str;
$lenn = strlen($str);
echo "The length of this string is ".$lenn . " Thank you <br>";
echo "The length of this string is ". str_word_count($str) . " Thank you <br>" ;
echo "The reverse of this string is ". strrev($str) . " Thank you <br>" ;
echo "The search for is in this string is ". strpos($str, "is") . " Thank you <br>" ;
echo "The search for is in this string is ". str_replace("is", "that", $str) . " Thank you <br>" ;

//echo $lenn;


?>