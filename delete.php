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


$sql = "DELETE FROM `contacts` WHERE `concern` = 'India' LIMIT 3";
$result = mysqli_query($conn, $sql);

$aff = mysqli_affected_rows($conn);
echo  "<br> Number of affected rows: $aff";
if($result){
    echo " <br>Deleted successefully";
}
else{
    $err= mysqli_error($conn);
    echo "<br>Not deleted due to this Error --> $err";
}



?>