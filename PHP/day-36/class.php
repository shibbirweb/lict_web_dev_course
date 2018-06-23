<?php

class Student{
    public $name = '';
    public $age = '';
    
    public function studentInfo($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function showStudentInfo(){
        return "Student name is : ".$this->name." and age is : ".$this->age;
    }
}

$obj_student = new Student;

$obj_student->name = "Shibbir Ahmed";
$obj_student->age = "24";
echo $obj_student->showStudentInfo();
echo "<br/>";
