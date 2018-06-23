<?php
include_once 'lib/app.php';
include_once 'header.php';
//include_once 'classes/Student.php';   
//include_once 'classes/Car.php';  
//include_once 'classes/Person.php';  

//function __autoload($clsname){
//    echo "classes/".$clsname.".php";
//}
function __autoload($clsname){
    include "classes/".$clsname.'.php';
}

$obj_student = new Student();
    
echo "The age of Raihan is ".$obj_student->age;
echo "</br>";
    //$obj_student->person = "Shibbir";
echo $obj_student->result("Rizwan");
echo "My name is ".$obj_student->person;
      
echo "</br>";
      
$ob_car = new Car();
$ob_car->result("Tarpon");
echo "</br>";
echo "The name variable of car class ".$ob_car->name;
echo "</br>";
$ob_car->name = "Toyota";
echo "</br>";
echo "The car is: ". $ob_car->name;
echo "</br>";

$obj_person = new Person("CSE", "6");
$obj_person->person_depert_height();
echo "</br>";
$obj_person->name = "Shimul";

echo $obj_person->name;
echo "</br>";
echo $obj_person->depertment;
echo "</br>";











?>





<?php include_once 'footer.php'; ?>