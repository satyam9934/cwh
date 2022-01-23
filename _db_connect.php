<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "contact";

// Create a database connection
$conn = mysqli_connect($server, $username, $password, $db);
// Check for connection success
if(!$conn){
    die("connection to this database failed due to" . mysqli_connect_error());
}else{
    echo "connection is sucessfully connected. <br>";
}


?>