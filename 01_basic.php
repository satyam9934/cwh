<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    This is my first website

    <?php

$variable1 = 5; echo"<br>";
$variable2 = 2; 
echo"<br>"; 
echo  ($variable1);echo"<br>";
echo ($variable2);echo"<br>";
echo $variable1+$variable2;
echo "Hello world again";
echo"<br>";

//operator
// 1. Arithmetic operator
//2. Assigement operator
$newVar =$variable1;
$newVar += 1;
echo "The value of new variable is ";
echo $newVar;

// 3. comparison operator

//echo "<h1> comprasion oerator <h1>";
echo "The value of 1 ==4";
echo var_dump(1==4);
echo "The value of 1 !=4";
echo var_dump(1!=4);
echo "The value of 1 <=4";
echo var_dump(1<=4);
echo "The value of 1 >=4";
echo var_dump(1>=4);
// 4. Increment/ decrement operator

echo $variable1++;
echo $variable1--;
echo ++$variable1;
echo --$variable1;


// 5. Logial operator

//$myvar = (true) and (true);
$myvar = (false) and (true);
echo var_dump($myvar);
$myvar = (true) xor (true);
echo var_dump($myvar);




//secreat alogrithm
    ?>

    <?php
    define('pie', 3.14);
    //Data tyoe in php
    //1. string
    //2. float
    //3. boolean
    //4. array
    //5. object
 
    echo "<br> Data type <br>";
    $var = "This is string";
    echo var_dump($var);
    echo "<br>";
    $var = 23;
    echo var_dump($var);
    echo "<br>";
    $var = 8.5;
    echo var_dump($var);
    echo "<br>";
    $var = true;
    echo var_dump($var);
    echo "<br>";
    echo pie;


?>





    </div>



</body>
</html>