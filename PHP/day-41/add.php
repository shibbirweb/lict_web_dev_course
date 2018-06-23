<?php
include_once 'lib/application.php';
//define('HOSTNAME', 'localhost');
//define('DBUSER', 'root2' );
//define('DBPASS', '');
//define('DBNAME', 'first_db');
//
//$link = mysqli_connect(HOSTNAME, DBUSER, DBPASS, DBNAME) or die("Error". mysqli_error($link));

$nm = $_POST['full_name'];
$gnd = $_POST['gender'];
$pass = $_POST['pass_word'];
$age = $_POST['age'];
$city = $_POST['city'];
$division = $_POST['division'];

$query = "INSERT INTO person_info (Id, Name, Gender, Password, Age, City, Division) VALUES(null, '". $nm."', '".$gnd."', ' " . $pass . " ', ' " . $age. " ', ' " .$city . " ', ' " .$division. " ')";
$result = mysqli_query($link, $query);

if($result){
    $_SESSION['msg1'] = "Data successfully stored!";
}else{
    $_SESSION['msg2'] = "Data can not be stored in db!";
}

header('location:index.php');

