<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
</head>
<style>
*{

    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


 .container{
     max-width: 80%;
     background-color: grey;
     margin: auto;
     padding: 23px;

 }

</style>
<body>
<div class="container">
<h1>Lets learn about php</h1>
Your party status is here <br> 
 <?php
 $age =71;
 if($age>18){
     echo "You can go to party";

 }
 elseif($age ==7){
     echo  "you are 7 year old";
 }
 elseif($age ==16){
     echo  "you are 16 year old";
 }
 else{
     echo "you can not go to party";
 }
 
 //Array in php 
$language= array("Python", "c++", "php", "Nodejs");
//echo count($language);
//echo $language[0];

//Loops in php
$a = 0;
while ($a <= 10) {
    echo "<br>The value of a is:";
    echo $a;
    $a++;
}
$a = 0;
while ($a < count($language) ){
    echo "<br>The value of language  is:";
    echo $language[$a];
    $a++;
}

// do while loop
$a = 0;
do {
    echo "<br>The value of language  is:";
    echo $a;
    $a++;
} while ($a < 10) ;


//for loop
for ($a=0; $a < 10; $a++) { 

    echo "<br> The value a from the for loop:";
    echo $a;
}

foreach ($language as $value){

    echo "<br> The value from foreach loop  ";
    echo $value;
}



function print5(){
    echo "Five";
}

print5();


function print_number($number){
    echo "<br>your number is ";
    echo $number;

}
print_number(45);
print_number(435);
print_number(5);
    






 ?>

</div>
    
</body>
</html>