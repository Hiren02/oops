<?php

// Access modifiers
//1. Public - can be accessed from anywhere
//2. Private - can only be accessed from within the class
//3. Protected- can be accessed from withing the class and from derived class

// By deafault the properties and  methods are treated as public
// Private properties and methods  can only be accessed by other member functions of the class

//Public
class Employee1{
    public $name= "Hiren";

    function showName(){
        echo "$this->name";
    }
}
$em = new Employee1();
echo $em->name;
echo "<br>";

// Private
class Employee2{
    private $name= "Hiren Chavda";

    function showName(){
        echo "$this->name";
    }
}
$em = new Employee2();
$em->showName();
?>