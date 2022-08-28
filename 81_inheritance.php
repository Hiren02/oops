<?php


class Employee1{
    public $name= "Hiren";
    private $salary= 100;
    private $grade= 5;

    function showName(){
        echo "$this->name <br>";
    }
	
	function setSalary($salary){
		$this->salary = $salary;
		return $this;
	}
	
	function getSalary() {
		echo "$this->salary <br>";
	}
}

// Inheriting a new class programmer from employee

class Programmer extends Employee1{
    private $language = "php";

    function changeLanguage($lang){
        $this->language = $lang;
    }

}

$hiren = new Employee1();
$hiren->name="Vasu";
$hiren->setSalary(200);
$hiren->getSalary();
$hiren ->showName();


$sh = new Programmer();
$sh->name = "Vandri";
$sh->getSalary();
$sh ->showName();
echo $sh->changeLanguage("Java")


?>