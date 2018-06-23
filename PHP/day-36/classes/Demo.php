<?php

class Demo {
    public $name;
    public $age;
    public $address;
    const lang = "Bengali";


    public function __construct($name, $age, $address) {
        //This magic method for auto call after make the instance of class file
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        
        echo "User's name is ".$this->name."<br/>";
        echo "User's age is ".$this->age."<br/>";
        echo "User's address is ".$this->address."<br/>";
        
    }
    public function __get($property_name) {
        //this magic method used to show undefine property
        echo "Undefind propery : ".$property_name. '<br/>';
    }
    
    public function __set($undefined_property, $value) {
        echo "User called : ". $undefined_property." and value : ".$value. '<br/>';
    }
    
    public function __call($undefined_method, $arguments) {
        echo "User called ".$undefined_method." which is undefined and values are ". implode(', ', $arguments)."<br/>";
    }
    
    public function __destruct() {
        echo 'This is the destruct method ';
    }
}

$obj_demo = new Demo('Shibbir Ahmed', '24', 'Gafargaon');

//magic method for call
$obj_demo->religion;

//magic method for show undefined property and value
$obj_demo->skill = '100';

//magic method for show undefined method and argument
$obj_demo->fullName("Shibbir Ahmed", "Rizwan");

//magic destruct method
unset($obj_demo);

