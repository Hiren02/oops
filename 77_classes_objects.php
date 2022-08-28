<?php 
class Player{
    //Properties
    public $name;
    public $speed =5;
    public $running =false;

    //Methods
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function run(){
        $this->running = true;
        echo "Running";
    }
    
    function stopRun(){
        $this->running = false;
        echo "Running stop";
    }
	
}

$player1 = new Player();
$player1->set_name("hiren");
echo $player1->get_name();
echo "<br>";
echo $player1->speed;
echo "<br>";
 $player1->run();
echo "<br>";
 $player1->stopRun();
?>