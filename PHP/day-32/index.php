<?php
include_once 'lib/app.php';
include_once 'header.php';
include_once 'classes/Student.php';   
include_once 'classes/Car.php';  

function __autoload($clsname){
    echo "classes/".$clsname.".php";
}




$obj_student = new Student();
    
echo "The age of Raihan is ".$obj_student->age;
echo "</br>";
    //$obj_student->person = "Shibbir";
echo $obj_student->result("Rizwan");
echo "My name is ".$obj_student->person;
      
echo "</br>";
      
$ob_car = new Car();

$ob_car->name = "Toyota";
echo "</br>";
echo "The car is: ". $ob_car->name;













?>





<?php include_once 'footer.php'; ?>