<?php

final class Person {

    public $name = '';
    public $color = '';
    public $depertment = 'Civil';
    public $height = '';
    public $id = '';
    public $age = '';

    const WEIGHT = "90";

    public static $lang = "Spanish";

    public function __construct($nm = null, $id = null) {
        $this->name = $nm;
        $this->id = $id;
    }

    public function __destruct() {
//        echo "Something after the object of person";
//        unset($this->name);
//        unset($this->id);
    }

    public function __get($undefined_property) {
        echo "<strong> $undefined_property </strong> is not defined in this person class";
    }

    public function __set($pro, $val) {
        echo "We set $pro and $val";
    }

    public function __call($method_name, $indexed_array_value) {
        echo "$method_name is not exists in person calss : " . " and it's argument are " . implode(',', $indexed_array_value);
    }

    public function personName_and_info() {
        echo "Person name is : " . $this->name;
        echo " and person id is : " . $this->id;
        echo " person wight is : " . Person::WEIGHT;
        echo " person language is : " . self::$lang;
    }

    public static function personAge() {
        echo "Some text over here  ";
    }

    public final function person_depert_height() {
        echo "The person's depertment is : " . $this->depertment . " and his/her height is: " . $this->height;
    }

}

$per_nam = "Shakil";
$per_id = "007";
Person::personAge();
echo "Person wight outside of the class : " . Person::WEIGHT;
echo "<br />";
echo "person language is : ";
$person = new Person($per_nam, $per_id);
echo $person->personName_and_info();
echo "<br />";
$person->not_exists_method("50", "70", "80");
echo "<br />";
$person->colo = "White";
echo "<br />";
$person->wheel;
echo "<br />";

class NewPerson extends Person {

    public function __construct($nm = null, $id = null) {
        echo "Person call is used for obj";
        $this->name = $nm;
        $this->id = $id;
    }

}
echo '<br/>';
$obj_newperson = new NewPerson();
echo "Depertment name from new class : " . $obj_newperson->depertment;











unset($person);

//$per_nam = "Robin";
//$per_id = "008";
//
//$person2 = new Person($per_nam, $per_id);
//echo "<br />";
//echo $person2->personName_and_info();
//echo "<br />";
//echo 'last content';
?>

<!DOCTYPE html>
<html>
    <body>
        <br/>
        <p>
            Some texts of html 
        </p>
    </body>
</html>