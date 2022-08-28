<?php 

class Employee{
    //properties of our class
    public $name;
    public $salary;

    // Constructor 
    function __construct($name1,$salary1)
    {
        $this->name=$name1;
        $this->salary=$salary1;
    }
    // Destructor
    function __destruct()
    {
        echo " I am destructing  $this->name <br>";
    }

}
$emp = new Employee("Hiren",10);
$emp1 = new Employee("manan",100);
$emp2 = new Employee("vasu",1000);

echo "The salary of manan is $emp1->salary";
echo "<br>";
echo "The name og 1st emp is $emp->name";
echo "<br>";

?>