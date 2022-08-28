<?php

use Employee as GlobalEmployee;

class Employee{
    public $name;
    public $lang;
    public $salary;

    function __construct($name, $lang, $salary){
        $this->name = $name;
        $this->lang = $lang;
        $this->salary = $salary;
        $this->describe();

    }
    private function describe(){
        echo " Name of the programmer: $this->name <br>";
        echo " Language of the programmer: $this->lang <br>";
        echo " Salary of the programmer: $this->salary <br>";
    }

}



$hiren = new Employee("Hiren","php",3);
?> 