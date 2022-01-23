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


$sql = "SELECT * FROM `contacts` WHERE `name`= 'satyam singh'";
$result = mysqli_query($conn, $sql);

//usage of where clause to fetch data from the databse.
$num= mysqli_num_rows($result);
echo $num ." Record found in database. <br>";

$no =1;
if($num>0){
 while($row = mysqli_fetch_assoc($result)){
     echo $no . ". Heloo ". $row['name']. " your email is ". $row['email'] ." And your concern is ".$row['concern'];
     echo "<br>";
     $no = $no+1;
    }
 }

 //usage of where clause to update the data;
  $sql = "UPDATE `contacts` SET `name` = 'satyam singh ' WHERE `name` = 'satyam2015singh@gmail.com'";
 $result = mysqli_query($conn, $sql);
 echo var_dump($result);
 $aaf = mysqli_affected_rows($conn);
 echo " <br> Number of affected rows: $aaf";
 if($result){
     echo " <br>We update the record  successfully";
 }
 else{
     echo " <br>We could not update the record  successfully";
 }


?>