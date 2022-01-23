<?php

// what is sessio
// session is used to manage unformation across different  pages.


//verfy the user login info

session_start();
$_SESSION['username'] = "satyam";
$_SESSION['favCat'] = "Books";

echo " We have saved your session";







?>