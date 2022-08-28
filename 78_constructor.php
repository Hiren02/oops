<?php 

class Employee{
    //properties of our class
    public $name;
    public $salary;

    //Methods of our class
    //Constructor - It allows you to initialize objects.It is the code which is executed whenever a new object is instantiated

    // Constructor without argument
    // function __construct()
    // {
    //     echo "This is my constructor for employee";
    // }

    // Constructor with argument
    function __construct($name1,$salary1)
    {
        $this->name=$name1;
        $this->salary=$salary1;
    }

}
$emp = new Employee("Hiren",3456);
$emp1 = new Employee("manan",345346);
$emp2 = new Employee("vasu",3453446);

echo "The salary of manan is $emp1->salary";
echo "<br>";
echo "The name og 1st emp is $emp->name";

?>