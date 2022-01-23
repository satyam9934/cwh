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

$sql = "SELECT * FROM `contacts`";
$result = mysqli_query($conn, $sql);

//find the number of records returned
$num= mysqli_num_rows($result);
echo $num ;
echo " Record found in database.";

//Display the rows returned by the sql queary;
if($num>0){
   // $row = mysqli_fetch_assoc($result);
    //echo var_dump($row);
    //$row = mysqli_fetch_assoc($result);
    //echo var_dump($row);
    //$row = mysqli_fetch_assoc($result);
    //echo var_dump($row);


//we can fatch in a bettter way using while loop;

while($row = mysqli_fetch_assoc($result)){
    echo $row['sno'] . " Heloo ". $row['name']. " your email is ". $row['email'] ." And your concern is ".$row['concern'];
    echo "<br>";
}
}

?>
