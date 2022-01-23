<?php
echo "Welcome to the world of for each loops <br>";

$arr = array("bananas", "apple", "Harpic", "Bread", "Butter", "Horlisk");
/*
for($i = 0; $i < count($arr); $i++){
        echo $arr[$i];
        echo "<br>";
}*/

foreach ($arr as $value) {
    echo "$value <br>";
}

?>