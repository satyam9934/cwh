<?php

// what is sessio
// session is used to manage unformation across different  pages.


//verfy the user login info

session_start();
if(isset($_SESSION['username'])){

    echo "welcome " . $_SESSION['username'];
    echo "<br> Your favrouit category is " . $_SESSION['favCat'];
    echo " <br>";
}else{
    echo "Please login to countinue.";
}







?>