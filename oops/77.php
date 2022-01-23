<?php



class player{
    //properties

    public $name;
    public $speed = 5;
    public $running = false;

    //methods

    function set_name($name){

        $this-> name =$name;

    }
    function get_name(){
        return $this -> name;
    }
    function run(){
        $this-> running = true;
    }
    function stopRun(){

        $this->running = false;  
    }




}
echo "Lets understand Opps Using GTA Vice City <br>";

$player1 = new player();
$player1->set_name("satyam");
echo $player1 -> get_name();
echo"<br>";

$player2 = new player();
$player2->set_name("Yash");
echo $player2 -> get_name();
echo"<br>";

$player3 = new player();
$player3->set_name("Kishan");
echo $player3 -> get_name();
echo"<br>";

$player3 = new player();
$player3->set_name("Adarsh");
echo $player3 -> get_name();







?>